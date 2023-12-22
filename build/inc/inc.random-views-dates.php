<?php
// Generate a random number of views between 1 and a Number
$views = rand(1, 9999);

// Format the number of views
if ($views >= 1000 && $views < 1000000) {
    $views = round($views / 1000, 1) . 'k';
} elseif ($views >= 1000000 && $views < 1000000000) {
    $views = round($views / 1000000, 2) . 'M';
} elseif ($views >= 1000000000) {
    $views = round($views / 1000000000, 2) . 'B';
}

// Generate a random date and time in the past 5 years
$randomDate = date('Y-m-d H:i:s', strtotime('-' . rand(0, 5) . ' years -' . rand(0, 12) . ' months -' . rand(0, 30) . ' days -' . rand(0, 23) . ' hours -' . rand(0, 59) . ' minutes -' . rand(0, 59) . ' seconds'));

// Generate a random date and time in the past month
// $randomDate = date('Y-m-d H:i:s', strtotime('-' . rand(0, 30) . ' days -' . rand(0, 23) . ' hours -' . rand(0, 59) . ' minutes -' . rand(0, 59) . ' seconds'));

// Generate a random date and time in the past day
// $randomDate = date('Y-m-d H:i:s', strtotime('-' . rand(0, 23) . ' hours -' . rand(0, 59) . ' minutes -' . rand(0, 59) . ' seconds'));

// Generate a random date and time in the past hour
// $randomDate = date('Y-m-d H:i:s', strtotime('-' . rand(0, 59) . ' minutes -' . rand(0, 59) . ' seconds'));

// Generate a random date and time in the past minute
// $randomDate = date('Y-m-d H:i:s', strtotime('-' . rand(0, 59) . ' seconds'));

// Calculate the difference between the random date and the current date
$diff = date_diff(date_create($randomDate), date_create(date('Y-m-d H:i:s')));

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

// Replace the line that displays the number of clicks and the time since posted
$clicksText = $views == 1 ? ' Click' : ' Clicks';
echo '
<span class="text-xs font-bold text-gray-400">
    ' . $views . $clicksText . ' | ' . $timeSincePosted . '
</span>
';
