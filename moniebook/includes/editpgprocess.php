<?php
require_once('server.php');
 session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $productName=htmlspecialchars($_POST['productName']);
    $quantity=htmlspecialchars($_POST['quantity']);
    $price=htmlspecialchars($_POST['price']);
    $product_id=htmlspecialchars($_POST['product_id']);
    
    $query=$pdo->prepare('UPDATE products SET product_name = ?, quantity = ?, price= ? where id =? ');
    $execute=$query->execute([$productName,$quantity,$price,$product_id]);
    if($execute){
        $_SESSION['updated_successfully']='product updated successfully';
        header('location:../dashboard/homepage.php');
        exit();
    }
    else{
      $_SESSION['not_updated_successfully']='product not  updated successfully pls try again';
        header('location:../includes/editPgProcess.php');
        exit();  
    }
   
}