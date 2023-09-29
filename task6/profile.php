<?php
    require_once "inc/header.php";
    require_once "core/helpers.php";
    isLoggedIn('auth','index.php');
    $tasks = readFromJsonFile("data/task.json");
    if($tasks != NULL){
        foreach ($tasks as $task){
            if($task['user_id'] == $_SESSION['auth']['id']){
                $myTasks[] = $task;
            }
        }
    }
?>
<?php 
flashSession("not_found");
?>
    <div class="container mt-4">
        <div class="row col-12 d-flex">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Name : <?= $_SESSION['auth']['name'] ?> </h5>
                    <p class="card-text">E-mail : <?= $_SESSION['auth']['email'] ?> </p>
                    <a class="btn btn-danger" href="controller/LogoutController.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="col-8">
            <a href ="create.php" class="btn btn-primary">Create New Task</a>
            <?php if(isset($myTasks)) : ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Task</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  foreach($myTasks as $task) : ?>
                    <tr>
                        <th scope="row"><?= $task['id'] ?></th>
                        <td><?= $task['task'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $task['id']?>" class="btn btn-warning">Edit</a>
                            <a href="controller/DeleteController.php?id=<?=$task['id']?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <tbody>
            </table>
            <?php else : ?>
                <h1>No Tasks</h1>
            <?php endif; ?>
        </div>
    </div>
<?php
    require_once "inc/footer.php"
?>