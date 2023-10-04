<?php

session_start();

if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
    $conn = require_once 'database_connection.php';
    // Set the number of records to display per page and the current page number
    $recordsPerPage = 100; // Number of records to display per page
    $currentpage = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number, default to 1

    // Retrieve the total number of registrants from the database
    $query = "SELECT COUNT(*) AS total FROM registrants";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $totalRecords = $row['total']; // Total number of records

    // Calculate the total number of pages based on the number of records per page
    $totalPages = ceil($totalRecords / $recordsPerPage); // Total number of pages

    // Calculate the offset for the SQL query based on the current page and records per page
    $offset = ($currentpage - 1) * $recordsPerPage;

    // Retrieve the user list from the database with the pagination limits
    $query = "SELECT * FROM registrants LIMIT $offset, $recordsPerPage";

    $result = $conn->query($query);
} else {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEIAP 2023 | Registrants</title>
    <link rel="shortcut icon" href="./images/FavLogo.png">
    <script src="https://cdn.tailwindcss.com"> </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
</head>

<body>
    <!-- banner section -->
    <div class="relative isolate flex items-center gap-x-6 overflow-hidden bg-gray-50 px-6 py-2.5 sm:px-3.5 ">
        <div class="absolute left-[max(-7rem,calc(50%-52rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
            <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)">
            </div>
        </div>
        <div class="absolute left-[max(45rem,calc(50%+8rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
            <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)">
            </div>
        </div>
        <div class="flex justify-start">
            <p class="text-md font-semibold text-black italic">
            FEIAP Myanmar 2023
            </p>
        </div>
        <div class="flex flex-2 justify-center items-center gap-x-4 gap-y-2">
            <p class="text-sm leading-6 text-gray-900 text-center">
               <svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true">
                    <circle cx="1" cy="1" r="1" />
                </svg>Join 31st FEIAP General Assembly & 7th Special Distingished Lectures
                    from 11-13 September,2023,<br>Nay Pyi Taw,Myanmar to see what's coming next.
            </p> 
        </div>
        <div class="flex flex-1 justify-center items-center gap-x-4 gap-y-2">
        <a href="./" class="flex-none rounded-full bg-gray-900 px-3.5 py-1 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Go
                To Home <span aria-hidden="true">&rarr;</span></a>
        </div>
        <div class="flex  flex-1 justify-center items-center gap-x-4 gap-y-2">
            <form method="post" action="./generate_excel.php">
                <input type="submit" name="export" value=" Export" class="px-6 py-2 text-red-100 rounded bg-gradient-to-r from-blue-600 to-blue-400 cursor-pointer" />
            </div>
        <div class="flex flex-1 justify-end">
            <a href="./login.php" class="px-6 py-2 text-red-100 rounded bg-gradient-to-r from-red-600 to-red-400">Logout</a>
        </div>
    </div>
    <!-- table -->
    <div class="w-full mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
        <div class="p-3">
            <div class="overflow-x-auto">
                <table class=" w-full">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600  text-sm leading-normal">
                            <th class="py-3 px-3 text-left">#</th>
                            <th class="py-3 px-3 text-left">First Name</th>
                            <th class="py-3 px-3 text-left">Last Name</th>
                            <th class="py-3 px-3 text-left">Title</th>
                            <th class="py-3 px-3 text-left">Email</th>
                            <th class="py-3 px-3 text-left">Designation</th>
                            <th class="py-3 px-3 text-left">Organization</th>
                            <th class="py-3 px-3 text-left">PCFMC</th>
                            <th class="py-3 px-3 text-left">Country</th>
                        </tr>
                    </thead>

                    <tbody class="text-sm divide-y divide-gray-100">
                        <?php
                        $index = 0;
                        if (isset($_SESSION['auth']) && $_SESSION['auth'] === true && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<tr class="hover:bg-gray-100">
                                <td class="px-2 py-3 whitespace-nowrap">
                                    <div class="text-left font-medium text-gray-800">' . ++$index . '</div>
                                </td>
                                <td class="px-2 py-3 whitespace-nowrap">
                                  <div class="text-left font-medium text-gray-800">' . $row['first_name'] . '</div>
                                </td>
                                <td class="px-2 py-3 whitespace-nowrap">
                                  <div class="text-left font-medium text-gray-800">' . $row['last_name'] . '</div>
                                </td>
                                <td class="px-2 py-3 whitespace-nowrap">
                                    <div class="text-left font-medium text-gray-800">' . $row['title'] . '</div>
                                </td>
                                <td class="px-2 py-3 whitespace-nowrap">
                                  <div class="text-left text-green-500">' . $row['email'] . '</div>
                                </td>
                                <td class="px-2 py-3 whitespace-nowrap">
                                  <div class="text-left">' . $row['position'] . '</div>
                                </td>
                                <td class="px-2 py-3 whitespace-nowrap">
                                  <div class="text-left">' . $row['organization'] . '</div>
                                </td>
                                <td class="px-2 py-3 whitespace-nowrap">
                                  <div class="text-left">' . ( $row['pcfmc'] ?? 'N/A')  . '</div>
                                </td>
                                <td class="px-2 py-3 whitespace-nowrap">
                                  <div class="text-left">' .$row['country']. '</div>
                                </td>
                              </tr>';
                            }
                        } else {
                            echo '<tr><td colspan="7">No users found.</td></tr>';
                        }

                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- component -->
    <!-- This is an pagination component -->
    <?php
    if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
        echo '<div class="text-center text-gray-500 mt-10" ><h2>Total registers - <span class="font-bold rounded-full bg-red-100 px-3 py-3">'.$totalRecords.'</span></h2></div>';
        echo '<div class="flex mx-auto justify-center mt-5 mb-10">
                        <nav aria-label="Page navigation example">
                            <ul class="inline-flex -space-x-px">';

        // Previous page link
        echo '<li>';
        if ($currentpage > 1) {
            $prevPage = $currentpage - 1;
            echo '<a href="feiap2023admin.php?page=' . $prevPage . '" class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 ml-0 rounded-l-lg leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>';
        } else {
            echo '<a href="#" class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 ml-0 rounded-l-lg leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" disabled>Previous</a>';
        }
        echo '</li>';

        // Pagination links
        for ($page = 1; $page <= $totalPages; $page++) {
            $isActive = $page == $currentpage ? 'bg-blue-50 text-blue-600' : 'bg-white text-gray-500 hover:bg-gray-100 hover:text-gray-700';
            echo '<li>';
            echo '<a href="feiap2023admin.php?page=' . $page . '" class="border border-gray-300 ' . $isActive . ' leading-tight py-2 px-3 dark:border-gray-700 dark:bg-gray-700 dark:text-white">' . $page . '</a>';
            echo '</li>';
        }

        // Next page link
        echo '<li>';
        if ($currentpage < $totalPages) {
            $nextPage = $currentpage + 1;
            echo '<a href="feiap2023admin.php?page=' . $nextPage . '" class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 rounded-r-lg leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>';
        } else {
            echo '<a href="#" class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 hover:text-gray-700 rounded-r-lg leading-tight py-2 px-3 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" disabled>Next</a>';
        }
        echo '</li>';

        echo '</ul>
                        </nav>
                    </div>';
    }
    ?>

</body>

</html>