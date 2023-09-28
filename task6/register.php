<?php
    require_once "inc/header.php"
?>
    <div class="container w-25 border m-auto mt-2">
        <h1 class="text-primary">Register Form</h1>
        <form action="controller/RegisterController.php" method="POST" class="form-group">
            <div class="mb-3">
                <label for="exampleFromControlInput1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleFromControlInput1" placeholder="Name" >
            </div>
            <div class="mb-3">
                <label for="exampleFromControlInput1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleFromControlInput1" placeholder="Email" >
            </div>
            <div class="mb-3">
                <label for="exampleFromControlInput1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="PasswordID" placeholder="Password" >
                <input type="checkbox" onclick="myFunction()">Show Password
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