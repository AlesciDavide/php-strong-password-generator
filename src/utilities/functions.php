<?php 
require_once __DIR__ . '/users.php';



function checkUser($username, $password){

    if(isset($username) && isset($password)){
        $_SESSION["username"] = ($username);
        $_SESSION["password"] = ($password);
    }
}
?>