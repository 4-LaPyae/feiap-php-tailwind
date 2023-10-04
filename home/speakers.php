<?php
if ($_SERVER['PHP_SELF'] === '/FEIAP/home/speakers.php') {
    // Redirect to index.php
    header("Location: index.php");
    exit; // Stop further execution of the code
}
$speakers = [
    [
        'name' => 'Dr Marlene Kanga AO FTSE FREng Hon.FIE (Aust) Hon. FIChemE',
        'image' => './images/speakers/marlenekanga.jpg',
        'subtitle' => '',
        'desc' => 'President of the World Federation of Engineering Organisations (WFEO) in 2017-2019'
    ],
    [
        'name' => 'Em Prof. Elizabeth Taylor',
        'image' => './images/speakers/elizahethtaylor.jpg',
        'subtitle' => '',
        'desc' => 'Chair of SmartCrete Collaborative Research Centre (focused on concrete)  and
        Chair, Governing Group, and Deputy Chair, Sydney Accord, of the International Engineering Alliance'
    ],
    [
        'name' => 'Ir. Academician Emeritus Professor Tan Sri Dato’ Dr. Chuah Hean Teik',
        'image' => './images/speakers/Speaker_1.jpg',
        'subtitle' => '',
        'desc' => "Chairman of FEIAP Standing Committee on Engineering Education, and Chairman of the Africa, Asia and the Pacific (AAP) Accord Engineering Education Council"
    ],
    [
        'name' => 'Assoc. Prof. Ir. Dr. Hasril Hasini ',
        'image' => './images/speakers/Speaker_2.JPG',
        'subtitle' => '',
        'desc' => "Deputy Dean (Academic & Quality Assurance), College of Engineering, Universiti Tenaga Nasional (UNITEN), Malaysia and Associate Director (Mechanical), Engineering Accreditation Council, Board of Engineers Malaysia (BEM)"
    ],
    [
        'name' => 'Er. TAN Seng-Chuan',
        'image' => './images/speakers/Speaker_3.JPG',
        'subtitle' => '',
        'desc' => 'Emeritus President of The Institution of Engineers, Singapore & Managing Director of TEMBUSU Asia Consulting Pte Ltd'
    ],
    [
        'name' => 'Ir. Dr. Tan Yean Chin',
        'image' => './images/speakers/tanyeanchin.jpg',
        'subtitle' => '',
        'desc' => 'Secretary General (2008-2023) of the Federation of Engineering Institutions of Asia and the Pacific (FEIAP)'
    ],
    [
        'name' => 'Engr. Muhammad Najeeb Haroon, MNA',
        'image' => './images/speakers/Muhammad_Najeeb_Haroon.JPG',
        'subtitle' => '',
        'desc' => 'Chairman-Pakistan Engineering Council (PEC)'
    ],
    [
        'name' => 'FEDERICO "FRED" A. MONSADA',
        'image' => './images/speakers/FEDERICO_FRED.JPG',
        'subtitle' => '',
        'desc' => 'President - Philippine Technological Council </br> </br> Co-Chair - PTC Accreditation and Certification Board for Engineering & Technology </br> </br>
        Former Chairman - ASEAN Federation of Engineering Organizations'
    ],
    [
        'name' => 'Prof. Dr. Aung Kyaw Myat',
        'image' => './images/speakers/dr_aung_kyaw_myat.PNG',
        'subtitle' => '',
        'desc' => 'President of Myanmar Engineering Council </br> </br> Vice President of ASEAN Academy of Engineering and Technology'
    ],
    [
        'name' => 'Engr. Dipl.-Ing. Myint Oo',
        'image' => './images/speakers/Speaker_4.png',
        'subtitle' => '',
        'desc' => 'Vice President 1, Myanmar Engineering Council'
    ],
    [
        'name' => 'Engr. Kyi Thar',
        'image' => './images/speakers/Engr_Kyi_Thar.JPG',
        'subtitle' => '',
        'desc' => 'Councilor,Myanmar Engineering Council'
    ],
    [
        'name' => 'Engr. Victor Ngun Kio',
        'image' => './images/speakers/victor_ngun_kio.JPG',
        'subtitle' => '',
        'desc' => 'B.E (Civil), R.I.T, 1978 P.E (Water Resources), ACPE     Councilor 
        Myanmar Engineering Council'
    ],
    [
        'name' => 'Prof. Dr. Hla Myo Tun',
        'image' => './images/speakers/hla_myo_tun.JPG',
        'subtitle' => '',
        'desc' => 'Pro-rector Yangon Technological University'
    ],
    [
        'name' => 'Nyein Nyein Oo, Ph.D (Information Technology)',
        'image' => './images/speakers/nyeinnyeinoo.jpg',
        'subtitle' => '',
        'desc' => 'Professor, Head of Data Science Lab
        Department of Computer Engineering and Information Technology
        Yangon Technological University'
    ],
    [
        'name' => 'U Win Ahkar Mein',
        'image' => './images/speakers/u_win_ahkar_mein.JPG',
        'subtitle' => '',
        'desc' => 'Petroleum Professional'
    ],
    // [
    //     'name' => 'Dr. Thet Mon San',
    //     'image' => './images/speakers/Speaker_placeholder.png',
    //     'subtitle' => '',
    //     'desc' => ''
    // ],
  
  
   
   
];
?>
<div class="bg-white lg:py-6 py-4" id="speaker-container">
    <div class="container md:px-10 xs:px-6 px-4 w-full mx-auto">
        <h1 class="lg:text-4xl md:text-3xl text-xl text-gray-900 font-bold text-center">
        Member Economies & Speakers</h1>
        <div class="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-1 gap-x-10 gap-y-20 mt-10">
            <?php foreach ($speakers as $speaker) { ?>
                <div class="flex flex-col items-center">
                    <img class="w-32 h-32 rounded-full mb-1 object-cover object-top" alt="speaker" src="<?= $speaker['image'] ?>" />
                    <h1 class="font-bold text-sm text-center mb-1">
                        <?= $speaker['name'] ?>
                    </h1>
                    <p class="font-light text-sm text-center mb-1">
                        <?= $speaker['subtitle'] ?></p>
                    <p class="font-light text-xs text-center">
                        <?= $speaker['desc'] ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


<!-- 
// [
    //     'name' => 'Prof Arif Bulent Ozguler',
    //     'image' => './images/speakers/Speaker_7.jpg',
    //     'subtitle' => '',
    //     'desc' => 'Deputy Chair, Washington Accord, International Engineering Alliance'
    // ],
    // [
    //     'name' => 'Prof. Dr. Gong Ke',
    //     'image' => './images/speakers/Speaker_14.JPG',
    //     'subtitle' => '',
    //     'desc' => 'Immediate Past President of the World Federation of Engineering Organizations, & 
    //     Chairman of the Academic Committee of Nankai University'
    // ],
    // [
    //     'name' => 'Em Prof. Elizabeth Taylor',
    //     'image' => './images/speakers/Speaker_10.jpg',
    //     'subtitle' => '',
    //     'desc' => 'Chair, Governing Group, International Engineering Alliance (IEA) and Deputy Chair, Sydney Accord, International Engineering Alliance (IEA) & Past Chair, Washington Accord, International Engineering Alliance (IEA)'
    // ],
    // [
    //     'name' => 'Dr. Mandy Liu',
    //     'image' => './images/speakers/Speaker_6.jpg',
    //     'subtitle' => '',
    //     'desc' => 'Chair, Sydney Accord, International Engineering Alliance (IEA) & Office Director and Deputy Executive Director of the Accreditation Council, Institute of Engineering Education Taiwan (IEET)'
    // ],
    // [
    //     'name' => 'Prof. Jürgen Kretschmann',
    //     'image' => './images/speakers/Speaker_xxx.png',
    //     'subtitle' => '',
    //     'desc' => 'WFEO Distinguished Fellow & President of the TH Georg Agricola University and Chairman of the Board of DMT-Lehre und Bildung GmbH, Bochum, Germany '
    // ],
    // [
    //     'name' => 'Prof. Dr. Carsten Ahrens',
    //     'image' => './images/speakers/Speaker_5.jpg',
    //     'subtitle' => '',
    //     'desc' => 'Professor at University of Applied Sciences Jadehochschule in Oldenburg from 1975<br>
    //      Faculty of Civil Engineering, Geoinformation and 
    //     Technical Health'
    // ],
    // [
    //     'name' => 'Dr Rodrigo Perez Fernandez',
    //     'image' => './images/speakers/Speaker_4.png',
    //     'subtitle' => '',
    //     'desc' => 'Professor at Universidad Politécnica de Madrid'
    // ],
    // [
    //     'name' => 'Dr. Michael Milligan',
    //     'image' => './images/speakers/Speaker_12.JPG',
    //     'subtitle' => '',
    //     'desc' => 'Executive Director, CEO, Accreditation Board of Engineering and Technology Inc., (ABET)'
    // ],
    // [
    //     'name' => 'Dr. Lincoln A Wood',
    //     'image' => './images/speakers/Speaker_13.JPG',
    //     'subtitle' => '',
    //     'desc' => 'Engineers Australia (EA)
    //     '
    // ],
    // [
    //     'name' => 'Ir. Dr. TAN Yean Chin',
    //     'image' => './images/speakers/Speaker_18.JPG',
    //     'subtitle' => '',
    //     'desc' => 'Secretary General, Federation of Engineering Institutions of Asia and the Pacific (FEIAP)'
    // ],
    // [
    //     'name' => 'Er. Chong Kee Sen',
    //     'image' => './images/speakers/Speaker_16.JPG',
    //     'subtitle' => '',
    //     'desc' => 'Emeritus President Institution of Engineers Singapore (IES)'
    // ],
    // [
    //     'name' => 'Assoc. Prof. Ir. Dr. Hasril Hasini',
    //     'image' => './images/speakers/Speaker_2.JPG',
    //     'subtitle' => '',
    //     'desc' => 'Deputy Dean (Academic & Quality Assurance), College of Engineering, Universiti Tenaga Nasional (UNITEN), Malaysia and Associate Director (Mechanical), Engineering Accreditation Council, Board of Engineers Malaysia (BEM)'
    // ],
    // [
    //     'name' => 'Prof. Yashin Brijmohan',
    //     'image' => './images/speakers/Speaker_19.PNG',
    //     'subtitle' => '',
    //     'desc' => 'Co-Chair of the Africa Asia Pacific Accord, Board Member of the UNESCO International Centre for Engineering Education, Chairperson of the Engineering Education Committee of the Federation of African Engineering Organisations, and Strategic Advisory Board member of the Da Vinci Business School.'
    // ],
    // [
    //     'name' => 'Dr Bridget Ssamula',
    //     'image' => './images/speakers/Speaker_11.JPG',
    //     'subtitle' => '',
    //     'desc' => 'CEO ,The Engineering Council of South Africa (ECSA)'
    // ],
    // [
    //     'name' => 'Dr Tom Goldfinch',
    //     'image' => './images/speakers/Speaker_24.JPG',
    //     'subtitle' => '',
    //     'desc' => 'Associate Dean (Teaching and Learning), University of Sydney'
    // ],
    // [
    //     'name' => 'Ir Peter Y Wong',
    //     'image' => './images/speakers/Speaker_15.PNG',
    //     'subtitle' => '',
    //     'desc' => 'Director Yook Tong Electric Co., Limited, Hong Kong, China'
    // ],
    // [
    //     'name' => 'Prof. TU Shandong (TU Shan-Tung)',
    //     'image' => './images/speakers/Speaker_23.JPG',
    //     'subtitle' => '',
    //     'desc' => 'Member, Chinese Academy of Engineering and Chair Professor, East China University of Science and Technology'
    // ],
    // [
    //     'name' => 'Prof. K.K. Aggarwal',
    //     'image' => './images/speakers/Speaker_21.JPG',
    //     'subtitle' => '',
    //     'desc' => 'Former Chairman, National Board of Accreditation Former Founder Vice Chancellor, I P University, Delhi Former President, Institution of Electronics & Telecom Engrs. Former President, Computer Society of India'
    // ],
    // [
    //     'name' => 'Mr. Luis Italo Chivilches Ayala',
    //     'image' => './images/speakers/Speaker_22.JPG',
    //     'subtitle' => '',
    //     'desc' => 'Administrative Engineer'
    // ],
    // [
    //     'name' => 'Prof. Dr. Aung Kyaw Myat',
    //     'image' => './images/speakers/Speaker_8.jpg',
    //     'subtitle' => '',
    //     'desc' => 'President,Myanmar Engineering Council & Vice President,ASEAN Academy of Engineering and Technology (AAET)'
    // ],
    // [
    //     'name' => 'Prof. Dr. Zaw Min Aung',
    //     'image' => './images/speakers/Speaker_9.jpg',
    //     'subtitle' => '',
    //     'desc' => 'Chair,
    //     WFEO – Committee on Education in Engineering (CEIE) & Chair,Engineering Education Accreditation Committee'
    // ], -->