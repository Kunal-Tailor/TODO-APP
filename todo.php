<?php 
require 'functions.php';

$get_todo = getTodo();

if(isset($_GET['status']) && $_GET['id']){
    $id = $_GET['id'];
    $status = $_GET['status'];
    changeStatus($id, $status);
} else {
    ?>
    <script>window.href.location ='todo.php';</script>
    <?php
}

if(isset($_GET['action']) && $_GET['id']){
    $id = $_GET['id'];
    if($_GET['action'] === 'delete'){
        delete($id);
    }
} else {
    ?>
    <script>window.href.location ='todo.php';</script>
    <?php
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>To Do List</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --color-primary: #4b6cb7; 
            --color-secondary: #182848; 
            --color-accent-light: #e1f5fe;
            --color-text: #222222; 
            --color-background: #c9d6ff; 
            --color-white: #e1f5fe; 
            --color-btn-hover: #2b5876;
            --color-btn-primary: #1f3b4d; 
            --color-btn-accent: #ff4081;
            --color-error: #e63946; /* New color for error messages */
        }

        body {
            position: relative;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--color-background);
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin: 0 20px;
            min-width: 640px;
            max-width: 1000px;
            background: linear-gradient(145deg, var(--color-primary), var(--color-secondary)); 
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
            border-radius: 12px;
            padding: 30px;
            color: var(--color-white); 
        }
        .card{
            background: linear-gradient(145deg, var(--color-primary), var(--color-secondary)); 

        }

        .table {
            background: var(--color-white);
            color: var(--color-text);
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .btn {
            transition: background 0.3s ease;
        }

        .btn-danger:hover {
            background: var(--color-error);
            color: var(--color-white);
        }

        .btn-success:hover {
            background: #38c172; /* Optional custom hover color */
        }

        .btn-secondary:hover {
            background: #6c757d; /* Optional custom hover color */
        }

        @media only screen and (max-width: 530px) {
            .container {
                margin: 0 10px;
                max-width: 95%;
                min-width: 95%;
            }
        }
    </style>
</head>
<body>
    <!-- <div class="container"> -->
        <!-- <div class="row"> -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between" >
                        <h3>My To Do List</h3>
                        <a href="index.php" class="btn btn-info float-right">Add a new Todo</a>
                        <a href="logout.php" class="btn btn-info btn-danger ">Logout</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Todo</th>
                                    <th scope="col">Todo Time</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($get_todo as $todo){
                                ?>
                                <tr>
                                    <th><?= $todo['id']; ?></th>
                                    <td><?= $todo['todo']; ?></td>
                                    <td><?= $todo['todo_time']; ?></td>
                                    <td><?= date('M-d-Y, h:i a', strtotime($todo['created_at'])); ?></td>
                                    <td><?= date('M-d-Y, h:i a', strtotime($todo['updated_at'])); ?></td>
                                    <td>
                                        <?php 
                                        if($todo['status'] == 1) { ?>
                                            <a href="todo.php?id=<?= $todo['id'] ?>&status=undone" class="btn btn-success">Done</a>
                                       <?php } else { ?>
                                            <a href="todo.php?id=<?= $todo['id'] ?>&status=done" class="btn btn-secondary">Undone</a>
                                       <?php } ?>
                                        <a href="edit.php?id=<?= $todo['id']; ?>" class="btn btn-primary">Edit</a>
                                        <a href="todo.php?id=<?= $todo['id']; ?>&action=delete" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    <!-- </div> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
