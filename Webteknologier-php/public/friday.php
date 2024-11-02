<?php

session_start();
include("../config/config.php");
$title = "Är det fredag idag?";
include("../view/header.php");

// Get the date parameter from the URL
$date = $_GET['date'] ?? date('Y-m-d');

// Initialize the timestamp var
$timestamp = null;

// If a date is provided, convert it to a timestamp
if ($date) {
    $timestamp = strtotime($date);

    if ($timestamp === false) {
        echo "Ogiltigt datumformat. Vänligen ange ett giltigt datum i formatet 'YYYY-MM-DD'.";
        exit;
    }
} else {
    // If no date is provided, use the current date
    $timestamp = time();
}

// Output for debugging
// var_dump($timestamp);

$dayNum = date('N', $timestamp); // Numeric representation of the day of the week (1 for Monday, 7 for Sunday)

// Determine if it's Friday (5)
$isFriday = ($dayNum == 5); // Using == for comparison
// var_dump($isFriday);

// Calculate how many days until Friday
if ($isFriday) {
    $daysUntilFriday = 0;
} else {
    $daysUntilFriday = (5 - $dayNum + 7) % 7;
}

// Get week number and formatted date
$week = date('W', $timestamp);
$dateStr = date('Y-m-d', $timestamp);
$dayStr = date('l', $timestamp);

// Today's message
$todayMessage = "Det är $dayStr i vecka #$week och datumet är $dateStr.";

?>

<main class="main-centered">
    <?php if ($isFriday) : ?>
        <div class="crazy-text">
            <p>Det är fredag!</p>
        </div>
        <div>
            <h2 class="flipText">Ha en fantastisk dag!</h2>
            <p><?= $todayMessage ?></p>
            <?php include("../view/fridayView/isfriday.php"); ?>
        </div>
    <?php else : ?>
        <div>
            <h3>Det är inte fredag.</h3>
            <p><?= $todayMessage ?></p>
            <?php include("../view/fridayView/notfriday.php"); ?>
            <p> Det är <strong><?= $daysUntilFriday ?></strong> dagar kvar till fredag.</p>
        </div>
    <?php endif; ?>


    <div class="main-form">
        <h3>Kontrollera ett annat datum</h3>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
            <p>
                <strong>
                    Datum:
                    <input type="text" name="date" placeholder="Skriv in ett datum (YYYY-MM-DD)">
                </strong>
            </p>
            <p>
                <input type="submit" value="Skicka">
                <input type="reset" value="Rensa">
            </p>
        </form>
    </div>
</main>

<?php include("../view/footer.php"); ?>