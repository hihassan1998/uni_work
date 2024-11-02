<?php

// session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['date'])) {
    $date = DateTime::createFromFormat('Y-m-d', $_GET['date']);
} else {
    $date = new DateTime();
}
// var_dump($_SERVER);
// Get month and year formatted date
$month = $date->format('m');
$year = $date->format('Y');

// First date of the month
$firstDayOfMonth = new DateTime("$year-$month-01");
$lastDayOfMonth = (clone $firstDayOfMonth)->modify('last day of this month');

// Navigation links for previous and next month
$prevMonth = (clone $date)->modify('-1 month');
$nextMonth = (clone $date)->modify('+1 month');

// Initialize calendar array
$calendar = [];
for ($day = 1; $day <= $lastDayOfMonth->format('d'); $day++) {
    $currentDate = new DateTime("$year-$month-$day");
    $calendar[] = [
        'day' => $day,
        'weekday' => $currentDate->format('l'),
        'dayOfYear' => $currentDate->format('z') + 1,
        'weekNumber' => (int)$currentDate->format('W')
    ];
}
