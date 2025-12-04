<?php
$conn = new mysqli("127.0.0.1", "root", "Princevince16!", "mealtrackerdb");
if ($conn->connect_error) {
    die("Connection failed");
}
?>
