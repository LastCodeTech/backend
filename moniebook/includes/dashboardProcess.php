<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
    $search=htmlspecialchars($_GET['search']);
    if(empty($search)){
        $_SESSION['empty_search']='pls input the product you want to search for';
        header('location:../dashboard/homepage.php');
    }




}
else{
    header('location:../authentication/login.php');
    exit();
}