<?php
session_start();
include('../config/config.php');
include('../src/calendar_functions.php');
include('../src/calendar.php');
$title = "Fotokalender";
include('../view/header.php');

$date = isset($_GET['date']) ? new DateTime($_GET['date']) : new DateTime();

$month = $date->format('m');
$year = $date->format('Y');
$nameDays = getNameDaysByName();


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['date'])) {
    $date = DateTime::createFromFormat('Y-m-d', $_GET['date']);
} else {
    $date = new DateTime();
}

$month = $date->format('m');
$year = $date->format('Y');

$veckodagar = ["Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag"];


$firstDayOfMonth = new DateTime("$year-$month-01");
$lastDayOfMonth = (clone $firstDayOfMonth)->modify('last day of this month');
$firstWeekStart = (clone $firstDayOfMonth)->modify('monday this week');
$lastWeekEnd = (clone $lastDayOfMonth)->modify('sunday this week');


$month = $date->format('m');
$year = $date->format('Y');

$monthImage = getMonthImage($month);
$calendar = getCalendarDays($year, $month);
list($prevMonth, $nextMonth) = getPrevNextMonths($date);
?>

<main class="calendar-wrapper">
    <div class="photo-container">
        <img src="<?= htmlentities($monthImage) ?>" alt="<?= htmlentities($firstDayOfMonth->format('F')) ?>" class="month-image">
    </div>
    <div class="calendar-container">
        <table class="calendar-table-pc">
            <thead>
                <tr>
                    <th class="week-number">Vecka</th>
                    <?php foreach ($veckodagar as $week_value) : ?>
                        <th><?= htmlentities($week_value) ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $calendarLayout = array_fill(0, 7, []);
                foreach ($calendar as $dayInfo) {
                    $dayIndex = array_search($dayInfo['weekday'], ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]);
                    if ($dayIndex !== false) {
                        $calendarLayout[$dayIndex][] = $dayInfo;
                    }
                }
                $maxWeeks = max(array_map('count', $calendarLayout));

                for ($week = 0; $week < $maxWeeks; $week++) : ?>
                    <tr>
                        <td class="cal-weeknumber">
                            <?php
                            if (isset($calendarLayout[0][$week])) {
                                echo htmlentities($calendarLayout[0][$week]['weekNumber']);
                            }
                            ?>
                        </td>
                        <?php foreach ($calendarLayout as $days) : ?>
                            <td class="calendar-day">
                                <?php if (isset($days[$week])) : ?>
                                    <div class="day-box <?= ($days[$week]['weekday'] === 'Sunday') ? 'sunday' : ''; ?>">
                                        <span class="date-top-left"><?= htmlentities($days[$week]['day']) ?></span>
                                        <span class="day-of-year-bottom-right">(<?= htmlentities($days[$week]['dayOfYear']) ?>)</span>
                                        <br>
                                    </div>
                                <?php endif; ?>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>

    <div class="nav-links-container">
        <a href="?date=<?php echo $prevMonth->format('Y-m-d'); ?>">Föregående månad</a>
        <a href="?date=<?= htmlentities($nextMonth->format('Y-m-d')) ?>" class="">Nästa månad</a>
    </div>
</main>

<?php include('../view/footer.php'); ?>