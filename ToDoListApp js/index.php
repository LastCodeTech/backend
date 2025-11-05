<?php
session_start();
require_once('includes/config.php');


$query = $pdo->prepare("SELECT * FROM tasks");
$query->execute();

$results = $query->fetchAll(PDO::FETCH_ASSOC);

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

<body class="bg-gray-100">
  <div>
    <h1 class="text-2xl md:text-3xl font-bold capitalize text-center  py-10 " id="topic">My to do list</h1>
    <div>
     

      <div class="bg-white flex items-center justify-between px-3 py-2 mx-5 my-3 rounded-2xl">
        <h1 class="text-base md:text-xl capitalize font-semi-bold text-gray-700">Add a new To Do ...</h1>
        <button
          class="border-1 rounded-xl bg-[#78C841] text-white font-semi-bold hover:bg-[#B4E50D] text-base py-1 px-2 md:text-xl capitalize "><a
            href='create.php'>add task</a></button>
      </div>


      <?php
      if(isset($_SESSION['success'])){
        ?>
        <div class="bg-green-800 text-white border-1 rounded px-4 py-2"><?php echo $_SESSION['success']; ?></div>
        <?php

        unset($_SESSION['success']);
      }


      if(isset($_SESSION['error'])){
        ?>
        <div class="bg-red-700 text-white border-1 rounded px-4 py-2"><?php echo $_SESSION['error']; ?></div>
        
        <?php
        unset($_SESSION['error']);
      }
      
      ?>

      


      <?php
        if(isset($results)){

          if(!empty($results)){
            foreach($results as $row){
              $id = $row['id'];
              $title = $row['title'];
              $description = $row['description'];
              $completed = $row['completed'];
            ?>

               <div id="insertedHere">
                <!-- START -->
        <div class="bg-white flex justify-between gap-5 py-2 px-3 rounded-2xl md:gap-10 items-center mx-5 my-3">
          <div class='flex items-center gap-10'>
          <div class="flex items-center ">
              
          
            <?php
              if($completed){
                ?>
                  <i class="fa fa-check-square text-[35px] text-red-700"></i>
                <?php
              }else{
                ?>
                <a href="includes/mark.php?ref=<?php echo $id;?>">
            <!-- <input type="checkbox"
              class="appearance-none w-5 h-5 md:h-8 md:w-8 border-2 border-gray-400 rounded-md bg-white checked:bg-blue-600 checked:border-transparent peer" /> -->
              
              
              mark
            </a>
                <?php
              }
            ?>
            <svg class="absolute w-4 h-4 md:h-7 md:w-7 text-white pointer-events-none hidden peer-checked:block"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round"
              stroke-linejoin="round">

              <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
          </div>
          <div class="text-base md:text-xl text-gray-700  <?php echo $completed? 'line-through' : ''?> " id="todotext">
              <h2 class="font-bold"><?php echo $title; ?></h2>
           
           <p> <?php echo $description; ?></p>
            </div>
            </div>
          <div><a href="edit.php?item=<?php echo $id;?>" class="font-bold text-white bg-blue-400 py-1 px-3 text-xl rounded-xl">Edit</a>
          <form action="includes/delete.php" method="POST">

          <input type="hidden" name="itemId" value="<?php echo $id; ?>">
          <button
            class="deleteBtn border-1 rounded-xl bg-[#FB4141] text-white font-semi-bold hover:bg-[#FF9B2F] text-base py-1 px-2 md:text-xl capitalize">Delete
          </button>
            </form>
        </div>
        </div>
        <!-- END -->

      </div>

              <?php


            }

          }else{
            "No task found!";
          }

        }
      
      ?>




    </div>


  </div>
  <script src="index.js"></scr>
</body>

</html>