<?php
include 'db.php';

$meal_type = $_POST['meal_type'];
$calories  = $_POST['calories'];
$protein   = $_POST['protein'];
$fat       = $_POST['fat'];
$carbs     = $_POST['carbs'];
$meal_date = $_POST['meal_date'];

$sql = "INSERT INTO meals (meal_type, calories, protein, fat, carbs, meal_date)
        VALUES ('$meal_type', $calories, $protein, $fat, $carbs, '$meal_date')";

$conn->query($sql);

header("Location: viewmeals.php");
exit;
?>
