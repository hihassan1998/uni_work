<?php
session_start();

$flashMessage = isset($_SESSION['flash_message']) ? $_SESSION['flash_message'] : '';
$flashType = isset($_SESSION['flash_type']) ? $_SESSION['flash_type'] : ''; // Get the flash type (success or error)

unset($_SESSION['flash_message']);
unset($_SESSION['flash_type']);

$title = "Gissnings Spel | Result";
include("../view/header.php");
?>

<main class="main-guess">
    <h3>Resultat:</h3>
    <p class="<?= htmlentities($flashType) ?>"><?= htmlentities($flashMessage) ?></p>
    <a href="guessname.php" class="btn-play-again">Spela igen</a>
</main>

<?php include("../view/footer.php") ?>