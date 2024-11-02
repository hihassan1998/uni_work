<?php

function getMonthImage($month)
{
    $monthImages = [
        '01' => 'img/january.jpg',
        '02' => 'img/feburary.jpg',
        '03' => 'img/march.jpg',
        '04' => 'img/april.jpg',
        '05' => 'img/may.jpg',
        '06' => 'img/june.jpg',
        '07' => 'img/july.jpg',
        '08' => 'img/august.jpg',
        '09' => 'img/september.jpg',
        '10' => 'img/october.jpg',
        '11' => 'img/november.jpg',
        '12' => 'img/december.jpg',
    ];
    return isset($monthImages[$month]) ? $monthImages[$month] : '';
}

function getCalendarDays($year, $month)
{
    $firstDayOfMonth = new DateTime("$year-$month-01");
    $lastDayOfMonth = (clone $firstDayOfMonth)->modify('last day of this month');

    $firstWeekStart = (clone $firstDayOfMonth)->modify('monday this week');
    $lastWeekEnd = (clone $lastDayOfMonth)->modify('sunday this week');

    $calendar = [];
    for ($date = clone $firstWeekStart; $date <= $lastWeekEnd; $date->modify('+1 day')) {
        $dayOfMonth = $date->format('j');
        $calendar[] = [
            'day' => $dayOfMonth,
            'weekday' => $date->format('l'),
            'dayOfYear' => $date->format('z') + 1,
            'weekNumber' => $date->format('W'),
        ];
    }
    return $calendar;
}


function getPrevNextMonths($date)
{
    $prevMonth = (clone $date)->modify('-1 month');
    $nextMonth = (clone $date)->modify('+1 month');
    return [$prevMonth, $nextMonth];
}
