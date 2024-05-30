<?php include 'dbcon.php' ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  
  
  
  <body>
    <section class="bg-no-repeat bg-cover bg-[url(./assets/bg.png)] bg-gray-700 bg-blend-multiply">
        <nav class=" border-gray-200">
          <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse mx-auto mt-2 md:m-0">
                <img src="assets/logo.png" class="h-8" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">AnimeVoyage</span>
            </a>

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
              <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg 
              md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">
                <li>
                  <a href="#" class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent 
                  md:text-blue-700" aria-current="page">Home</a>
                </li>
                <li>
                  <a href="#collections" class="block py-2 px-3 md:p-0 text-white rounded hover:bg-gray-100 
                  md:hover:bg-transparent md:hover:text-blue-700">Products</a>
                </li>
                <li>
                  <a href="#order" class="block py-2 px-3 md:p-0 text-white rounded hover:bg-gray-100 
                  md:hover:bg-transparent md:hover:text-blue-700">Order</a>
                </li>
                <li>
                  <a href="admin-auth.php" class="block py-2 px-3 md:p-0 text-white rounded hover:bg-gray-100 
                  md:hover:bg-transparent md:hover:text-blue-700">Admin</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

          <div class="px-4 mx-auto lg:max-w-screen-xl text-center py-24 md:px-8 lg:py-56">
              <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white 
              md:text-5xl lg:text-6xl">Welcome aboard, adventurer!</h1>
              <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl px-8 lg:px-48">
              Embark on a thrilling journey through the vibrant world of anime with AnimeVoyage 
              – your ultimate destination for premium merchandise! Whether you're a devoted otaku 
              or just stepping into the enchanting realm of anime, our curated collection of 
              high-quality products is designed to elevate your fandom experience.
              </p>
              <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 px-8">
                <a href="#get-started" class="inline-flex justify-center items-center py-3 px-5 text-base 
                font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 
                focus:ring-4 focus:ring-blue-300">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" 
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" 
                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a> 
              </div>
          </div>
    </section>



    <section class="max-w-screen-xl mx-auto p-10 lg:py-15" id="collections">

      <div>
        <h2 class="text-4xl font-extrabold pb-5 lg:text-6xl lg:text-center lg:mb-8">Collections</h2>

        <form action="controller.php" method="POST">
          <div class="pb-5 md:flex md:gap-5">
            <img src="./assets/one.jpg"
            class="h-auto max-w-full rounded-lg md:w-6/12">
            <div class="py-4 lg:w-4/12 md:m-auto">
              <h3 class="text-2xl font-bold text-gray-900 md:text-3xl">Vocaloid Hatsune Miku - Trick Or Miku Figure</h3>
              <h4 class="mb-2 text-base font-semibold text-blue-500">Union Creative</h4>
              <h5 class="mb-2 text-base text-gray md:mb-10">Based on the "Trick or Miku" illustration by Hidari 
                comes this adorable figure of Hatsune Miku ready for Halloween celebrations! Standing 
                over 6 inches tall this figure will make a great addition to any collection! </h5>
              <div class="flex items-center justify-between">
                <span class="text-3xl font-bold text-gray-900">$1899</span>
              </div>
            </div>
          </div>
        </form>
        

        <div class="pb-5 md:flex md:flex-row-reverse md:gap-5">
          <img src="./assets/two.jpg"
          class="h-auto max-w-full rounded-lg md:w-6/12">
          <div class="py-4 lg:w-4/12 md:m-auto">
            <h3 class="text-2xl font-bold text-gray-900 md:text-3xl">Fairy Tail - Dragneel Resin Statue</h3>
            <h4 class="mb-2 text-base font-semibold text-blue-500">Krazy Art</h4>
            <h5 class="mb-2 text-base text-gray md:mb-10">A collectible figurine that is detailed and well-crafted piece, is a 
              limited edition or considered a premium collectible.</h5>
            <div class="flex items-center justify-between">
              <span class="text-3xl font-bold text-gray-900">$899</span>
            </div>
          </div>
        </div>
        
        <div class="pb-5 md:flex md:gap-5">
          <img src="./assets/three.png"
          class="h-auto max-w-full rounded-lg md:w-6/12">
          <div class="py-4 lg:w-4/12 md:m-auto">
            <h3 class="text-2xl font-bold text-gray-900 md:text-3xl">One Piece God of Thunder Enel Statue</h3>
            <h4 class="mb-2 text-base font-semibold text-blue-500">Soul Wing</h4>

            <h5 class="mb-2 text-base text-gray md:mb-10">From Jimei PalaceWork comes their dedication to 
              One Piece villain, Enel. Inspired by the lightning god Raijin, Enel is the main 
              antagonist of Skypiea. Hovering over the buildings of Sky Island, his lightning 
              powers are unleashed, creating a threatening energy behind him. </h5>
            <div class="flex items-center justify-between">
              <span class="text-3xl font-bold text-gray-900">$1699</span>
            </div>
          </div>
        </div>
        
        <div class="pb-5 md:flex md:flex-row-reverse md:gap-5">
          <img src="./assets/four.jpg"
          class="h-auto max-w-full rounded-lg md:w-6/12">
          <div class="py-4 lg:w-4/12 md:m-auto">
            <h3 class="text-2xl font-bold text-gray-900 md:text-3xl">Eren Vs. Armored Titan 1/3 Scale Statue</h3>
            <h4 class="mb-2 text-base font-semibold text-blue-500">Figurama Collectors</h4>
            <h5 class="mb-2 text-base text-gray md:mb-10">The Attack on Titan Elite Exclusive Statue immortalizes the brutal battle 
              between Eren and the Armored Titan and was created by the same legendary team as the award-winning 
              Devilman vs Amon statue.</h5>
            <div class="flex items-center justify-between">
              <span class="text-3xl font-bold text-gray-900">$2199</span>
            </div>
          </div>
        </div>
        
        <div class="pb-5 md:flex md:gap-5">
          <img src="./assets/five.jpg"
          class="h-100 max-w-full rounded-lg md:w-6/12">
          <div class="py-4 lg:w-4/12 md:m-auto">
            <h3 class="text-2xl font-bold text-gray-900 md:text-3xl">Neon Gensis Evangelion Statue Of Rei </h3>
            <h4 class="mb-2 text-base font-semibold text-blue-500">Prime 1 Studio</h4>
            <h5 class="mb-2 text-base text-gray md:mb-10">After almost 30 years, Hideaki Anno has finally brought a 
              satisfying ending to the Evangelion Saga on his own terms. The entire Rebuild of Evangelion 
              series was gripping from start to finish, and Evangelion 3.0 + 1.0 Thrice Upon a Time was an 
              incredible culmination for all of Anno-Sensei's innumerable fans.</h5>
            <div class="flex items-center justify-between">
              <span class="text-3xl font-bold text-gray-900">$1599</span>
            </div>
          </div>
        </div>

        <div class="pb-5 md:flex md:flex-row-reverse md:gap-5">
          <img src="./assets/six.jpg"
          class="h-auto max-w-full rounded-lg md:w-6/12">
          <div class="py-4 lg:w-4/12 md:m-auto">
            <h3 class="text-2xl font-bold text-gray-900 md:text-3xl">Mumei - Kabaneri of the Iron Fortress</h3>
            <h4 class="mb-2 text-base font-semibold text-blue-500">Noitama</h4>
            <h5 class="mb-2 text-base text-gray md:mb-10"> From the anime series 'Kabaneri of the Iron Fortress' comes a 
              1/7th scale figure of the main heroine - Mumei! A figure of the innocent and lovely Mumei from 
              that has been sculpted based on a newly illustration by animation 
              character designer Yasuyuki Ehara!</h5>
            <div class="flex items-center justify-between">
              <span class="text-3xl font-bold text-gray-900">$799</span>
            </div>
          </div>
        </div> 
      </div>
    </section>

    <section class="bg-[url(./assets/bg.gif)] 
      bg-gray-400 bg-blend-multiply" id="order">
      <div class="flex flex-col items-center justify-center px-8 py-10 mx-auto md:h-screen lg:py-0">
        <div class="bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="py-6 space-y-4 md:space-y-6 sm:p-8">
          <h2 class="text-4xl text-white font-bold lg:text-6xl text-center lg:mb-8">Order Form</h2>
            <form class="max-w-sm mx-auto px-10" action="controller.php" method="POST">
              <div class="mb-5">
                <label for="itemid" class="block mb-2 text-sm font-medium text-white">Item</label>
                <select id="itemid" name="itemname" class="text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 
                placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 shadow-sm-light"  required>
                  <option selected disabled hidden>Select</option>
                  <option value="1">Vocaloid Hatsune Miku - Trick Or Miku Figure</option>
                  <option value="2">Fairy Tail - Dragneel Resin Statue</option>
                  <option value="3">One Piece God of Thunder Enel Statue</option>
                  <option value="4">Eren Vs. Armored Titan 1/3 Scale Statue</option>
                  <option value="5">Neon Gensis Evangelion Statue Of Rei</option>
                  <option value="6">Mumei - Kabaneri of the Iron Fortress</option>
                  
                </select>
              </div>
              <div class="mb-5">
                <label for="useraddress" class="block mb-2 text-sm font-medium text-white">Address</label>
                <input type="text" id="useraddress" name="useraddress" class="text-sm rounded-lg block w-full p-2.5 bg-gray-700 
                border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 shadow-sm-light" placeholder="#123 Street A Tarlac City" required>
              </div>
              <div class="mb-5">
                <label for="orderemail" class="block mb-2 text-sm font-medium text-white">Email</label>
                <input type="email" id="orderemail" name="orderemail" class="text-sm rounded-lg block w-full p-2.5 bg-gray-700 
                border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 shadow-sm-light" 
                placeholder="name@flowbite.com" required>
              </div>
              
              <button type="submit" name="order" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
              focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
            </form>
          </div>
      </div>
      </div>
    </section>



    <section class="px-8 pt-5 mx-auto md:w-8/12 md:py-20" id="get-started">
      <div class="w-full p-4 text-center bg-gray-200 border border-gray-300 rounded-lg shadow sm:p-8">
          <h5 class="mb-2 text-3xl font-bold text-black-700">Learning more about the website</h5>
          <p class="text-base text-gray-600 sm:text-lg">This is a simple website that utilizes 
            server-side scripting using PHP, along with Tailwind & Bootsrap.</p>
          <p class="mb-5 text-base text-gray-600 sm:text-lg">Regular visitors can sign up. 
              Administrators can sign in and manage the database.</p>
          <p class="mb-5 text-base text-gray-600 sm:text-lg">CRUD: <br> Create/Insert -> User Sign Up <br> 
          Read -> Admin Tables/Analytics <br> Update - > Admin Table Update <br> Delete -> Admin table Delete
          </p>
          <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
              <a href="signup.php" class="w-full sm:w-auto bg-green-800 hover:bg-green-700 focus:ring-4 focus:outline-none 
              focus:ring-green-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5">
                  <div class="rtl:text-right text-center">
                      <div class="mb-1 text-xs">Sign up as a</div>
                      <div class="-mt-1 font-sans text-sm font-semibold">Regular Visitor</div>
                  </div>
              </a>
              <a href="admin-auth.php" class="w-full sm:w-auto bg-blue-800 hover:bg-blue-700 focus:ring-4 focus:outline-none 
              focus:ring-blue-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5">
                  <div class="text-center rtl:text-right">
                      <div class="mb-1 text-xs">Sign in as an</div>
                      <div class="-mt-1 font-sans text-sm font-semibold">Administrator</div>
                  </div>
              </a>
          </div>
        </div>
    </section>
    
    

  <footer class="bg-white rounded-lg shadow m-4">
      <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
          <div class="sm:flex sm:items-center sm:justify-between">
              <a href="home.php" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                  <img src="./assets/logo.png" class="h-8" alt="Flowbite Logo" />
                  <span class="self-center text-2xl font-semibold whitespace-nowrap">AnimeVoyage</span>
              </a>
              <p class=" mb-6 text-sm font-medium text-gray-500 sm:mb-0">
              © 2023 <a href="home.php" class="hover:underline">AnimeVoyage™</a>. All Rights Reserved.
              </p>
          </div>
          <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
          
          <span class="block text-sm text-gray-500 sm:text-center">For academic purposes only. I do 
            not claim ownership to any of the materials used in this project.</span>
      </div>
  </footer>




  </body>
</html>
