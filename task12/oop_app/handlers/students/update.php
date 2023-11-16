<?php

use App\Classes\Student;
use App\Helpers\ErrorsBag;
use App\Helpers\Request;
use App\Helpers\Session;
use App\Helpers\Validation;

require_once '../../app/bootstrap.php';

$request = new Request;

if (Request::isPost() && Request::has('id')) {

    $errors = new ErrorsBag;

    $id = Validation::sanitizeInput(Request::get('id'));

    $student = Student::find($id);

    if ($student) {
        // sanitizing inputs
        foreach (Request::all() as $key => $value) $$key = Validation::sanitizeInput($value);

        // validating inputs
        if (Validation::required($name)) $errors->add('Name Field Is Required!');
        if (Validation::minVal($name, 3) || Validation::maxVal($name, 20)) $errors->add('Name Must Be Between 3 and 20 Characters!');

        if (Validation::required($email)) $errors->add('Email Field Is Required!');
        if (Validation::unique($email, 'email', 'students', $id)) $errors->add('This Email Is Already Exists!');
        if (Validation::validEmail($email)) $errors->add('Please Enter A Valid Email!');

        if ($errors->errorsExist()) {

            Session::set('errors', $errors->all());
            redirect('pages/students/create.php');
        } else {

            $data = [
                'name' => $name,
                'email' => $email,
                'phone' => isset($phone) ? $phone : null,
            ];

            if (Student::update($id,$data)) {
                Session::set('success', 'Student Updated Successfully!');
                redirect('pages/students/index.php');
            } else {
                $errors->add('Error Updating Student!');
                Session::set('errors', $errors->all());
                redirect('pages/students/edit.php?id=' . $id);
            }
        }
    } else {

        $errors->add('This Record Doesn`t Exist In Our Records!');
        Session::set('errors', $errors->all());
        redirect('pages/students/index.php');
    }
}
