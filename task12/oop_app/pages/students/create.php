<?php

use App\Helpers\Session;

 require_once '../../app/bootstrap.php' ?>

<?php require_once path('pages/inc/header.php') ?>

<h1 class="text-center my-5">Add New Student</h1>

<a class="btn btn-primary mb-5" href="<?= url('pages/students/index.php') ?>">All Students</a>

<?php require_once path('pages/inc/messages.php') ?>

<form action="<?=url('handlers/students/store.php')?>" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name='name' id="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name='email' id="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" name='phone' id="phone" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Add</button>
</form>

<?php require_once path('pages/inc/footer.php') ?>