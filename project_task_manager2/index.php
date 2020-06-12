<?php 
include_once "config.php";
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(!$connection){
	throw new Exception("Cannot connect to database");
}
$query = "SELECT * FROM tasks WHERE complete=0 ORDER BY date";
$result = mysqli_query($connection,$query);

$completeTasksQuery = "SELECT * FROM tasks WHERE complete=1 ORDER BY date";
$resultCompleteTasks = mysqli_query($connection,$completeTasksQuery);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo/Tasks</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body {
            margin-top: 30px;
        }

        #main {
            padding: 0px 150px 0px 150px;;
        }

        #action {
            width: 150px;
        }
    </style>
</head>
<body>
<div class="container" id="main">
    <h1>Tasks Manager</h1>
    <p>This is a sample project for managing our daily tasks. We're going to use HTML, CSS, PHP, JavaScript and MySQL
        for this project</p>
<!-- complete task start -->
<?php include_once "inc/completeTask.php";?>
<!-- complete task end -->
<!-- upcoming task start -->
<?php include_once "inc/upcomingTask.php";?>
<!-- upcoming task end -->
<!-- Add task start -->
<?php include_once "inc/addTask.php";?>
<!-- Add task end -->
<!-- form er action take dhorar jonno -->
<?php include_once "inc/actionForm.php";?>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="inc/main.js"></script>
</html>