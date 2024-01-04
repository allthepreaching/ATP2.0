<?php

ignore_user_abort(false); // Sets ignore_user_abort to Off

set_time_limit(1); // Sets the maximum time in seconds a script is allowed to run 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'inc/dbh-local.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the last processed video id from a file
$lastIdFile = 'last_id.txt';
$lastId = is_file($lastIdFile) ? (int)file_get_contents($lastIdFile) : 0;

// Fetch a batch of records
$batchSize = 10;

while (true) {
    $result = $conn->query("SELECT * FROM videos WHERE id > $lastId ORDER BY id ASC LIMIT $batchSize");

    // If there are no more videos, break the loop
    if ($result->num_rows == 0) {
        break;
    }

    while ($video = $result->fetch_assoc()) {
        $url = str_replace('.mp4', '.jpg', $video['vid_url']);

        // Get the image dimensions
        list($width, $height) = getimagesize($url);

        // Check if the dimensions are 720x1280
        $shorts = ($width == 720 && $height == 1280) ? 1 : 0;

        // Update the record
        $conn->query("UPDATE videos SET shorts = $shorts WHERE id = {$video['id']}");

        // Print a message for each video processed
        $message = "Processed video ID: {$video['id']}<br>";
        echo $message;
        file_put_contents('output.txt', strip_tags($message) . PHP_EOL, FILE_APPEND);

        // If shorts is true, print out the video information
        if ($shorts == 1) {
            $message = "Video ID: {$video['id']}, URL: {$url}, Width: {$width}, Height: {$height}<br>";
            echo $message;
            file_put_contents('output.txt', strip_tags($message) . PHP_EOL, FILE_APPEND);
        }

        // Update the last processed video id
        file_put_contents($lastIdFile, $video['id']);
    }

    // Wait for 10 seconds before processing the next batch
    sleep(10);
}

$conn->close();
