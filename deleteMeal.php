<?php
session_start();
include "db.php";

$id = $_GET['id'];

$sql = "DELETE FROM meals WHERE id = $id";
$conn->query($sql);

header("Location: viewmeals.php");
exit;
?>
