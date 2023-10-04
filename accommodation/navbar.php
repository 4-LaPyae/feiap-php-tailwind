<?php
if ($_SERVER['PHP_SELF'] === '/FEIAP/home/navbar.php') {
    // Redirect to index.php
    header("Location: index.php");
    exit; // Stop further execution of the code
}
?>

<nav id="nav-bar" class="w-full flex items-center justify-between xl:px-10 md:px-5 xs:px-3 px-4 py-3 absolute sticky top-0 z-[10000]" aria-label="Global" style="background-color: #7977b8">
    <div class="grow">
        <a href="./">
            <img id="mec-logo" class="h-14 w-auto" src="./images/MEC_L.png" alt="MEC Logo">
        </a>
    </div>
    <div class="hidden lg:flex lg:gap-x-6 xl:mx-5  mx-4">
        <a href="./" id="home" class="nav-item text-lg font-semibold leading-6 text-white py-3">Home</a>
        <a href="./" id="about" class="nav-item text-lg font-semibold leading-6 text-white py-3">About</a>
        <a href="./" id="support" class="nav-item text-lg font-semibold leading-6 text-white py-3">Support</a>
        <a href="./" id="speaker" class="nav-item text-lg font-semibold leading-6 text-white py-3">Speakers</a>
        <a href="./" id="contact" class="nav-item text-lg font-semibold leading-6 text-white py-3">Contact</a>
        <div class="hidden lg:flex">
            <a id="register-btn" href="./register.php" class="group relative h-12 w-28 overflow-hidden rounded-lg bg-gradient-to-r from-[#000] to-[#4945bf] hover:bg-gradient-to-l text-sm font-bold text-white lg:flex justify-center items-center transition delay-150 duration-300 ease-in-out">Register</a>
        </div>
        <div class="hidden lg:flex">
            <!-- bg-gradient-to-r from-[#7977b8] to-[#4945bf] hover:bg-gradient-to-l -->
            <a id="accommodation-btn" href="./accommodation.php" class="group relative h-12 w-40 overflow-hidden rounded-lg border-2 border-[#fff] text-[#fff] text-sm font-bold  lg:flex justify-center items-center transition delay-150 duration-300 ease-in-out">Accommodation</a>
        </div>
    </div>
    <div class="flex hidden">
        <button id="mobile-btn" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
</nav>



<header class="relative w-screen">
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div id="mobile-nav" class="lg:hidden w-full h-screen fixed transition-transform ease-in-out delay-300 duration-300 translate-x-full">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <!-- <div class="fixed inset-0 z-10 translate-x-96">
        </div> -->
        <div class="fixed z-[20000] inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-end">
                <button id="close-btn" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="cuffrrentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="divide-y divide-gray">
                    <div class="flex flex-col justify-start items-start py-6">
                        <button id="mobileHome" class="text-lg font-semibold leading-6 text-[#7977b8] py-4">Home</button>
                        <button id="mobileOrganize" class="text-lg font-semibold leading-6 text-[#7977b8] py-4">Organize</button>
                        <button id="mobileAbout" class="text-lg font-semibold leading-6 text-[#7977b8] py-4">About</button>
                        <button id="mobileSupport" class="text-lg font-semibold leading-6 text-[#7977b8] py-4">Support</button>
                        <button id="mobileSpeaker" class="text-lg font-semibold leading-6 text-[#7977b8] py-4">Speakers</button>
                        <button id="mobileContact" class="text-lg font-semibold leading-6 text-[#7977b8] py-4">Contact</button>
                        <button id="mobileSchedule" class="text-lg font-semibold leading-6 text-[#7977b8] py-4">Accommodation</button>
                    </div>
                </div>
                <div class="flex flex-row justify-between">
                    <div class="py-6 text-center">
                        <a href="./register.php" class="group h-12 w-36 mx-auto rounded-lg bg-gradient-to-r from-[#7977b8] to-[#4945bf] hover:bg-gradient-to-l text-sm font-bold text-white flex justify-center items-center transition delay-150 duration-300 ease-in-out">Register</a>
                    </div>
                    <div class="py-6 text-center">
                        <a href="./register.php" class="group h-12 w-36 mx-auto rounded-lg bg-gradient-to-r from-[#7977b8] to-[#4945bf] hover:bg-gradient-to-l text-sm font-bold text-white flex justify-center items-center transition delay-150 duration-300 ease-in-out">Accomoodation</a>
                    </div>
                    <!-- <div class="py-6 text-center">
                    <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-gradient-to-r  from-[#7977b8] to-[#4945bf] px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto"><a>Accomoodation</a></button>
                </div> -->
                </div>


            </div>
        </div>
    </div>

    <!-- <div class="absolute w-full text-center" style="top:50%;left:50%;transform: translate(-50%,-50%);">
        <h1 class="lg:text-4xl md:text-3xl font-bold text-[#fbb164] md:mb-8 md:mt-0 mt-5 mb-6">
            ICEEA 2023,
            MYANMAR</h1>
        <h1 class="lg:text-4xl md:text-3xl font-bold text-white md:mb-8 mb-6">
            INTERNATIONAL CONFERENCE ON</h1>
        <h1 class="lg:text-4xl md:text-3xl font-bold text-white md:mb-8 mb-6">
            ENGINEERING EDUCATION ACCREDITATION
        </h1>
        <h1 class="lg:text-3xl md:text-2xl font-light text-white mmd:mb-10 mb-6">
            July 27th & 28th Yangon, Myanmar®</h1>
        <div class="flex justify-center align-center mt-10 w-full  mx-auto">
            <img class="w-auto lg:h-32 md:h-28 sm:h-20 xs:h-16 h-14" src="./images/WFEO_Pic_1.png" alt="MEC Pic 1">
            <div class="mx-2"></div>
            <img class="w-auto lg:h-32 md:h-28 sm:h-20 xs:h-16 h-14" src="./images/WFEO_Pic_2.png" alt="MEC Pic 2">
        </div>
    </div> -->
</header>