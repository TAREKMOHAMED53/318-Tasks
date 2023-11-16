<?php

use App\Classes\Student;
use App\Helpers\ErrorsBag;
use App\Helpers\Request;
use App\Helpers\Session;
use App\Helpers\Validation;

require_once '../../app/bootstrap.php';

$request = new Request;

if (Request::isPost()) {

    $errors = new ErrorsBag;


    // sanitizing inputs
    foreach(Request::all() as $key => $value) $$key = Validation::sanitizeInput($value);


    // validating inputs
    if(Validation::required($name)) $errors->add('Name Field Is Required!');
    if(Validation::minVal($name,3) || Validation::maxVal($name,20)) $errors->add('Name Must Be Between 3 and 20 Characters!');

    if(Validation::required($email)) $errors->add('Email Field Is Required!');
    if(Validation::unique($email,'email','students')) $errors->add('This Email Is Already Exists!');
    if(Validation::validEmail($email)) $errors->add('Please Enter A Valid Email!');

    if($errors->errorsExist()) {

        Session::set('errors', $errors->all());
        redirect('pages/students/create.php');
    }else {

        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => isset($phone) ? $phone : null,
        ];

        if(Student::create($data)) {
            Session::set('success','Student Created Successfully!');
            redirect('pages/students/index.php');
        } else {
            $errors->add('Error Creating Student!');
            Session::set('errors', $errors->all());
            redirect('pages/students/create.php');

        }
    }
}
