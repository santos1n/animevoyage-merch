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
    <section class="bg-gray-50">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
            <img class="w-8 h-8 mr-2" src="./assets/logo.png" alt="logo">
            AnimeVoyage    
        </a>
        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Sign in to your account
                </h1>
                <form action="controller.php" method="POST" class="space-y-4 md:space-y-6">
                    <div>
                        <label for="useremail" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" name="useremail" id="useremail" class="bg-gray-50 border 
                        border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 
                        focus:border-primary-600 block w-full p-2.5" placeholder="name@domain.com" required="">
                    </div>
                    <div>
                        <label for="userpassword" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="userpassword" id="userpassword" placeholder="••••••••" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg 
                        focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                    </div>
                    <button type="submit" name="login" class="w-full text-white bg-blue-600 hover:bg-blue-700 
                    focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 
                    text-center">Sign in</button>
                    
                    <p class="text-sm font-light text-gray-500">
                        Don’t have an account yet? <a href="signup.php" class="font-medium text-blue-600 
                        hover:underline">Sign up</a>
                    </p>
                </form>
                </div>
        </div>
    </section>
</body>

</html>