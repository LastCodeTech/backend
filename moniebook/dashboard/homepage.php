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
<body class="my-5 mx-10">
        <div class='flex justify-between items-center'>
            <div><h2 class="text-2xl font-semi-bold capitalize">hello,</h2>
            <h2 class="text-2xl font-thin capitalize">welcome,user name welcome to your inventory dashboard</h2></div>
            <div class='bg-red-200 border-1 border-red-400 rounded-xl text-xl font-semi-bold py-1 px-2'>dhhdhhd</div>
        </div>
        <div>
            <div class="flex justify-between my-10 items-center mx-20">
                <div class="py-12 text-center px-30 rounded-2xl bg-blue-200 border-1 border-blue-400"><h1>34</h1><h1>total items</h1></div>
                <div class="border-2 py-8 px-10 rounded-2xl border-blue-400">
                    <form method="get" action="../includes/dashboardProcess.php">
                        <label for="search" class="text-xl font-semi-bold capitalize">search</label><br >
                        <input type="search" class="border-1 h-12 w-120 rounded-xl outline-none p-2" name="search" id="search">
                    </form>
                </div>
            </div>
            <div class="flex justify-between my-2">
                <h2 class="text-2xl font-bold uppercase">inventory</h2>
                <h2><a href='addProductPg.php' class="bg-blue-500 py-2 px-3 rounded-xl hover:bg-blue-600 text-white text-base font-semi-bold uppercase">add new product</a></h2>
            </div>
            
            <table class="w-[100%] bg-blue-600">
                <thead class="bg-blue-200 border-2 border-blue-400 ">   
                    <th class="py-2 "><h1 class="text-xl font-semi-bold uppercase">product</h1></th>
                    <th><h1 class="text-xl font-semi-bold uppercase">quantity</h1></th>
                    <th><h1 class="text-xl font-semi-bold uppercase">price</h1></th>
                    <th><h1 class="text-xl font-semi-bold uppercase">edit</h1></th>
                    <th><h1 class="text-xl font-semi-bold uppercase">delete</h1></th>
                </thead>
                <tbody class="bg-blue-200 border-2 border-blue-400 text-center ">
                    <tr >  
                    <td class="py-4 rounded-4xl "><h1 class="text-base font-semi-bold uppercase">product</h1></td>
                    <td class="py-4 rounded-4xl"><h1 class="text-base font-semi-bold uppercase">quantity</h1></td>
                    <td class="py-4 rounded-4xl"><h1 class="text-base font-semi-bold uppercase">price</h1></td>
                    <td class="py-4 rounded-4xl"><h1 class="text-base font-semi-bold uppercase"><a href='#' class="bg-yellow-400 py-2 px-3 rounded-xl hover:bg-yellow-300 text-white">edit</a></h1></td>
                    <td class="py-4 rounded-4xl"><h1 class="text-base font-semi-bold uppercase"><a href='#' class="bg-red-500 py-2 px-3 rounded-xl hover:bg-red-600 text-white">delete</a></h1></td>
                    </tr> 
                </tbody>
            </table>
        </div>
        
</body>
</html>