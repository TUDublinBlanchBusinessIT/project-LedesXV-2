<?php session_start(); ?>

<h2>Login</h2>

<form action="loginProcess.php" method="POST">
    <label>Username:</label><br>
    <input type="text" name="username"><br><br>

    <label>Password:</label><br>
    <input type="password" name="password"><br><br>

    <button type="submit">Login</button>
</form>

<br>
<a href="index.php">Back Home</a>
