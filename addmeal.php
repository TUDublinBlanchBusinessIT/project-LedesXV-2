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
            font-family: Arial;
            padding: 20px;
        }
        nav a {
            margin-right: 10px;
        }
        table {
            border-collapse: collapse;
            width: 95%;
            margin-top: 20px;
        }
        th {
            background-color: #efefef;
            padding: 10px;
            font-weight: bold;
        }
        td {
            padding: 10px;
        }
        tr:nth-child(even) {
            background-color: #fafafa;
        }
        h2 {
            text-align: center;
        }
        form input, form select {
            padding: 6px;
            width: 250px;
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
