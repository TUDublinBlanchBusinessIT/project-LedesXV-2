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
    <title>Add Meal</title>

<style>
    body {
        background:#121212;
        color:#e5e5e5;
        font-family: Arial;
        padding:20px;
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

<nav>
    <a href="index.php">Home</a> |
    <a href="addmeal.php">Add Meal</a> |
    <a href="viewmeals.php">View Meals</a>
</nav>

<form action="insertmeal.php" method="POST">

    <label>Meal Name</label>
    <input type="text" name="meal_name" required>

    <br><br>

    <select name="meal_type_id" required>
        <option value="1">Breakfast</option>
        <option value="2">Lunch</option>
        <option value="3">Dinner</option>
        <option value="4">Snack</option>
    </select>
    <br><br>

    <label>Calories:</label><br>
    <input type="range" name="calories" min="0" max="4000" value="500" id="calSlider" required
        oninput="output.value = calSlider.value">
    <output id="output">500</output> kcal
    <br><br>


    <label>Protein</label>
    <input type="number" name="protein" required>

    <br><br>

    <label>Fat</label>
    <input type="number" name="fat" required>

    <br><br>

    <label>Carbs</label>
    <input type="number" name="carbs" required>

    <br><br>

    <label>Date</label>
    <input type="date" name="meal_date" required>

    <br><br>

    <button type="submit">Save Meal</button>

</form>

</body>
</html>
