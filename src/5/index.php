<?php
    require_once('../lib/sqlsa.php');

    $sqlsa = new SQLSA(5, "The presidential database was accessed?!?", "(SQL)SA is on minor lockdown. Login fields are disabled.", true);

    if(isset($_POST["username"]) && isset($_POST["password"])) {
        $sqlsa->runSQL($_POST["username"], md5($_POST["password"]));
        header("Location: http://localhost/4");
        exit;
    }
    
    $sqlsa->output();
?>