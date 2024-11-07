<?php 
require 'functions.php';
if(isset($_POST['todo_submit'])){
    createTodo($_POST);
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

    <title>To Do List - Create</title>
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

        .card {
            /* background: var(--color-white); */
            /* color: var(--color-text); */
            color: var(--color-white); 

            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            background: linear-gradient(145deg, var(--color-primary), var(--color-secondary)); 

        }

        .form-control {
            border: 1px solid var(--color-secondary);
            border-radius: 5px;
        }

        .btn {
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: var(--color-btn-hover);
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
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Create a New To Do</h3>
                    </div>
                    <div class="card-body">
                        <form action="index.php" method="POST">
                            <div class="form-group">
                                <label for="todo">To Do</label>
                                <input type="text" class="form-control" name="todo" placeholder="Enter Your to do" required>
                            </div>
                            <div class="form-group">
                                <label for="todo_time">To do Time</label>
                                <input type="date" class="form-control" name="todo_time" required>
                            </div>

                            <button type="submit" name="todo_submit" class="btn btn-primary">Submit</button>
                        </form>
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
