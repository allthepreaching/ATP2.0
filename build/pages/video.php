<?php

include_once "../inc/inc.header.php";

// Run a query to fetch the unique search_category values
$sql = 'SELECT DISTINCT search_category FROM videos WHERE search_category != "" AND vid_category NOT LIKE "pro%" ORDER BY search_category ASC';
$result = $conn->query($sql);

// Fetch the results and store them in an array
$categories = $result->fetch_all(MYSQLI_ASSOC);

?>

<!-- Video Page -->
<div class="flex flex-col items-center justify-start fixed h-full bg-black translate-y-16 transition-all duration-500" :class="{ 'w-full': !open, 'w-[calc(100vw-289px)] translate-x-72': open }">

    <!-- Content -->
    <div class="max-w-[1440px] h-full flex flex-row items-center justify-center gap-2 bg-black text-white">

        <!-- Content Left Side -->
        <div id="video-content-left" class="h-full overflow-y-scroll transition-all duration-500" :class="{ 'w-full md:w-[450px] lg:w-[600px] xl:w-[800px] 2xl:w-[1000px]': !open, 'w-full md:w-[450px] lg:w-[600px] xl:w-[800px] 2xl:w-[1000px] translate-x-1': open }">

            <!-- Video Player Container -->
            <div class="video-container max-h-[600px] paused" data-volume-level="high">

                <!-- Video Controls Container -->
                <div id="video-controls-container" class="video-controls-container">

                    <!-- Timeline Container -->
                    <div class="timeline-container">
                        <div class="timeline">
                            <div class="thumb-indicator"></div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <div class="controls">

                        <!-- Rewind Button -->
                        <button class="rewind-btn" title="Left Arrow = Rewind">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path fill="currentColor" d="M860-240 500-480l360-240v480Zm-400 0L100-480l360-240v480Zm-80-240Zm400 0Zm-400 90v-180l-136 90 136 90Zm400 0v-180l-136 90 136 90Z" />
                            </svg>
                        </button>

                        <!-- Play Pause Button -->
                        <button class="play-pause-btn" title="Spacebar/K = Play/Pause">
                            <svg class="play-icon" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M8,5.14V19.14L19,12.14L8,5.14Z" />
                            </svg>
                            <svg class="pause-icon" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M14,19H18V5H14M6,19H10V5H6V19Z" />
                            </svg>
                        </button>

                        <!-- Fast Forward Button -->
                        <button class="fast-forward-btn" title="Right Arrow = Fast Forward">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path fill="currentColor" d="M100-240v-480l360 240-360 240Zm400 0v-480l360 240-360 240ZM180-480Zm400 0Zm-400 90 136-90-136-90v180Zm400 0 136-90-136-90v180Z" />
                            </svg>
                        </button>

                        <!-- Volume Container -->
                        <div class="volume-container">
                            <button class="mute-audio-btn" title="(M)">
                                <svg class="volume-high-icon" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M14,3.23V5.29C16.89,6.15 19,8.83 19,12C19,15.17 16.89,17.84 14,18.7V20.77C18,19.86 21,16.28 21,12C21,7.72 18,4.14 14,3.23M16.5,12C16.5,10.23 15.5,8.71 14,7.97V16C15.5,15.29 16.5,13.76 16.5,12M3,9V15H7L12,20V4L7,9H3Z" />
                                </svg>
                                <svg class="volume-low-icon" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M5,9V15H9L14,20V4L9,9M18.5,12C18.5,10.23 17.5,8.71 16,7.97V16C17.5,15.29 18.5,13.76 18.5,12Z" />
                                </svg>
                                <svg class="volume-muted-icon" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12,4L9.91,6.09L12,8.18M4.27,3L3,4.27L7.73,9H3V15H7L12,20V13.27L16.25,17.53C15.58,18.04 14.83,18.46 14,18.7V20.77C15.38,20.45 16.63,19.82 17.68,18.96L19.73,21L21,19.73L12,10.73M19,12C19,12.94 18.8,13.82 18.46,14.64L19.97,16.15C20.62,14.91 21,13.5 21,12C21,7.72 18,4.14 14,3.23V5.29C16.89,6.15 19,8.83 19,12M16.5,12C16.5,10.23 15.5,8.71 14,7.97V10.18L16.45,12.63C16.5,12.43 16.5,12.21 16.5,12Z" />
                                </svg>
                            </button>

                            <!-- Volume Slider -->
                            <input class="volume-slider" type="range" min="0" max="1" step="any" value="1">
                        </div>

                        <!-- Duration Container -->
                        <div class="duration-container">
                            <div class="current-time">0:00</div>
                            /
                            <div class="total-time"></div>
                        </div>

                        <!-- Captions Container -->
                        <button class="closed-captions-btn" title="(C)">
                            <svg viewBox="0 0 24 24">
                                <path fill="currentColor" d="M18,11H16.5V10.5H14.5V13.5H16.5V13H18V14A1,1 0 0,1 17,15H14A1,1 0 0,1 13,14V10A1,1 0 0,1 14,9H17A1,1 0 0,1 18,10M11,11H9.5V10.5H7.5V13.5H9.5V13H11V14A1,1 0 0,1 10,15H7A1,1 0 0,1 6,14V10A1,1 0 0,1 7,9H10A1,1 0 0,1 11,10M19,4H5C3.89,4 3,4.89 3,6V18A2,2 0 0,0 5,20H19A2,2 0 0,0 21,18V6C21,4.89 20.1,4 19,4Z" />
                            </svg>
                        </button>

                        <!-- Speed Container -->
                        <button class="speed-btn wide-btn" title="(+), (-)">
                            1x
                        </button>

                        <!-- Mini player -->
                        <button class="mini-player-btn" title="(P)">
                            <svg viewBox="0 0 24 24">
                                <path fill="currentColor" d="M21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H3V5h18v14zm-10-7h9v6h-9z" />
                            </svg>
                        </button>

                        <!-- Theater Mode -->
                        <button class="theater-mode-btn" title="(T)">
                            <svg class="tall" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19 6H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 10H5V8h14v8z" />
                            </svg>
                            <svg class="wide" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19 7H5c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm0 8H5V9h14v6z" />
                            </svg>
                        </button>

                        <!-- Full Screen -->
                        <button class="fullscreen-btn" title="(F)"> <svg class="open" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z" />
                            </svg>
                            <svg class="close" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z" />
                            </svg>
                        </button>

                        <!-- Video Menu Wrapper -->
                        <div class="h-full flex flex-col items-end justify-start relative">

                            <!-- Video Menu Icon -->
                            <div class="menu-icon flex items-center justify-center cursor-pointer">

                                <svg class="w-10 h-10 hover:stroke-white" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width="2" stroke="#cccccc">
                                    <rect x="31.5" y="31.5" width="1" height="1" transform="rotate(90 32 32)" />
                                    <rect x="31.5" y="47" width="1" height="1" transform="rotate(90 32 47.5)" />
                                    <rect x="31.5" y="16" width="1" height="1" transform="rotate(90 32 16.5)" />
                                </svg>
                            </div>

                            <!-- Video Menu -->
                            <div class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[250px] h-auto px-2 py-1 bg-gray-600 rounded-lg hidden z-50" id="popup-menu">

                                <!-- Video Menu Section 1 Container -->
                                <div class="w-full flex flex-col items-start justify-start">

                                    <!-- Add To Queue -->
                                    <div class='whitespace-nowrap flex items-center justify-start px-2 mb-1 h-8 w-full bg-gray-800 text-white hover:text-black rounded-lg text-sm hover:bg-white'>

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
                                    <div class='whitespace-nowrap flex items-center justify-start px-2 mb-1 h-8 w-full bg-gray-800 text-white hover:text-black rounded-lg text-sm hover:bg-white'>

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
                                    <div class='whitespace-nowrap flex items-center justify-start px-2 mb-1 h-8 w-full bg-gray-800 text-white hover:text-black rounded-lg text-sm hover:bg-white'>

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
                                    <div class='whitespace-nowrap flex items-center justify-start px-2 mb-1 h-8 w-full bg-gray-800 text-white hover:text-black rounded-lg text-sm hover:bg-white'>

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
                                    <div class='whitespace-nowrap flex items-center justify-start px-2 mb-1 h-8 w-full bg-gray-800 text-white hover:text-black rounded-lg text-sm hover:bg-white'>

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
                                    <div class='whitespace-nowrap flex items-center justify-start px-2 mb-1 h-8 w-full bg-gray-800 text-white hover:text-black rounded-lg text-sm hover:bg-white'>

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
                                    <div class='whitespace-nowrap flex items-center justify-start px-2 mb-1 h-8 w-full bg-gray-800 text-white hover:text-black rounded-lg text-sm hover:bg-white'>

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
                                    <div class='whitespace-nowrap flex items-center justify-start px-2 mb-1 h-8 w-full bg-gray-800 text-white hover:text-black rounded-lg text-sm hover:bg-white'>

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

                <?php

                // SQL query to fetch the video
                $sql = "SELECT id, vid_url, thumb_url FROM videos WHERE id = ?";

                // Prepare the SQL statement
                $stmt = $conn->prepare($sql);

                // Bind the video ID to the SQL statement
                $stmt->bind_param("i", $videoId);

                // Execute the SQL statement
                $stmt->execute();

                // Bind the result to variables
                $stmt->bind_result($videoId, $videoUrl, $videoThumb);

                // Fetch the video data
                while ($stmt->fetch()) {

                ?>
                    <!-- Video Input -->
                    <video src="<?= $videoUrl ?>" poster="<?= $videoThumb ?>">
                    </video>
                <?php } ?>
            </div>

            <!-- Comments Section -->
            <div>
                Comments Section
            </div>

            <!-- Suggested Video (Mobile) -->
            <div>
                Suggested Videos (Mobile)
            </div>

        </div>

        <!-- Content Right Side -->
        <div id="video-content-right" class="flex flex-col items-center justify-center h-full overflow-y-auto transition-all duration-500" :class="{ 'hidden md:block md:w-[300px] lg:w-[400px] xl:w-[450px] 2xl:w-[500px]': !open, 'w-0': open }">

            <!-- Tags Bar -->
            <div class="flex flex-row items-center justify-left bg-black text-white rounded-lg sticky top-0">

                <!-- Fade In -->
                <div class="absolute inset-y-0 left-0 w-10 bg-fade-right z-10"></div>
                <div class="absolute inset-y-0 right-0 w-10 bg-fade-left z-10"></div>

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
                    // Loop through the array and create a tag for each search_category
                    foreach ($categories as $category) {
                        $class = $category["search_category"] == 'Newest' ? 'newest-tag' : '';
                        echo '<div class="' . $class . ' tag cursor-pointer whitespace-nowrap flex items-center justify-center px-3 mx-1 h-8 w-auto bg-gray-800 text-white rounded-lg text-sm">' . $category["search_category"] . '</div>';
                    }
                    ?>
                </div>
            </div>

            <!-- Suggested Videos -->
            <div class="flex flex-col items-center justify-center">

                <!-- Video Cards Container -->
                <div id="video-cards-suggested" class="w-full grid grid-cols-1 place-items-center gap-2">

                    <!-- Video Cards -->
                    <?php

                    // Define bullet point
                    $bulletPoint = '&#9679;';

                    // Get sort column and order from URL parameters
                    $sortColumn = isset($_GET['sortColumn']) ? $_GET['sortColumn'] : 'date';
                    $sortOrder = isset($_GET['sortOrder']) ? $_GET['sortOrder'] : 'DESC';

                    // Validate sort column and order
                    $allowedColumns = ['vid_title', 'date'];
                    $allowedOrders = ['ASC', 'DESC'];

                    if (!in_array($sortColumn, $allowedColumns) || !in_array($sortOrder, $allowedOrders)) {
                        die('Invalid sort column or order');
                    }

                    // Get the clicked tag from the session variables
                    $clickedTag = $_SESSION['clickedTag'] ?? 'all-videos';

                    // Prepare the SQL query
                    if ($clickedTag == 'all-videos') {
                        $sql = "SELECT * FROM videos WHERE vid_category != 'newest' ORDER BY $sortColumn $sortOrder LIMIT 12";
                    } else {

                        // Escape the tag to prevent SQL injection
                        $clickedTag = mysqli_real_escape_string($conn, $clickedTag);
                        $sql = "SELECT * FROM videos WHERE vid_category = '$clickedTag' ORDER BY $sortColumn $sortOrder LIMIT 12";
                    }

                    // Execute the query
                    $result = $conn->query($sql);

                    // Check if there are any errors in the SQL query
                    if ($conn->error) {
                        die("SQL query failed: " . $conn->error);
                    }

                    // Check if there are any results
                    if ($result->num_rows > 0) {

                        // Loop through the results and create a video card for each video
                        while ($row = $result->fetch_assoc()) {

                            // Set video variables
                            $videoId = $row['id']; // Video ID
                            $videoCategory = $row['search_category']; // Video Category
                            $videoPreacher = $row['vid_preacher']; // Video Preacher
                            $videoTitle = $row['vid_title']; // Video Title
                            $videoDate = $row['date']; // Video Live Date
                            $videoUrl = $row['vid_url']; // Video URL
                            $videoThumb = $row['thumb_url']; // Video Thumbnail
                            $videoAvatar = $row['pic_url']; // Video Avatar
                            $videoMainCategory = $row['main_category']; // Video Main Category
                            $dateCreated = $row['created_at']; // Record Created At Date
                            $clicks = $row['clicks']; // Video Clicks

                            // Format the number of clicks
                            if ($clicks >= 1000 && $clicks < 1000000) {
                                $clicks = round($clicks / 1000, 1) . 'k';
                            } elseif ($clicks >= 1000000 && $clicks < 1000000000) {
                                $clicks = round($clicks / 1000000, 2) . 'M';
                            } elseif ($clicks >= 1000000000) {
                                $clicks = round($clicks / 1000000000, 2) . 'B';
                            }

                            // Determine plural or not based on number of clicks
                            $clicksText = $clicks == 1 ? ' Click' : ' Clicks';

                            // Calculate the difference between the video live date and the current date
                            $diff = date_diff(date_create($videoDate), date_create(date('Y-m-d H:i:s')));

                            // Format the time since posted
                            $timeSincePosted = '';
                            if ($diff->y > 0) {
                                $timeSincePosted = $diff->y . ($diff->y > 1 ? ' Years' : ' Year');
                            } elseif ($diff->m > 0) {
                                $timeSincePosted = $diff->m . ($diff->m > 1 ? ' Months' : ' Month');
                            } elseif ($diff->d > 0) {
                                $timeSincePosted = $diff->d . ($diff->d > 1 ? ' Days' : ' Day');
                            } elseif ($diff->h > 0) {
                                $timeSincePosted = $diff->h . ($diff->h > 1 ? ' Hours' : ' Hour');
                            } elseif ($diff->i > 0) {
                                $timeSincePosted = $diff->i . ($diff->i > 1 ? ' Minutes' : ' Minute');
                            } elseif ($diff->s > 30) {
                                $timeSincePosted = $diff->s . ' Seconds';
                            } else {
                                $timeSincePosted = 'Just Now';
                            }

                            // Output a video card for each video
                            echo '
                            <!-- Video Card -->
                                <div class="video-card w-full h-[100px] flex flex-row items-start justify-start overflow-hidden rounded-lg"
                                x-data=\'{ videoId: "' . $videoId . '" }\'>

                                <!-- Video Thumbnail -->
                                <a href="video.php?id=' . $videoId . '" title="' . $videoTitle . '">
                                    <img src="' . $videoThumb . '" alt="' . $videoTitle . '" class="w-[200px] h-[90px] mr-1">
                                </a>
                                
                                <!-- Video Data -->
                                <div class="w-[250px] h-full">

                                    <!-- Information -->
                                    <div class="w-full   h-full flex flex-row items-stretch justify-between">
                                    
                                        <!-- Video Title & Channel Name & Clicks Container -->
                                        <div class="h-10">
                                        
                                            <!-- Video Title -->
                                            <a href="video.php?id=' . $videoId . '">
                                                <span class="text-xs font-bold text-white overflow-hidden text-overflow-ellipsis webkit-box webkit-line-clamp-2 webkit-box-orient-vertical cursor-pointer" title="' . $videoTitle . '">' . $videoTitle . '</span>
                                            </a>

                                            <!-- Avatar & Channel Name Container -->
                                            <div class="flex flex-row items-center justify-start mb-1">

                                                <!-- Avatar -->
                                                <a href="category.php?id=' . $videoCategory . '">
                                                    <div class="h-full flex items-start justify-center pt-2 mr-1 cursor-pointer" title="' . $videoCategory . '">
                                                        <div class="w-6 h-6 rounded-full overflow-hidden bg-gray-100">
                                                            <img src="' . $videoAvatar . '" alt="' . $videoCategory . '" class="w-full h-full object-cover">
                                                        </div>
                                                    </div>
                                                </a>

                                                <!-- Channel Name -->
                                                <a href="category.php?id=' . $videoCategory . '">
                                                    <span class="text-xs font-bold text-gray-400 cursor-pointer" title="' . $videoCategory . '">
                                                        ' . $videoCategory . '
                                                    </span>
                                                </a>
                                            </div>

                                            <!-- Video Clicks & Time since posted -->
                                            <div class="flex flex-row items-center justify-start">
                                                <span class="flex items-center text-xs font-bold text-white" title="' . $clicks . $clicksText . ' ' . $bulletPoint . ' ' . $timeSincePosted . (($videoDate != '0000-00-00') ? ' ' . $bulletPoint . ' ' . date('m/d/Y', strtotime($videoDate)) : '') . '">
                                                    ' . $clicks . $clicksText . ' ' . $bulletPoint . ' ' . $timeSincePosted . '
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Video Menu Wrapper -->
                                        <div class="h-full flex flex-col items-end justify-start relative">

                                            <!-- Video Menu Icon -->
                                            <div class="menu-icon flex items-center justify-center cursor-pointer">
                                                <svg class="w-6 h-6" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width="2" stroke="#ffffff"><rect x="31.5" y="31.5" width="1" height="1" transform="rotate(90 32 32)"/><rect x="31.5" y="47" width="1" height="1" transform="rotate(90 32 47.5)"/><rect x="31.5" y="16" width="1" height="1" transform="rotate(90 32 16.5)"/></svg>
                                            </div>

                                            <!-- Video Menu Container -->
                                            <div class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[250px] h-auto px-2 py-1 bg-gray-600 rounded-lg hidden z-50" id="popup-menu" onmouseover="event.stopPropagation();" onmouseout="event.stopPropagation();">

                                                <!-- Video Menu -->
                                                <div class="flex flex-col items-start justify-start cursor-pointer">

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
                            ';
                        }
                    } else {
                        echo "No videos found";
                    }
                    ?>
                </div>

                <!-- Load More Button -->
                <button id="load-more" class="w-3/4 py-2 mt-4 mb-8 border-2 border-white rounded-lg font-bold bg-black text-white text-center hover:bg-white hover:text-black">Load More</button>
            </div>

        </div>
    </div>
</div>