<?php 

session_start();


var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="./index.php">Home</a></li>
        <li><a href="./src/login.php">Login</a></li>
        <li><a href="./src/logout.php">Logout</a></li>
    </ul>
</body>
</html>