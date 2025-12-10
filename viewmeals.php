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
<?php
include "db.php";

$sql = "SELECT 
            meals.id,
            meals.meal_name,
            meal_types.recommended_time,
            meal_types.type_name,
            meals.calories,
            meals.protein,
            meals.fat,
            meals.carbs,
            meals.meal_date
        FROM meals
        JOIN meal_types ON meals.meal_type_id = meal_types.id";

$result = $conn->query($sql);
?>

<nav>
    <a href="index.php">Home</a> |
    <a href="addmeal.php">Add Meal</a> |
    <a href="viewmeals.php">View Meals</a>
</nav>
<br><br>



<table border="1" cellpadding="10">
    <tr>
        <th>Meal Type</th>
        <th>Recommended Time</th>
        <th>Meal Name</th>
        <th>Calories</th>
        <th>Protein</th>
        <th>Fat</th>
        <th>Carbs</th>
        <th>Date</th>
        <th>Delete</th>
    </tr>

    <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['type_name']; ?></td>
            <td><?php echo $row['recommended_time']; ?></td>
            <td><?php echo $row['meal_name']; ?></td>
            <td><?php echo $row['calories']; ?></td>
            <td><?php echo $row['protein']; ?></td>
            <td><?php echo $row['fat']; ?></td>
            <td><?php echo $row['carbs']; ?></td>
            <td><?php echo $row['meal_date']; ?></td>
            <td><a class="delete-btn" href="deleteMeal.php?id=<?= $row['id']; ?>">Delete</a></td>
        </tr>
    <?php endwhile; ?>

</table>

<br>
<nav>
    <a href="addmeal.php">Add Another Meal</a>
</nav>

</body>
</html>
