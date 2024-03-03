<?php
session_start();
include("connection.php");
include("functions.php");
 
$user_data=check_login($con);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My website</title>
</head>
<body>
    <a href="logot.php">Logout</a>
    <a href="login.php">Logoin</a>
    <h1>THis is the index page</h1>
    <br>
    Hello, username.

</body>
</html>