<?php
if ($_SERVER['PHP_SELF'] === '/ICEEA/home/navbar.php') {
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
            <a id="accommodation-btn" href="./accommodation.php" class="group relative h-12 w-40 overflow-hidden rounded-lg border-2 border-[#7977b8] text-[#7977b8] text-sm font-bold  lg:flex justify-center items-center transition delay-150 duration-300 ease-in">Accommodation</a>
        </div>
    </div>
    <div class="flex lg:hidden">
        <button id="mobile-btn" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 hover:rotate-90 transition delay-150 duration-500 ease-linear-in-out">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
</nav>
<div id="mobile-nav">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <!-- <div class="fixed inset-0 z-10 translate-x-96">
        </div> -->
            <div class=" w-full h-auto bg-indigo-900">
                    <div class="flex items-center justify-end p-5">
                        <button id="close-btn" type="button" class="-m-2.5 rounded-md p-2.5">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>                   
                        </button>
                    </div>
                    <div class="">
                        <div class="w-full flex justify-center items-center">
                            <button id="mobileHome" class="text-lg font-semibold leading-6 text-white py-4">Home</button>
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <button id="mobileAbout" class="text-lg font-semibold leading-6 text-white py-4">About</button>
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <button id="mobileSupport" class="text-lg font-semibold leading-6 text-white py-4">Support</button>
                        </div> 
                        <div class="w-full flex justify-center items-center">
                            <button id="mobileSpeaker" class="text-lg font-semibold leading-6 text-white py-4">Speakers</button>
                        </div>
                         <div class="w-full flex justify-center items-center">
                            <button id="mobileContact" class="text-lg font-semibold leading-6 text-white py-4">Contact</button>
                        </div>
                        <!-- <button id="mobileOrganize" class="text-lg font-semibold leading-6 text-[#7977b8] py-4">Organize</button> -->
                        <!-- <button id="mobileSchedule" class="text-lg font-semibold leading-6 text-[#7977b8] py-4">Accommodation</button> -->
                    </div>
                    <div class="flex flex-row justify-around">
                        <div class="py-6 text-center">
                            <a href="./register.php" class="group h-12 w-36 mx-auto rounded-lg bg-gradient-to-r from-[#7977b8] to-[#4945bf] hover:bg-gradient-to-l text-sm font-bold text-white flex justify-center items-center transition delay-150 duration-300 ease-in-out">Register</a>
                        </div>
                    <div class="py-6 text-center">
                        <a id="accommodation-btn" href="./accommodation.php" class="group  h-12 w-36 mx-auto overflow-hidden rounded-lg border-2 border-[#7977b8] text-[#7977b8] text-sm font-bold  flex justify-center items-center transition delay-150 duration-300 ease-in-out">Accommodation</a>
                    </div>    
                </div>
             </div>      
    </div>
<div class="w-full">
<img
  src="./images/Banner4.png"
  class="h-auto max-w-full"
  alt="banner" />
</div>
    <!-- Mobile menu, show/hide based on menu open state. -->
   

    

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
        console.log(window.screen.width,window.scrollY )
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
            if (window.scrollY > 900) {
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
                console.log("hello")
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