<?php
    require_once "inc/header.php"
?>
    <div class="container mt-4">
        <div class="row col-12 d-flex">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Name : </h5>
                    <p class="card-text">E-mail : </p>
                    <a class="btn btn-danger" href="">Logout</a>
                </div>
            </div>
        </div>
        <div class="col-8">
            <a href ="create.php" class="btn btn-primary">Create New Task</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Task</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>task</td>
                        <td>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <tbody>
            </table>
        </div>
    </div>
<?php
    require_once "inc/footer.php"
?>