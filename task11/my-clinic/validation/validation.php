<?php 



function minLen($input,$len){
    if(strlen($input)<$len){
        return false;
    }
    return true;
}

function maxLen($input,$len){
    if(strlen($input)>$len){
        return false;
    }
    return true;
}

function checkEmail($input){
    if(filter_var($input, FILTER_VALIDATE_EMAIL)){
        return true; // Return true for a valid email
    }
    return false; // Return false for an invalid email
}
