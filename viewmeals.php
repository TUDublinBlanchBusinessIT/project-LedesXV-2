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
<?php
include "db.php";

$sql = "SELECT 
            meals.meal_name,
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
        <th>Meal Name</th>
        <th>Calories</th>
        <th>Protein</th>
        <th>Fat</th>
        <th>Carbs</th>
        <th>Date</th>
    </tr>

    <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['type_name']; ?></td>
            <td><?php echo $row['meal_name']; ?></td>
            <td><?php echo $row['calories']; ?></td>
            <td><?php echo $row['protein']; ?></td>
            <td><?php echo $row['fat']; ?></td>
            <td><?php echo $row['carbs']; ?></td>
            <td><?php echo $row['meal_date']; ?></td>
        </tr>
    <?php endwhile; ?>

</table>

<br>
<nav>
    <a href="addmeal.php">Add Another Meal</a>
</nav>

</body>
</html>
