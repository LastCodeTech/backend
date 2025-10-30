<?php
require_once('includes/config.php');

    $itemId = $_GET['item'];

    $fetchItem = $pdo->prepare("SELECT * FROM tasks WHERE id = ?");
    $fetchItem->execute([$itemId]);
    $result = $fetchItem->fetchAll(PDO::FETCH_ASSOC);


    if(empty($result)){
        echo "Invalid item ID!";
        exit();
    }


 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - </title>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.   3.4/dist/aos.css" />
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://kit.fontawesome.com/39c5fdd9a0.js" crossorigin="anonymous"></script>
</head>
<body class='bg-gray-100'>
            <h1 class="py-8 text-center  text-base md:text-xl capitalize font-semi-bold">task added here will be shown on the home page</h1>
   <form action="includes/updateTask.php" method="POST">
     <div class="flex flex-col justify-center items-center mt-20">
        <input type="hidden" name="itemId" value="<?php echo $itemId?>">
        <input name="title" type='text' value="<?php echo $result[0]['title']?>" class='p-3 bg-white border-1 border-gray-400 outline-none h-10 w-80 md:w-120 border-1 mb-5 rounded-2xl text-gray-700 font-bold'>
        <textarea name="description" class="mx-10 bg-white border-1 border-gray-400 outline-none h-50 w-80 md:w-120 rounded-2xl px-3 py-3 text-base md:text-xl text-gray-700 font-semi-bold"><?php echo $result[0]['description']?></textarea>
        <div class="flex gap-10 items-center">
        <button type="submit" id="addbtn" class=" my-5 border-1 rounded-xl bg-[#78C841] text-white font-semi-bold hover:bg-[#B4E50D] text-base py-1 px-2 md:text-xl capitalize ">Update</button>
        <a href="index.php" id="backHome" class=" my-5 border-1 rounded-xl bg-[#FB4141] text-white font-semi-bold hover:bg-[#FF9B2F] text-base py-1 px-2 md:text-xl capitalize ">back to home</a>
        </div>
    </div>
   </form>

</body>
</html>