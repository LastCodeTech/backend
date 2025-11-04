<?php
session_start();

require_once('server.php');
if($_SERVER['REQUEST_METHOD']='POST'){
    $productName=htmlspecialchars($_POST['productName']);
    $quantity=htmlspecialchars($_POST['quantity']);
    $price=htmlspecialchars($_POST['price']);
    $userId=$_SESSION['user_id'];

    if(!empty($productName)  && !empty($price)  && !empty($quantity)){
      $check='SELECT * FROM products where product_name=?';
      $prep=$pdo->prepare($check);
      $prep->execute([$productName]);
      $result=$prep->fetchAll(PDO::FETCH_ASSOC);
      if(!empty($result)){
        $_SESSION['product_already_exist']='product already exist';
        header('location:../dashboard/addProductPg.php');
        exit();
      } 
      else{
        $query='INSERT INTO products(user_id,product_name,price,quantity) VALUES(?,?,?,?)';
        $prepare=$pdo->prepare($query);
        $insert=$prepare->execute([$userId,$productName,$price,$quantity]);
        if($insert){
           
           $_SESSION['product_added-successfully']='product added successfully';
        header('location:../dashboard/homepage.php');
        exit();
        }
        else{
             
              $_SESSION['an_error_occurred']='an error occurred';
        header('location:../dashboard/addProductPg.php');
        exit();
        }
      }  
    }
    else{
       
         $_SESSION['input_all_fields']='pls input all fields to add product';
          header('location:../dashboard/addProductPg.php');
        exit();
    }
}
else{
    header('location:../authentication/login.php');
    exit();
}