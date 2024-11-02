<?php

session_start();

if (isset($_POST['guess']) && isset($_SESSION['random_name'])) {
    $userGuess = $_POST['guess'];
    $correctName = $_SESSION['random_name'];

    if (!isset($_SESSION['user_guesses'])) {
        $_SESSION['user_guesses'] = [];
    }

    $_SESSION['user_guesses'][] = [
        'guess' => $userGuess,
        'correct' => $userGuess === $correctName,
        'correct_name' => $correctName
    ];

    if ($userGuess === $correctName) {
        $_SESSION['flash_message'] = "Rätt gissat! Namnet var $correctName.";
        $_SESSION['flash_type'] = "success";
    } else {
        $_SESSION['flash_message'] = "Fel svar! Rätt namn var $correctName.";
        $_SESSION['flash_type'] = "error";
    }
}

header("Location: result.php");

exit;
