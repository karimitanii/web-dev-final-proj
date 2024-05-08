<?php
session_start();

function ensureLoggedInCMS(){
    if (!isset($_SESSION['logged-in'])){

        header('Location:login.php');
        exit;
    }
}

function ensureLoggedInIndex(){
    if (!isset($_SESSION['logged-in'])){

        header('Location:CMS/login.php');
        exit;
    }

}


function ensureadminloggedin(){
    //this function ensures that the eadmin is logged in so when they are viewing the client side they can go back to admin mode without relogging in 
    if(!isset($_SESSION['logged-in'])){
        return 0;
    }
    else{
        return 1 ;
    }
}

?>