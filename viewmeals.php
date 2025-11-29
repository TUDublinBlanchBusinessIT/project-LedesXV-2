<?php
include "db.php";

$sql = "SELECT * FROM meals";
$result = $conn->query($sql);
?>

<h2>All Meals</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Meal Type</th>
        <th>Calories</th>
        <th>Protein</th>
        <th>Fat</th>
        <th>Carbs</th>
        <th>Date</th>
    </tr>

    <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['meal_type']; ?></td>
            <td><?php echo $row['calories']; ?></td>
            <td><?php echo $row['protein']; ?></td>
            <td><?php echo $row['fat']; ?></td>
            <td><?php echo $row['carbs']; ?></td>
            <td><?php echo $row['meal_date']; ?></td>
        </tr>
    <?php endwhile; ?>

</table>

<br>
<a href="addmeal.php">Add Another Meal</a>
