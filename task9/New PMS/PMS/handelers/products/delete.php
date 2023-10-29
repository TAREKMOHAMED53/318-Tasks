<?php

session_start();
if (isset($_GET['id'])&&isset($_GET['image_name'])) {
    $id = $_GET['id'];
    $image_name = $_GET['image_name'];
    $user_id = $_SESSION['user_id'];
    include "../../database/database.php";
    if(file_exists("../../upload/$image_name")){
        // echo $image_name;
        // die();
        $sql = "DELETE FROM `products` WHERE `id` = '$id' AND `user_id` = '$user_id'";
        if (mysqli_query($conn, $sql)) {
            unlink("../../upload/$image_name");
            $_SESSION['success'] = [' Deleted Successfully'];
        } else {
            $_SESSION['errors'] = [' Did Not Delete'];
        }
    }else{
        $sql = "DELETE FROM `products` WHERE `id` = '$id' AND `user_id` = '$user_id'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['success'] = [' Deleted Successfully'];
        } else {
            $_SESSION['errors'] = [' Did Not Delete'];
        }
    }
   
    header("Location:../../index_product.php");
}