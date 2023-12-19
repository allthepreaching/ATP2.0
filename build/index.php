<?php include_once "inc/inc.header-index.php"; ?>

<!-- Home Page -->
<div class="flex flex-col items-center justify-start fixed h-full bg-black translate-y-16 transition-all duration-500" :class="{ 'w-full': !open, 'w-[calc(100vw-289px)] translate-x-72': open }">

    <!-- Tags Bar -->
    <div class="max-w-[1440px] flex flex-row items-center justify-left bg-black text-white fixed top-5">

        <!-- Arrows Overlay -->
        <div class="absolute inset-0 flex items-center justify-between -mx-2 pointer-events-none">

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
            $sql = 'SELECT DISTINCT search_category FROM videos WHERE search_category != "" AND search_category NOT LIKe "pro%" ORDER BY search_category ASC';
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
    <div class="max-w-[1440px] h-full flex flex-col items-start justify-start bg-black text-white fixed top-20 overflow-auto pt-4 pb-10">

        <!-- Newest Weekly Content Section -->
        <section>

            <!-- Newest Weekly Content Header -->
            <div class="w-full flex flex-row items-center justify-start bg-black font-bold text-white text-2xl pl-4 mb-2">
                Newest Weekly Videos
            </div>

            <!-- Newest Weekly Content Container -->
            <div class="w-full flex flex-row items-center justify-left bg-black text-white px-2 relative">

                <!-- Arrows Overlay -->
                <div class="absolute inset-0 flex items-center justify-between -mx-2 pointer-events-none">

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

                <!-- Video Cards -->
                <div class="flex flex-row overflow-x-auto mb-4 pb-4 px-3">

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
                            echo '                        <div class="video-card xs:w-[480px] xs:h-[460px] sm:w-[420px] sm:h-[400px] md:w-[320px] md:h-[300px] flex flex-col items-start justify-start overflow-hidden mr-2 rounded-lg flex-shrink-0">

                            <!-- Video -->
                            <div class="xs:h-[310px] xs:w-full sm:h-[270px] sm:w-full md:h-[170px] md:w-full flex items-center justify-center rounded-full relative" x-data="{ playing: false, videoUrl: "https://www.kjv1611only.com/video/01salvation/360_Video.mp4" }" @mouseover="playing = true; $refs.video.src = videoUrl; $refs.video.preload = "auto"; $refs.video.load()" @mouseout="playing = false; $refs.video.pause()">

                                <video x-ref="video" preload="none" class="transition-opacity duration-500 w-full h-full object-cover" x-bind:class="{ "opacity-100": playing }" @canplaythrough="$refs.video.play()" muted>
                                </video>

                                <img src="img/Revelation_Chart.jpeg" alt="Video thumbnail" class="w-full h-full absolute top-0 left-0 object-cover cursor-pointer transition-opacity duration-500" x-bind:class="{ "opacity-0": playing }">
                            </div>
</div>';
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