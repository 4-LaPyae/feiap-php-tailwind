<?php

session_start();

// Check if the user is not registered and redirect to register.php
// if (!isset($_SESSION['registration_success']) || !$_SESSION['registration_success']) {
//     header('Location: register.php');
//     exit;
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FEIAP User Store</title>
    <link rel="shortcut icon" href="./images/FavLogo.png">
    <meta name="robots" content="noindex, nofollow" />
    <script src="https://cdn.tailwindcss.com/3.1.4"></script>
</head>

<body class="object-none bg-auto bg-center backdrop-brightness-[.6]" style="background-image: url('./images/Banner5.png');  background-repeat: no-repeat;   background-size: cover;">

    <?php if (isset($message)) : ?>
        <div class="p-4 mb-4 <?= $alertClass ?> text-center">
            <?= $message ?>
        </div>
    <?php endif; ?>

    <!-- <div class="container mx-auto h-screen relative">
        <div class="flex justify-center px-6 my-20">
            <div class="w-full lg:block lg:w-5/12 bg-slate-200 rounded-lg">
                <h3 class="pt-4 text-3xl text-center">Thanks For Joining Us</h3>
                <div class="p-10 flex justify-center items-center">
                    <a href="./index.php" type="button" class="text-white bg-gradient-to-r from-[#7977b8] to-[#4945bf] hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        HOME
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9zm9 4V3m0 0L6 9m9-6v6" />
                        </svg>
                    </a>
                </div>

            </div>

        </div>
    </div> -->

    <div class="container mx-auto h-screen relative">
    <div class="w-full lg:w-5/12 bg-slate-200 rounded-lg absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <h3 class="pt-4 text-3xl text-center">Thanks For Joining Us</h3>
        <div class="p-10 flex justify-around items-center ">
            <a href="./index.php" type="button" class="text-white bg-gradient-to-r from-[#7977b8] to-[#4945bf] hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                HOME
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9zm9 4V3m0 0L6 9m9-6v6" />
                </svg>
            </a>
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
  <a class="" href="./accommodation.php">Accommodation</a>
</button>
        </div>
    </div>
</div>

<footer class="text-center p-10 mx-auto xs:max-w-540px xs:mt-28 md:max-w-540px md:mt-10">
    <p class="text-sm text-gray-600">
        Powered by <span class="font-semibold">Sabahna</span>
    </p>
</footer>

</body>

</html>
