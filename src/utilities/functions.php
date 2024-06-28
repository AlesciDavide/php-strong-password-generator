<?php 





function checkUser($username, $password, $users){
    
        
        foreach ($users as $user) {
            if ($username == $user["username"] && $password == $user["password"]) {
                    $_SESSION["username"] = ($username);
                    break;
            }
        }
    
} 

?>