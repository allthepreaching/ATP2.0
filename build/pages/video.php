<?php include_once '../inc/inc.header.php'; ?>

<!-- Home Page -->
<div class="flex flex-col items-center justify-start fixed h-full bg-black translate-y-16 transition-all duration-500" :class="{ 'w-full': !open, 'w-[calc(100vw-289px)] translate-x-72': open }">

    <!-- Tags Bar -->
    <div class="w-full flex flex-row items-center justify-left bg-black text-white fixed top-5">

        <!-- Arrows Overlay -->
        <div class="absolute inset-0 flex items-center justify-between -mx-1 pb-4 pointer-events-none">

            <!-- Left Arrow -->
            <div class="arrow-left flex items-center justify-center opacity-50 bg-black rounded-full transition-all duration-300 hover:opacity-100 pointer-events-auto">
                <svg class="w-8 h-8 hover:text-[#990000]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 6L9 12L15 18" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>

            <!-- Right Arrow -->
            <div class="arrow-right flex items-center justify-center opacity-50 bg-black rounded-full transition-all duration-300 hover:opacity-100 pointer-events-auto">
                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 6L15 12L9 18" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>

        <!-- Tags -->
        <div class="tags flex flex-row overflow-x-auto pb-4 px-3">

            <!-- Start Tag -->
            <div class='tag-start'></div>

            <!-- All Tag -->
            <div class='tag whitespace-nowrap flex items-center justify-center px-3 mx-1 h-8 w-auto bg-white text-black rounded-lg text-sm'>All Videos</div>

            <?php

            // Run a query to fetch the unique main_category values
            $sql = "SELECT DISTINCT main_category FROM videos WHERE main_category != '' ORDER BY main_category ASC";
            $result = $conn->query($sql);

            // Fetch the results and store them in an array
            $categories = $result->fetch_all(MYSQLI_ASSOC);

            // Loop through the array and create a tag for each main_category
            foreach ($categories as $category) {
                echo "<div class='tag whitespace-nowrap flex items-center justify-center px-3 mx-1 h-8 w-auto bg-gray-800 text-white rounded-lg text-sm'>" . $category['main_category'] . "</div>";
            }

            // Close the database connection
            $conn->close();
            ?>

            <!-- End Tag -->
            <div class='tag-end'></div>
        </div>
    </div>

    <!-- Content -->
    <div class="w-full h-full flex flex-col items-start justify-start bg-black text-white fixed top-20 overflow-auto pt-4 pb-10">

        <!-- Video Player Container -->
        <div>
            <div class="container show-controls">
                <div class="wrapper">
                    <div class="video-timeline">
                        <div class="progress-area">
                            <span>00:00</span>
                            <div class="progress-bar"></div>
                        </div>
                    </div>
                    <ul class="video-controls">
                        <li class="options left">
                            <button title="Backward 10s" class="skip-backward tooltip">
                                <span class="material-icons">rotate_left</span>
                            </button>
                            <button title="Play" class="play-pause tooltip">
                                <span class="material-icons">play_arrow</span>
                            </button>
                            <button title="Forward 10s" class="skip-forward tooltip">
                                <span class="material-icons">rotate_right</span>
                            </button>
                            <button title="Mute" class="volume tooltip">
                                <span class="material-icons">volume_up</span>
                            </button>
                            <input title="Volume" class="tooltip" id="volume_range" type="range" min="0" max="1" step="any" />
                            <div class="video-timer">
                                <p class="current-time">00:00</p>
                                <p class="separator">/</p>
                                <p class="video-duration">00:00</p>
                            </div>
                        </li>
                        <li class="options right">
                            <div class="playback-content">
                                <button title="Speed" class="playback-speed tooltip">
                                    <span class="material-symbols-rounded">slow_motion_video</span>
                                </button>
                                <ul class="speed-options">
                                    <li data-speed="0.5">0.5x</li>
                                    <li data-speed="0.75">0.75x</li>
                                    <li data-speed="1" class="active">Normal</li>
                                    <li data-speed="1.5">1.5x</li>
                                    <li data-speed="2">2x</li>
                                </ul>
                            </div>
                            <button title="Miniplayer" class="pic-in-pic tooltip">
                                <span class="material-icons">picture_in_picture_alt</span>
                            </button>
                            <button title="Full screen" class="fullscreen tooltip">
                                <span class="material-icons">fullscreen</span>
                            </button>
                            <button title="New File" class="new-file tooltip tooltiplast">
                                <label for="fileInput"><span class="material-icons">video_file</span></label>
                            </button>
                            <input type="file" id="fileInput" name="fileInput" accept="video/mp4,video/x-m4v,video/*" hidden />
                        </li>
                    </ul>
                </div>
                <video id="myVideo" src="https://www.kjv1611only.com/video/01salvation/360_Video.mp4"></video>
            </div>
        </div>
    </div>
</div>