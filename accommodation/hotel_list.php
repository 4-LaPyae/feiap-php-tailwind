<?php
$yHotel = [
    [
        'name' => 'Lotte Hotel',
        'image' => "./images/hotel/Lotte.jpg",
        'website' => 'https://www.lottehotel.com/yangon-hotel',
        'email' => ['thandarshweyi@lotte.net'],
        'phone' => ['+951-93 51 000'],
    ],
    [
        'name' => 'Myanmar Life Hotel',
        'image' => "./images/hotel/myanmar_life.jpg",
        'website' => 'https://www.myanmarlifehotel.com',
        'email' => ['myanmarlifehotelyangon@gmail.com'],
        'phone' => ['+959 50 38 271'],
    ],
    [
        'name' => 'Hotel Yangon',
        'image' => "./images/hotel/hotelyangon.png",
        'website' => 'https://www.hotelyangon.net',
        'email' => ['hotelyangonsales@gmail.com', 'hotelyangon@hotelyangon.com.mm'],
        'phone' => ['+959 442 905 697'],
    ]
];

$npdHotel =    [
    [
        'name' => 'Naypyitaw Grand Aster Villa Hotel',
        'image' => "./images/hotel/grand_aster_villa.jpg",
        'website' => null,
        'email' => ['grandastervilla@gmail.com', 'arwarda20171999@gmail.com'],
        'phone' => ['+959 447 437 733', '+959 883 597 395'],
    ]
];
?>

