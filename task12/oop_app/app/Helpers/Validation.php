<?php 

namespace App\Helpers;

class Validation
{
   public static function sanitizeInput(mixed $value)
   {
    return htmlentities(htmlspecialchars(stripcslashes(trim($value))));
   }

   public static function required(mixed $value) : bool
   {
    return empty($value);
   }

   public static function minVal(string $value,int $length) : bool
   {
    return strlen($value) < $length;
   }

   public static function maxVal(string $value,int $length) : bool
   {
    return strlen($value) > $length;
   }

   public static function unique(string $value, string $column, string $table, $except = null) : bool
   {
    $db = new Database; 

   $result = !isset($except)
   ? $db->query("SELECT `$column` FROM `$table` WHERE `$column` = '$value' ")
   : $db->query("SELECT `$column` FROM `$table` WHERE `$column` = '$value' AND `id` != '$except'");
    
    return $result->num_rows > 0;
   }

   public static function validEmail(string $email)
   {
    return !filter_var($email, FILTER_VALIDATE_EMAIL);   
   }



}