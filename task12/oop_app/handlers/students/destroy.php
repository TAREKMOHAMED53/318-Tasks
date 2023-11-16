<?php

use App\Classes\Student;
use App\Helpers\ErrorsBag;
use App\Helpers\Request;
use App\Helpers\Session;
use App\Helpers\Validation;

require_once '../../app/bootstrap.php';

$request = new Request;

if ($request->isGet()) {

    $id = $request->get('id');
    $student = Student::find($id);

    if($student) {

        Student::destroy($id);
        Session::set('success','Student Deleted Successfully!');

    } else{
        $errors = new ErrorsBag;
        $errors->add('Record Is Not Exist In Our Records!');
        Session::set('errors', $errors->all());
    }
    
    redirect('pages/students/index.php');
}
