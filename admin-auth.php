<?php include 'dbcon.php' ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

<body>
    <section class="bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-white">
            <img class="w-8 h-8 mr-2" src="./assets/logo.png" alt="logo">
            AnimeVoyage    
        </a>
        <div class="w-full rounded-lg border md:mt-0 sm:max-w-md xl:p-0 bg-gray-800 border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                    Administrative Authentication
                </h1>
                <form action="controller.php" method="POST" class="space-y-4 md:space-y-6">
                    <div>
                        <label for="adminname" class="block mb-2 text-sm font-medium text-white">Admin Name</label>
                        <input type="text" name="adminname" id="adminname" class="bg-gray-700 border-gray-600 
                        placeholder-gray-400 text-white sm:text-sm rounded-lg border focus:ring-blue-500 
                        focus:border-blue-500 block w-full p-2.5" placeholder="admin" required="">
                    </div>
                    <div>
                        <label for="adminpassword" class="block mb-2 text-sm font-medium text-white">Password</label>
                        <input type="password" name="adminpassword" id="adminpassword" placeholder="••••••••" class="bg-gray-700 
                        border-gray-600 placeholder-gray-400 text-white sm:text-sm rounded-lg border focus:ring-blue-500 
                        focus:border-blue-500 block w-full p-2.5" required="">
                    </div>
                    <button type="submit" name="admin-auth" class="w-full text-white bg-blue-600 hover:bg-blue-700 
                    focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 
                    text-center">Sign in</button>
                    <p class="text-sm font-light text-gray-500">
                        admin <a class="font-medium text-blue-600 hover:underline">|</a> 1234
                    </p>
                </form>
                </div>
        </div>
    </section>
</body>

</html>