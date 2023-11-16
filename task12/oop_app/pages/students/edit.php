<?php

use App\Classes\Student;
use App\Helpers\ErrorsBag;
use App\Helpers\Request;
use App\Helpers\Session;

 require_once '../../app/bootstrap.php';

 if(Request::isGet()): 

    $id = Request::get('id');
    $student = Student::find($id);

    if($student){
        
  ?>

<?php require_once path('pages/inc/header.php') ?>

<h1 class="text-center my-5">Edit Student</h1>

<a class="btn btn-primary mb-5" href="<?= url('pages/students/index.php') ?>">All Students</a>

<?php require_once path('pages/inc/messages.php') ?>

<form action="<?=url('handlers/students/update.php')?>" method="POST">

    <input type="hidden" name="id" value="<?=$student['id']?>">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" value="<?=$student['name']?>" name='name' id="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" value="<?=$student['email']?>" name='email' id="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" value="<?=$student['phone']?>" name='phone' id="phone" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php 

require_once path('pages/inc/footer.php');

    } else{
        $errors = new ErrorsBag;
        $errors->add('This Record Isn`t Exist In Our Records!');

        Session::set('errors', $errors->all());
        redirect('pages/students/index.php');
    }
endif;
?>