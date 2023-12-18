<?php include_once 'inc.wamp.php'; ?>

<!DOCTYPE html>
<html lang="en-US">
<!-- Head -->

<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Everything NIFB" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="fwbc,kjv,1611,censored,censorship,sanderson1611,sanderson,steven,anderson,pastor,berzins,robinson,mejia,shelley,thompson,jimenez,verity,tuscon,stedfast,sure,foundation,liberty,mountain,faithful,word,first,works,pure,words,all,scripture,baptist,church,osas,kjvo,grace,bible,jesus,christ,banned,preaching,ban,truth,bitchute,odysee,ugetube,king,james,post,trib,pre,wrath,matt,powell,creation,soul,winning,independent,fundemental,ifb,nifb,red,hot,fire,breathing,leather,lung,uncensored" />

    <!-- Meta OG -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="ALLthePREACHING" />
    <meta property="og:description" content="Everything NIFB." />
    <meta property="og:url" content="http://www.allthepreaching.com" />
    <meta property="og:image" content="https://atp.allthepreaching.com/atp/images/ATP_FB_BANNER_Pastor_Collage.png" />
    <meta property="og:image:alt" content="ALLthePREACHING" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../favicon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png" />
    <link rel="manifest" href="../favicon/site.webmanifest" />

    <!-- CSS -->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/output.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/video-player.css">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="../js/video-menu.js" defer></script>
    <script src="../js/image-overlay.js" defer></script>
    <script src="../js/video-player.js" defer></script>
    <script src="../js/tag-scroll.js" defer></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

    <!-- Title -->
    <title>ALLthePREACHING</title>
</head>
<!-- Body -->

