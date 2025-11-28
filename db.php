<?php
$conn = new mysqli("localhost", "root", "", "mealtrackerdb");
if ($conn->connect_error) {
    die("Connection failed");
}
?>
