<?php
include 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <title>Admin - CRUD</title>
    <style>
        body,
        html {
            padding: 20px;
            background-color: white;
        }

        .update-modal,
        .delete-modal {
            display: none;
            position: fixed;
            top: 10%;
            left: 50%;
            transform: translateX(-12%);
            border-radius: 10px;
            padding: 20px;
            z-index: 1000;
            animation: slideFromTop 0.5s ease;
        }

        @keyframes slideFromTop {
            0% {
                top: -100%;
            }

            100% {
                top: 10%;
            }
        }
    </style>
</head>

<body>
    <a href="#" class="flex items-center justify-center mb-10 text-4xl font-bold text-gray-900">
          <img class="w-10 h-10 mr-2" src="./assets/logo.png" alt="logo">
          AnimeVoyage    
    </a>


    <h2 class="text-xl pt-8 font-bold pb-5 md:text-2xl md:mb-4">Analytics</h2>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Total Registered Users
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total Orders
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Number of Admins
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $sql = "SELECT COUNT(*) as count FROM users";
                    $stmt = $con->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                ?>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 
                        border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <?php echo $row['count']; ?>
                        </th>
                    <?php }
                        $sql = "SELECT COUNT(*) as count1 FROM orders";
                        $stmt = $con->prepare($sql);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()) {
                    ?>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <?php echo $row['count1']; ?>
                        </td>
                    <?php }
                        $sql = "SELECT COUNT(*) as count2 FROM `admin`";
                        $stmt = $con->prepare($sql);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()) {
                    ?>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <?php echo $row['count2']; ?>
                        </td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>





    <h2 class="text-xl pt-8 font-bold pb-5 md:text-2xl md:mb-4">Registered Users</h2>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        First Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Last Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Password
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Update
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM users";
                $stmt = $con->prepare($sql);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 
                        border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <?php echo $row['userfirstname']; ?>
                        </th>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <?php echo $row['userlastname']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['useremail']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['userpassword']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <button onclick="openUpdate()" data-modal-target="#updatemodal-<?php echo $row['userid']; ?>"
                             data-modal-toggle="modal" class="block text-white bg-blue-700 hover:bg-blue-800 
                             focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 
                             py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Update
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button onclick="openDelete()" data-modal-target="#deletemodal-<?php echo $row['userid']; ?>" 
                            data-modal-toggle="modal" class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 
                            focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center 
                            dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <div id="updatemodal-<?php echo $row['userid']; ?>" tabindex="-1" aria-hidden="true" class="update-modal hidden 
                        overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 
                        h-[calc(100%-1rem)] max-h-full">
                        <div class="relative-p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Would you like to UPDATE this account?
                                    </h3>
                                    <button type="button" onclick="closeUpdate()" class="end-2.5 text-gray-400 bg-transparent 
                                    hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center 
                                    items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" 
                                        viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close</span>
                                    </button>
                                </div>
                                <div class="p-4 md:p-5">
                                    <form class="space-y-4" action="controller.php" method="POST">
                                        <div>
                                            <label for="userfirstname" class="block mb-2 text-sm font-medium text-gray-900 
                                            dark:text-white">First Name</label>
                                            <input type="text" id="userfirstname" class="bg-gray-50 border border-gray-300 
                                            text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block 
                                            w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 
                                            dark:text-white" value="<?php echo $row['userfirstname']; ?>" name="userfirstname" required>
                                        </div>
                                        <div>
                                            <label for="userlastname" class="block mb-2 text-sm font-medium text-gray-900 
                                            dark:text-white">Last Name</label>
                                            <input type="text" id="userlastname" class="bg-gray-50 border border-gray-300 
                                            text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block 
                                            w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 
                                            dark:text-white" value="<?php echo $row['userlastname']; ?>" name="userlastname" required>
                                        </div>
                                        <div>
                                            <label for="useremail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                Email</label>
                                            <input type="text" id="useremail" class="bg-gray-50 border border-gray-300 text-gray-900 
                                            text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                                            dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" 
                                            value="<?php echo $row['useremail']; ?>" name="useremail" required>
                                        </div>
                                        <div class="mb-8">
                                            <label for="userpassword" class="block mb-2 text-sm font-medium text-gray-900 
                                            dark:text-white">Password</label>
                                            <input type="text" id="userpassword" class="bg-gray-50 border border-gray-300 
                                            text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                                            block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 
                                            dark:text-white" value="<?php echo $row['userpassword']; ?>" name="userpassword" required>
                                        </div>
                                        <input type="hidden" class="form-control" value="<?php echo $row['userid']; ?>" id="userid" 
                                        name="userid">
                                        <button type="submit" name="update" class="w-full text-white bg-blue-700 
                                        hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium 
                                        rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 
                                        dark:focus:ring-blue-800">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="deletemodal-<?php echo $row['userid']; ?>" tabindex="-1" aria-hidden="true" class="delete-modal hidden 
                    overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 
                    h-[calc(100%-1rem)] max-h-full">
                        <div class="relative-p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Would you like to DELETE this account?
                                    </h3>
                                    <button type="button" onclick="closeDelete()" class="end-2.5 text-gray-400 bg-transparent 
                                    hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center 
                                    items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 
                                        14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close</span>
                                    </button>
                                </div>
                                <div class="p-4 md:p-5">
                                    <form class="space-y-4" action="controller.php" method="POST">
                                        <div class="mb-8">
                                            <h4>Are you sure you want to delete this account?</h4>
                                        </div>
                                        <input type="hidden" class="form-control" value="<?php echo $row['userid']; ?>" id="userid" 
                                        name="userid">
                                        <button type="submit" name="delete" class="w-full text-white bg-red-700 hover:bg-red-800 
                                        focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 
                                        text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script>
                        function openUpdate() {
                            document.getElementById('updatemodal-<?php echo $row['userid']; ?>').style.display = 'block';
                        }

                        function closeUpdate() {
                            document.getElementById('updatemodal-<?php echo $row['userid']; ?>').style.display = 'none';
                        }

                        function openDelete() {
                            document.getElementById('deletemodal-<?php echo $row['userid']; ?>').style.display = 'block';
                        }

                        function closeDelete() {
                            document.getElementById('deletemodal-<?php echo $row['userid']; ?>').style.display = 'none';
                        }
                    </script>

                <?php } ?>
            </tbody>
        </table>
    </div>






    <h2 class="text-xl pt-8 font-bold pb-5 md:text-2xl md:mb-4">Orders</h2>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Order ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Item ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM orders";
                $stmt = $con->prepare($sql);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 
                        border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                            <?php echo $row['orderid']; ?>
                        </th>
                        <td class="px-6 py-4 font-medium whitespace-nowrap">
                            <?php echo $row['itemid']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['useraddress']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['orderemail']; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>




    <h2 class="text-xl pt-8 font-bold pb-5 md:text-2xl md:mb-4">Admins</h2>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Admin ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Password
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM admin";
                $stmt = $con->prepare($sql);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 
                        border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                            <?php echo $row['adminid']; ?>
                        </th>
                        <td class="px-6 py-4 font-medium whitespace-nowrap">
                            <?php echo $row['adminname']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['adminpassword']; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    </body>
</html>