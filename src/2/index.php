<?php
    require_once('../lib/sqlsa.php');

    $sqlsa = new SQLSA(2, "Oh god they broke that layer too. I got the big red button now.", "(SQL)SA is on very high lockdown. Login fields are disabled. 'TRUE' operator is flagged. '=' operator is flagged. 'OR' operator is flagged.", true);

    if(isset($_POST["username"]) && isset($_POST["password"])) {
        if(strpos(strtolower($_POST["username"]), "true") || strpos($_POST["username"], "=") || strpos(strtolower($_POST["username"]), "or")) {
            $sqlsa->error();
        } else {
            $sqlsa->runSQL($_POST["username"], md5($_POST["password"]));
            header("Location: http://localhost/1");
            exit;
        }
    }
    
    $sqlsa->output();
?>