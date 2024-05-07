<?php
session_start();

function ensureLoggedIn(){
    if (!isset($_SESSION['logged-in'])){
        header('Location:../../fe/login.php');
        exit;
    }
}

?>