<?php 

session_start();
$errors=[];
if(isset($_POST['submit'])&&$_SERVER['REQUEST_METHOD']=="POST"){
    //GET DATA
    $name=trim(htmlspecialchars($_POST["name"]));
    $email=trim(htmlspecialchars($_POST['email']));
    $password=trim(htmlspecialchars($_POST['password']));
    $phone=trim(htmlspecialchars($_POST['phone']));
    //validation
    include "../../validation/validation.php";
    //name
    if(empty($name)){
        $errors[]= "Please Enter Your Name";
    }elseif(checkEmail($email)){
        $errors[]= "Enter a valid Name";
    }
     // email
     if(empty($email)){
        $errors[]= "Please Enter Your Email";
    }elseif(checkEmail($email)){
        $errors[]= "Email Not Valid";
    }
    // password
    if(empty($password)){
        $errors[]= "Please Enter Your Password";
    }elseif(!minLen($password,6)){
        $errors[]= "Password Must Be Greater Than 6 Characters";
    }elseif(!maxLen($password,20)){
        $errors[]= "Password Must Be Less Than 20 Characters";
    }
    //phone
    if(empty($phone)){
        $errors[]= "Please Enter Your phone";
    }elseif(checkEmail($email)){
        $errors[]= "phone is Not Valid";
    }
    //database
    include "../../database/database.php";
    $sql1="SELECT * FROM `users`";
    $result1=mysqli_query($conn,$sql1);
    foreach($result1 as $row){
        if($row['email']==$email){
            $errors[]="Email Is Existed";
            break;
        }
    }

    if(empty($errors)){
        $new_password=sha1($password);
        $sql="INSERT INTO `users` (`name`,`email`,`password`,`phone`) VALUES ('$name','$email','$new_password','$phone')";
        $result=mysqli_query($conn,$sql);
        if($result){
            $_SESSION['success']=['Added Successfully'];
        }else{
            $_SESSION['errors']=['Not Added'];
        }
        header("Location:../../register.php");
    }else{
        $_SESSION['errors']=$errors;
        header("Location:../../register.php");
    }
}