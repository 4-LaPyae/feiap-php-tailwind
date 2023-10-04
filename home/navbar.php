<?php
if ($_SERVER['PHP_SELF'] === '/FEIAP/home/navbar.php') {
    // Redirect to index.php
    header("Location: index.php");
    exit; // Stop further execution of the code
}
?>

<nav id="nav-bar" class="w-full flex items-center justify-between xl:px-10 md:px-5 xs:px-3 px-4 py-3 absolute sticky top-0 z-[10000]" aria-label="Global" style="background-color: rgba(255, 255, 255, 0.9);">
    <div class="grow">
        <a href="./">
            <img id="mec-logo" class="h-14 w-auto" src="./images/MEC.png" alt="MEC Logo">
        </a>
    </div>
    <div class="hidden lg:flex lg:gap-x-6 xl:mx-5  mx-4">
        <button id="home" class="nav-item text-lg font-semibold leading-6 text-[#7977b8]">Home</button>
        <button id="about" class="nav-item text-lg font-semibold leading-6 text-[#7977b8]">About</button>
        <button id="support" class="nav-item text-lg font-semibold leading-6 text-[#7977b8]">Support</button>
        <button id="speaker" class="nav-item text-lg font-semibold leading-6 text-[#7977b8]">Speakers</button>
        <button id="contact" class="nav-item text-lg font-semibold leading-6 text-[#7977b8]">Contact</button>
        <div class="hidden lg:flex">
            <a id="register-btn" href="./register.php" class="group relative h-12 w-28 overflow-hidden rounded-lg bg-gradient-to-r from-[#7977b8] to-[#4945bf] hover:bg-gradient-to-l text-sm font-bold text-white lg:flex justify-center items-center transition delay-150 duration-300 ease-in-out">Register</a>
        </div>
        <div class="hidden lg:flex">
            <!-- bg-gradient-to-r from-[#7977b8] to-[#4945bf] hover:bg-gradient-to-l -->
            <a id="accommodation-btn" href="./accommodation.php" class="group relative h-12 w-40 overflow-hidden rounded-lg border-2 border-[#7977b8] text-[#7977b8] text-sm font-bold  lg:flex justify-center items-center transition delay-150 duration-300 ease-in-out">Accommodation</a>
        </div>
    </div>
    <div class="flex lg:hidden">
        <button id="mobile-btn" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
</nav>
<div class="w-full">
<img
  src="./images/feiap_banner_Sep5.JPG"
  class="h-auto w-full"
  alt="banner" />
</div>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div id="mobile-nav" class="lg:hidden fixed">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <!-- <div class="fixed inset-0 z-10 translate-x-96">
        </div> -->
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-end">
                <button id="close-btn" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <!-- <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="cuffrrentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg> -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="divide-y divide-gray">
                    <div class="flex flex-col justify-start items-start py-6">
                        <button id="mobileHome" class="text-lg font-semibold leading-6 text-[#7977b8] py-4">Home</button>
                        <!-- <button id="mobileOrganize" class="text-lg font-semibold leading-6 text-[#7977b8] py-4">Organize</button> -->
                        <button id="mobileAbout" class="text-lg font-semibold leading-6 text-[#7977b8] py-4">About</button>
                        <button id="mobileSupport" class="text-lg font-semibold leading-6 text-[#7977b8] py-4">Support</button>
                        <button id="mobileSpeaker" class="text-lg font-semibold leading-6 text-[#7977b8] py-4">Speakers</button>
                        <button id="mobileContact" class="text-lg font-semibold leading-6 text-[#7977b8] py-4">Contact</button>
                        <!-- <button id="mobileSchedule" class="text-lg font-semibold leading-6 text-[#7977b8] py-4">Accommodation</button> -->
                    </div>
                </div>
                <div class="flex flex-row justify-between">
                    <div class="py-6 text-center">
                        <a href="./register.php" class="group h-12 w-36 mx-auto rounded-lg bg-gradient-to-r from-[#7977b8] to-[#4945bf] hover:bg-gradient-to-l text-sm font-bold text-white flex justify-center items-center transition delay-150 duration-300 ease-in-out">Register</a>
                    </div>
                    <div class="py-6 text-center">
                        <a id="accommodation-btn" href="./accommodation.php" class="group  h-12 w-36 mx-auto overflow-hidden rounded-lg border-2 border-[#7977b8] text-[#7977b8] text-sm font-bold  flex justify-center items-center transition delay-150 duration-300 ease-in-out">Accommodation</a>
                    </div>
                  
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

<script>
    const navItem = document.querySelectorAll(
        '.nav-item');
    const navBar = document.getElementById('nav-bar');
    const mecLogo = document.getElementById(
        'mec-logo');
    const feiapLogo = document.getElementById('feiap-logo');
    const registerBtn = document.getElementById(
        'register-btn');
    const accommodationBtn = document.getElementById(
        'accommodation-btn');
    const mobileNav = document.getElementById(
        'mobile-nav');
    const mobileBtn = document.getElementById(
        'mobile-btn');
    const closeBtn = document.getElementById(
        'close-btn');

    mobileBtn.addEventListener('click', (ev) => {
        mobileNav.classList.remove(
            'translate-x-full');
        mobileNav.classList.add('z-[15000]');
    })

    closeBtn.addEventListener('click', (ev) => {
        mobileNav.classList.add(
            'translate-x-full');
        setTimeout(() => {
            mobileNav.classList
                .remove(
                    'z-[15000]');
        }, 1000);
    })


    window.addEventListener('scroll', (ev) => {
        if (window.screen.width <= 425) {
            if (window.scrollY > 350) {
                navBar.style.backgroundColor =
                    '#7977b8'
                navItem.forEach((item) => {
                    item.style.color =
                        'white';
                })
                mecLogo.src = './images/MEC_L.png'
                // feiapLogo.src = '../images/FEIAP_L.png'

                removeClasses(registerBtn, [
                    'from-[#7977b8]',
                    'to-[#4945bf]',
                ])

                addClasses(registerBtn, [
                    'from-[#000]',
                    'to-[#4945bf]',
                ])

                removeClasses(accommodationBtn, ['border-[#7977b8] text-[#7977b8]'])
                addClasses(accommodationBtn, [
                    'border-[#7977b8]', 'text-[#7977b8]'
                ])
            } else {
                navBar.style.backgroundColor =
                    'rgba(255, 255, 255, 0.9)';
                navItem.forEach((item) => {
                    item.style.color =
                        '#7977b8';
                })
                mecLogo.src = './images/MEC.png'
                // feiapLogo.src = './images/FEIAP.png'

                removeClasses(registerBtn, [
                    'from-[#000]',
                    'to-[#4945bf]',
                ]);

                addClasses(registerBtn, [
                    'from-[#7977b8]',
                    'to-[#4945bf]',
                ])
                removeClasses(accommodationBtn, ['border-[#7977b8] text-[#7977b8]'])
                addClasses(accommodationBtn, [
                    'border-[#7977b8]', 'text-[#7977b8]'
                ])
            }
        } else if (window.screen.width <= 768) {
            if (window.scrollY > 650) {
                navBar.style.backgroundColor =
                    '#7977b8'
                navItem.forEach((item) => {
                    item.style.color =
                        'white';
                })
                mecLogo.src = './images/MEC_L.png'
                // feiapLogo.src = './images/FEIAP_L.png'

                removeClasses(registerBtn, [
                    'from-[#7977b8]',
                    'to-[#4945bf]',
                ])

                addClasses(registerBtn, [
                    'from-[#000]',
                    'to-[#4945bf]',
                ])
            } else {
                navBar.style.backgroundColor =
                    'rgba(255, 255, 255, 0.9)';
                navItem.forEach((item) => {
                    item.style.color =
                        '#7977b8';
                })
                mecLogo.src = './images/MEC.png'
                // feiapLogo.src = './images/FEIAP.png'

                removeClasses(registerBtn, [
                    'from-[#000]',
                    'to-[#4945bf]',
                ]);

                addClasses(registerBtn, [
                    'from-[#7977b8]',
                    'to-[#4945bf]',
                ])
                removeClasses(accommodationBtn, ['border-[#7977b8] text-[#7977b8]'])
                addClasses(accommodationBtn, [
                    'border-[#7977b8]', 'text-[#7977b8]'
                ])
            }
        } else if (window.screen.width <= 1024) {
            if (window.scrollY > 896) {
                navBar.style.backgroundColor =
                    '#7977b8'
                navItem.forEach((item) => {
                    item.style.color =
                        'white';
                })
                mecLogo.src = './images/MEC_L.png'
                // feiapLogo.src = './images/FEIAP_L.png'

                removeClasses(registerBtn, [
                    'from-[#7977b8]',
                    'to-[#4945bf]',
                ])

                addClasses(registerBtn, [
                    'from-[#000]',
                    'to-[#4945bf]',
                ])
                removeClasses(accommodationBtn, ['border-[#7977b8]', 'text-[#7977b8]'])
                addClasses(accommodationBtn, ['border-[#fff]', 'text-[#fff]'])
            } else {
                navBar.style.backgroundColor =
                    'rgba(255, 255, 255, 0.9)';
                navItem.forEach((item) => {
                    item.style.color =
                        '#7977b8';
                })
                mecLogo.src = './images/MEC.png'
                // feiapLogo.src = './images/FEIAP.png'

                removeClasses(registerBtn, [
                    'from-[#000]',
                    'to-[#4945bf]',
                ]);

                addClasses(registerBtn, [
                    'from-[#7977b8]',
                    'to-[#4945bf]',
                ])
                removeClasses(accommodationBtn, ['border-[#fff]', 'text-[#fff]'])
                addClasses(accommodationBtn, ['border-[#7977b8]', 'text-[#7977b8]'])

            }
        } else if (window.screen.width <= 1440) {
            if (window.scrollY > 1070) {
                navBar.style.backgroundColor =
                    '#7977b8'
                navItem.forEach((item) => {
                    item.style.color =
                        'white';
                })
                mecLogo.src = './images/MEC_L.png'
                // feiapLogo.src = './images/FEIAP_L.png'

                removeClasses(registerBtn, [
                    'from-[#7977b8]',
                    'to-[#4945bf]',
                ])

                addClasses(registerBtn, [
                    'from-[#000]',
                    'to-[#4945bf]',
                ])

                removeClasses(accommodationBtn, ['border-[#7977b8]', 'text-[#7977b8]'])
                addClasses(accommodationBtn, ['border-[#fff]', 'text-[#fff]'])
            } else {
                navBar.style.backgroundColor =
                    'rgba(255, 255, 255, 0.9)';
                navItem.forEach((item) => {
                    item.style.color =
                        '#7977b8';
                })
                mecLogo.src = './images/MEC.png'
                // feiapLogo.src = './images/FEIAP.png'

                removeClasses(registerBtn, [
                    'from-[#000]',
                    'to-[#4945bf]',
                ]);

                addClasses(registerBtn, [
                    'from-[#7977b8]',
                    'to-[#4945bf]',
                ])
                removeClasses(accommodationBtn, ['border-[#fff]', 'text-[#fff]'])
                addClasses(accommodationBtn, ['border-[#7977b8]', 'text-[#7977b8]'])

            }
        } else {
            if (window.scrollY > 750) {
                navBar.style.backgroundColor =
                    '#7977b8'
                navItem.forEach((item) => {
                    item.style.color =
                        'white';
                })
                mecLogo.src = './images/MEC_L.png'
                // feiapLogo.src = './images/FEIAP_L.png'

                removeClasses(registerBtn, [
                    'from-[#7977b8]',
                    'to-[#4945bf]',
                ])

                addClasses(registerBtn, [
                    'from-[#000]',
                    'to-[#4945bf]',
                ])

                removeClasses(accommodationBtn, ['border-[#7977b8]', 'text-[#7977b8]'])
                addClasses(accommodationBtn, ['border-[#fff]', 'text-[#fff]'])
            } else {
                navBar.style.backgroundColor =
                    'rgba(255, 255, 255, 0.9)';
                navItem.forEach((item) => {
                    item.style.color =
                        '#7977b8';
                })
                mecLogo.src = './images/MEC.png'
                // feiapLogo.src = './images/FEIAP.png'


                removeClasses(registerBtn, [
                    'from-[#000]',
                    'to-[#4945bf]',
                ]);

                addClasses(registerBtn, [
                    'from-[#7977b8]',
                    'to-[#4945bf]',
                ])
                removeClasses(accommodationBtn, ['border-[#fff]', 'text-[#fff]'])
                addClasses(accommodationBtn, [
                    'border-[#7977b8]', 'text-[#7977b8]'
                ])
            }
        }
    })

    function addClasses(element, classNames) {
        classNames.forEach(className => {
            element.classList.add(className);
        });
    }

    function removeClasses(element, classNames) {
        classNames.forEach(className => {
            element.classList.remove(
                className);
        });
    }
</script>