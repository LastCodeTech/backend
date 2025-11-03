<?php
session_start();
require_once('includes/server.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $phoneNumber=htmlspecialchars($_POST['phoneNumber']);
    $password=htmlspecialchars($_POST['password']);
    $confirmPassword=htmlspecialchars($_POST['confirmPassword']);
    if(!empty($phoneNumber)&& !empty($password)&& !empty($confirmPassword)){
        if($password==$confirmPassword){
            $encryptPassword = password_hash($password,PASSWORD_DEFAULT);
            $checkNumber = 'SELECT * FROM moniebookaccts where phone_number = ?';
        $prep = $pdo->prepare($checkNumber);
        $prep ->execute([$phoneNumber]);
        $result = $prep->fetchAll(PDO::FETCH_ASSOC);
            $result = $prep->fetchAll(PDO::FETCH_ASSOC);
            if(empty($result)){
                $query ='INSERT INTO moniebookaccts(phone_number,password) VALUES(?,?);';
                $prepare=$pdo->prepare($query);
                $insert=$prepare->execute([$phoneNumber,$encryptPassword]);
                if($insert){
                  
                    $_SESSION['acct_created']='acct created successfully';
                    header('location:authentication\signUp.php');
         exit();
                }
                else{
                     $_SESSION['acct_not_created']='an error occur while creating your acct';
                      header('location:authentication\signUp.php');
         exit();
                }
            }
            else{
                $_SESSION['existing_number']='phone number is connected to another acct already';
                 header('location:authentication\signUp.php');
         exit();
            }
        }
        else{
             $_SESSION['mismatch']='password mismatch with confirm password';
            header('location:authentication\signUp.php');
         exit();
        }

    }
    else{
         $_SESSION['input_all_fields']='pls input all fields';
         header('location:authentication\signUp.php');
         exit();
    }

}
else{
    header('location:authentication/signUp.php');
    exit();
}