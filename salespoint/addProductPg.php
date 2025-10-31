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
<body class="flex justify-center mt-20">
    <div >
        <h1 class="text-2xl font-bold capitalize py-3 text-center">add new product on this page</h1>
        <form action="#" method="post">
            <div>
                <label for="product" class="font-bold text-xl">product</label><br>
                <input type="text" id="product" name="product" class="font-semi-bold p-3 h-20 w-120 outline-none border-1 rounded-2xl">
            </div>
            <div class="my-5">
                <label for="price" class="font-bold text-xl">price</label><br>
                <input type="text" id="price" name="price" class="font-semi-bold p-3 h-20 w-120 outline-none border-1 rounded-2xl">
            </div>
            <input type="submit" value="add product" class="text-xl font-semi-bold capitalize py-2 px-3 rounded-2xl bg-blue-600  text-white">
        </form>
    </div>
</body>
</html>