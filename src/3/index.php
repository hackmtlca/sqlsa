<?php
    require_once('../lib/sqlsa.php');

    $sqlsa = new SQLSA(3, "They're getting closer?!?!?!", "(SQL)SA is on high lockdown. Login fields are disabled. 'TRUE' operator is flagged. '=' operator is flagged.", true);

    if(isset($_POST["username"]) && isset($_POST["password"])) {
        if(strpos(strtolower($_POST["username"]), "true") || strpos($_POST["username"], "=")) {
            $sqlsa->error();
        } else {
            $sqlsa->runSQL($_POST["username"], md5($_POST["password"]));
            header("Location: http://localhost/2");
            exit;
        }
    }
    
    $sqlsa->output();
?>