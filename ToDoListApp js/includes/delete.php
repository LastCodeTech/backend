<?php
session_start();

  require_once('config.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $itemId = htmlspecialchars($_POST['itemId']);
  
    $query =$pdo->prepare('DELETE FROM tasks WHERE id = ?;');
    $delete =$query->execute([$itemId]);
   
    
    if($delete){
        $_SESSION['success'] = 'Deleted successfully';


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