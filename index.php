<?php
session_start();

// Unset the session data
unset($_SESSION['form_submitted']);
unset($_SESSION['registration_success']);

?>

<!doctype html>
<html style="scroll-behavior:smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>FEIAP 2023</title>
    <link rel="shortcut icon" href="./images/FavLogo.png">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="./css/style.css">
</head>

<body style="font-family: 'Poppins', sans-serif;">
    <?php include('./home/navbar.php') ?>
    <div id="organized-container">
        <?php include('./home/hosted.php') ?>
    </div>
    <div id="about-container">
        <?php include('./home/about.php') ?>
    </div>
    <div id="support-container">
        <?php include('./home/supportby.php') ?>
    </div>
    <div>
        <?php include('./home/speakers.php') ?>
    </div>
    <div id="contact-container">
        <?php include('./home/contact.php') ?>
    </div>
    <footer class="py-5 mb-3 text-center mt-8">
    <p class="text-sm text-gray-600">
        Powered by <span class="font-semibold">Sabahna</span>
      </p>
    </footer>
</body>

</html>

<script>
    $(document).ready(function () {
    $("#mobile-btn").on("click", function () {
        $("#mobile-nav").slideToggle("slow");
    });
});

    const aboutBtn = document.getElementById('about');
    // const hostedBtn = document.getElementById('hosted');
    const supportBtn = document.getElementById('support');
    const homeBtn = document.getElementById('home');
    const speakerBtn = document.getElementById(
        'speaker');
    const contactBtn = document.getElementById(
        'contact');
    // const scheduleBtn = document.getElementById(
    //     'schedule');

    //! desktop for  btn to go

    // hostedBtn.addEventListener('click', (ev) => {
    //     const element = document
    //         .getElementById(
    //             'hosted-container');
    //     window.scrollTo(0, element
    //         .offsetTop - 165)
    // })
    aboutBtn.addEventListener('click', (ev) => {
        const element = document
            .getElementById(
                'about-container');
        window.scrollTo(0, element
            .offsetTop - 160)
    })

    supportBtn.addEventListener('click', (ev) => {
        const element = document
            .getElementById(
                'support-container');
        window.scrollTo(0, element
            .offsetTop - 150)
    })
    contactBtn.addEventListener('click', (ev) => {
        const element = document
            .getElementById(
                'contact-container');
        window.scrollTo(0, element
            .offsetTop + 250)
    })
    // scheduleBtn.addEventListener('click', (ev) => {
    //     const element = document
    //         .getElementById(
    //             'contact-container');
    //     window.scrollTo(0, element
    //         .offsetTop + 250)
    // })
    homeBtn.addEventListener('click', (ev) => {
        const element = document
            .getElementById(
                'nav-bar');
        window.scrollTo(0, 0)
    })
    speakerBtn.addEventListener('click', (ev) => {
        const element = document
            .getElementById(
                'speaker-container');
        window.scrollTo(0, element
            .offsetTop - 100)
    })

    //! mobile for  btn to go
    const mobileHomeBtn = document.getElementById('mobileHome');
    // const mobileOrganize = document.getElementById('mobileOrganize');
    const mobileAboutBtn = document.getElementById('mobileAbout');
    const mobileContactBtn = document.getElementById('mobileContact');
    const mobileSpeakersBtn = document.getElementById('mobileSpeaker');
    // const mobileScheduleBtn = document.getElementById('mobileSchedule');
    const mobileSupportBtn = document.getElementById('mobileSupport');
    // mobileOrganize.addEventListener('click', (ev) => {
    //     const element = document
    //         .getElementById(
    //             'organize-container');
    //     window.scrollTo(0, element
    //         .offsetTop - 165);
    //     mobileNav.classList.add(
    //         'translate-x-full');
    //     setTimeout(() => {
    //         mobileNav.classList
    //             .remove(
    //                 'z-[15000]');
    //     }, 1000);
    // });
    mobileAboutBtn.addEventListener('click', (ev) => {
        const element = document
            .getElementById(
                'about-container');
        window.scrollTo(0, element
            .offsetTop - 150);
        mobileNav.classList.add(
            'translate-x-full');
        setTimeout(() => {
            mobileNav.classList
                .remove(
                    'z-[15000]');
        }, 1000);
    });


    mobileSupportBtn.addEventListener('click', (ev) => {
        const element = document
            .getElementById(
                'support-container');
        window.scrollTo(0, element
            .offsetTop - 150);
        mobileNav.classList.add(
            'translate-x-full');
        setTimeout(() => {
            mobileNav.classList
                .remove(
                    'z-[15000]');
        }, 1000);
    });


    mobileContactBtn.addEventListener('click', (ev) => {
        const element = document
            .getElementById(
                'contact-container');
        window.scrollTo(0, element
            .offsetTop + 250);
        mobileNav.classList.add(
            'translate-x-full');
        setTimeout(() => {
            mobileNav.classList
                .remove(
                    'z-[15000]');
        }, 1000);
    })
    // mobileScheduleBtn.addEventListener('click', (ev) => {
    //     const element = document
    //         .getElementById(
    //             'contact-container');
    //     window.scrollTo(0, element
    //         .offsetTop + 250);
    //     mobileNav.classList.add(
    //         'translate-x-full');
    //     setTimeout(() => {
    //         mobileNav.classList
    //             .remove(
    //                 'z-[15000]');
    //     }, 1000);
    // })
    mobileHomeBtn.addEventListener('click', (ev) => {
        const element = document
            .getElementById(
                'nav-bar');
        window.scrollTo(0, 0);
        mobileNav.classList.add(
            'translate-x-full');
        setTimeout(() => {
            mobileNav.classList
                .remove(
                    'z-[15000]');
        }, 1000);
    })
    mobileSpeakersBtn.addEventListener('click', (ev) => {
        const element = document
            .getElementById(
                'speaker-container');
        window.scrollTo(0, element
            .offsetTop - 100);
        mobileNav.classList.add(
            'translate-x-full');
        setTimeout(() => {
            mobileNav.classList
                .remove(
                    'z-[15000]');
        }, 1000);
    })
</script>