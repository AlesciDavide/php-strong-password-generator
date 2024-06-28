<?php
session_start();
require_once __DIR__ . '/utilities/functions.php';
require_once __DIR__ . '/utilities/users.php';




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
<ul class="myHeader">
        <li><a href="../index.php">Home</a></li>
        
        <li><a href="../src/logout.php">Logout</a></li>
    </ul>
    <section class="myForm">
        <h1>Inserisci i tuoi dati!!</h1>
        <form action="../index.php" method="GET">
        <label for="username"></label>
        <input type="text" name="username" id="username" placeholder="inserisci l'username">
        <label for="password"></label>
        <input type="text" name="password" id="password" placeholder="inserisci la Password">
        <button type="submit">send</button>
    </form>
    
    </section>
</body>
</html>