<?php
session_start();

  require_once('server.php');
//   require_once('toasts.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $product_id = htmlspecialchars($_POST['product_id']);
  echo $product_id;
    $query =$pdo->prepare('DELETE FROM products WHERE id = ?');
    $delete =$query->execute([$product_id]);
    if($delete){
        $_SESSION['product_deleted'] = 'product Deleted successfully';
        header("Location: ../dashboard/homepage.php");
        exit();
    }
    else{
        $_SESSION['product_not_deleted'] = "An error occurred!";
        header("Location: ../includes/delete.php");
        exit();
    }
    
}
else{
    $_SESSION['error'] = "Please fill the form correctly and click on the update button";
    // header("Location: ../dashboard/.php");
    // exit();
    echo 'hello brr';
}