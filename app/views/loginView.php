<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="w-full h-screen flex justify-center items-center">
       <form class="w-4/5">
            <h1 class="text-2xl text-center underline mb-3">Login</h1>
            <div class="flex flex-col gap-2 mb-5 items-center">
                <label for="name" class="text-center">Username</label>
                <input type="text" name="username" id="name" class="w-3/5 lg:w-1/5 bg-gray-200 rounded-md outline-none p-1">
            </div>
            <div class="flex flex-col gap-2 items-center">
                <label for="pass" class="text-center">Password</label>
                <input type="password" name="pass" id="pass" class="w-3/5 lg:w-1/5 bg-gray-200 rounded-md outline-none p-1">
            </div>
            <div class="flex flex-col items-center mt-2">
                <button type="submit" class="bg-blue-300 text-white rounded-md w-3/5 lg:w-1/6 mr-8">Login</button>
            </div>
        </form>
    </div>
</body>
</html>