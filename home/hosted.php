<?php
if ($_SERVER['PHP_SELF'] === '/FEIAP/home/about.php') {
    // Redirect to index.php
    header("Location: index.php");
    exit; // Stop further execution of the code
}
?>
<!-- components -->
<div class="bg-white lg:my-20 md:my-10 my-5" id="hosted-container">
    <div class="container md:px-10 xs:px-6 px-4 w-full mx-auto">
        <div class="pb-5">
            <h1 class="lg:text-4xl md:text-3xl text-xl text-gray-900 font-bold text-center">
                Hosted By
            </h1>
        </div>
        <!-- <div class="grid gap-4 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1"> -->
        <div class=" mx-auto grid grid-cols-1 md:grid-cols-2 gap-16">
            <div class=" text-center">
                    <img class="w-full h-5/6 rounded-lg" alt="MEC" src="./images/MEC2.png" />
                    <h3 class="lg:text-xl md:text-lg sm:text-sm text-md font-semibold mt-5">
                Myanmar Engineering Council (MEngC)
                </h3>
            </div>
            <div class=" text-center">
                    <img class="w-full h-5/6 rounded-lg" alt="MES" src="./images/MES.png" />
                    <h3 class="lg:text-xl md:text-lg sm:text-sm text-md font-semibold mt-5">
                Federation of Myanmar Engineering Societies (Fed. MES)
                </h3>
            </div>
        </div>
    </div>
</div>