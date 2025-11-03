
<?php
session_start();
require_once('server.php');
if($_SERVER['REQUEST_METHOD']=='GET'){
    $search=htmlspecialchars($_GET['searchBar']);
    $searchTerm = "%$search%";
    if(empty($search)){
        $_SESSION['emptySearch']='pls input the product you want to search for';
        header('location:homepage.php');
        exit();
    }
    else{
        $query = "SELECT * FROM products WHERE productname LIKE ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$searchTerm]);
$answer = $stmt->fetchAll(PDO::FETCH_ASSOC);
$_SESSION['answer']=$answer;
header('location:homepage.php');
        exit();

    
}
}
else{
header('location:homepage.php');
}




















