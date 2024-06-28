<?php 

require_once __DIR__ . '/src/utilities/users.php';

session_start();
if(isset($_GET["username"]) && isset($_GET["password"])){
    $_SESSION["username"] = ($_GET["username"]);
    $_SESSION["password"] = ($_GET["password"]);
}else{
    $_SESSION["username"] = ($_GET["username"])?? 'logout';
    $_SESSION["password"] = ($_GET["password"])?? 'logout';
}



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
    <form action="./index.php" method="GET">
        <label for="username"></label>
        <input type="text" name="username" id="username" placeholder="inserisci l'username">
        <label for="password"></label>
        <input type="text" name="password" id="password" placeholder="inserisci la Password">
        <button type="submit">send</button>
    </form>

    <?php  foreach ($users as $user ) {?>
        <?php  if ($_SESSION["username"] == $user["username"] && $_SESSION["password"] == $user["password"]) {?>
            <h2>Benveuto: <?php echo ($_SESSION["username"]?? '') ?></h2>
            <?php break; ?>
        <?php }elseif($_SESSION["username"] == "logout" && $_SESSION["password"] == "logout" ){ ?>
        <?php break; ?>
        <?php }else{ ?>
            <h2>Non sei registrato!! riinserisci i dati</h2>
        <?php break; ?>

    <?php } ?>
    <?php } ?>



</body>
</html>