<a href="index.php">Home</a> |
<a href="addmeal.php">Add Meal</a> |
<a href="viewmeals.php">View Meals</a>
<br><br>


<?php
include 'db.php';

$meal_name    = $_POST['meal_name'];
$meal_type_id = $_POST['meal_type_id'];
$calories  = $_POST['calories'];
$protein   = $_POST['protein'];
$fat       = $_POST['fat'];
$carbs     = $_POST['carbs'];
$meal_date = $_POST['meal_date'];

if ($meal_name == "" || $meal_type_id == "" || $calories == "" || $protein == "" || $fat == "" || $carbs == "" || $meal_date == "") {
    die("Please fill all fields.");
}

if ($calories < 0 || $protein < 0 || $fat < 0 || $carbs < 0) {
    die("Values cannot be negative.");
}

$sql = "INSERT INTO meals (meal_name,meal_type_id, calories, protein, fat, carbs, meal_date)
        VALUES ('$meal_name', $meal_type_id, $calories, $protein, $fat, $carbs, '$meal_date')";

$conn->query($sql);

header("Location: viewmeals.php");
exit;
?>
