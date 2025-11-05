<?php

require_once("config.php");

$item = $_GET['ref'];


$mark = $pdo->prepare("UPDATE tasks SET completed = ?");
$marked = $mark->execute([1]);

if($marked){
    header("Location: ../index.php");
    exit();
}else{

}