<body class="relative bg-black" x-data="{ open: false }">

    <!-- */*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/* -->
    <!-- */*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/* -->

    <!-- Top Nav -->

    <!-- */*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/* -->
    <!-- */*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/* -->

    <!-- Top Nav Container -->
    <div class="bg-black w-full fixed top-0">

        <!-- Top Nav -->
        <nav class="w-full flex flex-row items-center justify-between px-4 pt-2">

            <!-- Top Nav Toggle Logo Container -->
            <div class="flex flex-row items-center justify-between flex-shrink lg:w-60 h-auto cursor-pointer">

                <!-- Top Nav Toggle -->
                <div class="flex items-center justify-center w-12 h-12 ml-3" @click="open = !open">
                    <svg fill="#ffffff" class="w-6 h-6" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h4v4H0V0zm0 6h4v4H0V6zm0 6h4v4H0v-4zM6 0h4v4H6V0zm0 6h4v4H6V6zm0 6h4v4H6v-4zm6-12h4v4h-4V0zm0 6h4v4h-4V6zm0 6h4v4h-4v-4z" fill-rule="evenodd" />
                    </svg>
                </div>

                <!-- Top Nav Logo -->
                <div class="hidden lg:block lg:mr-4">
                    <a href="../index.php">
                        <img src="../img/atp-logo-2.png" class="w-50 ml-7" alt="ALLthePREACHING">
                    </a>
                </div>
            </div>

            <!-- Top Nav Search Bar & Mic -->
            <div class="flex flex-row items-center justify-between h-full w-96 lg:w-2/5 cursor-pointer">

                <!-- Top Nav Search Bar -->
                <div class="flex justify-between items-center w-full h-12 bg-[#990000] border border-[#990000] rounded-full">

                    <!-- Search Input -->
                    <input type="text" class="flex-grow bg-black text-white rounded-full h-full text-lg px-4" placeholder="Search...">

                    <!-- Search Button -->
                    <div class="flex items-center justify-center text-white px-4 h-full border-l border-l-[#990000] cursor-pointer">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg>
                    </div>
                </div>

                <!-- Top Nav Search Mic -->
                <div class="flex justify-center items-center w-12 h-12 bg-[#990000] border border-[#990000] rounded-full p-1 ml-2 cursor-pointer">
                    <a href="#">
                        <svg fill="#ffffff" class="w-10 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512">
                            <g>
                                <path d="m439.5,236c0-11.3-9.1-20.4-20.4-20.4s-20.4,9.1-20.4,20.4c0,70-64,126.9-142.7,126.9-78.7,0-142.7-56.9-142.7-126.9 0-11.3-9.1-20.4-20.4-20.4s-20.4,9.1-20.4,20.4c0,86.2 71.5,157.4 163.1,166.7v57.5h-23.6c-11.3,0-20.4,9.1-20.4,20.4 0,11.3 9.1,20.4 20.4,20.4h88c11.3,0 20.4-9.1 20.4-20.4 0-11.3-9.1-20.4-20.4-20.4h-23.6v-57.5c91.6-9.3 163.1-80.5 163.1-166.7z" />
                                <path d="m256,323.5c51,0 92.3-41.3 92.3-92.3v-127.9c0-51-41.3-92.3-92.3-92.3s-92.3,41.3-92.3,92.3v127.9c0,51 41.3,92.3 92.3,92.3zm-52.3-220.2c0-28.8 23.5-52.3 52.3-52.3s52.3,23.5 52.3,52.3v127.9c0,28.8-23.5,52.3-52.3,52.3s-52.3-23.5-52.3-52.3v-127.9z" />
                            </g>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Top Nav Login Notifications Upload & Profile Container -->
            <div class="flex flex-row items-center justify-between cursor-pointer">

                <!-- Top Nav Upload -->
                <div class="flex justify-center items-center w-12 h-12 border border-[#990000] rounded-full p-1 ml-2">
                    <a href="#">
                        <svg fill="#ffffff" class="w-9 h-7" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512">
                            <g>
                                <path d="m480.6,165.7h-216.4v-46.3h216.4c11.3,0 20.4-9.1 20.4-20.4 0-11.3-9.1-20.4-20.4-20.4h-236.8c-11.3,0-20.4,9.1-20.4,20.4v66.7h-69.4c-11.3,0-20.4,9.1-20.4,20.4v42.5l-93.2-45c-8.9-4.9-28.4-1.6-29.3,18.4v195.1c1.2,19.3 19.5,23.5 29.3,18.4l93.2-45v42.5c0,11.3 9.1,20.4 20.4,20.4h326.7c11.3,0 20.4-9.1 20.4-20.4v-226.8c-0.1-11.3-9.2-20.5-20.5-20.5zm-428.8,198.9v-130.1l81.7,39.4v51.3l-81.7,39.4zm408.4,28h-285.9v-186h285.8v186z" />
                            </g>
                        </svg>
                    </a>
                </div>

                <!-- Top Nav Notifications -->
                <div class="flex justify-center items-center w-12 h-12 border border-[#990000] rounded-full p-1 ml-2 relative">
                    <a href="#">
                        <svg class="w-10 h-8" viewBox="0 0 24 24" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.00195 17H5.60636C4.34793 17 3.71872 17 3.58633 16.9023C3.4376 16.7925 3.40126 16.7277 3.38515 16.5436C3.37082 16.3797 3.75646 15.7486 4.52776 14.4866C5.32411 13.1835 6.00031 11.2862 6.00031 8.6C6.00031 7.11479 6.63245 5.69041 7.75766 4.6402C8.88288 3.59 10.409 3 12.0003 3C13.5916 3 15.1177 3.59 16.2429 4.6402C17.3682 5.69041 18.0003 7.11479 18.0003 8.6C18.0003 11.2862 18.6765 13.1835 19.4729 14.4866C20.2441 15.7486 20.6298 16.3797 20.6155 16.5436C20.5994 16.7277 20.563 16.7925 20.4143 16.9023C20.2819 17 19.6527 17 18.3943 17H15.0003M9.00195 17L9.00031 18C9.00031 19.6569 10.3435 21 12.0003 21C13.6572 21 15.0003 19.6569 15.0003 18V17M9.00195 17H15.0003" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <div class="absolute bottom-0 left-0 w-3 h-3 bg-orange-600 rounded-full z-10"></div>
                </div>

                <!-- Top Nav Profile -->
                <div class="flex justify-center items-center w-12 h-12 border border-[#990000] rounded-full p-1 ml-2">
                    <a href="#">
                        <svg class="w-8 h-6" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                            <title>profile [#1341]</title>
                            <desc>Created with Sketch.</desc>
                            <defs>

                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Dribbble-Light-Preview" transform="translate(-180.000000, -2159.000000)" fill="#ffffff">
                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                        <path d="M134,2008.99998 C131.783496,2008.99998 129.980955,2007.20598 129.980955,2004.99998 C129.980955,2002.79398 131.783496,2000.99998 134,2000.99998 C136.216504,2000.99998 138.019045,2002.79398 138.019045,2004.99998 C138.019045,2007.20598 136.216504,2008.99998 134,2008.99998 M137.775893,2009.67298 C139.370449,2008.39598 140.299854,2006.33098 139.958235,2004.06998 C139.561354,2001.44698 137.368965,1999.34798 134.722423,1999.04198 C131.070116,1998.61898 127.971432,2001.44898 127.971432,2004.99998 C127.971432,2006.88998 128.851603,2008.57398 130.224107,2009.67298 C126.852128,2010.93398 124.390463,2013.89498 124.004634,2017.89098 C123.948368,2018.48198 124.411563,2018.99998 125.008391,2018.99998 C125.519814,2018.99998 125.955881,2018.61598 126.001095,2018.10898 C126.404004,2013.64598 129.837274,2010.99998 134,2010.99998 C138.162726,2010.99998 141.595996,2013.64598 141.998905,2018.10898 C142.044119,2018.61598 142.480186,2018.99998 142.991609,2018.99998 C143.588437,2018.99998 144.051632,2018.48198 143.995366,2017.89098 C143.609537,2013.89498 141.147872,2010.93398 137.775893,2009.67298" id="profile-[#1341]">

                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>

                <!-- Top Nav Login -->
                <div class="flex justify-center items-center w-12 h-12 border border-[#990000] rounded-full p-1 ml-2">
                    <a href="#">
                        <svg class="w-10 h-8" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#ffffff">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.02 3.77l.01-.01.99.99V2.5l-.5-.5h-9l-.51.5v.493L2 3v10.29l.36.46 5 1.72L8 15v-1h3.52l.5-.5v-2.25l-1 1V13H8V4.71l-.33-.46L4.036 3h6.984v.77zM7 14.28l-4-1.34V3.72l4 1.34v9.22zm3.09-6.75h4.97v1h-4.93l1.59 1.6-.71.7-2.47-2.46v-.71l2.49-2.48.7.7-1.64 1.65z" />
                        </svg>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <!-- */*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/* -->
    <!-- */*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/* -->

    <!-- Side Nav -->

    <!-- */*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/* -->
    <!-- */*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/* -->

    <!-- Side Nav Container -->
    <div class="bg-black text-white h-screen w-72 fixed top-0 left-0 overflow-x-hidden overflow-y-auto z-10 flex-shrink-0 transition-all duration-500 cursor-pointer" :class="{ 'w-0 invisible': !open, 'w-72 visible': open }">

        <!-- Side Nav Header -->
        <div class="bg-black flex flex-row w-full items-center justify-start px-6 py-2 mb-4 sticky top-0">

            <!-- Side Nav Toggle -->
            <div class="flex items-center justify-start w-12 h-12 ml-2" @click="open = !open">
                <svg fill="#990000" class="w-6 h-6" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h4v4H0V0zm0 6h4v4H0V6zm0 6h4v4H0v-4zM6 0h4v4H6V0zm0 6h4v4H6V6zm0 6h4v4H6v-4zm6-12h4v4h-4V0zm0 6h4v4h-4V6zm0 6h4v4h-4v-4z" fill-rule="evenodd" />
                </svg>
            </div>

            <!-- Side Nav Logo -->
            <div class="ml-4">
                <a href="../index.php">
                    <img src="../img/atp-logo-2.png" class="border-2 border-red-700 w-60" alt="ALLthePREACHING">
                </a>
            </div>
        </div>

        <!-- Side Nav Section 1 Container -->
        <div class="w-[87%] flex flex-col ml-6">

            <!-- Home Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800 bg-gray-800">

                <!-- Home Icon -->
                <div class="mr-8 ml-2">
                    <svg class="w-6 h-6" viewBox="0 -0.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                        <title>home [#1391]</title>
                        <desc>Created with Sketch.</desc>
                        <defs>

                        </defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Dribbble-Light-Preview" transform="translate(-419.000000, -720.000000)" fill="#990000">
                                <g id="icons" transform="translate(56.000000, 160.000000)">
                                    <path d="M379.79996,578 L376.649968,578 L376.649968,574 L370.349983,574 L370.349983,578 L367.19999,578 L367.19999,568.813 L373.489475,562.823 L379.79996,568.832 L379.79996,578 Z M381.899955,568.004 L381.899955,568 L381.899955,568 L373.502075,560 L363,569.992 L364.481546,571.406 L365.099995,570.813 L365.099995,580 L372.449978,580 L372.449978,576 L374.549973,576 L374.549973,580 L381.899955,580 L381.899955,579.997 L381.899955,570.832 L382.514204,571.416 L384.001,570.002 L381.899955,568.004 Z" id="home-[#1391]">

                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <!-- Home Label -->
                <div class="font-bold">
                    Home
                </div>
            </div>

            <!-- Shorts Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Shorts Icon -->
                <div class="mr-8 ml-2">
                    <svg fill="#990000" class="w-6 h-6" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 490 490" xml:space="preserve">
                        <g>
                            <path d="M245,490c135.091,0,245-109.909,245-245S380.091,0,245,0S0,109.909,0,245S109.909,490,245,490z M245,30.625
		c118.208,0,214.375,96.167,214.375,214.375S363.208,459.375,245,459.375S30.625,363.208,30.625,245S126.792,30.625,245,30.625z" />
                            <path d="M165.536,121.438v238.794l223.302-119.39L165.536,121.438z M196.161,172.55l127.719,68.293l-127.719,68.278V172.55z" />
                        </g>
                    </svg>
                </div>
                <!-- Shorts Label -->
                <div class="font-bold">
                    Shorts
                </div>
            </div>

            <!-- Subscriptions Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Subscriptions Icon -->
                <div class="mr-8 ml-2">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 2H6v2h12V2zM4 6h16v2H4V6zm-2 4h20v12H2V10zm18 10v-8H4v8h16z" fill="#990000" />
                    </svg>
                </div>
                <!-- Subscriptions Label -->
                <div class="font-bold">
                    Subscriptions
                </div>
            </div>

            <!-- Music Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Music Icon -->
                <div class="mr-8 ml-2">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.38351 13.793C1.93748 10.6294 1.71447 9.04765 2.66232 8.02383C3.61017 7 5.29758 7 8.67239 7H15.3276C18.7024 7 20.3898 7 21.3377 8.02383C22.2855 9.04765 22.0625 10.6294 21.6165 13.793L21.1935 16.793C20.8437 19.2739 20.6689 20.5143 19.7717 21.2572C18.8745 22 17.5512 22 14.9046 22H9.09536C6.44881 22 5.12553 22 4.22834 21.2572C3.33115 20.5143 3.15626 19.2739 2.80648 16.793L2.38351 13.793Z" stroke="#990000" stroke-width="1.5" />
                        <path d="M12 17C12 17.8284 11.3284 18.5 10.5 18.5C9.67157 18.5 9 17.8284 9 17C9 16.1716 9.67157 15.5 10.5 15.5C11.3284 15.5 12 16.1716 12 17ZM12 17V10.5C12 12.1569 13.8954 13.5 15 13.5" stroke="#990000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19.5617 7C19.7904 5.69523 18.7863 4.5 17.4617 4.5H6.53788C5.21323 4.5 4.20922 5.69523 4.43784 7" stroke="#990000" stroke-width="1.5" />
                        <path d="M17.4999 4.5C17.5283 4.24092 17.5425 4.11135 17.5427 4.00435C17.545 2.98072 16.7739 2.12064 15.7561 2.01142C15.6497 2 15.5194 2 15.2588 2H8.74099C8.48035 2 8.35002 2 8.24362 2.01142C7.22584 2.12064 6.45481 2.98072 6.45704 4.00434C6.45727 4.11135 6.47146 4.2409 6.49983 4.5" stroke="#990000" stroke-width="1.5" />
                    </svg>
                </div>
                <!-- Music Label -->
                <div class="font-bold">
                    Spiritual Music
                </div>
            </div>
        </div>

        <!-- Side Nav Section Separator -->
        <div class="border-t border-t-[#990000] w-5/6 my-1 mx-auto"></div>

        <!-- Side Nav Section 2 Container -->
        <div class="w-[87%] flex flex-col ml-6">

            <!-- You Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- You Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex flex-row items-center justify-center">
                    YOU
                    <svg fill="#990000" class="w-6 h-6" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg">
                        <path d="M181.65674,133.65723l-80,80A8.0001,8.0001,0,0,1,88,208V48a8.0001,8.0001,0,0,1,13.65674-5.65723l80,80A8.00034,8.00034,0,0,1,181.65674,133.65723Z" />
                    </svg>
                </div>
                <!-- You Label -->
                <div class="font-bold">

                </div>
            </div>

            <!-- Your Channel Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Your Channel Icon -->
                <div class="mr-8 ml-2">
                    <svg fill="#990000" class="w-6 h-6" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #990000;
                            }
                        </style>
                        <g>
                            <path class="st0" d="M256,0C114.613,0,0,114.616,0,255.996C0,397.382,114.613,512,256,512c141.386,0,256-114.617,256-256.004
		C512,114.616,397.387,0,256,0z M255.996,401.912c-69.247-0.03-118.719-9.438-117.564-18.058
		c6.291-47.108,44.279-51.638,68.402-70.94c10.832-8.666,16.097-6.5,16.097-20.945c0-5.053,0-14.446,0-23.111
		c-6.503-7.219-8.867-6.317-14.366-34.663c-11.112,0-10.396-14.446-15.638-27.255c-4.09-9.984-0.988-14.294,2.443-16.165
		c-1.852-9.87-0.682-43.01,13.532-60.259l-2.242-15.649c0,0,4.47,1.121,15.646-1.122c11.181-2.227,38.004-8.93,53.654,4.477
		c37.557,5.522,47.53,36.368,40.204,72.326c3.598,1.727,7.178,5.962,2.901,16.392c-5.238,12.809-4.522,27.255-15.634,27.255
		c-5.496,28.346-7.863,27.444-14.366,34.663c0,8.666,0,18.058,0,23.111c0,14.445,5.261,12.279,16.093,20.945
		c24.126,19.301,62.111,23.831,68.406,70.94C374.715,392.474,325.246,401.882,255.996,401.912z" />
                        </g>
                    </svg>
                </div>
                <!-- Your Channel Label -->
                <div class="font-bold">
                    Your Channel
                </div>
            </div>

            <!-- History Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- History Icon -->
                <div class="mr-8 ml-2">
                    <svg class="w-6 h-6" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>history-list</title>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="icon" fill="#990000" transform="translate(33.830111, 42.666667)">
                                <path d="M456.836556,405.333333 L456.836556,448 L350.169889,448 L350.169889,405.333333 L456.836556,405.333333 Z M328.836556,405.333333 L328.836556,448 L286.169889,448 L286.169889,405.333333 L328.836556,405.333333 Z M456.836556,341.333333 L456.836556,384 L350.169889,384 L350.169889,341.333333 L456.836556,341.333333 Z M328.836556,341.333333 L328.836556,384 L286.169889,384 L286.169889,341.333333 L328.836556,341.333333 Z M131.660221,261.176335 C154.823665,284.339779 186.823665,298.666667 222.169889,298.666667 C237.130689,298.666667 251.492003,296.099965 264.837506,291.382887 L264.838264,335.956148 C251.200633,339.466383 236.903286,341.333333 222.169889,341.333333 C175.041086,341.333333 132.37401,322.230407 101.489339,291.345231 L131.660221,261.176335 Z M456.836556,277.333333 L456.836556,320 L350.169889,320 L350.169889,277.333333 L456.836556,277.333333 Z M328.836556,277.333333 L328.836556,320 L286.169889,320 L286.169889,277.333333 L328.836556,277.333333 Z M222.169889,7.10542736e-15 C316.426487,7.10542736e-15 392.836556,76.4100694 392.836556,170.666667 C392.836556,201.752854 384.525389,230.897864 370.003903,256.000851 L317.574603,256.00279 C337.844458,233.356846 350.169889,203.451136 350.169889,170.666667 C350.169889,99.9742187 292.862337,42.6666667 222.169889,42.6666667 C151.477441,42.6666667 94.1698893,99.9742187 94.1698893,170.666667 C94.1698893,174.692297 94.3557269,178.674522 94.7192911,182.605232 L115.503223,161.830111 L145.673112,192 L72.836556,264.836556 L4.97379915e-14,192 L30.1698893,161.830111 L51.989071,183.641815 C51.6671112,179.358922 51.5032227,175.031933 51.5032227,170.666667 C51.5032227,76.4100694 127.913292,7.10542736e-15 222.169889,7.10542736e-15 Z M243.503223,64 L243.503223,159.146667 L297.903223,195.626667 L274.436556,231.04 L200.836556,182.186667 L200.836556,64 L243.503223,64 Z" id="Combined-Shape">

                                </path>
                            </g>
                        </g>
                    </svg>
                </div>
                <!-- History Label -->
                <div class="font-bold">
                    History
                </div>
            </div>

            <!-- Your Videos Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Your Videos Icon -->
                <div class="mr-8 ml-2">
                    <svg class="w-6 h-6" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.168 19.0028C20.4724 19.0867 22.41 17.29 22.5 14.9858V9.01982C22.41 6.71569 20.4724 4.91893 18.168 5.00282H6.832C4.52763 4.91893 2.58998 6.71569 2.5 9.01982V14.9858C2.58998 17.29 4.52763 19.0867 6.832 19.0028H18.168Z" stroke="#990000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.008 9.17784L15.169 11.3258C15.3738 11.4454 15.4997 11.6647 15.4997 11.9018C15.4997 12.139 15.3738 12.3583 15.169 12.4778L12.008 14.8278C11.408 15.2348 10.5 14.8878 10.5 14.2518V9.75184C10.5 9.11884 11.409 8.77084 12.008 9.17784Z" stroke="#990000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <!-- Your Videos Label -->
                <div class="font-bold">
                    Your Videos
                </div>
            </div>

            <!-- Watch Later Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Watch Later Icon -->
                <div class="mr-8 ml-2">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 17V12L14.5 13.5M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#990000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <!-- Watch Later Label -->
                <div class="font-bold">
                    Watch Later
                </div>
            </div>

            <!-- Downloads Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Downloads Icon -->
                <div class="mr-8 ml-2">
                    <svg class="w-6 h-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none">
                        <path fill="#990000" fill-rule="evenodd" d="M11 2a1 1 0 10-2 0v7.74L5.173 6.26a1 1 0 10-1.346 1.48l5.5 5a1 1 0 001.346 0l5.5-5a1 1 0 00-1.346-1.48L11 9.74V2zm-7.895 9.204A1 1 0 001.5 12v3.867a2.018 2.018 0 002.227 2.002c1.424-.147 3.96-.369 6.273-.369 2.386 0 5.248.236 6.795.383a2.013 2.013 0 002.205-2V12a1 1 0 10-2 0v3.884l-13.895-4.68zm0 0L2.5 11l.605.204zm0 0l13.892 4.683a.019.019 0 01-.007.005h-.006c-1.558-.148-4.499-.392-6.984-.392-2.416 0-5.034.23-6.478.38h-.009a.026.026 0 01-.013-.011V12a.998.998 0 00-.394-.796z" />
                    </svg>
                </div>
                <!-- Downloads Label -->
                <div class="font-bold">
                    Downloads
                </div>
            </div>

            <!-- Liked Videos Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Liked Videos Icon -->
                <div class="mr-8 ml-2">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.444 1.35396C11.6474 0.955692 10.6814 1.33507 10.3687 2.16892L7.807 9.00001L4 9.00001C2.34315 9.00001 1 10.3432 1 12V20C1 21.6569 2.34315 23 4 23H18.3737C19.7948 23 21.0208 22.003 21.3107 20.6119L22.9773 12.6119C23.3654 10.7489 21.9433 9.00001 20.0404 9.00001H14.8874L15.6259 6.7846C16.2554 4.89615 15.4005 2.8322 13.62 1.94198L12.444 1.35396ZM9.67966 9.70225L12.0463 3.39119L12.7256 3.73083C13.6158 4.17595 14.0433 5.20792 13.7285 6.15215L12.9901 8.36755C12.5584 9.66261 13.5223 11 14.8874 11H20.0404C20.6747 11 21.1487 11.583 21.0194 12.204L20.8535 13H17C16.4477 13 16 13.4477 16 14C16 14.5523 16.4477 15 17 15H20.4369L20.0202 17H17C16.4477 17 16 17.4477 16 18C16 18.5523 16.4477 19 17 19H19.6035L19.3527 20.204C19.2561 20.6677 18.8474 21 18.3737 21H8V10.9907C8.75416 10.9179 9.40973 10.4221 9.67966 9.70225ZM6 11H4C3.44772 11 3 11.4477 3 12V20C3 20.5523 3.44772 21 4 21H6V11Z" fill="#990000" />
                    </svg>
                </div>
                <!-- Liked Videos Label -->
                <div class="font-bold">
                    Liked Videos
                </div>
            </div>

            <!-- Show More Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Show More Icon -->
                <div class="mr-8 ml-2">
                    <svg class="w-6 h-6" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 10.99L13.1299 14.05C12.9858 14.2058 12.811 14.3298 12.6166 14.4148C12.4221 14.4998 12.2122 14.5437 12 14.5437C11.7878 14.5437 11.5779 14.4998 11.3834 14.4148C11.189 14.3298 11.0142 14.2058 10.87 14.05L8 10.99" stroke="#990000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21 17.4199V7.41992C21 5.21078 19.2091 3.41992 17 3.41992L7 3.41992C4.79086 3.41992 3 5.21078 3 7.41992V17.4199C3 19.6291 4.79086 21.4199 7 21.4199H17C19.2091 21.4199 21 19.6291 21 17.4199Z" stroke="#990000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <!-- Show More Label -->
                <div class="font-bold">
                    Show More
                </div>
            </div>

            <!-- Show Less Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Show Less Icon -->
                <div class="mr-8 ml-2">
                    <svg class="w-6 h-6" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 13.8599L10.87 10.8C11.0125 10.6416 11.1868 10.5149 11.3815 10.4282C11.5761 10.3415 11.7869 10.2966 12 10.2966C12.2131 10.2966 12.4239 10.3415 12.6185 10.4282C12.8132 10.5149 12.9875 10.6416 13.13 10.8L16 13.8599" stroke="#990000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3 7.41992L3 17.4199C3 19.6291 4.79086 21.4199 7 21.4199H17C19.2091 21.4199 21 19.6291 21 17.4199V7.41992C21 5.21078 19.2091 3.41992 17 3.41992H7C4.79086 3.41992 3 5.21078 3 7.41992Z" stroke="#990000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <!-- Show Less Label -->
                <div class="font-bold">
                    Show Less
                </div>
            </div>
        </div>

        <!-- Side Nav Section Separator -->
        <div class="border-t border-t-[#990000] w-5/6 my-1 mx-auto"></div>

        <!-- Side Nav Section 3 Container -->
        <div class="w-[87%] flex flex-col ml-6">

            <!-- Section 3 Heading -->
            <div class="font-bold">SUBSCRIPTIONS</div>

            <!-- Subscriptions Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Subscriptions Icon -->
                <div class="mr-6 ml-2 font-bold text-[#990000] flex items-center justify-center border border-[#990000] rounded-full p-2">
                    <svg class="w-8 h-8" viewBox="0 0 264 280" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <desc>Created with getavataaars.com</desc>
                        <defs>
                            <circle id="react-path-1" cx="120" cy="120" r="120"></circle>
                            <path d="M12,160 C12,226.27417 65.72583,280 132,280 C198.27417,280 252,226.27417 252,160 L264,160 L264,-1.42108547e-14 L-3.19744231e-14,-1.42108547e-14 L-3.19744231e-14,160 L12,160 Z" id="react-path-2"></path>
                            <path d="M124,144.610951 L124,163 L128,163 L128,163 C167.764502,163 200,195.235498 200,235 L200,244 L0,244 L0,235 C-4.86974701e-15,195.235498 32.235498,163 72,163 L72,163 L76,163 L76,144.610951 C58.7626345,136.422372 46.3722246,119.687011 44.3051388,99.8812385 C38.4803105,99.0577866 34,94.0521096 34,88 L34,74 C34,68.0540074 38.3245733,63.1180731 44,62.1659169 L44,56 L44,56 C44,25.072054 69.072054,5.68137151e-15 100,0 L100,0 L100,0 C130.927946,-5.68137151e-15 156,25.072054 156,56 L156,62.1659169 C161.675427,63.1180731 166,68.0540074 166,74 L166,88 C166,94.0521096 161.51969,99.0577866 155.694861,99.8812385 C153.627775,119.687011 141.237365,136.422372 124,144.610951 Z" id="react-path-3"></path>
                        </defs>
                        <g id="Avataaar" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-825.000000, -1100.000000)" id="Avataaar/Circle">
                                <g transform="translate(825.000000, 1100.000000)">
                                    <g id="Mask"></g>
                                    <g id="Avataaar" stroke-width="1" fill-rule="evenodd" mask="url(#react-mask-5)">
                                        <g id="Body" transform="translate(32.000000, 36.000000)">
                                            <mask id="react-mask-6" fill="white">
                                                <use xlink:href="#react-path-3"></use>
                                            </mask>
                                            <use fill="#D0C6AC" xlink:href="#react-path-3"></use>
                                            <g id="Skin/👶🏽-03-Brown" mask="url(#react-mask-6)" fill="#EDB98A">
                                                <g transform="translate(0.000000, 0.000000)" id="Color">
                                                    <rect x="0" y="0" width="264" height="280"></rect>
                                                </g>
                                            </g>
                                            <path d="M156,79 L156,102 C156,132.927946 130.927946,158 100,158 C69.072054,158 44,132.927946 44,102 L44,79 L44,94 C44,124.927946 69.072054,150 100,150 C130.927946,150 156,124.927946 156,94 L156,79 Z" id="Neck-Shadow" fill-opacity="0.100000001" fill="#000000" mask="url(#react-mask-6)"></path>
                                        </g>
                                        <g id="Clothing/Blazer-+-Shirt" transform="translate(0.000000, 170.000000)">
                                            <defs>
                                                <path d="M133.960472,0.294916112 C170.936473,3.32499816 200,34.2942856 200,72.0517235 L200,81 L0,81 L0,72.0517235 C1.22536245e-14,33.9525631 29.591985,2.76498122 67.0454063,0.219526408 C67.0152598,0.593114549 67,0.969227185 67,1.34762511 C67,13.2107177 81.9984609,22.8276544 100.5,22.8276544 C119.001539,22.8276544 134,13.2107177 134,1.34762511 C134,0.994669088 133.986723,0.64370138 133.960472,0.294916112 Z" id="react-path-7"></path>
                                            </defs>
                                            <g id="Shirt" transform="translate(32.000000, 29.000000)">
                                                <mask id="react-mask-8" fill="white">
                                                    <use xlink:href="#react-path-7"></use>
                                                </mask>
                                                <use id="Clothes" fill="#E6E6E6" xlink:href="#react-path-7"></use>
                                                <g id="Color/Palette/Black" mask="url(#react-mask-8)" fill="#262E33">
                                                    <g transform="translate(-32.000000, -29.000000)" id="🖍Color">
                                                        <rect x="0" y="0" width="264" height="110"></rect>
                                                    </g>
                                                </g>
                                                <g id="Shadowy" opacity="0.599999964" mask="url(#react-mask-8)" fill-opacity="0.16" fill="#000000">
                                                    <g transform="translate(60.000000, -25.000000)" id="Hola-👋🏼">
                                                        <ellipse cx="40.5" cy="27.8476251" rx="39.6351047" ry="26.9138272"></ellipse>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="Blazer" transform="translate(32.000000, 28.000000)">
                                                <path d="M68.784807,1.12222847 C30.512317,2.80409739 -1.89486556e-14,34.3646437 -1.42108547e-14,73.0517235 L0,73.0517235 L0,82 L69.3616767,82 C65.9607412,69.9199941 64,55.7087296 64,40.5 C64,26.1729736 65.7399891,12.7311115 68.784807,1.12222847 Z M131.638323,82 L200,82 L200,73.0517235 C200,34.7067641 170.024954,3.36285166 132.228719,1.17384225 C135.265163,12.7709464 137,26.1942016 137,40.5 C137,55.7087296 135.039259,69.9199941 131.638323,82 Z" id="Saco" fill="#3A4C5A"></path>
                                                <path d="M149,58 L158.555853,50.83311 L158.555853,50.83311 C159.998897,49.7508275 161.987779,49.7682725 163.411616,50.8757011 L170,56 L149,58 Z" id="Pocket-hanky" fill="#E6E6E6"></path>
                                                <path d="M69,1.13686838e-13 C65,19.3333333 66.6666667,46.6666667 74,82 L58,82 L44,46 L50,37 L44,31 L63,1 C65.027659,0.369238637 67.027659,0.0359053037 69,1.13686838e-13 Z" id="Wing" fill="#2F4351"></path>
                                                <path d="M151,1.13686838e-13 C147,19.3333333 148.666667,46.6666667 156,82 L140,82 L126,46 L132,37 L126,31 L145,1 C147.027659,0.369238637 149.027659,0.0359053037 151,1.13686838e-13 Z" id="Wing" fill="#2F4351" transform="translate(141.000000, 41.000000) scale(-1, 1) translate(-141.000000, -41.000000) "></path>
                                            </g>
                                        </g>
                                        <g id="Face" transform="translate(76.000000, 82.000000)" fill="#000000">
                                            <g id="Mouth/Default" transform="translate(2.000000, 52.000000)" fill-opacity="0.699999988">
                                                <path d="M40,15 C40,22.7319865 46.2680135,29 54,29 L54,29 C61.7319865,29 68,22.7319865 68,15" id="Mouth"></path>
                                            </g>
                                            <g id="Nose/Default" transform="translate(28.000000, 40.000000)" fill-opacity="0.16">
                                                <path d="M16,8 C16,12.418278 21.372583,16 28,16 L28,16 C34.627417,16 40,12.418278 40,8" id="Nose"></path>
                                            </g>
                                            <g id="Eyes/Default-😀" transform="translate(0.000000, 8.000000)" fill-opacity="0.599999964">
                                                <circle id="Eye" cx="30" cy="22" r="6"></circle>
                                                <circle id="Eye" cx="82" cy="22" r="6"></circle>
                                            </g>
                                            <g id="Eyebrow/Outline/Default" fill-opacity="0.599999964">
                                                <g id="I-Browse" transform="translate(12.000000, 6.000000)">
                                                    <path d="M3.63024536,11.1585767 C7.54515501,5.64986673 18.2779197,2.56083721 27.5230268,4.83118046 C28.5957248,5.0946055 29.6788665,4.43856013 29.9422916,3.36586212 C30.2057166,2.2931641 29.5496712,1.21002236 28.4769732,0.94659732 C17.7403633,-1.69001789 5.31209962,1.88699832 0.369754639,8.84142326 C-0.270109626,9.74178291 -0.0589363917,10.9903811 0.84142326,11.6302454 C1.74178291,12.2701096 2.9903811,12.0589364 3.63024536,11.1585767 Z" id="Eyebrow" fill-rule="nonzero"></path>
                                                    <path d="M61.6302454,11.1585767 C65.545155,5.64986673 76.2779197,2.56083721 85.5230268,4.83118046 C86.5957248,5.0946055 87.6788665,4.43856013 87.9422916,3.36586212 C88.2057166,2.2931641 87.5496712,1.21002236 86.4769732,0.94659732 C75.7403633,-1.69001789 63.3120996,1.88699832 58.3697546,8.84142326 C57.7298904,9.74178291 57.9410636,10.9903811 58.8414233,11.6302454 C59.7417829,12.2701096 60.9903811,12.0589364 61.6302454,11.1585767 Z" id="Eyebrow" fill-rule="nonzero" transform="translate(73.000154, 6.039198) scale(-1, 1) translate(-73.000154, -6.039198) "></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Top" stroke-width="1" fill-rule="evenodd">
                                            <defs>
                                                <rect id="react-path-29" x="0" y="0" width="264" height="280"></rect>
                                                <path d="M180.14998,39.9204083 C177.390206,37.1003988 174.185913,34.7068297 171.069252,32.3065503 C170.381566,31.777442 169.682843,31.2610833 169.010544,30.7118441 C168.857687,30.5870323 167.291999,29.4657388 167.104691,29.0530544 C166.653816,28.0602634 166.915042,28.8332916 166.977255,27.6485857 C167.055857,26.150508 170.11064,21.9193194 167.831176,20.9490079 C166.828413,20.522232 165.039628,21.6579526 164.077671,22.0330592 C162.196235,22.7671676 160.291721,23.3932399 158.346734,23.9330847 C159.278588,22.0763407 161.055333,18.3594977 157.71591,19.3543018 C155.114345,20.1293431 152.690052,22.1219709 150.075777,23.0594018 C150.940735,21.6415124 154.399901,17.2479341 151.274209,17.0023366 C150.301549,16.925839 147.471201,18.7503735 146.423952,19.1395717 C143.287223,20.3054888 140.083264,21.0590571 136.789999,21.6525844 C125.59203,23.6707114 112.497238,23.0953019 102.1368,28.1934632 C94.1494796,32.1236942 86.262502,38.2220278 81.648386,45.987539 C77.2011742,53.472559 75.537818,61.6641751 74.6069673,70.2412987 C73.9239644,76.535909 73.8684412,83.0425652 74.1878671,89.3599905 C74.2922241,91.4297869 74.5250203,100.970847 77.5319724,98.0813859 C79.0300967,96.641688 79.019059,90.8282073 79.3963495,88.8604076 C80.1472513,84.9452748 80.870057,81.0126951 82.122006,77.2227096 C84.3282191,70.5439339 86.9307879,63.4296587 92.4269209,58.8297383 C95.9539853,55.8782066 98.4307906,51.8889248 101.806002,48.9112229 C103.322188,47.5738572 102.165231,47.7130963 104.602902,47.888571 C106.240504,48.006337 107.885464,48.0512961 109.52641,48.0942421 C113.322394,48.1928837 117.124399,48.16772 120.921387,48.1811407 C128.56821,48.208653 136.179243,48.316689 143.818708,47.9164188 C147.213653,47.7385955 150.617965,47.6423024 154.00388,47.3282597 C155.895349,47.152785 159.251496,45.9405668 160.808488,46.8669256 C162.233362,47.7144383 163.71309,50.4817719 164.736257,51.615144 C167.153525,54.2935659 170.035717,56.3392052 172.862385,58.5354911 C178.756547,63.114945 181.732392,68.8666908 183.522515,76.023241 C185.305949,83.1532854 184.805905,89.76815 187.013456,96.78479 C187.401784,98.0184813 188.428965,100.14498 189.695296,98.2389151 C189.930434,97.8849461 189.869559,95.9390277 189.869559,94.819339 C189.869559,90.2995934 191.014141,86.9083772 190.999758,82.3591197 C190.943566,68.5271489 190.49637,50.4908308 180.14998,39.9204083 Z" id="react-path-28"></path>
                                                <filter x="-0.8%" y="-2.0%" width="101.5%" height="108.0%" filterUnits="objectBoundingBox" id="react-filter-25">
                                                    <feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                                    <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.16 0" type="matrix" in="shadowOffsetOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                                    <feMerge>
                                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                                    </feMerge>
                                                </filter>
                                            </defs>
                                            <mask id="react-mask-27" fill="white">
                                                <use xlink:href="#react-path-29"></use>
                                            </mask>
                                            <g id="Mask"></g>
                                            <g id="Top/Short-Hair/Short-Flat" mask="url(#react-mask-27)">
                                                <g transform="translate(-1.000000, 0.000000)">
                                                    <mask id="react-mask-26" fill="white">
                                                        <use xlink:href="#react-path-28"></use>
                                                    </mask>
                                                    <use id="Short-Hair" stroke="none" fill="#1F3140" fill-rule="evenodd" xlink:href="#react-path-28"></use>
                                                    <g id="Skin/👶🏽-03-Brown" mask="url(#react-mask-26)" fill="#4A312C">
                                                        <g transform="translate(0.000000, 0.000000) " id="Color">
                                                            <rect x="0" y="0" width="264" height="280"></rect>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <!-- Subscriptions Label -->
                <div class="font-bold">
                    Pastor Steven Anderson
                </div>
            </div>

            <!-- Subscriptions Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Subscriptions Icon -->
                <div class="mr-6 ml-2 font-bold text-[#990000] flex items-center justify-center border border-[#990000] rounded-full p-2">
                    <svg class="w-8 h-8" viewBox="0 0 264 280" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <desc>Created with getavataaars.com</desc>
                        <defs>
                            <circle id="react-path-1" cx="120" cy="120" r="120"></circle>
                            <path d="M12,160 C12,226.27417 65.72583,280 132,280 C198.27417,280 252,226.27417 252,160 L264,160 L264,-1.42108547e-14 L-3.19744231e-14,-1.42108547e-14 L-3.19744231e-14,160 L12,160 Z" id="react-path-2"></path>
                            <path d="M124,144.610951 L124,163 L128,163 L128,163 C167.764502,163 200,195.235498 200,235 L200,244 L0,244 L0,235 C-4.86974701e-15,195.235498 32.235498,163 72,163 L72,163 L76,163 L76,144.610951 C58.7626345,136.422372 46.3722246,119.687011 44.3051388,99.8812385 C38.4803105,99.0577866 34,94.0521096 34,88 L34,74 C34,68.0540074 38.3245733,63.1180731 44,62.1659169 L44,56 L44,56 C44,25.072054 69.072054,5.68137151e-15 100,0 L100,0 L100,0 C130.927946,-5.68137151e-15 156,25.072054 156,56 L156,62.1659169 C161.675427,63.1180731 166,68.0540074 166,74 L166,88 C166,94.0521096 161.51969,99.0577866 155.694861,99.8812385 C153.627775,119.687011 141.237365,136.422372 124,144.610951 Z" id="react-path-3"></path>
                        </defs>
                        <g id="Avataaar" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-825.000000, -1100.000000)" id="Avataaar/Circle">
                                <g transform="translate(825.000000, 1100.000000)">
                                    <g id="Mask"></g>
                                    <g id="Avataaar" stroke-width="1" fill-rule="evenodd" mask="url(#react-mask-5)">
                                        <g id="Body" transform="translate(32.000000, 36.000000)">
                                            <mask id="react-mask-6" fill="white">
                                                <use xlink:href="#react-path-3"></use>
                                            </mask>
                                            <use fill="#D0C6AC" xlink:href="#react-path-3"></use>
                                            <g id="Skin/👶🏽-03-Brown" mask="url(#react-mask-6)" fill="#EDB98A">
                                                <g transform="translate(0.000000, 0.000000)" id="Color">
                                                    <rect x="0" y="0" width="264" height="280"></rect>
                                                </g>
                                            </g>
                                            <path d="M156,79 L156,102 C156,132.927946 130.927946,158 100,158 C69.072054,158 44,132.927946 44,102 L44,79 L44,94 C44,124.927946 69.072054,150 100,150 C130.927946,150 156,124.927946 156,94 L156,79 Z" id="Neck-Shadow" fill-opacity="0.100000001" fill="#000000" mask="url(#react-mask-6)"></path>
                                        </g>
                                        <g id="Clothing/Blazer-+-Shirt" transform="translate(0.000000, 170.000000)">
                                            <defs>
                                                <path d="M133.960472,0.294916112 C170.936473,3.32499816 200,34.2942856 200,72.0517235 L200,81 L0,81 L0,72.0517235 C1.22536245e-14,33.9525631 29.591985,2.76498122 67.0454063,0.219526408 C67.0152598,0.593114549 67,0.969227185 67,1.34762511 C67,13.2107177 81.9984609,22.8276544 100.5,22.8276544 C119.001539,22.8276544 134,13.2107177 134,1.34762511 C134,0.994669088 133.986723,0.64370138 133.960472,0.294916112 Z" id="react-path-7"></path>
                                            </defs>
                                            <g id="Shirt" transform="translate(32.000000, 29.000000)">
                                                <mask id="react-mask-8" fill="white">
                                                    <use xlink:href="#react-path-7"></use>
                                                </mask>
                                                <use id="Clothes" fill="#E6E6E6" xlink:href="#react-path-7"></use>
                                                <g id="Color/Palette/Black" mask="url(#react-mask-8)" fill="#262E33">
                                                    <g transform="translate(-32.000000, -29.000000)" id="🖍Color">
                                                        <rect x="0" y="0" width="264" height="110"></rect>
                                                    </g>
                                                </g>
                                                <g id="Shadowy" opacity="0.599999964" mask="url(#react-mask-8)" fill-opacity="0.16" fill="#000000">
                                                    <g transform="translate(60.000000, -25.000000)" id="Hola-👋🏼">
                                                        <ellipse cx="40.5" cy="27.8476251" rx="39.6351047" ry="26.9138272"></ellipse>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="Blazer" transform="translate(32.000000, 28.000000)">
                                                <path d="M68.784807,1.12222847 C30.512317,2.80409739 -1.89486556e-14,34.3646437 -1.42108547e-14,73.0517235 L0,73.0517235 L0,82 L69.3616767,82 C65.9607412,69.9199941 64,55.7087296 64,40.5 C64,26.1729736 65.7399891,12.7311115 68.784807,1.12222847 Z M131.638323,82 L200,82 L200,73.0517235 C200,34.7067641 170.024954,3.36285166 132.228719,1.17384225 C135.265163,12.7709464 137,26.1942016 137,40.5 C137,55.7087296 135.039259,69.9199941 131.638323,82 Z" id="Saco" fill="#3A4C5A"></path>
                                                <path d="M149,58 L158.555853,50.83311 L158.555853,50.83311 C159.998897,49.7508275 161.987779,49.7682725 163.411616,50.8757011 L170,56 L149,58 Z" id="Pocket-hanky" fill="#E6E6E6"></path>
                                                <path d="M69,1.13686838e-13 C65,19.3333333 66.6666667,46.6666667 74,82 L58,82 L44,46 L50,37 L44,31 L63,1 C65.027659,0.369238637 67.027659,0.0359053037 69,1.13686838e-13 Z" id="Wing" fill="#2F4351"></path>
                                                <path d="M151,1.13686838e-13 C147,19.3333333 148.666667,46.6666667 156,82 L140,82 L126,46 L132,37 L126,31 L145,1 C147.027659,0.369238637 149.027659,0.0359053037 151,1.13686838e-13 Z" id="Wing" fill="#2F4351" transform="translate(141.000000, 41.000000) scale(-1, 1) translate(-141.000000, -41.000000) "></path>
                                            </g>
                                        </g>
                                        <g id="Face" transform="translate(76.000000, 82.000000)" fill="#000000">
                                            <g id="Mouth/Default" transform="translate(2.000000, 52.000000)" fill-opacity="0.699999988">
                                                <path d="M40,15 C40,22.7319865 46.2680135,29 54,29 L54,29 C61.7319865,29 68,22.7319865 68,15" id="Mouth"></path>
                                            </g>
                                            <g id="Nose/Default" transform="translate(28.000000, 40.000000)" fill-opacity="0.16">
                                                <path d="M16,8 C16,12.418278 21.372583,16 28,16 L28,16 C34.627417,16 40,12.418278 40,8" id="Nose"></path>
                                            </g>
                                            <g id="Eyes/Default-😀" transform="translate(0.000000, 8.000000)" fill-opacity="0.599999964">
                                                <circle id="Eye" cx="30" cy="22" r="6"></circle>
                                                <circle id="Eye" cx="82" cy="22" r="6"></circle>
                                            </g>
                                            <g id="Eyebrow/Outline/Default" fill-opacity="0.599999964">
                                                <g id="I-Browse" transform="translate(12.000000, 6.000000)">
                                                    <path d="M3.63024536,11.1585767 C7.54515501,5.64986673 18.2779197,2.56083721 27.5230268,4.83118046 C28.5957248,5.0946055 29.6788665,4.43856013 29.9422916,3.36586212 C30.2057166,2.2931641 29.5496712,1.21002236 28.4769732,0.94659732 C17.7403633,-1.69001789 5.31209962,1.88699832 0.369754639,8.84142326 C-0.270109626,9.74178291 -0.0589363917,10.9903811 0.84142326,11.6302454 C1.74178291,12.2701096 2.9903811,12.0589364 3.63024536,11.1585767 Z" id="Eyebrow" fill-rule="nonzero"></path>
                                                    <path d="M61.6302454,11.1585767 C65.545155,5.64986673 76.2779197,2.56083721 85.5230268,4.83118046 C86.5957248,5.0946055 87.6788665,4.43856013 87.9422916,3.36586212 C88.2057166,2.2931641 87.5496712,1.21002236 86.4769732,0.94659732 C75.7403633,-1.69001789 63.3120996,1.88699832 58.3697546,8.84142326 C57.7298904,9.74178291 57.9410636,10.9903811 58.8414233,11.6302454 C59.7417829,12.2701096 60.9903811,12.0589364 61.6302454,11.1585767 Z" id="Eyebrow" fill-rule="nonzero" transform="translate(73.000154, 6.039198) scale(-1, 1) translate(-73.000154, -6.039198) "></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Top" stroke-width="1" fill-rule="evenodd">
                                            <defs>
                                                <rect id="react-path-29" x="0" y="0" width="264" height="280"></rect>
                                                <path d="M180.14998,39.9204083 C177.390206,37.1003988 174.185913,34.7068297 171.069252,32.3065503 C170.381566,31.777442 169.682843,31.2610833 169.010544,30.7118441 C168.857687,30.5870323 167.291999,29.4657388 167.104691,29.0530544 C166.653816,28.0602634 166.915042,28.8332916 166.977255,27.6485857 C167.055857,26.150508 170.11064,21.9193194 167.831176,20.9490079 C166.828413,20.522232 165.039628,21.6579526 164.077671,22.0330592 C162.196235,22.7671676 160.291721,23.3932399 158.346734,23.9330847 C159.278588,22.0763407 161.055333,18.3594977 157.71591,19.3543018 C155.114345,20.1293431 152.690052,22.1219709 150.075777,23.0594018 C150.940735,21.6415124 154.399901,17.2479341 151.274209,17.0023366 C150.301549,16.925839 147.471201,18.7503735 146.423952,19.1395717 C143.287223,20.3054888 140.083264,21.0590571 136.789999,21.6525844 C125.59203,23.6707114 112.497238,23.0953019 102.1368,28.1934632 C94.1494796,32.1236942 86.262502,38.2220278 81.648386,45.987539 C77.2011742,53.472559 75.537818,61.6641751 74.6069673,70.2412987 C73.9239644,76.535909 73.8684412,83.0425652 74.1878671,89.3599905 C74.2922241,91.4297869 74.5250203,100.970847 77.5319724,98.0813859 C79.0300967,96.641688 79.019059,90.8282073 79.3963495,88.8604076 C80.1472513,84.9452748 80.870057,81.0126951 82.122006,77.2227096 C84.3282191,70.5439339 86.9307879,63.4296587 92.4269209,58.8297383 C95.9539853,55.8782066 98.4307906,51.8889248 101.806002,48.9112229 C103.322188,47.5738572 102.165231,47.7130963 104.602902,47.888571 C106.240504,48.006337 107.885464,48.0512961 109.52641,48.0942421 C113.322394,48.1928837 117.124399,48.16772 120.921387,48.1811407 C128.56821,48.208653 136.179243,48.316689 143.818708,47.9164188 C147.213653,47.7385955 150.617965,47.6423024 154.00388,47.3282597 C155.895349,47.152785 159.251496,45.9405668 160.808488,46.8669256 C162.233362,47.7144383 163.71309,50.4817719 164.736257,51.615144 C167.153525,54.2935659 170.035717,56.3392052 172.862385,58.5354911 C178.756547,63.114945 181.732392,68.8666908 183.522515,76.023241 C185.305949,83.1532854 184.805905,89.76815 187.013456,96.78479 C187.401784,98.0184813 188.428965,100.14498 189.695296,98.2389151 C189.930434,97.8849461 189.869559,95.9390277 189.869559,94.819339 C189.869559,90.2995934 191.014141,86.9083772 190.999758,82.3591197 C190.943566,68.5271489 190.49637,50.4908308 180.14998,39.9204083 Z" id="react-path-28"></path>
                                                <filter x="-0.8%" y="-2.0%" width="101.5%" height="108.0%" filterUnits="objectBoundingBox" id="react-filter-25">
                                                    <feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                                    <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.16 0" type="matrix" in="shadowOffsetOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                                    <feMerge>
                                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                                    </feMerge>
                                                </filter>
                                            </defs>
                                            <mask id="react-mask-27" fill="white">
                                                <use xlink:href="#react-path-29"></use>
                                            </mask>
                                            <g id="Mask"></g>
                                            <g id="Top/Short-Hair/Short-Flat" mask="url(#react-mask-27)">
                                                <g transform="translate(-1.000000, 0.000000)">
                                                    <mask id="react-mask-26" fill="white">
                                                        <use xlink:href="#react-path-28"></use>
                                                    </mask>
                                                    <use id="Short-Hair" stroke="none" fill="#1F3140" fill-rule="evenodd" xlink:href="#react-path-28"></use>
                                                    <g id="Skin/👶🏽-03-Brown" mask="url(#react-mask-26)" fill="#4A312C">
                                                        <g transform="translate(0.000000, 0.000000) " id="Color">
                                                            <rect x="0" y="0" width="264" height="280"></rect>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <!-- Subscriptions Label -->
                <div class="font-bold">
                    Pastor David Berzins
                </div>
            </div>

            <!-- Subscriptions Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Subscriptions Icon -->
                <div class="mr-6 ml-2 font-bold text-[#990000] flex items-center justify-center border border-[#990000] rounded-full p-2">
                    <svg class="w-8 h-8" viewBox="0 0 264 280" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <desc>Created with getavataaars.com</desc>
                        <defs>
                            <circle id="react-path-1" cx="120" cy="120" r="120"></circle>
                            <path d="M12,160 C12,226.27417 65.72583,280 132,280 C198.27417,280 252,226.27417 252,160 L264,160 L264,-1.42108547e-14 L-3.19744231e-14,-1.42108547e-14 L-3.19744231e-14,160 L12,160 Z" id="react-path-2"></path>
                            <path d="M124,144.610951 L124,163 L128,163 L128,163 C167.764502,163 200,195.235498 200,235 L200,244 L0,244 L0,235 C-4.86974701e-15,195.235498 32.235498,163 72,163 L72,163 L76,163 L76,144.610951 C58.7626345,136.422372 46.3722246,119.687011 44.3051388,99.8812385 C38.4803105,99.0577866 34,94.0521096 34,88 L34,74 C34,68.0540074 38.3245733,63.1180731 44,62.1659169 L44,56 L44,56 C44,25.072054 69.072054,5.68137151e-15 100,0 L100,0 L100,0 C130.927946,-5.68137151e-15 156,25.072054 156,56 L156,62.1659169 C161.675427,63.1180731 166,68.0540074 166,74 L166,88 C166,94.0521096 161.51969,99.0577866 155.694861,99.8812385 C153.627775,119.687011 141.237365,136.422372 124,144.610951 Z" id="react-path-3"></path>
                        </defs>
                        <g id="Avataaar" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-825.000000, -1100.000000)" id="Avataaar/Circle">
                                <g transform="translate(825.000000, 1100.000000)">
                                    <g id="Mask"></g>
                                    <g id="Avataaar" stroke-width="1" fill-rule="evenodd" mask="url(#react-mask-5)">
                                        <g id="Body" transform="translate(32.000000, 36.000000)">
                                            <mask id="react-mask-6" fill="white">
                                                <use xlink:href="#react-path-3"></use>
                                            </mask>
                                            <use fill="#D0C6AC" xlink:href="#react-path-3"></use>
                                            <g id="Skin/👶🏽-03-Brown" mask="url(#react-mask-6)" fill="#EDB98A">
                                                <g transform="translate(0.000000, 0.000000)" id="Color">
                                                    <rect x="0" y="0" width="264" height="280"></rect>
                                                </g>
                                            </g>
                                            <path d="M156,79 L156,102 C156,132.927946 130.927946,158 100,158 C69.072054,158 44,132.927946 44,102 L44,79 L44,94 C44,124.927946 69.072054,150 100,150 C130.927946,150 156,124.927946 156,94 L156,79 Z" id="Neck-Shadow" fill-opacity="0.100000001" fill="#000000" mask="url(#react-mask-6)"></path>
                                        </g>
                                        <g id="Clothing/Blazer-+-Shirt" transform="translate(0.000000, 170.000000)">
                                            <defs>
                                                <path d="M133.960472,0.294916112 C170.936473,3.32499816 200,34.2942856 200,72.0517235 L200,81 L0,81 L0,72.0517235 C1.22536245e-14,33.9525631 29.591985,2.76498122 67.0454063,0.219526408 C67.0152598,0.593114549 67,0.969227185 67,1.34762511 C67,13.2107177 81.9984609,22.8276544 100.5,22.8276544 C119.001539,22.8276544 134,13.2107177 134,1.34762511 C134,0.994669088 133.986723,0.64370138 133.960472,0.294916112 Z" id="react-path-7"></path>
                                            </defs>
                                            <g id="Shirt" transform="translate(32.000000, 29.000000)">
                                                <mask id="react-mask-8" fill="white">
                                                    <use xlink:href="#react-path-7"></use>
                                                </mask>
                                                <use id="Clothes" fill="#E6E6E6" xlink:href="#react-path-7"></use>
                                                <g id="Color/Palette/Black" mask="url(#react-mask-8)" fill="#262E33">
                                                    <g transform="translate(-32.000000, -29.000000)" id="🖍Color">
                                                        <rect x="0" y="0" width="264" height="110"></rect>
                                                    </g>
                                                </g>
                                                <g id="Shadowy" opacity="0.599999964" mask="url(#react-mask-8)" fill-opacity="0.16" fill="#000000">
                                                    <g transform="translate(60.000000, -25.000000)" id="Hola-👋🏼">
                                                        <ellipse cx="40.5" cy="27.8476251" rx="39.6351047" ry="26.9138272"></ellipse>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="Blazer" transform="translate(32.000000, 28.000000)">
                                                <path d="M68.784807,1.12222847 C30.512317,2.80409739 -1.89486556e-14,34.3646437 -1.42108547e-14,73.0517235 L0,73.0517235 L0,82 L69.3616767,82 C65.9607412,69.9199941 64,55.7087296 64,40.5 C64,26.1729736 65.7399891,12.7311115 68.784807,1.12222847 Z M131.638323,82 L200,82 L200,73.0517235 C200,34.7067641 170.024954,3.36285166 132.228719,1.17384225 C135.265163,12.7709464 137,26.1942016 137,40.5 C137,55.7087296 135.039259,69.9199941 131.638323,82 Z" id="Saco" fill="#3A4C5A"></path>
                                                <path d="M149,58 L158.555853,50.83311 L158.555853,50.83311 C159.998897,49.7508275 161.987779,49.7682725 163.411616,50.8757011 L170,56 L149,58 Z" id="Pocket-hanky" fill="#E6E6E6"></path>
                                                <path d="M69,1.13686838e-13 C65,19.3333333 66.6666667,46.6666667 74,82 L58,82 L44,46 L50,37 L44,31 L63,1 C65.027659,0.369238637 67.027659,0.0359053037 69,1.13686838e-13 Z" id="Wing" fill="#2F4351"></path>
                                                <path d="M151,1.13686838e-13 C147,19.3333333 148.666667,46.6666667 156,82 L140,82 L126,46 L132,37 L126,31 L145,1 C147.027659,0.369238637 149.027659,0.0359053037 151,1.13686838e-13 Z" id="Wing" fill="#2F4351" transform="translate(141.000000, 41.000000) scale(-1, 1) translate(-141.000000, -41.000000) "></path>
                                            </g>
                                        </g>
                                        <g id="Face" transform="translate(76.000000, 82.000000)" fill="#000000">
                                            <g id="Mouth/Default" transform="translate(2.000000, 52.000000)" fill-opacity="0.699999988">
                                                <path d="M40,15 C40,22.7319865 46.2680135,29 54,29 L54,29 C61.7319865,29 68,22.7319865 68,15" id="Mouth"></path>
                                            </g>
                                            <g id="Nose/Default" transform="translate(28.000000, 40.000000)" fill-opacity="0.16">
                                                <path d="M16,8 C16,12.418278 21.372583,16 28,16 L28,16 C34.627417,16 40,12.418278 40,8" id="Nose"></path>
                                            </g>
                                            <g id="Eyes/Default-😀" transform="translate(0.000000, 8.000000)" fill-opacity="0.599999964">
                                                <circle id="Eye" cx="30" cy="22" r="6"></circle>
                                                <circle id="Eye" cx="82" cy="22" r="6"></circle>
                                            </g>
                                            <g id="Eyebrow/Outline/Default" fill-opacity="0.599999964">
                                                <g id="I-Browse" transform="translate(12.000000, 6.000000)">
                                                    <path d="M3.63024536,11.1585767 C7.54515501,5.64986673 18.2779197,2.56083721 27.5230268,4.83118046 C28.5957248,5.0946055 29.6788665,4.43856013 29.9422916,3.36586212 C30.2057166,2.2931641 29.5496712,1.21002236 28.4769732,0.94659732 C17.7403633,-1.69001789 5.31209962,1.88699832 0.369754639,8.84142326 C-0.270109626,9.74178291 -0.0589363917,10.9903811 0.84142326,11.6302454 C1.74178291,12.2701096 2.9903811,12.0589364 3.63024536,11.1585767 Z" id="Eyebrow" fill-rule="nonzero"></path>
                                                    <path d="M61.6302454,11.1585767 C65.545155,5.64986673 76.2779197,2.56083721 85.5230268,4.83118046 C86.5957248,5.0946055 87.6788665,4.43856013 87.9422916,3.36586212 C88.2057166,2.2931641 87.5496712,1.21002236 86.4769732,0.94659732 C75.7403633,-1.69001789 63.3120996,1.88699832 58.3697546,8.84142326 C57.7298904,9.74178291 57.9410636,10.9903811 58.8414233,11.6302454 C59.7417829,12.2701096 60.9903811,12.0589364 61.6302454,11.1585767 Z" id="Eyebrow" fill-rule="nonzero" transform="translate(73.000154, 6.039198) scale(-1, 1) translate(-73.000154, -6.039198) "></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Top" stroke-width="1" fill-rule="evenodd">
                                            <defs>
                                                <rect id="react-path-29" x="0" y="0" width="264" height="280"></rect>
                                                <path d="M180.14998,39.9204083 C177.390206,37.1003988 174.185913,34.7068297 171.069252,32.3065503 C170.381566,31.777442 169.682843,31.2610833 169.010544,30.7118441 C168.857687,30.5870323 167.291999,29.4657388 167.104691,29.0530544 C166.653816,28.0602634 166.915042,28.8332916 166.977255,27.6485857 C167.055857,26.150508 170.11064,21.9193194 167.831176,20.9490079 C166.828413,20.522232 165.039628,21.6579526 164.077671,22.0330592 C162.196235,22.7671676 160.291721,23.3932399 158.346734,23.9330847 C159.278588,22.0763407 161.055333,18.3594977 157.71591,19.3543018 C155.114345,20.1293431 152.690052,22.1219709 150.075777,23.0594018 C150.940735,21.6415124 154.399901,17.2479341 151.274209,17.0023366 C150.301549,16.925839 147.471201,18.7503735 146.423952,19.1395717 C143.287223,20.3054888 140.083264,21.0590571 136.789999,21.6525844 C125.59203,23.6707114 112.497238,23.0953019 102.1368,28.1934632 C94.1494796,32.1236942 86.262502,38.2220278 81.648386,45.987539 C77.2011742,53.472559 75.537818,61.6641751 74.6069673,70.2412987 C73.9239644,76.535909 73.8684412,83.0425652 74.1878671,89.3599905 C74.2922241,91.4297869 74.5250203,100.970847 77.5319724,98.0813859 C79.0300967,96.641688 79.019059,90.8282073 79.3963495,88.8604076 C80.1472513,84.9452748 80.870057,81.0126951 82.122006,77.2227096 C84.3282191,70.5439339 86.9307879,63.4296587 92.4269209,58.8297383 C95.9539853,55.8782066 98.4307906,51.8889248 101.806002,48.9112229 C103.322188,47.5738572 102.165231,47.7130963 104.602902,47.888571 C106.240504,48.006337 107.885464,48.0512961 109.52641,48.0942421 C113.322394,48.1928837 117.124399,48.16772 120.921387,48.1811407 C128.56821,48.208653 136.179243,48.316689 143.818708,47.9164188 C147.213653,47.7385955 150.617965,47.6423024 154.00388,47.3282597 C155.895349,47.152785 159.251496,45.9405668 160.808488,46.8669256 C162.233362,47.7144383 163.71309,50.4817719 164.736257,51.615144 C167.153525,54.2935659 170.035717,56.3392052 172.862385,58.5354911 C178.756547,63.114945 181.732392,68.8666908 183.522515,76.023241 C185.305949,83.1532854 184.805905,89.76815 187.013456,96.78479 C187.401784,98.0184813 188.428965,100.14498 189.695296,98.2389151 C189.930434,97.8849461 189.869559,95.9390277 189.869559,94.819339 C189.869559,90.2995934 191.014141,86.9083772 190.999758,82.3591197 C190.943566,68.5271489 190.49637,50.4908308 180.14998,39.9204083 Z" id="react-path-28"></path>
                                                <filter x="-0.8%" y="-2.0%" width="101.5%" height="108.0%" filterUnits="objectBoundingBox" id="react-filter-25">
                                                    <feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                                    <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.16 0" type="matrix" in="shadowOffsetOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                                    <feMerge>
                                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                                    </feMerge>
                                                </filter>
                                            </defs>
                                            <mask id="react-mask-27" fill="white">
                                                <use xlink:href="#react-path-29"></use>
                                            </mask>
                                            <g id="Mask"></g>
                                            <g id="Top/Short-Hair/Short-Flat" mask="url(#react-mask-27)">
                                                <g transform="translate(-1.000000, 0.000000)">
                                                    <mask id="react-mask-26" fill="white">
                                                        <use xlink:href="#react-path-28"></use>
                                                    </mask>
                                                    <use id="Short-Hair" stroke="none" fill="#1F3140" fill-rule="evenodd" xlink:href="#react-path-28"></use>
                                                    <g id="Skin/👶🏽-03-Brown" mask="url(#react-mask-26)" fill="#4A312C">
                                                        <g transform="translate(0.000000, 0.000000) " id="Color">
                                                            <rect x="0" y="0" width="264" height="280"></rect>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <!-- Subscriptions Label -->
                <div class="font-bold">
                    Pastor Jonathan Shelley
                </div>
            </div>

            <!-- Browse Channels Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Browse Channels Icon -->
                <div class="mr-7 ml-2 font-bold text-[#990000] flex items-center justify-center">
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 12H15" stroke="#990000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 9L12 15" stroke="#990000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#990000" stroke-width="1" />
                    </svg>
                </div>
                <!-- Browse Channels Label -->
                <div class="font-bold">
                    Browse Channels
                </div>
            </div>

            <!-- Show More Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Show More Icon -->
                <div class="mr-8 ml-2">
                    <svg class="w-6 h-6" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 10.99L13.1299 14.05C12.9858 14.2058 12.811 14.3298 12.6166 14.4148C12.4221 14.4998 12.2122 14.5437 12 14.5437C11.7878 14.5437 11.5779 14.4998 11.3834 14.4148C11.189 14.3298 11.0142 14.2058 10.87 14.05L8 10.99" stroke="#990000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21 17.4199V7.41992C21 5.21078 19.2091 3.41992 17 3.41992L7 3.41992C4.79086 3.41992 3 5.21078 3 7.41992V17.4199C3 19.6291 4.79086 21.4199 7 21.4199H17C19.2091 21.4199 21 19.6291 21 17.4199Z" stroke="#990000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <!-- Show More Label -->
                <div class="font-bold">
                    Show More
                </div>
            </div>

            <!-- Show Less Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Show Less Icon -->
                <div class="mr-8 ml-2">
                    <svg class="w-6 h-6" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 13.8599L10.87 10.8C11.0125 10.6416 11.1868 10.5149 11.3815 10.4282C11.5761 10.3415 11.7869 10.2966 12 10.2966C12.2131 10.2966 12.4239 10.3415 12.6185 10.4282C12.8132 10.5149 12.9875 10.6416 13.13 10.8L16 13.8599" stroke="#990000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3 7.41992L3 17.4199C3 19.6291 4.79086 21.4199 7 21.4199H17C19.2091 21.4199 21 19.6291 21 17.4199V7.41992C21 5.21078 19.2091 3.41992 17 3.41992H7C4.79086 3.41992 3 5.21078 3 7.41992Z" stroke="#990000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <!-- Show Less Label -->
                <div class="font-bold">
                    Show Less
                </div>
            </div>
        </div>

        <!-- Side Nav Section Separator -->
        <div class="border-t border-t-[#990000] w-5/6 my-1 mx-auto"></div>

        <!-- Side Nav Section 4 Container -->
        <div class="w-[87%] flex flex-col ml-6">

            <!-- Section 4 Heading -->
            <div class="font-bold">EXPLORE</div>

            <!-- Trending Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Trending Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.926 20.574a7.26 7.26 0 0 0 3.039 1.511c.107.035.179-.105.107-.175-2.395-2.285-1.079-4.758-.107-5.873.693-.796 1.68-2.107 1.608-3.865 0-.176.18-.317.322-.211 1.359.703 2.288 2.25 2.538 3.515.394-.386.537-.984.537-1.511 0-.176.214-.317.393-.176 1.287 1.16 3.503 5.097-.072 8.19-.071.071 0 .212.072.177a8.761 8.761 0 0 0 3.003-1.442c5.827-4.5 2.037-12.48-.43-15.116-.321-.317-.893-.106-.893.351-.036.95-.322 2.004-1.072 2.707-.572-2.39-2.478-5.105-5.195-6.441-.357-.176-.786.105-.75.492.07 3.27-2.063 5.352-3.922 8.059-1.645 2.425-2.717 6.89.822 9.808z" fill="#990000" />
                    </svg>
                </div>
                <!-- Trending Label -->
                <div class="font-bold">
                    Trending
                </div>
            </div>

            <!-- Salvation Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Salvation Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center">
                    <svg version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 32 32" xml:space="preserve">
                        <style type="text/css">
                            .open_een {
                                fill: #990000;
                            }
                        </style>
                        <g>
                            <g>
                                <path class="open_een" d="M17.5,30h-3c-0.827,0-1.5-0.673-1.5-1.5v-12c0-0.275-0.225-0.5-0.5-0.5h-6C5.673,16,5,15.327,5,14.5v-3
			C5,10.673,5.673,10,6.5,10h4c0.276,0,0.5,0.224,0.5,0.5S10.776,11,10.5,11h-4C6.225,11,6,11.225,6,11.5v3
			C6,14.775,6.225,15,6.5,15h6c0.827,0,1.5,0.673,1.5,1.5v12c0,0.275,0.225,0.5,0.5,0.5h3c0.275,0,0.5-0.225,0.5-0.5v-12
			c0-0.827,0.673-1.5,1.5-1.5h6c0.275,0,0.5-0.225,0.5-0.5v-3c0-0.275-0.225-0.5-0.5-0.5h-6c-0.827,0-1.5-0.673-1.5-1.5v-6
			C18,3.225,17.775,3,17.5,3h-3C14.225,3,14,3.225,14,3.5v7c0,0.276-0.224,0.5-0.5,0.5S13,10.776,13,10.5v-7
			C13,2.673,13.673,2,14.5,2h3C18.327,2,19,2.673,19,3.5v6c0,0.275,0.225,0.5,0.5,0.5h6c0.827,0,1.5,0.673,1.5,1.5v3
			c0,0.827-0.673,1.5-1.5,1.5h-6c-0.275,0-0.5,0.225-0.5,0.5v12C19,29.327,18.327,30,17.5,30z" />
                            </g>
                            <g>
                                <path class="open_een" d="M17.5,30h-3c-0.827,0-1.5-0.673-1.5-1.5v-12c0-0.275-0.225-0.5-0.5-0.5h-6C5.673,16,5,15.327,5,14.5v-3
			C5,10.673,5.673,10,6.5,10h4c0.276,0,0.5,0.224,0.5,0.5S10.776,11,10.5,11h-4C6.225,11,6,11.225,6,11.5v3
			C6,14.775,6.225,15,6.5,15h6c0.827,0,1.5,0.673,1.5,1.5v12c0,0.275,0.225,0.5,0.5,0.5h3c0.275,0,0.5-0.225,0.5-0.5v-12
			c0-0.827,0.673-1.5,1.5-1.5h6c0.275,0,0.5-0.225,0.5-0.5v-3c0-0.275-0.225-0.5-0.5-0.5h-6c-0.827,0-1.5-0.673-1.5-1.5v-6
			C18,3.225,17.775,3,17.5,3h-3C14.225,3,14,3.225,14,3.5v7c0,0.276-0.224,0.5-0.5,0.5S13,10.776,13,10.5v-7
			C13,2.673,13.673,2,14.5,2h3C18.327,2,19,2.673,19,3.5v6c0,0.275,0.225,0.5,0.5,0.5h6c0.827,0,1.5,0.673,1.5,1.5v3
			c0,0.827-0.673,1.5-1.5,1.5h-6c-0.275,0-0.5,0.225-0.5,0.5v12C19,29.327,18.327,30,17.5,30z" />
                            </g>
                        </g>
                    </svg>
                </div>
                <!-- Salvation Label -->
                <div class="font-bold">
                    Salvation
                </div>
            </div>

            <!-- Preaching Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Preaching Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center">
                    <svg fill="#990000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 256 207" enable-background="new 0 0 256 207" xml:space="preserve">
                        <path d="M52.13,30.983c0-15.586,12.469-28.155,28.155-28.155c15.586,0,28.155,12.569,28.155,28.155
	c-0.1,15.686-12.67,28.155-28.155,28.155C64.7,59.138,52.13,46.569,52.13,30.983z M207.433,151.74h-51.087v-45.652
	c0-22.24-19.435-40.217-41.304-40.217H46.565C22.556,65.871,1.989,86.675,2,107.175v83.695c-0.028,9.275,6.523,14.119,13.043,14.13
	c6.537,0.012,13.043-4.832,13.043-14.13v-81.521h8.696v95.564h84.782v-95.564h8.696l0.088,54.749
	c-0.058,9.487,5.807,13.528,11.868,13.729h65.217C225.218,177.826,225.218,151.74,207.433,151.74z M183.616,34.964
	c-7.565,0-13.751,6.186-13.751,13.751c0,0-0.167,76.194-0.167,76.82c0,7.398,5.893,13.416,13.207,13.709v0.042H254v-3.845
	c-5.475,0-9.906-4.43-9.906-9.906s4.43-9.906,9.906-9.906v-0.084V34.964H183.616z M204.305,61.588h11.494V50.136h7.649V61.63h11.494
	v7.649h-11.494v26.791h-7.649V69.236h-11.494V61.588z M185.163,42.487h3.845v65.034h-3.845
	C185.163,107.521,185.163,42.487,185.163,42.487z M240.249,125.493c0,3.887,1.672,7.398,4.263,9.906h-61.063
	c-5.475,0.042-9.947-4.43-9.947-9.906c0-5.183,4.054-9.446,9.153-9.822l61.983-0.125
	C241.963,118.054,240.249,121.565,240.249,125.493z" />
                    </svg>
                </div>
                <!-- Preaching Label -->
                <div class="font-bold">
                    Preaching
                </div>
            </div>

            <!-- Audio Bible Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Audio Bible Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center">
                    <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                        <g>
                            <path fill="#990000" d="M59.998,28.001h-7.999c-2.211,0-4,1.789-4,4s1.789,4,4,4h7.999c2.211,0,4-1.789,4-4
		S62.209,28.001,59.998,28.001z" />
                            <path fill="#990000" d="M49.71,19.466l6.929-4c1.914-1.105,2.57-3.551,1.461-5.465c-1.102-1.914-3.547-2.57-5.46-1.465l-6.93,4
		c-1.914,1.105-2.57,3.551-1.461,5.464C45.351,19.915,47.796,20.571,49.71,19.466z" />
                            <path fill="#990000" d="M56.639,48.535l-6.929-3.999c-1.914-1.105-4.355-0.449-5.461,1.464c-1.105,1.914-0.453,4.359,1.461,5.465
		l6.93,4c1.913,1.105,4.358,0.449,5.464-1.465S58.553,49.641,56.639,48.535z" />
                            <path fill="#990000" d="M37.53,0.307c-1.492-0.625-3.211-0.277-4.359,0.867L18.343,16.001H4c-2.211,0-4,1.789-4,4v24
		C0,46.211,1.789,48,4,48h14.343l14.828,14.828C33.937,63.594,34.96,64,35.999,64c0.516,0,1.035-0.098,1.531-0.305
		c1.496-0.617,2.469-2.078,2.469-3.695V4.001C39.999,2.384,39.026,0.924,37.53,0.307z" />
                        </g>
                    </svg>
                </div>
                <!-- Audio Bible Label -->
                <div class="font-bold">
                    Audio Bible
                </div>
            </div>

            <!-- Soulwinning Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Soulwinning Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center">
                    <svg fill="#990000" class="w-6 h-6" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M174.61,55.694L104.37,2.034c-4.345-3.32-10.557-2.486-13.877,1.857c-3.318,4.345-2.486,10.558,1.858,13.877l0.128,0.098
			C78.585,38.478,69.454,70.763,75.607,90.181c0.868-0.444,1.767-0.847,2.694-1.21c14.303-5.573,30.373,0.932,36.868,14.642
			c17.024-5.683,35.473-18.576,47.294-32.283l0.128,0.098c4.344,3.319,10.556,2.488,13.877-1.857
			C179.786,65.227,178.955,59.013,174.61,55.694z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M61.745,126.676c-1.432-3.674-2.063-7.462-1.985-11.172l-8.641-6.602c-3.286-2.51-7.984-1.882-10.494,1.404
			l-11.379,14.895c-2.51,3.286-1.881,7.984,1.404,10.494l34.387,26.269c3.121,2.384,7.513,1.932,10.097-0.936L61.745,126.676z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M210.796,90.515c-24.363,0-44.113,19.75-44.113,44.113c-0.001,24.544,19.966,44.113,44.113,44.113
			c24.245,0,44.113-19.659,44.113-44.113C254.909,110.265,235.158,90.515,210.796,90.515z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M290.363,227.626c-0.099-20.49-16.851-37.159-37.341-37.159c-8.48,0-65.612,0-74.241,0l-52.427-21.656l-22.776-58.439
			c-3.165-8.12-12.313-12.139-20.434-8.973c-8.121,3.166-12.138,12.313-8.973,20.434l24.798,63.628
			c1.836,4.709,5.516,8.465,10.187,10.394l59.456,24.56c0,22.513,0.007,272.648,0.007,272.648c0,10.458,8.478,18.936,18.936,18.936
			c10.458,0,18.936-8.478,18.936-18.936V341.699h8.178v151.365c0,10.458,8.478,18.936,18.936,18.936
			c10.458,0,18.936-8.478,18.936-18.936c0-24.452-0.344-266.198-0.344-265.182c0-1.805,1.449-3.276,3.254-3.303
			c1.805-0.027,3.297,1.4,3.35,3.205l0.582,115.935c0.043,8.688,7.1,15.701,15.778,15.701c0.027,0,0.055,0,0.081,0
			c8.716-0.043,15.745-7.145,15.701-15.859L290.363,227.626z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <circle cx="404.136" cy="134.63" r="44.113" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M483.711,227.625c-0.103-20.489-16.856-37.158-37.346-37.158c-3.205,0-61.979,0-85.556,0
			c-20.491,0-37.242,16.67-37.344,37.158l-0.583,115.935c-0.043,8.715,6.986,15.816,15.701,15.859c0.027,0,0.055,0,0.081,0
			c8.678,0,15.734-7.013,15.778-15.701l0.583-115.936c0.02-1.908,1.577-3.441,3.484-3.431s3.447,1.559,3.447,3.466l0.008,265.245
			c0,10.458,8.478,18.936,18.936,18.936s18.936-8.478,18.936-18.936V341.699h8.178v151.365c0,10.458,8.478,18.936,18.936,18.936
			c10.458,0,18.936-8.478,18.936-18.936l-0.336-265.303c-0.002-1.821,1.472-3.3,3.295-3.303c1.823-0.002,3.3,1.473,3.303,3.295
			c0,0.01,0,0.021,0,0.032l0.582,115.935c0.043,8.688,7.1,15.701,15.778,15.701c0.027,0,0.055,0,0.081,0
			c8.716-0.043,15.745-7.145,15.701-15.859L483.711,227.625z" />
                            </g>
                        </g>
                    </svg>
                </div>
                <!-- Soulwinning Label -->
                <div class="font-bold">
                    Soulwinning
                </div>
            </div>

            <!-- Moments Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Moments Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center">
                    <svg class="w-6 h-8" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>moment_line</title>
                        <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Logo" transform="translate(-288.000000, -96.000000)">
                                <g id="moment_line" transform="translate(288.000000, 96.000000)">
                                    <path d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z" id="MingCute" fill-rule="nonzero">

                                    </path>
                                    <path d="M12,2 C17.5228,2 22,6.47715 22,12 C22,17.5228 17.5228,22 12,22 C6.47715,22 2,17.5228 2,12 C2,6.47715 6.47715,2 12,2 Z M10.0001,15.4641 L10.0001,19.748 C10.6393,19.9125 11.3094,20 12,20 C13.4577,20 14.8244,19.6101 16.0014,18.9289 L10.0001,15.4641 Z M8.00009,12 L4.29001,14.1421 C4.82841,16.0841952 6.08094152,17.729329 7.74710137,18.777145 L8.00009,18.9298 L8.00009,12 Z M20,12 L14,15.464 L17.7083,17.605 C19.0582048,16.2303333 19.9155018,14.3701338 19.9940881,12.310418 L20,12 Z M11.9891,9.68436 L9.98916,10.8517 L10.0001,13.1673 L12.0109,14.3156 L14.0109,13.1483 L14,10.8327 L11.9891,9.68436 Z M6.29176,6.395 C4.87427,7.83843 4,9.81712 4,12 L10,8.53597 L6.29176,6.395 Z M16,5.07026 L16,11.9999 L19.71,9.85797 C19.1447,7.81877 17.7921,6.10691 16,5.07026 Z M12,4 C10.5423,4 9.17563,4.38988 7.99863,5.07105 L14,8.53595 L14,4.25203 C13.3608,4.08751 12.6906,4 12,4 Z" id="形状" fill="#990000">

                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <!-- Moments Label -->
                <div class="font-bold">
                    Moments
                </div>
            </div>

            <!-- Documentaries Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Documentaries Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center">
                    <svg fill="#990000" class="w-6 h-6" version="1.1" id="XMLID_35_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                        <g id="document-video">
                            <g>
                                <polygon points="24,24 19,24 19,22 22,22 22,6.4 17.6,2 6,2 6,9 4,9 4,0 18.4,0 24,5.6 		" />
                            </g>
                            <g>
                                <polygon points="23,8 16,8 16,2 18,2 18,6 23,6 		" />
                            </g>
                            <g>
                                <path d="M17,23.8l-5-3V23H0V11h12v2.2l5-3V23.8z M2,21h8v-8H2V21z M12,18.4l3,1.8v-6.5l-3,1.8V18.4z" />
                            </g>
                        </g>
                    </svg>
                </div>
                <!-- Documentaries Label -->
                <div class="font-bold">
                    Documentaries
                </div>
            </div>

            <!-- Creation Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Creation Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center">
                    <svg fill="#990000" class="w-6 h-6" viewBox="0 -8 72 72" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
                        <title>world</title>
                        <path d="M59.25,12.42l-.83.27L54,13.08l-1.27,2-.91-.29L48.23,11.6l-.52-1.66L47,8.16l-2.23-2-2.63-.51-.06,1.2,2.58,2.52,1.26,1.48-1.42.75-1.15-.34-1.73-.73,0-1.39L39.42,8.2l-.75,3.29L36.38,12l.23,1.84,3,.57.52-2.93,2.46.37,1.14.67h1.84L46.8,15l3.34,3.38-.25,1.32-2.69-.34-4.64,2.34-3.34,4-.43,1.78H37.58l-2.23-1-2.17,1,.54,2.29.94-1.09,1.67,0-.12,2,1.38.4L39,32.67,41.2,32l2.57.4,3,.8,1.48.18,2.52,2.86,4.87,2.86-3.15,6-3.32,1.54-1.26,3.44-4.81,3.21-.51,1.85A28,28,0,0,0,59.25,12.42Z" />
                        <path d="M39.22,42.63l-2-3.78L39.05,35l-1.87-.56-2.1-2.11-4.66-1L28.88,28v1.92H28.2l-4-5.44V20l-2.94-4.78-4.67.83H13.43l-1.59-1,2-1.6-2,.46A28,28,0,0,0,36,56a29,29,0,0,0,3.51-.25l-.29-3.39s1.29-5,1.29-5.2S39.22,42.63,39.22,42.63Z" />
                        <path d="M18.41,9l5-.7,2.29-1.25,2.58.74,4.12-.23,1.42-2.22,2.05.34,5-.47,1.38-1.52,2-1.29,2.74.41,1-.15a27.91,27.91,0,0,0-33.51,7.49h0ZM37.18,2.78,40,1.21l1.84,1.06-2.66,2-2.54.26-1.14-.74ZM28.71,3,30,3.54,31.63,3l.9,1.56-3.82,1L26.88,4.5S28.67,3.35,28.71,3Z" />
                    </svg>
                </div>
                <!-- Creation Label -->
                <div class="font-bold">
                    Creation
                </div>
            </div>

            <!-- Interviews Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Interviews Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center">
                    <svg fill="#990000" class="w-6 h-6" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <title>microphone</title>
                        <path d="M4 20q0 3.264 1.6 6.048t4.384 4.352 6.016 1.6 6.016-1.6 4.384-4.352 1.6-6.048q0-0.832-0.576-1.408t-1.408-0.576-1.44 0.576-0.576 1.408q0 3.328-2.336 5.664t-5.664 2.336-5.664-2.336-2.336-5.664q0-0.832-0.576-1.408t-1.408-0.576-1.44 0.576-0.576 1.408zM10.016 20q0 2.496 1.728 4.256t4.256 1.76 4.256-1.76 1.76-4.256v-1.984h-3.008q-0.416 0-0.704-0.288t-0.288-0.704 0.288-0.704 0.704-0.32h3.008v-1.984h-3.008q-0.416 0-0.704-0.288t-0.288-0.704 0.288-0.704 0.704-0.32h3.008v-1.984h-3.008q-0.416 0-0.704-0.288t-0.288-0.704 0.288-0.704 0.704-0.32h3.008v-1.984h-3.008q-0.416 0-0.704-0.288t-0.288-0.704 0.288-0.704 0.704-0.32h2.624q-0.608-1.76-2.144-2.88t-3.488-1.12q-1.92 0-3.456 1.12t-2.176 2.88h2.624q0.416 0 0.704 0.32t0.32 0.704-0.32 0.704-0.704 0.288h-2.976v1.984h2.976q0.416 0 0.704 0.32t0.32 0.704-0.32 0.704-0.704 0.288h-2.976v1.984h2.976q0.416 0 0.704 0.32t0.32 0.704-0.32 0.704-0.704 0.288h-2.976v1.984h2.976q0.416 0 0.704 0.32t0.32 0.704-0.32 0.704-0.704 0.288h-2.976v1.984z"></path>
                    </svg>
                </div>
                <!-- Interviews Label -->
                <div class="font-bold">
                    Interviews
                </div>
            </div>

            <!-- Podcasts Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Podcasts Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 17.7083C4.15875 16.0604 3 13.6655 3 11C3 6.02944 7.02944 2 12 2C16.9706 2 21 6.02944 21 11C21 13.6655 19.8412 16.0604 18 17.7083M7.80238 13.7177C7.29479 12.9353 7 12.0021 7 11C7 8.23858 9.23858 6 12 6C14.7614 6 17 8.23858 17 11C17 12.0008 16.706 12.9329 16.1996 13.7147M12 22C10.8954 22 10 21.1046 10 20V18C10 16.8954 10.8954 16 12 16C13.1046 16 14 16.8954 14 18V20C14 21.1046 13.1046 22 12 22ZM13 11C13 11.5523 12.5523 12 12 12C11.4477 12 11 11.5523 11 11C11 10.4477 11.4477 10 12 10C12.5523 10 13 10.4477 13 11Z" stroke="#990000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <!-- Podcasts Label -->
                <div class="font-bold">
                    Podcasts
                </div>
            </div>

            <!-- Landmarks Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Landmarks Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center">
                    <svg class="w-6 h-6" viewBox="0 -29.5 1083 1083" fill="#990000" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <path d="M692.071102 895.024886l-38.614525-15.601829c-36.534281-14.821737-83.729812-14.821737-120.394109 0l-38.614525 15.601829c-17.682072 7.150838-44.335196 7.150838-61.887252 0l-38.614525-15.601829c-36.534281-14.821737-83.729812-14.821737-120.394109 0l-50.445912 20.412392a39.030574 39.030574 0 0 0-21.582529 50.835958 39.134586 39.134586 0 0 0 50.835957 21.582529l50.445912-20.412392c17.682072-7.150838 44.20518-7.150838 61.887252 0l38.614526 15.601828c18.332148 7.410868 39.264601 11.051295 60.197054 11.051295s41.864906-3.640427 60.197054-11.051295l38.614525-15.601828c17.682072-7.150838 44.20518-7.150838 61.887253 0l38.614525 15.601828c20.022346 8.060945 42.644997-1.560183 50.835957-21.582529 8.060945-20.022346-1.560183-42.775013-21.582529-50.835957zM444.132047 746.547486l-38.614525-13.781615c-35.624175-12.741493-81.649568-12.741493-117.403759 0l-50.445911 18.072118a38.887557 38.887557 0 0 0-23.532758 49.795835c7.280853 20.282377 29.513459 30.943626 49.795835 23.532758L314.376841 806.094464c18.462164-6.630777 46.415439-6.630777 64.877603 0l38.614525 13.781615c17.812087 6.370747 38.224479 9.621127 58.636872 9.621128 20.412392 0 40.824784-3.250381 58.636871-9.621128L573.757237 806.094464c3.900457-1.430168 8.320975-2.470289 13.261554-3.380396 21.192483-3.640427 35.494159-23.792788 31.853733-44.985272a39.004571 39.004571 0 0 0-44.985272-31.853733c-9.361097 1.560183-18.202133 3.900457-26.393093 6.760793l-38.614525 13.781615c-18.462164 6.760792-46.285424 6.760792-64.747587 0.130015zM501.858812 596.639919c-15.731844 5.200609-39.524632 5.200609-55.386491 0l-33.803961-11.051295c-31.593702-10.401219-72.418487-10.401219-104.012189 0l-44.075165 14.431691a39.199594 39.199594 0 0 0-24.962926 49.275774 39.199594 39.199594 0 0 0 49.275775 24.962926l44.075165-14.431691c15.731844-5.200609 39.524632-5.200609 55.38649 0l33.803962 11.051295c15.731844 5.200609 33.933977 7.800914 52.006094 7.800914s36.144236-2.600305 52.006095-7.800914a39.199594 39.199594 0 0 0 24.962925-49.275775 39.147588 39.147588 0 0 0-49.275774-24.962925zM302.805485 523.18131h102.582021c21.582529 0 39.004571-17.422042 39.004571-39.004571s-17.422042-39.004571-39.004571-39.00457h-102.582021c-21.582529 0-39.004571 17.422042-39.004571 39.00457s17.422042 39.004571 39.004571 39.004571zM430.870493 350.001016h2.210259l439.711528 4.550533c21.582529 0.650076 39.134586-17.031996 39.394617-38.614525s-17.031996-39.134586-38.614525-39.394617l-92.570848-0.910106L689.080752 191.772473l168.239715-102.842051 158.488573 171.620111c7.670899 8.320975 18.202133 12.611478 28.733367 12.611478 9.491112 0 18.982224-3.380396 26.393093-10.401219a39.030574 39.030574 0 0 0 2.210259-55.12646L892.944642 12.611478a39.160589 39.160589 0 0 0-49.015744-6.890808l-214.915185 131.315389-36.664297-33.413916c-9.751143-8.841036-23.272727-12.221432-36.01422-8.971051l-139.636364 36.01422-61.757237-55.646521c-13.001524-11.701371-32.243779-13.261554-47.065516-3.900457L223.626206 124.684611l-64.227526-51.095987c-14.431691-11.571356-35.104114-11.311326-49.275775 0.520061l-96.081259 80.2194A39.108583 39.108583 0 0 0 9.101067 209.32453a39.108583 39.108583 0 0 0 54.996444 4.940579l71.638396-59.807008 125.204672 99.59167c7.150838 5.72067 15.731844 8.45099 24.312849 8.450991 11.441341 0 22.882682-5.070594 30.553581-14.691722 13.391569-16.901981 10.661249-41.344845-6.240732-54.86643l-21.192483-16.90198 36.534281-23.272728 52.656171 47.455562 56.036567 71.76841c-131.315389-1.300152-247.939055 86.070086-283.823261 212.314881L11.831386 968.613509a39.147588 39.147588 0 0 0 37.444389 49.795836c17.031996 0 32.633824-11.18131 37.444388-28.343322l137.81615-484.176739c26.263078-92.050787 110.902996-155.888268 206.33418-155.888268z m233.117318-75.538852L533.192483 273.031996l-59.676993-76.578974 81.909599-21.062468 108.562722 99.07161zM1038.561706 394.596242l-401.617064-5.590655h-1.560183c-40.824784 0-77.489081 22.492636-96.211275 58.766886a107.613611 107.613611 0 0 0 9.361097 113.763332c0.650076 0.780091 1.300152 1.690198 1.950229 2.470289l389.005586 446.602337a38.952565 38.952565 0 0 0 54.996445 3.770442 38.939563 38.939563 0 0 0 3.770442-54.996445L610.421534 514.080244c-9.101067-13.261554-4.420518-25.743017-1.820214-30.683596 2.600305-5.070594 10.271204-16.771965 27.3032-16.38192l401.617065 5.590655c21.062468-0.26003 39.264601-16.901981 39.524631-38.484509a39.212595 39.212595 0 0 0-38.48451-39.524632z" />
                    </svg>
                </div>
                <!-- Landmarks Label -->
                <div class="font-bold">
                    Landmarks
                </div>
            </div>

            <!-- Framing The World Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Framing The World Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center border border-[#990000] rounded">
                    <svg fill="#990000" class="w-6 h-6" viewBox="0 -8 72 72" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
                        <title>world</title>
                        <path d="M59.25,12.42l-.83.27L54,13.08l-1.27,2-.91-.29L48.23,11.6l-.52-1.66L47,8.16l-2.23-2-2.63-.51-.06,1.2,2.58,2.52,1.26,1.48-1.42.75-1.15-.34-1.73-.73,0-1.39L39.42,8.2l-.75,3.29L36.38,12l.23,1.84,3,.57.52-2.93,2.46.37,1.14.67h1.84L46.8,15l3.34,3.38-.25,1.32-2.69-.34-4.64,2.34-3.34,4-.43,1.78H37.58l-2.23-1-2.17,1,.54,2.29.94-1.09,1.67,0-.12,2,1.38.4L39,32.67,41.2,32l2.57.4,3,.8,1.48.18,2.52,2.86,4.87,2.86-3.15,6-3.32,1.54-1.26,3.44-4.81,3.21-.51,1.85A28,28,0,0,0,59.25,12.42Z" />
                        <path d="M39.22,42.63l-2-3.78L39.05,35l-1.87-.56-2.1-2.11-4.66-1L28.88,28v1.92H28.2l-4-5.44V20l-2.94-4.78-4.67.83H13.43l-1.59-1,2-1.6-2,.46A28,28,0,0,0,36,56a29,29,0,0,0,3.51-.25l-.29-3.39s1.29-5,1.29-5.2S39.22,42.63,39.22,42.63Z" />
                        <path d="M18.41,9l5-.7,2.29-1.25,2.58.74,4.12-.23,1.42-2.22,2.05.34,5-.47,1.38-1.52,2-1.29,2.74.41,1-.15a27.91,27.91,0,0,0-33.51,7.49h0ZM37.18,2.78,40,1.21l1.84,1.06-2.66,2-2.54.26-1.14-.74ZM28.71,3,30,3.54,31.63,3l.9,1.56-3.82,1L26.88,4.5S28.67,3.35,28.71,3Z" />
                    </svg>
                </div>
                <!-- Framing The World Label -->
                <div class="font-bold">
                    Framing The World
                </div>
            </div>

            <!-- Other Videos Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Other Videos Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center border border-[#990000] rounded">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#990000" d="m11 14 7-4-7-4z" />
                        <path d="M4 8H2v12c0 1.103.897 2 2 2h12v-2H4V8z" />
                        <path d="M20 2H8a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm-9 12V6l7 4-7 4z" />
                    </svg>
                </div>
                <!-- Other Videos Label -->
                <div class="font-bold">
                    Other Videos
                </div>
            </div>

            <!-- Show More Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Show More Icon -->
                <div class="mr-8 ml-2">
                    <svg class="w-6 h-6" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 10.99L13.1299 14.05C12.9858 14.2058 12.811 14.3298 12.6166 14.4148C12.4221 14.4998 12.2122 14.5437 12 14.5437C11.7878 14.5437 11.5779 14.4998 11.3834 14.4148C11.189 14.3298 11.0142 14.2058 10.87 14.05L8 10.99" stroke="#990000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21 17.4199V7.41992C21 5.21078 19.2091 3.41992 17 3.41992L7 3.41992C4.79086 3.41992 3 5.21078 3 7.41992V17.4199C3 19.6291 4.79086 21.4199 7 21.4199H17C19.2091 21.4199 21 19.6291 21 17.4199Z" stroke="#990000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <!-- Show More Label -->
                <div class="font-bold">
                    Show More
                </div>
            </div>

            <!-- Show Less Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Show Less Icon -->
                <div class="mr-8 ml-2">
                    <svg class="w-6 h-6" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 13.8599L10.87 10.8C11.0125 10.6416 11.1868 10.5149 11.3815 10.4282C11.5761 10.3415 11.7869 10.2966 12 10.2966C12.2131 10.2966 12.4239 10.3415 12.6185 10.4282C12.8132 10.5149 12.9875 10.6416 13.13 10.8L16 13.8599" stroke="#990000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3 7.41992L3 17.4199C3 19.6291 4.79086 21.4199 7 21.4199H17C19.2091 21.4199 21 19.6291 21 17.4199V7.41992C21 5.21078 19.2091 3.41992 17 3.41992H7C4.79086 3.41992 3 5.21078 3 7.41992Z" stroke="#990000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <!-- Show Less Label -->
                <div class="font-bold">
                    Show Less
                </div>
            </div>
        </div>

        <!-- Side Nav Section Separator -->
        <div class="border-t border-t-[#990000] w-5/6 my-1 mx-auto"></div>

        <!-- Side Nav Section 5 Container -->
        <div class="w-[87%] flex flex-col ml-6">

            <!-- About Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- About Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center">
                    <svg class="w-6 h-6" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>about</title>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="about-white" fill="#990000" transform="translate(42.666667, 42.666667)">
                                <path d="M213.333333,3.55271368e-14 C95.51296,3.55271368e-14 3.55271368e-14,95.51168 3.55271368e-14,213.333333 C3.55271368e-14,331.153707 95.51296,426.666667 213.333333,426.666667 C331.154987,426.666667 426.666667,331.153707 426.666667,213.333333 C426.666667,95.51168 331.154987,3.55271368e-14 213.333333,3.55271368e-14 Z M213.333333,384 C119.227947,384 42.6666667,307.43872 42.6666667,213.333333 C42.6666667,119.227947 119.227947,42.6666667 213.333333,42.6666667 C307.44,42.6666667 384,119.227947 384,213.333333 C384,307.43872 307.44,384 213.333333,384 Z M240.04672,128 C240.04672,143.46752 228.785067,154.666667 213.55008,154.666667 C197.698773,154.666667 186.713387,143.46752 186.713387,127.704107 C186.713387,112.5536 197.99616,101.333333 213.55008,101.333333 C228.785067,101.333333 240.04672,112.5536 240.04672,128 Z M192.04672,192 L234.713387,192 L234.713387,320 L192.04672,320 L192.04672,192 Z" id="Shape">

                                </path>
                            </g>
                        </g>
                    </svg>
                </div>
                <!-- About Label -->
                <div class="font-bold">
                    About
                </div>
            </div>

            <!-- Doctrine Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Doctrine Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center">
                    <svg fill="#990000" class="w-6 h-6" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60" xml:space="preserve">
                        <g>
                            <path d="M60,11V5h-3.146C56.94,4.674,57,4.341,57,4c0-2.206-1.794-4-4-4s-4,1.794-4,4c0,0.341,0.06,0.674,0.146,1H45v6h2v1v36v1h-2
		v6h4.146C49.06,55.326,49,55.659,49,56c0,2.206,1.794,4,4,4s4-1.794,4-4c0-0.341-0.06-0.674-0.146-1H60v-6h-2V11H60z M58,53h-2.333
		h-5.333H47v-2h11V53z M47,9V7h3.333h5.334H58v2H47z" />
                            <path d="M45,12H12v36h33V12z M39,19h3c0.552,0,1,0.448,1,1s-0.448,1-1,1h-3c-0.552,0-1-0.448-1-1S38.448,19,39,19z M33,26
		c-0.552,0-1-0.448-1-1s0.448-1,1-1h9c0.552,0,1,0.448,1,1s-0.448,1-1,1H33z M40,30c0,0.552-0.448,1-1,1h-6c-0.552,0-1-0.448-1-1
		s0.448-1,1-1h6C39.552,29,40,29.448,40,30z M35.29,19.29c0.37-0.37,1.05-0.37,1.42,0C36.89,19.48,37,19.74,37,20
		c0,0.26-0.11,0.52-0.29,0.71C36.52,20.89,36.26,21,36,21c-0.26,0-0.52-0.11-0.71-0.29C35.11,20.52,35,20.26,35,20
		C35,19.74,35.11,19.48,35.29,19.29z M30,19h3c0.552,0,1,0.448,1,1s-0.448,1-1,1h-3c-0.552,0-1-0.448-1-1S29.448,19,30,19z
		 M29.29,24.29c0.37-0.37,1.05-0.37,1.42,0C30.89,24.48,31,24.74,31,25c0,0.26-0.11,0.52-0.29,0.71C30.52,25.89,30.26,26,30,26
		c-0.26,0-0.52-0.11-0.71-0.29C29.11,25.52,29,25.26,29,25C29,24.74,29.11,24.48,29.29,24.29z M29.29,29.29
		c0.37-0.37,1.04-0.37,1.42,0C30.89,29.48,31,29.74,31,30c0,0.26-0.11,0.52-0.29,0.71C30.52,30.89,30.26,31,30,31
		c-0.26,0-0.52-0.11-0.71-0.29C29.11,30.52,29,30.26,29,30C29,29.74,29.11,29.48,29.29,29.29z M20.29,19.29
		c0.37-0.37,1.04-0.37,1.42,0C21.89,19.48,22,19.73,22,20s-0.11,0.52-0.29,0.71C21.52,20.89,21.26,21,21,21
		c-0.26,0-0.52-0.11-0.71-0.29C20.11,20.52,20,20.26,20,20C20,19.74,20.11,19.48,20.29,19.29z M15,19h3c0.552,0,1,0.448,1,1
		s-0.448,1-1,1h-3c-0.552,0-1-0.448-1-1S14.448,19,15,19z M18,41h-3c-0.552,0-1-0.448-1-1s0.448-1,1-1h3c0.552,0,1,0.448,1,1
		S18.552,41,18,41z M27,41h-6c-0.552,0-1-0.448-1-1s0.448-1,1-1h6c0.552,0,1,0.448,1,1S27.552,41,27,41z M27,36H15
		c-0.552,0-1-0.448-1-1s0.448-1,1-1h12c0.552,0,1,0.448,1,1S27.552,36,27,36z M15,30c0-0.27,0.11-0.52,0.29-0.71
		c0.37-0.37,1.04-0.37,1.42,0C16.89,29.48,17,29.74,17,30c0-0.552,0.448-1,1-1h6c0.552,0,1,0.448,1,1s-0.448,1-1,1h-6
		c-0.552,0-1-0.448-1-1c0,0.27-0.11,0.52-0.29,0.71C16.52,30.89,16.26,31,16,31c-0.26,0-0.52-0.11-0.71-0.29
		C15.11,30.52,15,30.27,15,30z M27.71,30.71C27.52,30.89,27.26,31,27,31c-0.26,0-0.52-0.11-0.71-0.29C26.11,30.52,26,30.26,26,30
		c0-0.26,0.11-0.52,0.29-0.71c0.38-0.37,1.05-0.37,1.42,0C27.89,29.48,28,29.74,28,30C28,30.26,27.89,30.52,27.71,30.71z M27,26h-9
		c-0.552,0-1-0.448-1-1c0,0.26-0.11,0.52-0.29,0.71C16.52,25.89,16.26,26,16,26c-0.26,0-0.52-0.11-0.71-0.29
		C15.11,25.52,15,25.26,15,25c0-0.27,0.11-0.52,0.29-0.71c0.37-0.36,1.04-0.37,1.42,0C16.89,24.48,17,24.74,17,25
		c0-0.552,0.448-1,1-1h9c0.552,0,1,0.448,1,1S27.552,26,27,26z M27,21h-3c-0.552,0-1-0.448-1-1s0.448-1,1-1h3c0.552,0,1,0.448,1,1
		S27.552,21,27,21z M33,41h-3c-0.552,0-1-0.448-1-1s0.448-1,1-1h3c0.552,0,1,0.448,1,1S33.552,41,33,41z M42,41h-6
		c-0.552,0-1-0.448-1-1s0.448-1,1-1h6c0.552,0,1,0.448,1,1S42.552,41,42,41z M42,36H30c-0.552,0-1-0.448-1-1s0.448-1,1-1h12
		c0.552,0,1,0.448,1,1S42.552,36,42,36z M43.71,30.71C43.52,30.89,43.26,31,43,31c-0.26,0-0.52-0.11-0.71-0.29
		C42.11,30.52,42,30.26,42,30c0-0.26,0.11-0.52,0.29-0.71c0.37-0.37,1.05-0.37,1.42,0C43.89,29.48,44,29.74,44,30
		C44,30.26,43.89,30.52,43.71,30.71z" />
                            <path d="M10,48V12v-1h2V5H9.854C9.94,4.674,10,4.341,10,4c0-2.206-1.794-4-4-4S2,1.794,2,4c0,0.341,0.06,0.674,0.146,1H0v6h2v38H0
		v6h2.146C2.06,55.326,2,55.659,2,56c0,2.206,1.794,4,4,4s4-1.794,4-4c0-0.341-0.06-0.674-0.146-1H12v-6h-2V48z M2,7h1.333h5.334H10
		v2H2V7z M10,53H8.667H3.333H2v-2h8V53z" />
                        </g>
                    </svg>
                </div>
                <!-- Doctrine Label -->
                <div class="font-bold">
                    Doctrine
                </div>
            </div>

            <!-- Bold Men Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Bold Men Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center">
                    <svg class="w-6 h-6" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #990000;
                            }
                        </style>
                        <g>
                            <rect x="54.929" y="284.162" class="st0" width="402.142" height="24.109" />
                            <polygon class="st0" points="75.036,384.717 97.463,384.717 97.463,355.746 414.537,355.746 414.537,384.717 436.965,384.717
		457.071,321.279 54.929,321.279 	" />
                            <rect x="111.121" y="369.396" class="st0" width="289.759" height="142.604" />
                            <circle class="st0" cx="256" cy="69.512" r="69.512" />
                            <path class="st0" d="M256,156.942c-85.155,0-106.004,112.531-106.004,112.531h212.008C362.004,269.473,341.155,156.942,256,156.942
		z" />
                        </g>
                    </svg>
                </div>
                <!-- Bold Men Label -->
                <div class="font-bold">
                    Bold Men
                </div>
            </div>

            <!-- We Are Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- We Are Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center">
                    <svg class="w-6 h-6" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#990000" d="M36.31,176c0.674,0.386 24.255,13.789 43.69,13.789c19.435,0 43.826,-13.403 44.524,-13.789l9.047,0c14.641,0.044 26.429,11.859 26.429,26.429l0,101.571c0,17.673 -14.327,32 -32,32l0,120c0,13.255 -10.745,24 -24,24l-48,0c-13.255,0 -24,-10.745 -24,-24l0,-120c-17.673,0 -32,-14.327 -32,-32l0,-100.738c0,-15.028 12.16,-27.216 27.262,-27.262l9.048,0Zm176,0c0.674,0.386 24.256,13.789 43.69,13.789c19.434,0 43.826,-13.403 44.524,-13.789l9.047,0c14.641,0.044 26.429,11.859 26.429,26.429l0,101.571c0,17.673 -14.327,32 -32,32l0,120c0,13.255 -10.745,24 -24,24l-48,0c-13.255,0 -24,-10.745 -24,-24l0,-120c-17.673,0 -32,-14.327 -32,-32l0,-100.738c0,-15.028 12.16,-27.216 27.262,-27.262l9.048,0Zm243.69,304l-48,0c-13.255,0 -24,-10.745 -24,-24l0,-120c-17.673,0 -32,-14.327 -32,-32l0,-100.738c0,-15.056 12.206,-27.262 27.262,-27.262l9.048,0c0,0 23.978,13.789 43.69,13.789c19.712,0 44.524,-13.789 44.524,-13.789l9.047,0c14.597,0 26.429,11.832 26.429,26.429l0,101.571c0,17.673 -14.327,32 -32,32l0,120c0,13.222 -10.691,23.946 -24,24Zm-376,-320c35.346,0 64,-28.654 64,-64c0,-35.346 -28.654,-64 -64,-64c-35.346,0 -64,28.654 -64,64c0,35.346 28.654,64 64,64Zm176,0c35.346,0 64,-28.654 64,-64c0,-35.346 -28.654,-64 -64,-64c-35.346,0 -64,28.654 -64,64c0,35.346 28.654,64 64,64Zm240,-64c0,35.346 -28.654,64 -64,64c-35.346,0 -64,-28.654 -64,-64c0,-35.346 28.654,-64 64,-64c35.346,0 64,28.654 64,64Z"></path>
                    </svg>
                </div>
                <!-- We Are Label -->
                <div class="font-bold">
                    We Are
                </div>
            </div>

            <!-- Salvation Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Salvation Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center">
                    <svg version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 32 32" xml:space="preserve">
                        <style type="text/css">
                            .open_een {
                                fill: #990000;
                            }
                        </style>
                        <g>
                            <g>
                                <path class="open_een" d="M17.5,30h-3c-0.827,0-1.5-0.673-1.5-1.5v-12c0-0.275-0.225-0.5-0.5-0.5h-6C5.673,16,5,15.327,5,14.5v-3
			C5,10.673,5.673,10,6.5,10h4c0.276,0,0.5,0.224,0.5,0.5S10.776,11,10.5,11h-4C6.225,11,6,11.225,6,11.5v3
			C6,14.775,6.225,15,6.5,15h6c0.827,0,1.5,0.673,1.5,1.5v12c0,0.275,0.225,0.5,0.5,0.5h3c0.275,0,0.5-0.225,0.5-0.5v-12
			c0-0.827,0.673-1.5,1.5-1.5h6c0.275,0,0.5-0.225,0.5-0.5v-3c0-0.275-0.225-0.5-0.5-0.5h-6c-0.827,0-1.5-0.673-1.5-1.5v-6
			C18,3.225,17.775,3,17.5,3h-3C14.225,3,14,3.225,14,3.5v7c0,0.276-0.224,0.5-0.5,0.5S13,10.776,13,10.5v-7
			C13,2.673,13.673,2,14.5,2h3C18.327,2,19,2.673,19,3.5v6c0,0.275,0.225,0.5,0.5,0.5h6c0.827,0,1.5,0.673,1.5,1.5v3
			c0,0.827-0.673,1.5-1.5,1.5h-6c-0.275,0-0.5,0.225-0.5,0.5v12C19,29.327,18.327,30,17.5,30z" />
                            </g>
                            <g>
                                <path class="open_een" d="M17.5,30h-3c-0.827,0-1.5-0.673-1.5-1.5v-12c0-0.275-0.225-0.5-0.5-0.5h-6C5.673,16,5,15.327,5,14.5v-3
			C5,10.673,5.673,10,6.5,10h4c0.276,0,0.5,0.224,0.5,0.5S10.776,11,10.5,11h-4C6.225,11,6,11.225,6,11.5v3
			C6,14.775,6.225,15,6.5,15h6c0.827,0,1.5,0.673,1.5,1.5v12c0,0.275,0.225,0.5,0.5,0.5h3c0.275,0,0.5-0.225,0.5-0.5v-12
			c0-0.827,0.673-1.5,1.5-1.5h6c0.275,0,0.5-0.225,0.5-0.5v-3c0-0.275-0.225-0.5-0.5-0.5h-6c-0.827,0-1.5-0.673-1.5-1.5v-6
			C18,3.225,17.775,3,17.5,3h-3C14.225,3,14,3.225,14,3.5v7c0,0.276-0.224,0.5-0.5,0.5S13,10.776,13,10.5v-7
			C13,2.673,13.673,2,14.5,2h3C18.327,2,19,2.673,19,3.5v6c0,0.275,0.225,0.5,0.5,0.5h6c0.827,0,1.5,0.673,1.5,1.5v3
			c0,0.827-0.673,1.5-1.5,1.5h-6c-0.275,0-0.5,0.225-0.5,0.5v12C19,29.327,18.327,30,17.5,30z" />
                            </g>
                        </g>
                    </svg>
                </div>
                <!-- Salvation Label -->
                <div class="font-bold">
                    Salvation
                </div>
            </div>

            <!-- Contact Container -->
            <div class="flex flex-row items-center justify-start mb-1 py-2 rounded-lg hover:bg-gray-800">

                <!-- Contact Icon -->
                <div class="mr-8 ml-2 font-bold text-[#990000] flex items-center justify-center">
                    <svg fill="#990000" class="w-6 h-6" version="1.1" id="XMLID_276_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                        <g id="contact-us">
                            <g>
                                <path d="M4,24v-5H0V0h23v19h-9.3L4,24z M2,17h4v3.7l7.3-3.7H21V2H2V17z" />
                            </g>
                            <g>
                                <rect x="5" y="8" width="3" height="3" />
                            </g>
                            <g>
                                <rect x="10" y="8" width="3" height="3" />
                            </g>
                            <g>
                                <rect x="15" y="8" width="3" height="3" />
                            </g>
                        </g>
                    </svg>
                </div>
                <!-- Contact Label -->
                <div class="font-bold">
                    Contact
                </div>
            </div>
        </div>

        <!-- Side Nav Section Separator -->
        <div class="border-t border-t-[#990000] w-5/6 my-1 mx-auto"></div>

        <!-- Side Nav Footer -->
        <div>
            <?php include_once 'inc/inc.footer.php'; ?>
        </div>
    </div>