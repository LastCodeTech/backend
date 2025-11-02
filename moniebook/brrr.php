<?php
require_once('includes/server.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $phoneNumber=htmlspecialchars($_POST['phoneNumber']);
    $password=htmlspecialchars($_POST['password']);
    $confirmPassword=htmlspecialchars($_POST['confirmPassword']);
    if(!empty($phoneNumber)&& !empty($password)&& !empty($confirmPassword)){
        if($password==$confirmPassword){
            $encryptPassword = password_hash($password,PASSWORD_DEFAULT);
            $checkNumber =$pdo->prepare('SELECT FROM moniebookaccts where phone_number =?');
            $prepare =$checkNumber->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            if(empty($result)){
                echo 'number is available';
            }
            else{
                echo'number is not available';
            }
        }
        else{
            echo 'password mismatch with confirm password';
        }

    }
    else{
        echo 'pls input all fields';
    }

}
else{
    header('location:authentication/signUp.php');
    exit();
}