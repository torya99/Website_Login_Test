<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['email']) and isset($_POST['email']) and isset($_POST['senha']) and isset($_POST['senha'])){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            echo($email." - ".$senha);
        }
    }
?>