<?php 
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
<body class='mx-15 my-10'>
    <div class='flex justify-between items-center'>
        <h1 class="text-3xl font-bold uppercase">Store111</h1>
        <div class='relative'><div ><form action='homepageprocess.php?' method='get'><input type='search' name='searchBar' placeholder='search for products here' class='pl-4 border-1 rounded-2xl w-120 h-10 p-3 font-semi-bold text-xl outline-none'></div>
   </form></div>
        <button class='border-1 rounded-xl py-1 px-2 text-base font-semi-bold capitalize bg-red-400 text-white hover:bg-red-500'><a href='addProductPg.php'>Add new Product</a></button>
    </div>
    <?php
if(isset($_SESSION['emptySearch'])){
    ?>
    <div class='bg-red-500 p-4 rounded-xl text-xl font-semi-bold text-white my-5 w-120'><?php echo $_SESSION['emptySearch'] ?></div> <?php
}
unset($_SESSION['emptySearch']);
 ?>
    <?php
if(isset($_SESSION['added'])){
    ?>
    <div class='bg-green-500 p-4 rounded-xl text-xl font-semi-bold text-white my-5 w-120'><?php echo $_SESSION['added'] ?></div> <?php
}
unset($_SESSION['added']);
 ?>
<?php 
if(isset($_SESSION['answer'])){
 foreach($_SESSION['answer'] as $row){
    $_SESSION['productid']= $row['productid'] ;
    $_SESSION['productname']= $row['productname'] ;
    $_SESSION['price']= $row['price'] ;
?>
     <div class='bg-green-100 border-2 border-green-700 py-8 rounded-2xl mt-5 flex justify-center gap-20'>
   <?php
 if(isset( $_SESSION['productid'])){
    ?><h2 class="text-xl font-bold capitalize hidden"><?php echo $_SESSION['productid'] ?></h2>
    <?php
    // unset($_SESSION['productid']);
 } ?>
    <?php
 if(isset( $_SESSION['productname'])){
    ?><h2 class="text-xl font-bold capitalize">product: <?php echo $_SESSION['productname'] ?></h2>
    <?php
    // unset($_SESSION['productname']);
 } ?>
   <?php
 if(isset( $_SESSION['price'])){
    ?><h2 class="text-xl font-bold capitalize">price: <?php echo $_SESSION['price'] ?></h2>
    <?php
    // unset($_SESSION['price']);
 } ?>
 <button><a href='' class='text-base font-bold capitalize py-1 px-2 rounded-xl bg-blue-600 text-white'>add to cart</a></button>
 </div>
   <?php
}}

?>




    
</body>
</html>