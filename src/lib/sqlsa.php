<?php
    class SQLSA {
        public $level;
        public $message;
        public $description;
        public $lockdown;
        public $conn;

        public function __construct($level, $description, $message, $lockdown) {
            $this->level = $level;
            $this->description = $description;
            $this->message = $message;
            $this->lockdown = $lockdown;
            $this->conn = mysqli_connect("db", "root", "root", "sqlsa");
        } 

        public function runSQL($username, $password) {
            if($result = mysqli_query($this->conn, "SELECT COUNT(id) FROM users WHERE username='$username' AND password='$password'")){
                $row = mysqli_fetch_row($result);

                if(intval($row[0]) == 0) {
                    $this->error();
                }
            } else {
                $this->error();
            }
        
            mysqli_close($this->conn);
        }

        public function error() {
            mysqli_close($this->conn);
            include "error.php";
            die();
        }

        public function output() {
        ?>
            <html>
                <!-- <?= $this->description ?> -->
                <head>
                    <title>(SQL)SA</title>
                    <style>
                        body {
                            margin: 0;
                        }

                        h1 {
                            text-align: center;
                            margin-block-start: 0.4em;
                            margin-block-end: 0em;
                        }

                        h3 {
                            text-align: center;
                            margin-block-start: 0.3em;
                            margin-block-end: 0em;
                        }

                        .container {
                            padding-top: 1em;
                            display: grid;
                            justify-content: center;
                        }

                        .defcon {
                            display: grid;
                            padding-top: 1em;
                            justify-content: center;
                        }

                        .login {
                            display: grid;
                            justify-content: center;
                            padding-top: 2em;
                        }

                        .logo {
                            width: 150px;
                            height: 150px;
                        }

                        .message {
                            position: fixed;
                            bottom: 0;
                            width: 100%;
                            text-align: center;
                        }
                    </style>
                </head>
                <body>
                    <div class="container">
                        <img class="logo" alt="SQLSA" src="../image/logo.png" />
                        <h1>(SQL)SA</h1>
                        <h3>In Queries We Trust</h3>
                    </div>
                    <div class="defcon">
                        <h1 style="display: <?= ($this->level <= 5) ? "inherit" : "none" ?>">DEFCON <?= $this->level ?></h1>
                    </div>
                    <form class="login" method="POST" action="">
                        <span>Username: </span>
                        <input <?= $this->lockdown ? "readonly" : "" ?> name="username" />
                        </br>
                        <span>Password: </span>
                        <input <?= $this->lockdown ? "readonly" : "" ?> type="password" name="password" />
                        </br>
                        <button type="submit">Login</button>
                    </form>
                    <div class="message">
                        <marquee behavior="scroll" direction="left"><?= $this->message ?></marquee>
                    </div>
                </body>
            </html>
        <?php
        }
    }
?>