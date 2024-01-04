<?php

// Local database credentials
$snameLcl = 'localhost';
$unameLcl = 'root';
$upassLcl = '';
$dnameLcl = 'alltdjli_pas';

// Live database credentials
$snameLve = "localhost";
$unameLve = "alltdjli_dev";
$upassLve = "Um+2W=$-N_b+";
$dnameLve = "alltdjli_pas";

// Check if the script is running on a local server
if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '127.0.0.1') {

    // Connect to the local database
    $conn = mysqli_connect($snameLcl, $unameLcl, $upassLcl, $dnameLcl);
} else {

    // Connect to the live database
    $conn = mysqli_connect($snameLve, $unameLve, $upassLve, $dnameLve);
}

// Check the connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
