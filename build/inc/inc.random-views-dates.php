<?php
// Generate a random number of views between 137 and 25000
$views = rand(137, 25000);

// Format the number of views
if ($views >= 1000) {
    $views = round($views / 1000, 1) . 'k';
}

// Generate a random date in the past 5 years
$randomDate = date('Y-m-d', strtotime('-' . rand(0, 5) . ' years -' . rand(0, 12) . ' months -' . rand(0, 30) . ' days'));

// Calculate the difference between the random date and the current date
$diff = date_diff(date_create($randomDate), date_create(date('Y-m-d')));

// Format the time since posted
$timeSincePosted = '';
if ($diff->y > 0) {
    $timeSincePosted = $diff->y . ($diff->y > 1 ? ' Years Ago' : ' Year Ago');
} elseif ($diff->m > 0) {
    $timeSincePosted = $diff->m . ($diff->m > 1 ? ' Months Ago' : ' Month Ago');
} elseif ($diff->d > 6) {
    $weeks = floor($diff->d / 7);
    $days = $diff->d % 7;
    $timeSincePosted = $weeks . ($weeks > 1 ? ' Weeks Ago' : ' Week Ago');
} else {
    $timeSincePosted = $diff->d . ($diff->d > 1 ? ' Days Ago' : ' Day Ago');
}

// Replace the line that displays the number of views and the time since posted
echo '
<span class="text-xs font-bold text-gray-400">
    ' . $views . ' Views | ' . $timeSincePosted . '
</span>
';
