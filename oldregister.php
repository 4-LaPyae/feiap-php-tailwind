<?php

session_start();
$clientSideKey = '6LeODwcnAAAAAFQVs0L9U8TgIOn7e3ohfyn1VhS1';
// Check if the user is already registered and redirect to success.php
if (isset($_SESSION['registration_success']) && $_SESSION['registration_success']) {
    header('Location: success.php');
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ICEEA Register Form</title>
    <meta name="robots" content="noindex, nofollow" />
    <script src="https://cdn.tailwindcss.com/3.1.4"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
    <script src="https://www.google.com/recaptcha/api.js?render=<?= $clientSideKey ?>"></script>
    <!-- <style>
    .custom-link:hover {
        text-decoration: underline;
    }
</style> -->
</head>

<body>
    <div class="flex justify-center items-center h-screen background-image" style="background-image: url('./images/Banner4.png');background-repeat: no-repeat; background-size: cover; background-position: bottom;">
        <div class="w-full lg:w-5/12 bg-white p-5 rounded-lg lg:rounded-l-none">
            <h3 class="pt-4 text-3xl text-center">FEIAP Myanmar 2023 Event</h3>
            <form id="myForm" class="px-8 pt-6 bg-white rounded" method="POST" action="#">
                <div class="mb-4 md:flex md:justify-between">
                    <div class="mb-4 md:mr-2 md:mb-0">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName"> First Name <span class="text-xs italic text-red-500">*</span></label>
                        <input autocomplete="off" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="first_name" name="first_name" type="text" placeholder="First Name" required />
                    </div>
                    <div class="md:ml-2">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                            Last Name
                            <span class="text-xs italic text-red-500">
                                *
                            </span>
                        </label>
                        <input autocomplete="off" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="last_name" name="last_name" type="text" placeholder="Last Name" required />
                    </div>
                </div>
                <div class="mb-4 flex">
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName"> Title <span class="text-xs italic text-red-500">* <br /></span> </label>
                        <input autocomplete="off" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="title" name="title" type="text" placeholder="Example: IR, Mr. ,Ms., Dr.,..." required />
                    </div>
                </div>
                <div class="mb-4 md:flex md:justify-between">
                    <div class="w-auto mb-4 md:mb-0 md:w-44">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="gender">
                            Gender
                            <span class="text-xs italic text-red-500">
                                *
                            </span>
                        </label>
                        <select id="gender" name="gender" class="block text-gray-700 border border-gray-300 text-sm rounded shadow focus:outline-none focus:shadow-outline block w-full px-3 py-2 mb-3 appearance-none" required>
                            <option selected>Choose a gender</option>
                            <option value="MALE">Male</option>
                            <option value="FEMALE">Female</option>
                        </select>
                        <div id="genderError"></div>
                    </div>

                    <div class="w-auto mb-4 md:mb-0 md:w-44">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="country">
                            Country
                            <span class="text-xs italic text-red-500">
                                *
                            </span>
                        </label>
                        <select id="country" name="country" class="block text-gray-700 border border-gray-300 text-sm rounded shadow focus:outline-none focus:shadow-outline block w-full px-3 py-2 mb-3 appearance-none" required>
                            <option selected>Choose a country</option>

                            <?php
                            $list_json = file_get_contents('country_list.json');
                            $decoded_json = json_decode($list_json, true);
                            $countries = $decoded_json['countries'];
                            foreach ($countries as $countries) {
                            ?>
                                <option value=<?php echo $countries['label'] ?>>
                                    <?php echo $countries['label']; ?>
                                </option>
                            <?php
                            }
                            ?>

                        </select>
                        <div id="countryError"></div>
                    </div>

                </div>

                <div class="mb-4 md:flex md:justify-between">
                    <div class="mb-4 md:mr-2 md:mb-0">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="position">
                            Position/ Designation
                            <span class="text-xs italic text-red-500">
                                *
                            </span>
                        </label>
                        <input autocomplete="off" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="position" name="position" type="text" placeholder="Position" required />
                    </div>
                    <div class="md:ml-2">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
                            Organization
                            <span class="text-xs italic text-red-500">
                                *
                            </span>
                        </label>
                        <input autocomplete="off" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="organization" name="organization" type="text" placeholder="Organization" required />
                    </div>
                </div>
                <div class="mb-4 flex">
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                            Professional Practice Code for Myanmar Citizens
                        </label>
                        <input autocomplete="off" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="pcfmc" name="pcfmc" type="text" placeholder="(PE, RSE, RE)" />
                    </div>
                </div>
                <div class="mb-6 md:flex md:justify-between">
                    <div class="mb-4 md:mr-2 md:mb-0">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                            Email
                            <span class="text-xs italic text-red-500">
                                *
                            </span>
                        </label>
                        <input autocomplete="off" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="john@gmail.com" required />
                    </div>
                    <div class="md:ml-2">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="c_email">
                            Confirm Email
                            <span class="text-xs italic text-red-500">
                                *
                            </span>
                        </label>
                        <input autocomplete="off" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="c_email" name="c_email" type="email" placeholder="john@gmail.com" required />
                    </div>
                </div>
                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                <div class="mb-4 text-center">
                    <button class="w-full px-4 py-2 font-bold text-white rounded-full bg-gradient-to-r from-[#7977b8] to-[#4945bf] hover:bg-gradient-to-l focus:outline-none focus:shadow-outline" type="Submit" value="Submit">
                        Register
                    </button>
                </div>
                <div class="mb-4 text-center">
                    <div id="result"></div>
                </div>
                <!-- <hr class="mb-6 border-t" /> -->
                <div class="flex justify-around mb-6">
                    <div class="text-center">
                        <a class="inline-block mx-auto text-sm md:text-md lg:text-lg   text-[#7977b8] from-[#7977b8] to-[#4945bf] align-baseline hover:underline" href="./index.php">
                            Back To Home
                        </a>
                    </div>
                    <div class="text-center">
                        <a class="inline-block mx-auto text-sm  md:text-md lg:text-lg text-[#000] from-[#7977b8] to-[#4945bf] align-baseline  hover:underline" href="./accommodation.php">
                            Go To Accommodation
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="bg-white lg:my-5 md:my-10 sm:my-8" id="hosted-container">
        <div class="container md:px-10 xs:px-6 px-4 w-full mx-auto">
            <div>
                <h1 class="lg:text-4xl md:text-3xl text-xl text-gray-900 font-bold text-center p-5">
                    Hosted By
                </h1>
            </div>
            <div class="grid gap-14 sm:gap-5 lg:gap-4 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1">
                <div class=" text-center sm:mb-3">
                    <img class="w-full h-5/6 rounded-lg" alt="MEC" src="./images/MEC2.png" />
                    <h3 class="lg:text-xl md:text-lg sm:text-sm text-md font-semibold mt-5">
                        Myanmar Engineering Council (MEngC)
                    </h3>
                    <h4 class="lg:text-xl md:text-lg sm:text-sm text-md font-semibold mt-5">No (5A), Khay Yay Pin Street, Lanmadaw Township, Yangon, Myanmar</h4>
                </div>
                <div class=" text-center sm:mb-3">
                    <img class="w-full h-5/6 rounded-lg" alt="MES" src="./images/MES.png" />
                    <h3 class="lg:text-xl md:text-lg sm:text-sm text-md font-semibold mt-5">
                        Federation of Myanmar Engineering Societies (Fed. MES)
                    </h3>
                    <h4 class="lg:text-xl md:text-lg sm:text-sm text-md font-semibold mt-5">Haling Universities’ Campus,Hlaing Township, Yangon, Myanmar</h4>
                </div>
            </div>
        </div>
    </div>
    <footer class="py-5 mb-3 text-center mt-8">
        <p class="text-sm text-gray-600">
            Powered by <span class="font-semibold">Sabahna</span>
        </p>
    </footer>
</body>

</html>

<script>
    $(document).ready(function() {
        verifyHuman();
        $('#myForm').submit(function(e) {
            e.preventDefault(); // Prevent form submission

            var formData = $(this).serialize();

            var email = $('input[name="email"]').val();
            var confirmEmail = $('input[name="c_email"]').val();
            var selectedCountry = $('select[name="country"]').val();
            var selectedGender = $('select[name="gender"]').val();

            if (email !== confirmEmail) {
                $('#result').text('Email and Confirm Email do not match. Please check again.').removeClass('bg-green-100 border-green-500 text-green-900')
                    .addClass('bg-red-100 border-red-500 text-red-900');
                setTimeout(function() {
                    $('#result').removeClass('bg-red-100 border-red-500 text-red-900').text('');
                }, 3000);
                return;
            }

            if (selectedCountry === "Choose a country") {
                $('#countryError').text('Please select country').removeClass('bg-green-100 border-green-500 text-green-900')
                    .addClass('bg-red-100 border-red-500 text-red-900');
                setTimeout(function() {
                    $('#countryError').removeClass('bg-red-100 border-red-500 text-red-900').text('');
                }, 3000);
                return;
            }

            if (selectedGender === "Choose a gender") {
                $('#genderError').text('Please select gender').removeClass('bg-green-100 border-green-500 text-green-900')
                    .addClass('bg-red-100 border-red-500 text-red-900');
                setTimeout(function() {
                    $('#genderError').removeClass('bg-red-100 border-red-500 text-red-900').text('');
                }, 3000);
                return;
            }

            // if (grecaptcha.getResponse().length === 0) {
            //     $('#recaptchaError').text('Please verify your human').removeClass('bg-green-100 border-green-500 text-green-900')
            //         .addClass('bg-red-100 border-red-500 text-red-900');
            //     setTimeout(function() {
            //         $('#recaptchaError').removeClass('bg-red-100 border-red-500 text-red-900').text('');
            //     }, 3000);
            //     return;
            // }

            $.ajax({
                url: './store_user.php',
                type: 'POST',
                data: formData,
                success: function(response) {
                    if (response === 'success') {
                        $('#result').text('Register successfully!').removeClass('bg-red-100 border-red-500 text-red-900')
                            .addClass('bg-green-100 border-green-500 text-green-900');
                        window.location.href = 'success.php';
                    } else if (response === 'exist') {
                        $('#result').text('This Email is already registered. Please use a different email.').removeClass('bg-green-100 border-green-500 text-green-900')
                            .addClass('bg-red-100 border-red-500 text-red-900');

                    } else {
                        $('#result').text('Something went wrong. Please try again later.').removeClass('bg-green-100 border-green-500 text-green-900')
                            .addClass('bg-red-100 border-red-500 text-red-900');
                    }
                    setTimeout(function() {
                        $('#result').removeClass('bg-red-100 border-red-500 text-red-900').text('');
                    }, 3000);
                    verifyHuman();
                },
                error: function(xhr, status, error) {
                    $('#result').text('An error occurred. Please try again later.').removeClass('bg-green-100 border-green-500 text-green-900')
                        .addClass('bg-red-100 border-red-500 text-red-900');
                    verifyHuman();
                }
            });
        });
    });

    const verifyHuman = () => {
        var key = "<?php echo $clientSideKey; ?>";
        grecaptcha.ready(() => {
            grecaptcha.execute(key, {
                action: 'registrants'
            }).then(token => {
                document.querySelector('#recaptchaResponse').value = token;
            });
        });
    }
</script>


<!-- hotel link - (https://www.lottehotel.com/global/my/reservation/accommodation-step2.html?resvCalDisplay=Y&countryCode=&cityCode=&primaryLangID=E&langCode=my&crtLat=&crtLng=&placeid=undefined&hotelCode=LTYG&searchKeyword=LOTTE+HOTEL+YANGON&period=2023-08-10~2023-08-11&roomAdult1=2&roomChild1=0&roomAdult2=0&roomChild2=0&roomAdult3=0&roomChild3=0&people=%7B%22room%22%3A1%2C%22adult%22%3A2%2C%22children%22%3A0%7D&reservDivn=CORPORATE&specialCode=&startDate=2023-08-10&endDate=2023-08-11&numberOfRooms=1&totalNumberOfGuests=2&numberOfChildren=0&netfunnel_key=C09463969E99768943627022C9E40C3D14689420ECC27723466DEBE9379867199E783E813B951C9E3A8FF24C5FD16888CD9DD3F3AC8E33081F080430F2AD20DA75A3BF4EE03F6FCBA24A369C02BA492B592D052B9CCB49BD3FB35B7AB2DC5DB2214FA1D73A1E1FB8AF87D93B957048D36F6E2C302C372C312C302C30) -->