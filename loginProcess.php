<?php
session_start();
include 'db.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['user'] = $username;
    header("Location: index.php");
    exit;
} else {
    echo "Invalid login. <a href='login.php'>Try again</a>";
}
?>
