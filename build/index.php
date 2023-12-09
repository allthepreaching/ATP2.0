<?php include_once 'inc/inc.header.php'; ?>

<!-- Home Page Content -->
<div class="flex flex-col items-center justify-start fixed top-16 w-[calc(100vw-289px)] h-full bg-black translate-x-72">

    <!-- Tags Bar -->
    <div class="w-full flex flex-row items-center justify-left bg-black text-white">

        <!-- Left Arrow -->
        <div class="arrow-left mr-1 hover:">
            <svg class="w-6 h-6 " viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">

                <title>arrow-left-circle</title>
                <desc>Created with Sketch Beta.</desc>
                <defs>

                </defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                    <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-258.000000, -1089.000000)" fill="#990000">
                        <path d="M281,1106 L270.414,1106 L274.536,1110.12 C274.926,1110.51 274.926,1111.15 274.536,1111.54 C274.145,1111.93 273.512,1111.93 273.121,1111.54 L267.464,1105.88 C267.225,1105.64 267.15,1105.31 267.205,1105 C267.15,1104.69 267.225,1104.36 267.464,1104.12 L273.121,1098.46 C273.512,1098.07 274.145,1098.07 274.536,1098.46 C274.926,1098.86 274.926,1099.49 274.536,1099.88 L270.414,1104 L281,1104 C281.552,1104 282,1104.45 282,1105 C282,1105.55 281.552,1106 281,1106 L281,1106 Z M274,1089 C265.164,1089 258,1096.16 258,1105 C258,1113.84 265.164,1121 274,1121 C282.836,1121 290,1113.84 290,1105 C290,1096.16 282.836,1089 274,1089 L274,1089 Z" id="arrow-left-circle" sketch:type="MSShapeGroup">

                        </path>
                    </g>
                </g>
            </svg>
        </div>

        <!-- Tags -->
        <div class="tags flex flex-row overflow-x-auto pb-4">

            <!-- Start Tag -->
            <div class='tag-start'></div>

            <!-- All Tag -->
            <div class='tag whitespace-nowrap flex items-center justify-center px-3 mx-1 h-8 w-auto bg-white text-black rounded-lg text-sm'>All</div>

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

        <!-- Right Arrow -->
        <div class="arrow-right ml-1">
            <svg class="w-6 h-6" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">

                <title>arrow-right-circle</title>
                <desc>Created with Sketch Beta.</desc>
                <defs>

                </defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                    <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-310.000000, -1089.000000)" fill="#990000">
                        <path d="M332.535,1105.88 L326.879,1111.54 C326.488,1111.93 325.855,1111.93 325.465,1111.54 C325.074,1111.15 325.074,1110.51 325.465,1110.12 L329.586,1106 L319,1106 C318.447,1106 318,1105.55 318,1105 C318,1104.45 318.447,1104 319,1104 L329.586,1104 L325.465,1099.88 C325.074,1099.49 325.074,1098.86 325.465,1098.46 C325.855,1098.07 326.488,1098.07 326.879,1098.46 L332.535,1104.12 C332.775,1104.36 332.85,1104.69 332.795,1105 C332.85,1105.31 332.775,1105.64 332.535,1105.88 L332.535,1105.88 Z M326,1089 C317.163,1089 310,1096.16 310,1105 C310,1113.84 317.163,1121 326,1121 C334.837,1121 342,1113.84 342,1105 C342,1096.16 334.837,1089 326,1089 L326,1089 Z" id="arrow-right-circle" sketch:type="MSShapeGroup">

                        </path>
                    </g>
                </g>
            </svg>
        </div>
    </div>
</div>