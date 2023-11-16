<?php

namespace App\Classes;

use App\Helpers\Database;

class Student
{
    public static function getAll()
    {
        $db = new Database;
        $result = $db->query("SELECT * FROM `students`");

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public static function create(array $data) : bool
    {
        $db = new Database;

        $result = $db->query("INSERT INTO `students` (`name`,`email`,`phone`)
        VALUES ('{$data['name']}','{$data['email']}','{$data['phone']}')");
        
        return $result;
    } 

    public static function update( string $id, array $data)
    {
        $db = new Database;

        $result = $db->query("UPDATE `students` 
        SET `name` = '{$data['name']}', `email` = '{$data['email']}', `phone` = '{$data['phone']}'
        WHERE `id` = '$id'");

        return $result;
    }

    public static function find($id)
    {
        $db = new Database;
        $result = $db->query("SELECT * FROM `students` WHERE `id` = '$id'");

        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public static function destroy($id)
    {
        $db = new Database;
        $result = $db->query("DELETE FROM `students` WHERE `id` = '$id'");

        return $result;
    }

}