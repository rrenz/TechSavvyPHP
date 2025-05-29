<?php

date_default_timezone_set('Asia/Manila');

// Get the current hour of the day
$currentHour = date("H");

// Determine a greeting based on the time
$greeting = "Hello!";
if ($currentHour < 12) { // 00:00 AM to 11:59 AM
    $greeting = "Good morning!";
} elseif ($currentHour < 18) { // 12:00 PM to 6:00 PM
    $greeting = "Good afternoon!";
} else { // 6:00 PM to 11:59 PM
    $greeting = "Good evening!";
}

// Get the user's browser information
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Echo HTML content mixed with dynamic PHP variables
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head><title>Dynamic PHP Script</title></head>";
echo "<body>";
echo "<h1>" . $greeting . "</h1>"; // Dynamic greeting
echo "<p>Welcome to our dynamic page!</p>";
echo "<p>You are viewing this page on: <strong>" . $userAgent . "</strong></p>"; // Dynamic user agent
echo "<p>The current server time is: " . date("Y-m-d H:i:s") . " (Asia/Manila)</p>"; // Dynamic timestamp
echo "</body>";
echo "</html>";
?>