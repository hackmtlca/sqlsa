<?php
    require_once('../lib/sqlsa.php');

    $sqlsa = new SQLSA(1, "Thank god I got to activate button on time. Now way he can get in now! Unless if he finds out the passwords?", "(SQL)SA is on total lockdown. Login fields are disabled. Escaping characters.", true);

    if(isset($_POST["username"]) && isset($_POST["password"])) {
        $sqlsa->runSQL(mysqli_real_escape_string($sqlsa->conn, $_POST["username"]), md5($_POST["password"]));
        echo "How did you login to an admin account 🐱‍🚀?";
        exit;
    }
    
    $sqlsa->output();
?>