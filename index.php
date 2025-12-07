<?php
session_start();
if(!isset($_SESSION['user'])) { 
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Meal Tracker</title>

    <style>
        body {
            font-family: Arial;
            padding: 20px;
        }
        nav a {
            margin-right: 10px;
        }
        h2 {
            text-align: center;
        }
    </style>

</head>
<body>

<h2>Meal Tracker</h2>

<p>Choose an option:</p>

<nav>
    <a href="addmeal.php">Add Meal</a><br>
    <a href="viewmeals.php">View Meals</a><br>
    <a href="logout.php">Logout</a>

</nav>

</body>
</html>
