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
       header('location:../sales/salesPg.php');
        exit(); 
    
    }else{
        $_SESSION['no_search']=$search.' is not available';
        header('location:../sales/salesPg.php');
        exit(); 
       
      }
    }
    else{
         $_SESSION['no_input']='pls input the product you want to search for';
        header('location:../sales/salesPg.php');
        exit();
       
    }
}
else{
    header('location:../sales/salesPg.php');
    exit();

}