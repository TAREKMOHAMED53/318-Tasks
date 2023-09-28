<?php 

session_start();
require_once "../core/helpers.php";

if(checkRequest("POST")){
}
else
{
    $_SESSION['request_error'] = "Invalid Request";
    redirectTo("../register.php");
    die();
}