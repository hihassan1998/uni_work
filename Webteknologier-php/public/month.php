<?php
include('../config/config.php');
$title = 'Kalender';
include('../view/header.php');
include('../view/php/kalender.php');


?>
<main class="main-calender">
    <div class="main-choose">
        <h3>Välj Datum:</h3>
        <form method="get" action="month.php">
            <input type="date" name="date" value="<?php echo $date->format('Y-m-d'); ?>" required>
            <input type="submit" value="Visa Månad">
        </form>
        <p>Antingen kan du välja mm/dd/åå ovan, eller så kan du sätta in datum för att använda GET query i URL i formatet: "?date=åååå-mm-dd".</p>
    </div>
    <div class="spiral">
        <div class="calendar">
            <div>
                <div class="header">
                    <h1><?php echo $firstDayOfMonth->format('F Y'); ?></h1>
                </div>
                <table class="calendar-table">
                    <!-- <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead> -->
                    <tbody>
                        <?php foreach ($calendar as $dayInfo) : ?>
                            <tr class="<?php echo ($dayInfo['weekday'] === 'Sunday') ? 'sunday' : ''; ?> <?php echo ($dayInfo['day'] === (int)$date->format('d') && $month == $date->format('m') && $year == $date->format('Y')) ? 'today' : ''; ?>">
                                <td class="day-number">
                                    <strong><?php echo $dayInfo['day']; ?></strong>
                                </td>
                                <td class="cal-weekday">
                                    <?php echo $dayInfo['weekday']; ?><br>
                                    <span class="day-of-year"><?php echo $dayInfo['dayOfYear']; ?></span>
                                </td>
                                <td class="cal-weeknumber">
                                    <?php echo ($dayInfo['day'] === 1 || $dayInfo['weekday'] === 'Monday') ? $dayInfo['weekNumber'] : '';  ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="nav-links">
                    <a href="?date=<?php echo $prevMonth->format('Y-m-d'); ?>">Föregående månad</a>
                    |
                    <a href="?date=<?php echo $nextMonth->format('Y-m-d'); ?>">Nästa månad</a>
                </div>
                <div class="footer-calender">
                    <hr>
                    <h3><?php echo $firstDayOfMonth->format('F'); ?></h3>
                    <!-- <hr> -->
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('../view/footer.php'); ?>
