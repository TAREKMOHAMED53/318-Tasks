<?php
    require_once "inc/header.php";
    require_once "core/helpers.php";
?>
    <div class="container w-25 border m-auto mt-2">
    <?php
        flashSession('request_error', 'danger'); 
    ?>
        <h1 class="text-primary">Register Form</h1>
        <form action="controller/RegisterController.php" method="POST" class="form-group">
            <div class="mb-3">
                <label for="exampleFromControlInput1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleFromControlInput1" placeholder="Enter Name" >
                <?php
                getSession("register_errors", 'name','danger');
                ?>
            </div>
            <div class="mb-3">
                <label for="exampleFromControlInput1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleFromControlInput1" placeholder="Enter Email" >
                <?php
                getSession("register_errors", 'email','danger');
                ?>
            </div>
            <div class="mb-3">
                <label for="exampleFromControlInput1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="PasswordID" placeholder="Enter Password" >
                <input type="checkbox" onclick="myFunction()">Show Password
                <?php
                getSession("register_errors", 'password','danger');
                ?>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Register">
                <a href="index.php" class="btn btn-secondary">Already Have Account</a>
            </div>
        </Form>
    </div>
<?php
    require_once "inc/footer.php"
?>
<script>
    function myFunction(){
        var x = document.getElementById("PasswordID");
        if(x.type === "password"){
            x.type = "text";
        }else {
            x.type = "password";
        }
    }
</script>