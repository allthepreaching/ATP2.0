<?php include_once 'inc/inc.wamp.php'; ?>

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
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png" />
    <link rel="manifest" href="favicon/site.webmanifest" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/output.css">

    <!-- Title -->
    <title>ALLthePREACHING</title>
</head>
<!-- Body -->

<body class="bg-black">
    <!-- Top Nav -->
    <div class="top-nav-cont bg-black w-full">
        <nav class="nav-top w-full flex flex-row items-center justify-between px-4 py-2">

            <!-- Side Nav Toggle -->
            <div class="side-nav-toggle-container flex items-center justify-center w-12 h-12 mr-4">
                <svg fill="#ffffff" class="w-6 h-6" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h4v4H0V0zm0 6h4v4H0V6zm0 6h4v4H0v-4zM6 0h4v4H6V0zm0 6h4v4H6V6zm0 6h4v4H6v-4zm6-12h4v4h-4V0zm0 6h4v4h-4V6zm0 6h4v4h-4v-4z" fill-rule="evenodd" />
                </svg>
            </div>

            <!-- Logo -->
            <div class="nav-top-logo-cont rounded mr-4">
                <a href="index.php" class="no-underline text-gray-800 text-base font-bold transition-colors duration-300 ease-in-out hover:text-yellow-600 hover:text-shadow-md">
                    <img src="img/atp-logo.png" class="nav-top-logo w-36" alt="ALLthePREACHING">
                </a>
            </div>

            <!-- Search Bar & Mic -->
            <div class="search-mic-container flex flex-row items-center justify-between h-full w-full mr-4">

                <!-- Search Bar -->
                <div class="search-container flex justify-between items-center w-full h-12 px-4 py-2 border border-gray-700 rounded-full">
                    <input type="text" class="search-bar flex-grow bg-black text-white rounded-full h-full text-lg px-4" placeholder="Search...">
                    <div class="search-icon-container text-white px-4 border-l-gray-700">
                        <svg class="search-icon w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg>
                    </div>
                </div>

                <!-- Search Mic -->
                <div class="microphone-container flex justify-center items-center w-12 h-12 border border-gray-700 rounded-full p-1 ml-2">
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

            <!-- Login & Profile -->
            <div class="login-profile-container flex flex-row items-center justify-between">

                <!-- Upload -->
                <div class="icon-container flex justify-center items-center w-12 h-12 border border-gray-700 rounded-full p-1 ml-2">
                    <a href="#">
                        <svg fill="#ffffff" class="w-8 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512">
                            <g>
                                <path d="m480.6,165.7h-216.4v-46.3h216.4c11.3,0 20.4-9.1 20.4-20.4 0-11.3-9.1-20.4-20.4-20.4h-236.8c-11.3,0-20.4,9.1-20.4,20.4v66.7h-69.4c-11.3,0-20.4,9.1-20.4,20.4v42.5l-93.2-45c-8.9-4.9-28.4-1.6-29.3,18.4v195.1c1.2,19.3 19.5,23.5 29.3,18.4l93.2-45v42.5c0,11.3 9.1,20.4 20.4,20.4h326.7c11.3,0 20.4-9.1 20.4-20.4v-226.8c-0.1-11.3-9.2-20.5-20.5-20.5zm-428.8,198.9v-130.1l81.7,39.4v51.3l-81.7,39.4zm408.4,28h-285.9v-186h285.8v186z" />
                            </g>
                        </svg>
                    </a>
                </div>

                <!-- Notifications -->
                <div class="icon-container flex justify-center items-center w-12 h-12 border border-gray-700 rounded-full p-1 ml-2 relative">
                    <a href="#">
                        <svg class="w-8 h-6" viewBox="0 0 24 24" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.00195 17H5.60636C4.34793 17 3.71872 17 3.58633 16.9023C3.4376 16.7925 3.40126 16.7277 3.38515 16.5436C3.37082 16.3797 3.75646 15.7486 4.52776 14.4866C5.32411 13.1835 6.00031 11.2862 6.00031 8.6C6.00031 7.11479 6.63245 5.69041 7.75766 4.6402C8.88288 3.59 10.409 3 12.0003 3C13.5916 3 15.1177 3.59 16.2429 4.6402C17.3682 5.69041 18.0003 7.11479 18.0003 8.6C18.0003 11.2862 18.6765 13.1835 19.4729 14.4866C20.2441 15.7486 20.6298 16.3797 20.6155 16.5436C20.5994 16.7277 20.563 16.7925 20.4143 16.9023C20.2819 17 19.6527 17 18.3943 17H15.0003M9.00195 17L9.00031 18C9.00031 19.6569 10.3435 21 12.0003 21C13.6572 21 15.0003 19.6569 15.0003 18V17M9.00195 17H15.0003" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <div class="absolute bottom-0 left-0 w-3 h-3 bg-red-500 rounded-full z-10"></div>
                </div>

                <!-- Profile -->
                <div class="icon-container flex justify-center items-center w-12 h-12 border border-gray-700 rounded-full p-1 ml-2">
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

                <!-- Login -->
                <div class="icon-container flex justify-center items-center w-12 h-12 border border-gray-700 rounded-full p-1 ml-2">
                    <a href="#">
                        <svg fill="#ffffff" class="w-8 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512">
                            <g>
                                <path class="st0" d="M155.81,0v173.889h33.417V33.417h235.592l-74.87,50.656c-8.469,5.727-13.535,15.289-13.535,25.503v286.24
		H189.227V282.079H155.81v147.154h180.604v70.93c0,4.382,2.423,8.404,6.29,10.451c3.867,2.056,8.558,1.811,12.189-0.644
		l119.318-80.736V0H155.81z" />
                                <path class="st0" d="M228.657,290.4c0,1.844,1.068,3.524,2.75,4.3c1.664,0.775,3.638,0.514,5.042-0.685l78.044-66.035
		l-78.044-66.034c-1.404-1.2-3.378-1.46-5.042-0.686c-1.681,0.775-2.75,2.456-2.75,4.3v33.392H37.79v58.064h190.868V290.4z" />
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <!-- Side Nav -->
    <div class="side-nav bg-black text-white h-screen w-1/5 fixed top-0 left-0 overflow-auto">
        <a href="#" class="block px-4 py-2 hover:bg-gray-700">Item 1</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-700">Item 2</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-700">Item 3</a>
        <!-- ... -->
    </div>