<?php


function getConnection(){
$dsn = "mysql:host=localhost;dbname=web-final";
$dbusername = "root";
$dbpassword = "";

try{
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;

}
catch(PDOException $e){
    echo "connection failed: ".$e->getMessage();
}

}
