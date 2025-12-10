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
        background:#121212;
        color:#e5e5e5;
        font-family: Arial;
        padding:20px;
        text-align:center;
    }

    nav a {
        color:#4FC3F7;
        margin-right:12px;
        font-weight:bold;
        text-decoration:none;
    }
    nav a:hover {
        color:#81D4FA;
    }

    table {
        border-collapse: collapse;
        width:95%;
        margin-top:20px;
        background:#1e1e1e;
    }

    th {
        background:#2c2c2c;
        color:#f2f2f2;
        padding:10px;
        font-size:15px;
    }

    td {
        padding:10px;
        color:#dedede;
        border-bottom:1px solid #333;
    }

    tr:nth-child(even){
        background:#1a1a1a;
    }

    input, select {
        width:260px;
        padding:8px;
        border:1px solid #444;
        background:#1f1f1f;
        color:white;
        border-radius:4px;
    }

    input[type="submit"], button {
        background:#4FC3F7;
        color:black;
        padding:8px 16px;
        border:none;
        font-weight:bold;
        border-radius:4px;
    }
    input[type="submit"]:hover {
        background:#81D4FA;
    }

    a.delete {
        color:#E53935;
        font-weight:bold;
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
