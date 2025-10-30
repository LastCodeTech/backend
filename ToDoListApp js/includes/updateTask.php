<?php
session_start();

  require_once('config.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $itemId = htmlspecialchars($_POST['itemId']);
  
    $query =$pdo->prepare('UPDATE tasks SET title = ?, description = ? where id = ?;');
    $insert =$query->execute([$title,$description,$itemId]);
   
    
    if($insert){
        $_SESSION['success'] = 'updated successfully';


        header("Location: ../index.php");
        exit();
    }
    else{
        $_SESSION['error'] = "An error occurred!";
        header("Location: ../index.php");
        exit();
    }
    
}
else{
    $_SESSION['error'] = "Please fill the form correctly and click on the update button";
    header("Location: ../index.php");
    exit();
}