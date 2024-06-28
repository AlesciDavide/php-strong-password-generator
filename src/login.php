<?php
require_once __DIR__ . '/utilities/users.php';

session_start();

$_SESSION["username"] = ($_GET["username"]);
$_SESSION["password"] = ($_GET["password"]);

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
    <form action="../index.php" method="GET">
        <label for="username"></label>
        <input type="text" name="username" id="username" placeholder="inserisci l'username">
        <label for="password"></label>
        <input type="text" name="password" id="password" placeholder="inserisci la Password">
        <button>send</button>
    </form>
</body>
</html>