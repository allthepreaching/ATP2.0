<?php include_once "inc/inc.header-index.php"; ?>

<!-- Home Page -->
<div class="flex flex-col items-center justify-start fixed h-full bg-black translate-y-16 transition-all duration-500" :class="{ 'w-full': !open, 'w-[calc(100vw-289px)] translate-x-72': open }">

    <!-- Tags Bar -->
    <div class="w-95vw flex flex-row items-center justify-center bg-black text-white rounded-lg fixed top-5">

        <!-- Arrows Overlay -->
        <div class="absolute inset-0 flex items-center justify-between -mx-2 pointer-events-none z-50">

            <!-- Left Arrow -->
            <div id="arrow-left" class="arrow-left flex items-center justify-center opacity-50 bg-black rounded-full transition-all duration-300 hover:opacity-100 pointer-events-auto cursor-pointer">
                <svg class="w-8 h-8 hover:text-[#990000]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 6L9 12L15 18" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>

            <!-- Right Arrow -->
            <div id="arrow-right" class="arrow-right flex items-center justify-center opacity-50 bg-black rounded-full transition-all duration-300 hover:opacity-100 pointer-events-auto cursor-pointer">
                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 6L15 12L9 18" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>

        <!-- Tags -->
        <div id="tags" class="tags flex flex-row overflow-x-auto px-3">

            <!-- All Tag -->
            <div data-tag="all-videos" class="tag cursor-pointer whitespace-nowrap flex items-center justify-center bg-gray-800 text-white px-3 mx-1 h-8 w-auto rounded-lg text-sm">All Videos</div>

            <?php

            // Run a query to fetch the unique search_category values
            $sql = 'SELECT DISTINCT search_category FROM videos WHERE search_category != "" AND vid_category NOT LIKE "pro%" ORDER BY search_category ASC';
            $result = $conn->query($sql);

            // Fetch the results and store them in an array
            $categories = $result->fetch_all(MYSQLI_ASSOC);

            // Loop through the array and create a tag for each search_category
            foreach ($categories as $category) {
                echo '<div class="tag cursor-pointer whitespace-nowrap flex items-center justify-center px-3 mx-1 h-8 w-auto bg-gray-800 text-white rounded-lg text-sm">' . $category["search_category"] . '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Content -->
    <div class="w-95vw h-full flex flex-col items-start justify-start bg-black text-white fixed top-20 overflow-y-auto pb-36">

        <!-- Newest Weekly Content Section -->
        <section>

            <!-- Newest Weekly Content Header -->
            <div class="w-full flex flex-row items-center justify-start bg-black font-bold text-white text-2xl pl-4 mb-2">
                Newest Weekly Videos
            </div>

            <!-- Newest Weekly Content Container -->
            <div class="w-95vw flex flex-col items-start justify-center bg-black text-white px-2 relative">

                <!-- Video Cards -->
                <div class="w-full flex flex-row items-center justify-center">

                    <!-- Video Card -->
                    <?php

                    // Select all from videos where the created_at date is within 8 days of the current date/time
                    $sql = "SELECT * FROM videos WHERE created_at >= DATE_SUB(NOW(), INTERVAL 8 DAY)";

                    // Execute the query
                    $result = $conn->query($sql);

                    // Check if there are any results
                    if ($result->num_rows > 0) {

                        // Loop through the results and create a video card for each video
                        while ($row = $result->fetch_assoc()) {
                            echo '
                        <!-- Video Card -->
                        <a href="pages/video.php">

                            <div class="video-card xs:w-[480px] xs:h-[460px] sm:w-[420px] sm:h-[400px] md:w-[320px] md:h-[300px] flex flex-col items-start justify-start overflow-hidden mr-2 rounded-lg flex-shrink-0"
                            x-data=\'{ playing: false, videoUrl: "https://www.kjv1611only.com/video/01salvation/360_Video.mp4" }\'
                            @mouseover="playing = true; $refs.video.src = videoUrl; $refs.video.preload = \'auto\'; $refs.video.load()"
                            @mouseout="playing = false; $refs.video.pause()">

                                <!-- Video -->
                                <div class="xs:h-[310px] xs:w-full sm:h-[270px] sm:w-full md:h-[170px] md:w-full flex items-center justify-center rounded-full relative">

                                    <video x-ref="video" preload="none" class="w-full h-full transition-opacity duration-500 object-cover" :class=\'{ "opacity-100": playing }\' @canplaythrough="$refs.video.play()" muted>
                                    </video>

                                    <img src="img/Revelation_Chart.jpeg" alt="Video thumbnail" class="w-full h-full absolute top-0 left-0 object-cover cursor-pointer transition-opacity duration-500" :class=\'{ "opacity-0": playing }\'>
                                </div>
                                
                                <!-- Video Data -->
                                <div class="w-full h-2/3 flex flex-row items-center justify-start mt-6">

                                    <!-- Avatar -->
                                    <div class="w-auto h-full flex items-start justify-center pt-2 mr-1">
                                        <div class="w-10 h-10 rounded-full overflow-hidden bg-gray-100">
                                            <img src="img/atp-logo.png" alt="Avatar" class="w-full h-full object-cover">
                                        </div>
                                    </div>

                                    <!-- Information -->
                                    <div class="w-full h-full flex flex-row items-start justify-start pt-2">
                                    
                                    <div class="w-full h-10 mb-1 mr-10" title="The Bible Way to Heaven 360 Video">
                                    
                                            <!-- Video Title -->
                                            <span class="text-small font-bold text-white overflow-hidden text-overflow-ellipsis webkit-box webkit-line-clamp-2 webkit-box-orient-vertical">The Bible Way to Heaven 360 Video By Pastor Steven Anderson of Faithful Word Baptist Church in Tempe, AZ</span>

                                            <!-- Channel Name -->
                                            <span class="text-small font-bold text-gray-400">
                                                Salvation
                                            </span>
                                            <br>

                                            <!-- Video Views & Date -->
                                            <span class="text-xs font-bold text-gray-400">
                                                21.6k Views | 2 Days Ago
                                            </span>
                                        </div>

                                        <!-- Video Menu Wrapper -->
                                        <div class="w-1/12 h-full flex flex-col items-end justify-start pt-2 relative">

                                            <!-- Video Menu Icon -->
                                            <div class="menu-icon flex items-center justify-center cursor-pointer">

                                                <svg class="w-6 h-6" viewBox="-6.5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                                                    <title>menu_option [#1374]</title>
                                                    <desc>Created with Sketch.</desc>
                                                    <defs>

                                                    </defs>
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="Dribbble-Light-Preview" transform="translate(-306.000000, -800.000000)" fill="#ffffff">
                                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                                <path d="M253.5,658 C252.857167,658 252.333333,657.551 252.333333,657 C252.333333,656.449 252.857167,656 253.5,656 C254.142833,656 254.666667,656.449 254.666667,657 C254.666667,657.551 254.142833,658 253.5,658 M253.5,654 C251.566833,654 250,655.343 250,657 C250,658.657 251.566833,660 253.5,660 C255.433167,660 257,658.657 257,657 C257,655.343 255.433167,654 253.5,654 M253.5,651 C252.857167,651 252.333333,650.551 252.333333,650 C252.333333,649.449 252.857167,649 253.5,649 C254.142833,649 254.666667,649.449 254.666667,650 C254.666667,650.551 254.142833,651 253.5,651 M253.5,647 C251.566833,647 250,648.343 250,650 C250,651.657 251.566833,653 253.5,653 C255.433167,653 257,651.657 257,650 C257,648.343 255.433167,647 253.5,647 M253.5,642 C254.142833,642 254.666667,642.449 254.666667,643 C254.666667,643.551 254.142833,644 253.5,644 C252.857167,644 252.333333,643.551 252.333333,643 C252.333333,642.449 252.857167,642 253.5,642 M253.5,646 C255.433167,646 257,644.657 257,643 C257,641.343 255.433167,640 253.5,640 C251.566833,640 250,641.343 250,643 C250,644.657 251.566833,646 253.5,646" id="menu_option-[#1374]">

                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>

                                            <!-- Video Menu Container -->
                                            <div class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[250px] h-auto px-2 py-1 bg-gray-600 rounded-lg hidden z-50" id="popup-menu">

                                                <!-- Video Menu -->
                                                <div class="w-full flex flex-col items-start justify-start">

                                                    <!-- Add To Queue -->
                                                    <div class="whitespace-nowrap flex items-center justify-start px-2 mb-1 h-8 w-full bg-gray-800 text-white hover:text-black rounded-lg text-sm hover:bg-white">

                                                        <!-- Add To Queue Icon -->
                                                        <div class="mr-8">
                                                            <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" class="w-6 h-6" viewBox="0 0 30 30" version="1.1" id="svg822" inkscape:version="0.92.4 (f8dce91, 2019-08-02)" sodipodi:docname="playlist.svg">
                                                                <defs id="defs816" />
                                                                <sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="17.833333" inkscape:cx="4.4579437" inkscape:cy="15" inkscape:document-units="px" inkscape:current-layer="layer1" showgrid="true" units="px" inkscape:window-width="1366" inkscape:window-height="713" inkscape:window-x="0" inkscape:window-y="0" inkscape:window-maximized="1" showguides="false">
                                                                    <inkscape:grid type="xygrid" id="grid816" />
                                                                </sodipodi:namedview>
                                                                <metadata id="metadata819">
                                                                    <rdf:RDF>
                                                                        <cc:Work rdf:about="">
                                                                            <dc:format>image/svg+xml</dc:format>
                                                                            <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                                                                            <dc:title />
                                                                        </cc:Work>
                                                                    </rdf:RDF>
                                                                </metadata>
                                                                <g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1" transform="translate(0,-289.0625)">
                                                                    <path style="opacity:1;fill:#990000;fill-opacity:1;stroke:none;stroke-width:2;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" d="M 4 5 C 3.446 5 3 5.446 3 6 C 3 6.554 3.446 7 4 7 L 19 7 C 19.554 7 20 6.554 20 6 C 20 5.446 19.554 5 19 5 L 4 5 z M 4 12 C 3.446 12 3 12.446 3 13 C 3 13.554 3.446 14 4 14 L 22 14 C 22.554 14 23 13.554 23 13 C 23 12.446 22.554 12 22 12 L 4 12 z M 20 17 C 20.01669 20.089967 20.000381 24.694577 20 27 L 26.484375 22.587891 C 26.876112 22.196153 26.876112 21.565565 26.484375 21.173828 L 20 17 z M 4 19 C 3.446 19 3 19.446 3 20 C 3 20.554 3.446 21 4 21 L 14 21 C 14.554 21 15 20.554 15 20 C 15 19.446 14.554 19 14 19 L 4 19 z " transform="translate(0,289.0625)" id="rect887" />
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <!-- Add To Queue Label -->
                                                        <div class="font-bold">
                                                            Add To Queue
                                                        </div>
                                                    </div>

                                                    <!-- Save To Watch Later -->
                                                    <div class="whitespace-nowrap flex items-center justify-start px-2 mb-1 h-8 w-full bg-gray-800 text-white hover:text-black rounded-lg text-sm hover:bg-white">

                                                        <!-- Save To Watch Later Icon -->
                                                        <div class="mr-8">
                                                            <svg class="w-6 h-6" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill="#990000" d="M151 23v9c0 21.038-3.39 52.724-8.523 85.336 31.097-25.51 70.354-41.053 111.2-40.756 5.227-.05 10.467.13 15.696.547 36.83 2.13 71.78 16.79 99.924 39.824-5.164-32.6-8.523-64.168-8.297-84.852l.1-9.098H151zm105 72.488c-88.543 0-160.514 71.967-160.514 160.51 0 88.543 71.97 160.516 160.514 160.516 88.543 0 160.514-71.973 160.514-160.516 0-88.543-71.97-160.51-160.514-160.51zm0 17.998c78.815 0 142.514 63.697 142.514 142.512S334.814 398.516 256 398.516c-78.815 0-142.514-63.703-142.514-142.518S177.186 113.486 256 113.486zM174.115 161.3l-12.734 12.72 76.48 76.558a18.94 18.94 0 0 0-.8 5.422A18.94 18.94 0 0 0 256 274.94a18.94 18.94 0 0 0 16.66-9.94h59.096v-17.998h-59.11a18.94 18.94 0 0 0-16.646-9.94 18.94 18.94 0 0 0-5.398.8l-76.487-76.563zm253.233 61.32v64.003h21.306V222.62h-21.306zm-57.96 172.888c-49.015 40.244-119.824 51.034-178.92 27.547-17.515-6.406-33.528-15.775-47.663-27.375 5.107 32.376 8.42 63.672 8.195 84.222l-.1 9.098H361v-9c0-20.857 3.33-52.178 8.39-84.492z" />
                                                            </svg>
                                                        </div>
                                                        <!-- Save To Watch Later Label -->
                                                        <div class="font-bold">
                                                            Save To Watch Later
                                                        </div>
                                                    </div>

                                                    <!-- Add To Playlist -->
                                                    <div class="whitespace-nowrap flex items-center justify-start px-2 mb-1 h-8 w-full bg-gray-800 text-white hover:text-black rounded-lg text-sm hover:bg-white">

                                                        <!-- Add To Playlist Icon -->
                                                        <div class="mr-8">
                                                            <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" class="w-6 h-6" viewBox="0 0 30 30" version="1.1" id="svg822" inkscape:version="0.92.4 (f8dce91, 2019-08-02)" sodipodi:docname="playlist-add.svg">
                                                                <defs id="defs816" />
                                                                <sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="8.9166667" inkscape:cx="-0.49685482" inkscape:cy="7.263158" inkscape:document-units="px" inkscape:current-layer="layer1" showgrid="true" units="px" inkscape:window-width="1366" inkscape:window-height="713" inkscape:window-x="0" inkscape:window-y="0" inkscape:window-maximized="1" showguides="false">
                                                                    <inkscape:grid type="xygrid" id="grid816" />
                                                                </sodipodi:namedview>
                                                                <metadata id="metadata819">
                                                                    <rdf:RDF>
                                                                        <cc:Work rdf:about="">
                                                                            <dc:format>image/svg+xml</dc:format>
                                                                            <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                                                                            <dc:title>

                                                                            </dc:title>
                                                                        </cc:Work>
                                                                    </rdf:RDF>
                                                                </metadata>
                                                                <g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1" transform="translate(0,-289.0625)">
                                                                    <path style="opacity:1;fill:#990000;fill-opacity:1;stroke:none;stroke-width:2;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" d="M 4 5 C 3.446 5 3 5.446 3 6 C 3 6.554 3.446 7 4 7 L 19 7 C 19.554 7 20 6.554 20 6 C 20 5.446 19.554 5 19 5 L 4 5 z M 4 12 C 3.446 12 3 12.446 3 13 C 3 13.554 3.446 14 4 14 L 22 14 C 22.554 14 23 13.554 23 13 C 23 12.446 22.554 12 22 12 L 4 12 z M 21.949219 17.003906 C 21.606467 17.003906 21.272206 17.037416 20.949219 17.103516 L 20.949219 20.955078 L 17.099609 20.955078 C 17.033519 21.278118 17 21.612328 17 21.955078 C 17 22.297828 17.033519 22.632088 17.099609 22.955078 L 20.949219 22.955078 L 20.949219 26.804688 C 21.272206 26.870788 21.606467 26.904297 21.949219 26.904297 C 22.29197 26.904297 22.626178 26.870788 22.949219 26.804688 L 22.949219 22.955078 L 26.800781 22.955078 C 26.866921 22.632088 26.900391 22.297828 26.900391 21.955078 C 26.900391 21.612328 26.866921 21.278118 26.800781 20.955078 L 22.949219 20.955078 L 22.949219 17.103516 C 22.626178 17.037416 22.29197 17.003906 21.949219 17.003906 z M 4 19 C 3.446 19 3 19.446 3 20 C 3 20.554 3.446 21 4 21 L 14 21 C 14.554 21 15 20.554 15 20 C 15 19.446 14.554 19 14 19 L 4 19 z " transform="translate(0,289.0625)" id="rect887" />
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <!-- Add To Playlist Label -->
                                                        <div class="font-bold">
                                                            Add To Playlist
                                                        </div>
                                                    </div>

                                                    <!-- Download -->
                                                    <div class="whitespace-nowrap flex items-center justify-start px-2 mb-1 h-8 w-full bg-gray-800 text-white hover:text-black rounded-lg text-sm hover:bg-white">

                                                        <!-- Download Icon -->
                                                        <div class="mr-8">
                                                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17 17H17.01M17.4 14H18C18.9319 14 19.3978 14 19.7654 14.1522C20.2554 14.3552 20.6448 14.7446 20.8478 15.2346C21 15.6022 21 16.0681 21 17C21 17.9319 21 18.3978 20.8478 18.7654C20.6448 19.2554 20.2554 19.6448 19.7654 19.8478C19.3978 20 18.9319 20 18 20H6C5.06812 20 4.60218 20 4.23463 19.8478C3.74458 19.6448 3.35523 19.2554 3.15224 18.7654C3 18.3978 3 17.9319 3 17C3 16.0681 3 15.6022 3.15224 15.2346C3.35523 14.7446 3.74458 14.3552 4.23463 14.1522C4.60218 14 5.06812 14 6 14H6.6M12 15V4M12 15L9 12M12 15L15 12" stroke="#990000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </div>
                                                        <!-- Download Label -->
                                                        <div class="font-bold">
                                                            Download
                                                        </div>
                                                    </div>

                                                    <!-- Section Separator -->
                                                    <div class="border-t-2 border-t-[#ffffff] w-full my-2"></div>

                                                    <!-- Share -->
                                                    <div class="whitespace-nowrap flex items-center justify-start px-2 mb-1 h-8 w-full bg-gray-800 text-white hover:text-black rounded-lg text-sm hover:bg-white">

                                                        <!-- Share Icon -->
                                                        <div class="mr-8">
                                                            <svg class="w-6 h-6" viewBox="-1 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">

                                                                <title>share</title>
                                                                <desc>Created with Sketch Beta.</desc>
                                                                <defs>

                                                                </defs>
                                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                                                    <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-312.000000, -726.000000)" fill="#990000">
                                                                        <path d="M331,750 C329.343,750 328,748.657 328,747 C328,745.343 329.343,744 331,744 C332.657,744 334,745.343 334,747 C334,748.657 332.657,750 331,750 L331,750 Z M317,742 C315.343,742 314,740.657 314,739 C314,737.344 315.343,736 317,736 C318.657,736 320,737.344 320,739 C320,740.657 318.657,742 317,742 L317,742 Z M331,728 C332.657,728 334,729.343 334,731 C334,732.657 332.657,734 331,734 C329.343,734 328,732.657 328,731 C328,729.343 329.343,728 331,728 L331,728 Z M331,742 C329.23,742 327.685,742.925 326.796,744.312 L321.441,741.252 C321.787,740.572 322,739.814 322,739 C322,738.497 321.903,738.021 321.765,737.563 L327.336,734.38 C328.249,735.37 329.547,736 331,736 C333.762,736 336,733.762 336,731 C336,728.238 333.762,726 331,726 C328.238,726 326,728.238 326,731 C326,731.503 326.097,731.979 326.235,732.438 L320.664,735.62 C319.751,734.631 318.453,734 317,734 C314.238,734 312,736.238 312,739 C312,741.762 314.238,744 317,744 C318.14,744 319.179,743.604 320.02,742.962 L320,743 L326.055,746.46 C326.035,746.64 326,746.814 326,747 C326,749.762 328.238,752 331,752 C333.762,752 336,749.762 336,747 C336,744.238 333.762,742 331,742 L331,742 Z" id="share" sketch:type="MSShapeGroup">

                                                                        </path>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <!-- Share Label -->
                                                        <div class="font-bold">
                                                            Share
                                                        </div>
                                                    </div>

                                                    <!-- Like -->
                                                    <div class="whitespace-nowrap flex items-center justify-start px-2 mb-1 h-8 w-full bg-gray-800 text-white hover:text-black rounded-lg text-sm hover:bg-white">

                                                        <!-- Like Icon -->
                                                        <div class="mr-8">
                                                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.444 1.35396C11.6474 0.955692 10.6814 1.33507 10.3687 2.16892L7.807 9.00001L4 9.00001C2.34315 9.00001 1 10.3432 1 12V20C1 21.6569 2.34315 23 4 23H18.3737C19.7948 23 21.0208 22.003 21.3107 20.6119L22.9773 12.6119C23.3654 10.7489 21.9433 9.00001 20.0404 9.00001H14.8874L15.6259 6.7846C16.2554 4.89615 15.4005 2.8322 13.62 1.94198L12.444 1.35396ZM9.67966 9.70225L12.0463 3.39119L12.7256 3.73083C13.6158 4.17595 14.0433 5.20792 13.7285 6.15215L12.9901 8.36755C12.5584 9.66261 13.5223 11 14.8874 11H20.0404C20.6747 11 21.1487 11.583 21.0194 12.204L20.8535 13H17C16.4477 13 16 13.4477 16 14C16 14.5523 16.4477 15 17 15H20.4369L20.0202 17H17C16.4477 17 16 17.4477 16 18C16 18.5523 16.4477 19 17 19H19.6035L19.3527 20.204C19.2561 20.6677 18.8474 21 18.3737 21H8V10.9907C8.75416 10.9179 9.40973 10.4221 9.67966 9.70225ZM6 11H4C3.44772 11 3 11.4477 3 12V20C3 20.5523 3.44772 21 4 21H6V11Z" fill="#990000" />
                                                            </svg>
                                                        </div>
                                                        <!-- Like Label -->
                                                        <div class="font-bold">
                                                            Like
                                                        </div>
                                                    </div>

                                                    <!-- Comment -->
                                                    <div class="whitespace-nowrap flex items-center justify-start px-2 mb-1 h-8 w-full bg-gray-800 text-white hover:text-black rounded-lg text-sm hover:bg-white">

                                                        <!-- Comment Icon -->
                                                        <div class="mr-8">
                                                            <svg class="w-6 h-6" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">

                                                                <title>comment-2</title>
                                                                <desc>Created with Sketch Beta.</desc>
                                                                <defs>

                                                                </defs>
                                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                                                    <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-152.000000, -255.000000)" fill="#990000">
                                                                        <path d="M168,281 C166.832,281 165.704,280.864 164.62,280.633 L159.912,283.463 L159.975,278.824 C156.366,276.654 154,273.066 154,269 C154,262.373 160.268,257 168,257 C175.732,257 182,262.373 182,269 C182,275.628 175.732,281 168,281 L168,281 Z M168,255 C159.164,255 152,261.269 152,269 C152,273.419 154.345,277.354 158,279.919 L158,287 L165.009,282.747 C165.979,282.907 166.977,283 168,283 C176.836,283 184,276.732 184,269 C184,261.269 176.836,255 168,255 L168,255 Z M175,266 L161,266 C160.448,266 160,266.448 160,267 C160,267.553 160.448,268 161,268 L175,268 C175.552,268 176,267.553 176,267 C176,266.448 175.552,266 175,266 L175,266 Z M173,272 L163,272 C162.448,272 162,272.447 162,273 C162,273.553 162.448,274 163,274 L173,274 C173.552,274 174,273.553 174,273 C174,272.447 173.552,272 173,272 L173,272 Z" id="comment-2" sketch:type="MSShapeGroup">

                                                                        </path>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <!-- Comment Label -->
                                                        <div class="font-bold">
                                                            Comment
                                                        </div>
                                                    </div>

                                                    <!-- Feedback -->
                                                    <div class="whitespace-nowrap flex items-center justify-start px-2 mb-1 h-8 w-full bg-gray-800 text-white hover:text-black rounded-lg text-sm hover:bg-white">

                                                        <!-- Feedback Icon -->
                                                        <div class="mr-8">
                                                            <svg class="w-6 h-6" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">

                                                                <title>comment-2</title>
                                                                <desc>Created with Sketch Beta.</desc>
                                                                <defs>

                                                                </defs>
                                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                                                    <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-152.000000, -255.000000)" fill="#990000">
                                                                        <path d="M168,281 C166.832,281 165.704,280.864 164.62,280.633 L159.912,283.463 L159.975,278.824 C156.366,276.654 154,273.066 154,269 C154,262.373 160.268,257 168,257 C175.732,257 182,262.373 182,269 C182,275.628 175.732,281 168,281 L168,281 Z M168,255 C159.164,255 152,261.269 152,269 C152,273.419 154.345,277.354 158,279.919 L158,287 L165.009,282.747 C165.979,282.907 166.977,283 168,283 C176.836,283 184,276.732 184,269 C184,261.269 176.836,255 168,255 L168,255 Z M175,266 L161,266 C160.448,266 160,266.448 160,267 C160,267.553 160.448,268 161,268 L175,268 C175.552,268 176,267.553 176,267 C176,266.448 175.552,266 175,266 L175,266 Z M173,272 L163,272 C162.448,272 162,272.447 162,273 C162,273.553 162.448,274 163,274 L173,274 C173.552,274 174,273.553 174,273 C174,272.447 173.552,272 173,272 L173,272 Z" id="comment-2" sketch:type="MSShapeGroup">

                                                                        </path>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <!-- Feedback Label -->
                                                        <div class="font-bold">
                                                            Feedback
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                            ';
                        }
                    } else {
                        echo "No videos found";
                    }
                    ?>
                </div>
            </div>
        </section>
    </div>
</div>