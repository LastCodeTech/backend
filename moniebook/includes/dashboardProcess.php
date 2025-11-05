<?php
session_start();
require_once('server.php');
if($_SERVER['REQUEST_METHOD']=='GET'){
    $search=htmlspecialchars($_GET['search']);
    $searchTerm="%$search%";
    if(!empty($search)){
        $query='SELECT * FROM products where product_name like  ? AND user_id=?';
       $prep =$pdo->prepare($query);
       $prep->execute([$searchTerm,$_SESSION['user_id']]);
       $result=$prep->fetchAll(PDO::FETCH_ASSOC);
    if(!empty($result)){
      $_SESSION['result']=$result;
       foreach($result as $row){
        $_SESSION['productName']=$row['product_name'];
        $_SESSION['quantity']=$row['quantity'];
        $_SESSION['price']=$row['price'];
        $_SESSION['product_id']=$row['id'];
         header('location:../dashboard/homepage.php');
      //  exit();
       }
    }else{
        $_SESSION['no_product']=$search.' is not added to the product list,navigate to the add product page to add it';
        header('location:../dashboard/homepage.php');
        exit(); 
      }
    }
    else{
         $_SESSION['no_input']='pls input the product you want to search for';
        header('location:../dashboard/homepage.php');
        exit();
    }
}
else{
    header('location:../authentication/login.php');
    exit();
}