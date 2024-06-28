<?php 
session_start();

require_once __DIR__ . '/src/utilities/users.php';
require_once __DIR__ . '/src/utilities/functions.php';




checkUser($_GET["username"]?? 'logout', $_GET["password"]?? 'logout');

$isOn = false;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>php-strong-password-generator</title>
</head>
<body>
    <ul class="myHeader">
        <li><a href="./index.php">Home</a></li>
        <li><a href="./src/login.php">Login</a></li>
        <li><a href="./src/logout.php">Logout</a></li>
    </ul>
    

    <?php  foreach ($users as $user ) {?>
        <?php  if ($_SESSION["username"] == $user["username"] && $_SESSION["password"] == $user["password"]) {?>
            <!-- Qua si dovranno inserire i contenuti della home page quando l'utente è loggato -->
            <h2>Benveuto: <?php echo ($_SESSION["username"]?? '') ?></h2>
            <h3>questi sono i tuoi contenuti dopo aver effettuato l'accesso:</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi repudiandae qui excepturi, dignissimos beatae tempore totam vitae atque, dolorum neque fugit velit cumque, labore autem at saepe soluta voluptates quaerat!</p>
            <?php $isOn = true; ?>
            <?php break; ?>
        <?php }elseif($_SESSION["username"] == "logout" && $_SESSION["password"] == "logout" ){ ?>
            <?php $isOn = false; ?>

        <?php break; ?>
        <?php }else{ ?>
            <?php header('location: ./src/login.php');?>
            <?php $isOn = false; ?>
        <?php break; ?>

    <?php } ?>
    <?php } ?>
            <section>
                <?php if (!$isOn) {?>
                    <!-- qua si potranno inserire i contenuti della homepage da visitatore -->
                    <h2>Non sei loggato quindi i contenuti disponibili per te sono limitati</h2>
            <p>registrati per vedere tutti i contenuti!!</p>
                    <?php } ?>
            </section>


</body>
</html>