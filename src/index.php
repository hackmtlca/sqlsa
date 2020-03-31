<?php
    require_once('./lib/sqlsa.php');

    $sqlsa = new SQLSA(6, "President is safe. Nothing weird is going on. Carry on.", "(SQL)SA is working as usual. Carry on with normal operations.", false);

    if(isset($_POST["username"]) && isset($_POST["password"])) {
        $sqlsa->runSQL($_POST["username"], md5($_POST["password"]));
        header("Location: http://localhost/5");
        exit;
    }
    
    $sqlsa->output();
?>