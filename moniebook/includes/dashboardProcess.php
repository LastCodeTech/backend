<?php
session_start();
require_once('server.php');
if($_SERVER['REQUEST_METHOD']=='GET'){
    $search=htmlspecialchars($_GET['search']);
    $searchTerm='%'.$search.'%';
    if(!empty($search)){
      $check='SELECT * FROM products Where product_name =?';
      $pre =$pdo->prepare($check);
      $pre->execute([$searchTerm]);
      $answer=$pre->fetchAll(PDO::FETCH_ASSOC);
      if(empty($answer)){
        $query='SELECT * FROM products where product_name like  ?';
       $prep =$pdo->prepare($query);
       $prep->execute([$searchTerm]);
       $result=$prep->fetchAll(PDO::FETCH_ASSOC);
    //    print_r($result);
       $_SESSION['result']=$result;
      
       foreach($result as $row){
        $_SESSION['productName']=$row['product_name'];
        $_SESSION['quantity']=$row['quantity'];
        $_SESSION['price']=$row['price'];
         header('location:../dashboard/homepage.php');
       exit();
       }
      }
      else{
        
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