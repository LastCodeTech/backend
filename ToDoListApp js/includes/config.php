<?php

$dbhandle = "mysql:host=localhost; dbname=practicedb"; 
$dbpassword = "";
$dbusername = "root";


try {
    $pdo = new PDO($dbhandle, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "An error occurred ".$e->getMessage();
}