<?php 
session_start();
// echo $_SESSION['user_id'];
if(!isset($_SESSION['user_id'])){
    header('location:../authentication/login.php');
    exit();
}
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
<body class="bg-blue-100">
   <div><?php require_once('../includes/toasts.php'); ?></div>
    <div class="flex justify-center items-center mt-15"><div>
         <h2 class="text-2xl font-semi-bold capitalize text-center">Add new products on this page</h2>
        <form method='post' action='../includes/addProductPgProcess.php'>
            <div class="my-5">
                 <label for="productName" class="text-xl font-semi-bold capitalize">product</label><br>
                 <input type="text" id="productName" name="productName" class="border-1 w-100 h-14 rounded-xl p-2 border-blue-400 outline-none ">
            </div>
            <div class="my-5">
                 <label for="quantity" class="text-xl font-semi-bold capitalize">quantity</label><br>
                 <input type="text" id="quantity" name="quantity" class="border-1 w-100 h-14 rounded-xl p-2 border-blue-400 outline-none">
            </div>
            <div class="my-5">
                 <label for="price" class="text-xl font-semi-bold capitalize">price</label><br>
                 <input type="text" id="price" name="price" class="border-1 w-100 h-14 rounded-xl p-2 border-blue-400 outline-none">
            </div>
            <div class="flex justify-center mt-10 items-center gap-10"> <input type="submit" value="add product" class="bg-green-500 py-1 px-2 rounded-xl text-white capitalize hover:bg-green-600">
        <a href='homepage.php' class='bg-blue-400 hover:blue-600 rounded-xl py-1 px-2 text-white capitalize'>home</a></div>
           
           
        </form>
        </div>
    </div>
</body>
</html>