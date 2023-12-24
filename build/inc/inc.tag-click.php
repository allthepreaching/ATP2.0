<?php
session_start();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Form was submitted
    echo 'Form was submitted.<br>';

    // Get the clicked tag from the POST parameters
    $clickedTag = $_POST['tag'] ?? 'all-videos';

    // Store it in a session variable
    $_SESSION['clickedTag'] = $clickedTag;

    // Print the clicked tag
    echo 'Clicked tag: ' . $clickedTag . '<br>';
} else {

    // Form was not submitted
    echo 'Form was not submitted.<br>';
}
// Redirect back to the index page
header('Location: video.php');
exit;
