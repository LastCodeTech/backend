<?php
$dbhandle='mysql:host=localhost;dbname=practicedb';
$dbname = 'root';
$password='';

try{
$pdo = new PDO($dbhandle,$dbname,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo'errrror!!!'.$e->getMessage();
}
