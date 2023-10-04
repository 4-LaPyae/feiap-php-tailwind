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

<div class="px-10">
    <h1 class="text-center p-10 md:text-3xl lg:text-4xl sm:text-3xl text-lg">Accommodation at Yangon</h1>
    <div class="grid lg:grid-cols-2 xl:grid-cols-3 gap-4 grid-cols-1">
        <?php foreach ($yHotel as $key => $value) { ?>
            <div class="w-full">
                <div class="relative w-full" style="background-image: url('<?= $value['image'] ?>');height:400px;background-repeat:no-repeat;background-position:center;background-size:cover;border-radius:10px">
                    <div class="flex flex-col gap-6" style="position: absolute;top:50%;left:50%;transform:translate(-50%,-50%)">
                        <div id="aay" class="flex items-center backdrop-opacity-20 backdrop-invert bg-white/90 md:w-96 xs:w-80 text-center p-1 rounded-lg">
                            <img class="w-10 h-10 mr-5" src="./images/hotel/icon/hotel_icon.png" alt="hotel-icon">
                            <h1 class="font-bold"><?= $value['name'] ?></h1>
                        </div>
                        <div id="aay" class="flex flex-row items-center backdrop-opacity-20 backdrop-invert bg-white/90 md:w-96 xs:w-80 text-center p-1 rounded-lg">
                            <img class="w-10 h-10 mr-2" src="./images/hotel/icon/website_icon.svg" alt="hotel-icon">
                            <a class="truncate md:text-clip" href="<?= $value['website'] ?>" target="_blank">
                                <p class="font-bold text-xs ">
                                    <?= $value['website'] ?>
                                </p>
                            </a>
                        </div>
                        <div id="aay" class="flex items-center backdrop-opacity-20 backdrop-invert bg-white/90 md:w-96 xs:w-80 truncate text-center p-1 rounded-lg">
                           
                        <img class="w-10 h-10 mr-2" src="./images/hotel/icon/email_icon.svg" alt="hotel-icon">
                            <div class="flex flex-col items-start">
                                <?php foreach ($value['email'] as $key => $email) { ?>
                                    <a class="truncate text-ellipsis  md:text-clip" href="mailto:<?= $email ?>">
                                        <h1 class="font-bold text-xs"><?= $email ?></h1>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                        <div id="aay" class="flex items-center backdrop-opacity-20 backdrop-invert bg-white/90 md:w-96 xs:w-80 text-center p-1 rounded-lg">
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
            </div>
        <?php } ?>
    </div>


    <h1 class="text-center p-10 md:text-3xl lg:text-4xl sm:text-3xl text-lg">Accommodation at Nay Pyi Taw</h1>
    <?php foreach ($npdHotel as $key => $value) { ?>
        <div class="grid grid-cols-12 gap-4">
            <div class=" lg:col-span-6 xl:col-span-8  col-span-12">
                <div class="relative" style="background-image: url('<?= $value['image'] ?>');width:100%;height:400px;background-repeat:no-repeat;background-position:center;background-size:cover;border-radius:10px">
                    <div class="flex flex-col gap-6 sm:w-30 sm:h-30" style="position: absolute;top:50%;left:50%;transform:translate(-50%,-50%)">
                        <div class="flex items-center backdrop-opacity-20 backdrop-invert bg-white/90 w-[240px]  md:w-[340px] text-center p-1 rounded-lg">
                            <img class="w-10 h-10 mr-5" src="./images/hotel/icon/hotel_icon.png" alt="hotel-icon">
                            <h1 class="font-bold"><?= $value['name'] ?></h1>
                        </div>
                        <?php if (!is_null($value['website'])) { ?>
                            <div class="flex items-center backdrop-opacity-20 backdrop-invert bg-white/90 md:w-96 xs:w-80 text-center p-1 rounded-lg">
                                <img class="w-10 h-10 mr-2" src="./images/hotel/icon/website_icon.svg" alt="hotel-icon">
                                <a href="<?= $value['website'] ?>" target="_blank">
                                    <h1 class="font-bold text-xs"><?= $value['website'] ?></h1>
                                </a>
                            </div>
                        <?php } ?>
                        <div class="flex items-center backdrop-opacity-20 backdrop-invert bg-white/90 md:w-96 xs:w-80 truncate text-center p-1 rounded-lg">
                            <img class="w-10 h-10 mr-2" src="./images/hotel/icon/email_icon.svg" alt="hotel-icon">
                            <div class="flex flex-col items-start">
                                <?php foreach ($value['email'] as $key => $email) { ?>
                                    <a href="mailto:<?= $email ?>">
                                        <h1 class="font-bold text-xs"><?= $email ?></h1>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="flex items-center backdrop-opacity-20 backdrop-invert bg-white/90 md:w-96 xs:w-80 text-center p-1 rounded-lg">
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
            </div>
            <div class="flex flex-col lg:col-span-4 col-span-12">
                <h1 class="lg:text-3xl font-semibold text-xl text-center">ROOM RATE</h1>
                <div class="grid grid-cols-2 mt-2">
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
                </div>
            </div>
        </div>
    <?php } ?>
</div>