<?php
require_once('server.php');
if($_SERVER['REQUEST_METHOD']=='GET'){
    $search=htmlspecialchars($_GET['search']);
    $searchTerm='%'.$search.'%';
    if(!empty($search)){
       $query='SELECT * FROM products where product_name like  ?';
       $prep =$pdo->prepare($query);
       $prep->execute([$searchTerm]);
       $result=$prep->fetchAll(PDO::FETCH_ASSOC);
       print_r($result);
    //    if($execute){
    //     echo'yes';
    //    }
    //    else{
    //     echo'no';
    //    }
    }
    else{
         $_SESSION['empty_search']='pls input the product you want to search for';
        header('location:../dashboard/homepage.php');
        die();
    }




}
else{
    header('location:../authentication/login.php');
    exit();
}