<div class="container mx-auto px-10">
    <h1 class="text-center p-10 md:text-3xl lg:text-4xl sm:text-3xl text-lg">Accommodation at Yangon</h1>
    <section class="flex flex-col md:flex-row items-center justify-center gap-10">
        <?php foreach ($yHotel as $key => $value) { ?>

        <div class="relative w-full overflow-hidden"
            style="background-image: url('<?= $value['image'] ?>');height:400px;background-repeat:no-repeat;background-position:center;background-size:cover;border-radius:10px">
            <div class="flex flex-col items-center gap-6 "
                style="position: absolute;top:50%;left:50%;transform:translate(-50%,-50%)">
                <div id="aay"
                    class="flex items-center justify-start backdrop-opacity-20 backdrop-invert bg-white/90 w-[240px] md:w-[340px]   p-1 rounded-lg">
                    <img class="w-10 h-10 mr-5" src="./images/hotel/icon/hotel_icon.png" alt="hotel-icon">
                    <h1 class="font-bold"><?= $value['name'] ?></h1>
                </div>
                <div id="aay"
                    class="flex items-center justify-start backdrop-opacity-20 backdrop-invert bg-white/90 w-[240px]  md:w-[340px]   p-1 rounded-lg">
                    <img class="w-10 h-10 mr-2" src="./images/hotel/icon/website_icon.svg" alt="hotel-icon">
                    <a class="line-clamp-1 md:text-clip" href="<?= $value['website'] ?>" target="_blank">
                        <p class="font-bold text-xs ">
                            <?= $value['website'] ?>
                        </p>
                    </a>
                </div>
                <div id="aay"
                    class="flex items-center justify-start  overflow-hidden backdrop-opacity-20 backdrop-invert bg-white/90 w-[240px]  md:w-[340px]   p-1 rounded-lg">
                    <img class="w-10 h-10 mr-2" src="./images/hotel/icon/email_icon.svg" alt="hotel-icon">
                    <div class="flex flex-col items-start">
                        <?php foreach ($value['email'] as $key => $email) { ?>
                        <a class=" font-bold text-xs" href="mailto:<?= $email ?>">
                            <h1 class=""><?= $email ?></h1>
                        </a>
                        <?php } ?>
                    </div>
                </div>
                <div id="aay"
                    class="flex items-center justify-start backdrop-opacity-20 backdrop-invert bg-white/90 w-[240px]  md:w-[340px]   p-1 rounded-lg">
                    <img class="w-10 h-10 mr-2 text-xs" src="./images/hotel/icon/phone_icon.svg" alt="hotel-icon">
                    <div class="flex flex-col items-start">
                        <?php foreach ($value['phone'] as $key => $phone) { ?>
                        <a href="tel:<?= $phone ?>">
                            <h1 class="font-bold"><?= $phone ?></h1>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </section>
    <h1 class="text-center p-10 md:text-3xl lg:text-4xl sm:text-3xl text-lg">Accommodation at Nay Pyi Taw</h1>
    <?php foreach ($npdHotel as $key => $value) { ?>
    <div class="flex flex-col md:flex-row items-start justify-between ">
        <div class="relative w-full md:w-1/2"
            style="background-image: url('<?= $value['image'] ?>');height:400px;background-repeat:no-repeat;background-position:center;background-size:cover;border-radius:10px">
            <div class="flex flex-col gap-6" style="position: absolute;top:50%;left:50%;transform:translate(-50%,-50%)">
                <div
                    class="flex items-center backdrop-opacity-20 backdrop-invert bg-white/90 md:w-96 xs:w-80 w-[245px] text-center p-1 rounded-lg">
                    <img class="w-10 h-10 mr-5" src="./images/hotel/icon/hotel_icon.png" alt="hotel-icon">
                    <h1 class="font-bold"><?= $value['name'] ?></h1>
                </div>
                <?php if (!is_null($value['website'])) { ?>
                <div
                    class="flex items-center backdrop-opacity-20 backdrop-invert bg-white/90 md:w-96 xs:w-80 text-center p-1 rounded-lg">
                    <img class="w-10 h-10 mr-2" src="./images/hotel/icon/website_icon.svg" alt="hotel-icon">
                    <a class="md:text-clip line-clamp-1" href="<?= $value['website'] ?>" target="_blank">
                        <h1 class="font-bold text-xs"><?= $value['website'] ?></h1>
                    </a>
                </div>
                <?php } ?>
                <div
                    class="flex items-center backdrop-opacity-20 backdrop-invert bg-white/90 md:w-96 xs:w-80 truncate text-center p-1 rounded-lg">
                    <img class="w-10 h-10 mr-2" src="./images/hotel/icon/email_icon.svg" alt="hotel-icon">
                    <div class="flex flex-col items-start">
                        <?php foreach ($value['email'] as $key => $email) { ?>
                        <a href="mailto:<?= $email ?>">
                            <h1 class="font-bold text-xs"><?= $email ?></h1>
                        </a>
                        <?php } ?>
                    </div>
                </div>
                <div
                    class="flex items-center backdrop-opacity-20 backdrop-invert bg-white/90 md:w-96 xs:w-80 text-center p-1 rounded-lg">
                    <img class="w-10 h-10 mr-2 text-xs" src="./images/hotel/icon/phone_icon.svg" alt="hotel-icon">
                    <div class="flex flex-col items-start">
                        <?php foreach ($value['phone'] as $key => $phone) { ?>
                        <a href="tel:<?= $phone ?>">
                            <h1 class="font-bold"><?= $phone ?></h1>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="w-full md:w-1/2 flex flex-col">
            <h1 class="md:text-4xl font-bold text-3xl text-center pb-[2rem] pt-[2rem] md:pt-0">ROOM RATE</h1>
            <div class="flex flex-col md:flex-row  md:justify-evenly md:items-start items-center w-full ">
                <div class="leading-loose pb-[2rem] md:pb-0">
                    <h1 class="text-xl text-red-500 font-bold">Foreigner Fees</h1>
                    <h4 class="mt-2 text-lg font-semibold">Single(or) Double Rm</h4>
                    <h5 class="indent-6"> - 35$ ( By Visa )</h5>
                    <h5 class="indent-6"> - 30$ ( By Cash)</h5>
                    <h4 class="mt-2 font-semibold">Suite Room</h4>
                    <h5 class="indent-6"> - 42$ ( By Visa )</h5>
                    <h5 class="indent-6"> - 36$ ( By Cash)</h5>
                    <h4 class="mt-2 font-semibold">Extra Bed</h4>
                    <h5 class="indent-6"> - 10$</h5>
                </div>
                <div class="leading-loose">
                    <h1 class="text-xl text-red-500 font-bold">Local Fees</h1>
                    <h4 class="mt-2 font-semibold">Single(or) Double Rm</h4>
                    <h5 class="indent-6"> - 54000/- Ks</h5>
                    <h4 class="mt-2 font-semibold">Suite Room</h4>
                    <h5 class="indent-6"> - 65000/- Ks</h5>
                </div>
            </div>
            <!-- <div class="grid grid-cols-2 mt-2">
                <div>
                    <h1 class="text-lg text-red-500 font-semibold">Foreigner Fees</h1>
                    <h4 class="mt-2 font-semibold">Single(or) Double Rm</h4>
                    <h5 class="indent-6"> - 35$ ( By Visa )</h5>
                    <h5 class="indent-6"> - 30$ ( By Cash)</h5>
                    <h4 class="mt-2 font-semibold">Suite Room</h4>
                    <h5 class="indent-6"> - 42$ ( By Visa )</h5>
                    <h5 class="indent-6"> - 36$ ( By Cash)</h5>
                    <h4 class="mt-2 font-semibold">Extra Bed</h4>
                    <h5 class="indent-6"> - 10$</h5>
                </div>
                <div>
                    <h1 class="text-lg text-red-500 font-semibold">Local Fees</h1>
                    <h4 class="mt-2 font-semibold">Single(or) Double Rm</h4>
                    <h5 class="indent-6"> - 54000/- Ks</h5>
                    <h4 class="mt-2 font-semibold">Suite Room</h4>
                    <h5 class="indent-6"> - 65000/- Ks</h5>
                </div>
            </div> -->
        </div>
    </div>
    <?php } ?>

</div>