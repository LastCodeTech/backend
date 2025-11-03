<?php
session_start();
require_once('server.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
    $password = htmlspecialchars($_POST['password']);

    if(!empty($phoneNumber) && !empty($password)){
        $check_user ="SELECT * FROM users where phone_number=?";
      $prep=$pdo->prepare($check_user);
      $prep->execute([$phoneNumber]);
      $result = $prep->fetchAll(PDO::FETCH_ASSOC);
      if(empty($result)){
        $_SESSION['no_acct_found']='no acct with the inputed credentials found pls sign up';
         header('location: ../authentication\login.php');
         exit();
      }
      else{
        $registered_password='';
       foreach($result as $given){
        
        $registered_password=$given['password'];
        $verified = password_verify($password,$registered_password);
        if($verified){
          $_SESSION['logged_in']='welcome ,ure now logged in';
         header('location: ../authentication\login.php');
         exit();
        }
        else{
           $_SESSION['not_logged_in']='phone number or password is incorrect pls check';
         header('location: ../authentication\login.php');
         exit();
          ;
        }
       }
      }
    }
    else{
         $_SESSION['input_all_fields']='pls input all fields';
         header('location: ../authentication\login.php');
         exit(); 
    }
}
else{
    header('location:../authentication/signUp.php');
    exit();
}