<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="https://kit.fontawesome.com/39c5fdd9a0.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-200">
     <h1 class="text-xl md:text-2xl font-semi-bold md:font-bold capitalize text-center my-5">tasks added here will be displayed on the home page </h1>
    <div class="flex items-center justify-center">
        

       <div> 
     <form>
        <div>
        <label for="title" class='text-xl font-semi-bold capitalize'>title</label><br>
        <input type="text" class="border-1 border-gray-400 rounded-2xl h-15 w-120 outline-none py-2 px-3 text-bold"></div>
        <div class="my-5">
        <label for="title" class="text-xl font-semi-bold capitalize">description</label><br>
        <textarea class="border-1 border-gray-400 rounded-2xl w-120 h-50 outline-none py-2 px-3 text-semi-bold"></textarea></div>
     </form>
     
        <div class="flex justify-center gap-10">
        <button class="bg-blue-600 hover:bg-blue-400 rounded-2xl py-2 px-3 text-xl font-semi-bold text-white capitalize"><a href='#'>Add</a></button>
        <button class="bg-green-600 hover:bg-green-400 rounded-2xl py-2 px-3 text-xl font-semi-bold text-white capitalize"><a href='index.php'>Back Home</a></button>
            </div>
    </div>
     </div>
    </body>
</html>