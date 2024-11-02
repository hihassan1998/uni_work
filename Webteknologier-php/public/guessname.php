<?php
session_start();

$title = "Gissings Spel";
include('../config/config.php');
include("../view/header.php");
include('../src/calendar.php');

//arrayen med namn och deras betydelser
$nameExplanations = getNameExplanation();
$nameDaysByDate = getNameDaysByName();

// Slumpa ett namn och spara det i sessionen
$randomName = array_rand($nameExplanations);
$meaning = $nameExplanations[$randomName];
$date = $nameDaysByDate[$randomName];

// Spara namnet i sessionen
$_SESSION['random_name'] = $randomName;
$_SESSION['meaning'] = $meaning;
$_SESSION['date'] = $date;

// Slumpa flera namn som alternativ, inklusive rätt svar
$randomOptions = array_rand($nameExplanations, 4);
if (!in_array($randomName, $randomOptions)) {
    $randomOptions[array_rand($randomOptions)] = $randomName;
}

$flashMessage = $_SESSION['flash_message'] ?? null;
$flashType = $_SESSION['flash_type'] ?? null;

unset($_SESSION['flash_message'], $_SESSION['flash_type']);
?>

<main class="guess-game-container">
    <div class="meaning-container">
        <h2>Gissa vilket namn och datum som har denna betydelse:</h2>
        <p class="meaning"><strong>Betydelse: </strong><?= htmlentities($meaning) ?></p>
        <p class="date"><strong>Datum för namnsdag: </strong><?= htmlentities($date) ?></p>
    </div>
    <div class="options-container">
        <form action="process_guess.php" method="POST" class="guess-form">
            <fieldset>
                <legend>Välj rätt namn:</legend>
                <?php foreach ($randomOptions as $option) : ?>
                    <label class="guess-option">
                        <input type="radio" name="guess" value="<?= htmlentities($option) ?>" required>
                        <span><?= htmlentities($option) ?></span>
                    </label>
                <?php endforeach; ?>
                <button type="submit" class="submit-button">Gissa</button>
            </fieldset>
        </form>
        <form action="guessname.php" method="GET">
            <button type="submit" class="new-guess-button">Visa en ny betydelse</button>
        </form>
    </div>

</main>

<?php include("../view/footer.php") ?>