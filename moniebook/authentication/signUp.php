<?php 
session_start();
?>

<!DOCTYPE html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="https://kit.fontawesome.com/39c5fdd9a0.js" crossorigin="anonymous"></script>
</head>
<body class=''>
    
    <div class='flex justify-center mt-20'>
        <div>
          
    <h1 class="text font-bold text-2xl capitalize my-5 text-center">Sign in with Moniepoint</h1>
    <h2 class='text-xl font-semi-bold text-center'>Sign in with your Moniepoint details to continue</h2>

<?php 
require_once('../includes/toasts.php');
?>



    <!-- <div class='bg-red-200 p-3 rounded-2xl border-1 border-red-400 my-5'>
<h2 class='text-xl font-semi-bold text-center '></h2>
</div> -->
    
   
        <form method='post' action='../includes/signupProcess.php'>
        <div class='mt-5'><label for='phoneNumber'>phone number</label><br />
        <input type='number' id='phoneNumber' name='phoneNumber' class='p-3 border-1 h-12 w-100 rounded-xl outline-none'></div>
        <div class='my-5'>
            <label for='password'>password</label><br />
            <input type='password' id='password' name ='password' class='p-3 border-1 h-12 w-100 rounded-xl outline-none'>
        </div>
         <div class='my-5'>
            <label for='confirmPassword'>confirm password</label><br />
            <input type='password' id='confirmPassword' name ='confirmPassword' class='p-3 border-1 h-12 w-100 rounded-xl outline-none'>
        </div>
        <input type='submit' value='continue' class=' h-10 px-42 rounded-xl text-white bg-blue-600 text-base capitalize'>
        </form>
    </div>
</div>
</div>
</body>
</html>