<?php
session_start();
include('../config/config.php');

$title = 'Datum';
// Set the timezone to use
date_default_timezone_set('Europe/Stockholm');

// The date of today
$today = date('Y-m-d H:i:s');

// Name of the week day and week number
$weekday = date('l');
$weekNumber = date('W');

include('../view/header.php');
include('../view/php/kalender.php');
?>


<main class="main-today">
    <div class="row">
        <h1>Dagens datum är:</h1>
    </div>
    <div class="col">
        <h1> <?= $today ?>  </h1>
    </div>
    <article class="main-today-left">
        <h2>Idag är det:</h2>
        <div class="col-today">
            <!-- <p>Dagens datum är <?= $today ?> </p> -->
            <p> <span class="weekday"><?= $weekday ?></span>.</p>
        </div>
        <div class="row">
            <p>Vi är i vecka nummer <?= $weekNumber ?>.</p>
        </div>
    </article>
</main>

<?php  ?>
<?php include('../view/footer.php') ?>