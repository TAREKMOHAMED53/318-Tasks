
<?php include "layout/header.php"; ?>
<?php 

if(isset($_SESSION['user_id'])){
    $user_id=$_SESSION['user_id'];
    include "database/database.php";
    $sql="SELECT * FROM `categories` WHERE `user_id`='$user_id' ";
    $result=mysqli_query($conn,$sql);
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM `products` WHERE `user_id`='$user_id' AND `id`='$id' ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
}

?>
<div class="container pt-5">
    <div class="row">
        <div class="col-8 mx-auto">

            <a href="<?php echo URL ?>index_product.php" class="btn btn-primary mb-2">View Products</a>
            
            <?php include "layout/message.php"; ?>
            <form action="handelers/products/update.php?id=<?php echo $id; ?>" method="POST" class="border p-5" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" value="<?php if(isset($row['name'])): echo $row['name']; endif; ?>" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="text" name="price" value="<?php if(isset($row['price'])): echo $row['price']; endif; ?>" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image"  class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select class="form-select" name="category_id" aria-label="Default select example">
                        <?php if(isset($result)): foreach($result as $value): ?>
                        <option value="<?php echo $value['id']; ?>"<?php if($value['id']==$row['category_id']): ?> selected <?php endif; ?>><?php echo $value['name']; ?></option>
                        <?php endforeach; endif; ?>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Update Product</button>
            </form>
        </div>
    </div>
</div>
<?php include "layout/footer.php" ?>