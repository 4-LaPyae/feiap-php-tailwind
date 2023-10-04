<?php
if ($_SERVER['PHP_SELF'] === '/FEIAP/home/contact.php') {
    // Redirect to index.php
    header("Location: index.php");
    exit; // Stop further execution of the code
}
?>
<!-- component -->
<div class="py-4 bg-white">
    <div class="container md:px-10 xs:px-6 px-4 w-full mx-auto">
        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
            <div class="w-full text-center">
                <div class="grid md:grid-cols-2 grid-cols-1 md:gap-20 gap-10 md:mt-4 mt-2">
                    <div class="w-full">
                        <h1 class="lg:text-4xl md:text-3xl text-xl text-gray-900 font-bold lg:text-left mb-6 md:text-center">
                            Contact Detail</h1>
                        <div class="flex items-start items-center">
                            <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-20 h-20 text-gray-500 xl:block hidden">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg> -->
                            <img id="officeimg" class="hidden lg:block opacity-50" src="./images/office.png" alt="office">
                            <p class="lg:mx-2">
                            </p>
                            <div class="ml-4">
                                <p class="text-gray-600 text-start lg:text-lg text-md leading-8 font-bold italic">
                                Myanmar Engineering Council (MEngC) No (5A), Khay Yay Pin Street, Lanmadaw Township, Yangon, Myanmar
                                </p>
                                <div class="border-b text-left border-dotted border-gray-400 my-2"></div> 
                                <p class=" text-gray-600 text-start lg:text-lg md:text-md leading-8 font-bold italic ">
                                Federation of Myanmar Engineering Societies (Fed. MES) Hlaing Universities’Campus, Hlaing Township,Yangon,Myanmar
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start items-center">
                            <img id="emailimg" class="w-14 h-14 hidden lg:block opacity-70" src="./images/email.jpg" alt="email">
                            <p class="lg:mx-2">
                            </p>
                            <div class="ml-4">
                            <p class="text-blue-600 text-center lg:text-lg text-sm lg:tracking-wide font-bold italic">
                                <a href="mailto:  secretariat.ceie@myanmarengc.org">
                                Secreatariat.feiapmyanmar@gmail.com
</a>
                                <!-- <a href="mailto:  secretariat.ceie@myanmarengc.org">
                                    accreditation@myanmarengc.org</a> -->
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <h1 class="lg:text-4xl md:text-3xl text-xl text-gray-900 font-bold mb-6 text-center">
                        Accommodation</h1>

                        <p class="text-gray-600 text-center lg:text-xl md:text-lg  text-md tracking-wide font-bold italic mt-2">
                        Accommodation at Yangon
                        </p>
                                <a href="https://www.lottehotel.com/yangon-hotel/en.html" class=" text-center  text-[#7977b8] font-semibold italic">
                                    <h3> Lotte Hotel</h3>
                                </a>
                                <a href="accommodation.php" class=" text-center  text-[#7977b8] font-semibold italic">
                                <h3>Hotel Yangon</h3>
                                <h3> Myanmar Life Hotel</h3>
                             </a>
                    
                        <p class="text-gray-600 text-center lg:text-xl md:text-lg  text-md tracking-wide  font-bold italic mt-2">
                        Accommodation at Nay Pyi Taw
                        </p>
                        <a href="accommodation.php" class="inline-block text-left text-[#7977b8] font-semibold italic">
                            Naypyitaw Grand Aster Villa Hotel
</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>