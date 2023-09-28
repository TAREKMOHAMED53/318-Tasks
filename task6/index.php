<?php
    require_once "inc/header.php"
?>

    <div class="container w-25 border m-auto mt-2">
        <h1 class="text-primary">Login Form</h1>
        <form action="" method="POST" class="form-group">
            <div class="mb-3">
                <label for="exampleFromControlInput1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleFromControlInput1" placeholder="Email Address" >
            </div>
            <div class="mb-3">
                <label for="exampleFromControlInput1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleFromControlInput1" placeholder="Password" >
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Login">
                <a href="register.php" class="btn btn-secondary">Create Account</a>
            </div>
        </Form>
    </div>
<?php
    require_once "inc/footer.php"
?>