<?php
session_start();
require_once('server.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
$product =htmlspecialchars($_POST['product']);
$price =htmlspecialchars($_POST['price']);


if(!empty($product) && !empty($price)){
 $check_product = 'SELECT * FROM products where productname = ?';
        $prep = $pdo->prepare($check_product);
        $prep ->execute([$product]);
        $result = $prep->fetchAll(PDO::FETCH_ASSOC);
 if(empty($result)){
   $query = $pdo->prepare("INSERT INTO products(productname, price) VALUES(?,?)");
        $insert = $query->execute([$product,$price]);
   
   if($insert){
    $_SESSION['added']='product added successfully' ;
  header('location:addProductPg.php') ;
   }
   else{
    $_SESSION['not_added']='An error occurred,product was not added' ;
  header('location:addProductPg.php') ;
   }

 }
 else{
    $_SESSION['existing_product']='product already exist' ;
  header('location:addProductPg.php') ;
 }

}
else{
  $_SESSION['error']='pls input all fields to add products' ;
  header('location:addProductPg.php') ;
}
}
else{
    header('location:homepage.php');
    exit();
}