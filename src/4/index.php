<?php
    require_once('../lib/sqlsa.php');

    $sqlsa = new SQLSA(4, "The president was not ready for this type of attack. Where is the shutdown button?", "(SQL)SA is on medium lockdown. Login fields are disabled. 'TRUE' operator is flagged.", true);

    if(isset($_POST["username"]) && isset($_POST["password"])) {
        if(strpos(strtolower($_POST["username"]), "true")) {
            $sqlsa->error();
        } else {
            $sqlsa->runSQL($_POST["username"], md5($_POST["password"]));
            header("Location: http://localhost/3");
            exit;
        }
    }
    
    $sqlsa->output();
?>