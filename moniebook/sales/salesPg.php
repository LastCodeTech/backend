<?php 
// session_start();
// // echo $_SESSION['user_id'];
// if(!isset($_SESSION['user_id'])){
//     header('location:../authentication/login.php');
//     exit();
// }
// require_once('../includes/server.php');

// $query='SELECT * FROM products where user_id=?';
// $prep=$pdo->prepare($query);
// $prep->execute([$_SESSION['user_id']]);
// $result=$prep->fetchAll(PDO::FETCH_ASSOC);
// $total_product=count($result);
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="https://kit.fontawesome.com/39c5fdd9a0.js" crossorigin="anonymous"></script>
</head>
<body class="mb-10">

    <div class="bg-blue-700 flex justify-between items-center px-5 py-2">
        <div class="flex items-center "><img src='../images/moniepoint_logo-removebg-preview (1).png' class=" h-20 w-25"><h2 class="text-3xl text-white font-semi-bold-capitalize">moniebook</h2></div>
        <div class="flex items-center gap-5"><form action="../includes/salesPgProcessor.php" method='get'>
            <input type="search" name="search" id="search" class="w-120 h-15 outline-none rounded-xl p-3 border-white text-white  placeholder-text-white border-1 ">
        </form>
        <div><em class="fa-solid fa-cart-shopping text-4xl text-white"></em></div></div>
    </div>
    <?php require_once('../includes/toasts.php'); ?>
    <div class="grid grid-cols-5 gap-10 mx-15 mt-10 ">
   <?php 
   if(isset($_SESSION['result'])){
    foreach($_SESSION['result'] as $row){
       $_SESSION['productName']=$row['product_name'];
        $_SESSION['price']=$row['price']; ?>
         
        <div class="rounded-2xl bg-blue-100 border-2 shadow-lg shadow-stone-400 border-blue-700 py-20 px-30 flex justify-center">
            <div>
                <?php 
                if(isset($_SESSION['productName'])){
                    ?>
                    <h1 class="text-3xl font-semi-bold capitalize text-center"><?php echo $_SESSION['productName'] ?></h1><?php
                }
               
                ?>
                <?php 
                if(isset($_SESSION['price'])){
                    ?>
                    <h1 class="text-3xl font-thin capitalize text-center">$<?php echo $_SESSION['price'] ?></h1><?php
                }
                
                ?>
                
            </div>
    </div><?php

    }
   }
   unset($_SESSION['result']);
   ?></div>
   
   
</body>
</html>