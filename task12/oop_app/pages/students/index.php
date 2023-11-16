<?php

use App\Classes\Student;
use App\Helpers\Database;

require_once '../../app/bootstrap.php';
require_once path('pages/inc/header.php');

$students = Student::getAll();

?>

<h1 class="text-center my-5">All Students</h1>

<a class="btn btn-primary mb-5" href="<?= url('pages/students/create.php') ?>">Add New Student</a>

<?php require_once path('pages/inc/messages.php') ?>


<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student) : ?>
            <tr>
                <td><?=$student['name']?></td>
                <td><?=$student['email']?></td>
                <td><?=$student['phone']?></td>
                <td>
                    <a class="btn btn-secondary" href='<?=url("pages/students/edit.php?id={$student['id']}")?>'>Edit</a>
                    <a class="btn btn-danger" href='<?=url("handlers/students/destroy.php?id={$student['id']}")?>'>Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once path('pages/inc/footer.php') ?>