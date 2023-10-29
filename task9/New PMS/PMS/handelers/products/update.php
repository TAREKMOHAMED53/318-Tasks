<?php 

session_start();
$errors=[];

if(isset($_POST['submit'])&& $_SERVER['REQUEST_METHOD']=="POST"){
    // get data
    $name=trim(htmlspecialchars($_POST['name']));
    $price=trim(htmlspecialchars($_POST['price']));
    $category_id=trim(htmlspecialchars($_POST['category_id']));
    $image=$_FILES['image'];
     //validation
     include "../../validation/validation.php";
         // name
    if(empty($name)){
        $errors[]= "Please Enter Name";
    }elseif(!minLen($name,3)){
        $errors[]= "Name Must Be Greater Than 3 Characters";
    }elseif(!maxLen($name,20)){
        $errors[]= "Name Must Be Less Than 20 Characters";
    }
        // price
    if(empty($price)){
        $errors[]= "Please Enter price";
    }elseif(!minLen($price,1)){
        $errors[]= "price Must Be Greater Than 1 ";
    }elseif(!maxLen($price,3)){
        $errors[]= "price Must Be Less Than 3 ";
    }
        // category
    if(empty($category_id)){
        $errors[]= "Please Enter Category";
    }

    //database
    if(isset($_SESSION['user_id'])&&isset($_GET['id'])){
        $user_id=$_SESSION['user_id'];
        $id=$_GET['id'];
    }
    include "../../database/database.php";
    $sql2="SELECT `name` FROM `products` WHERE `user_id`='$user_id' AND `name`='$name'";
    $result=mysqli_query($conn,$sql2);
    $row=mysqli_fetch_assoc($result);
    if($row!=null){
        $errors[]="Name Is Already Exist";
    }
    if(empty($errors)){
        include "../../UploadFile/UploadFile.php";
          //upload
          if($image['error']==0){
            $sqlimage="SELECT `image` FROM `products` WHERE `user_id`='$user_id' AND `id`='$id'";
            $resultimage=mysqli_query($conn,$sqlimage);
            $rowimage=mysqli_fetch_assoc($resultimage);
            $checkimage=$rowimage['image'];
          
            if(isset($checkimage)&&file_exists("../../upload/$checkimage")){
                unlink("../../upload/$checkimage");
            }
            uploadFile("../../upload/",$image,$errors);
            if(isset($_SESSION['image_name'])){
                $image_name=$_SESSION['image_name'];
                $sql3="UPDATE `products` SET `name`='$name',`price`='$price',`image`='$image_name',`user_id`='$user_id',`category_id`='$category_id' WHERE `id`='$id' ";            
                if(mysqli_query($conn,$sql3)){
                    $_SESSION['success']=['Updated Successfully'];
                }else{
                    $_SESSION['errors']=['Not Updated Successfully'];
                }
            }
          }else {
            $sql3="UPDATE `products` SET `name`='$name',`price`='$price',`user_id`='$user_id',`category_id`='$category_id' WHERE `id`='$id' ";            
            if(mysqli_query($conn,$sql3)){
                $_SESSION['success']=['Updated Successfully'];
            }else{
                $_SESSION['errors']=['Not Updated Successfully'];
            }
          }

            
            header("Location:../../edit_product.php?id=$id");
    }else{
        $_SESSION['errors']=$errors;
        header("Location:../../edit_product.php?id=$id");
    }
}