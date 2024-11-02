<?php

include('../config/config.php');

// $title = 'Datum-sidan';

?>

<!doctype html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="referrer" content="unsafe-url">
    <title><?= $title ?> | Me-sidan</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/byline.css">
    <link rel="stylesheet" href="css/today.css">
    <link rel="stylesheet" href="css/month.css">
    <link rel="stylesheet" href="css/friday.css">
    <link rel="stylesheet" href="css/photocal.css">
    <link rel="stylesheet" href="css/guessname.css">
    <link rel="stylesheet" href="css/presentname.css">
    <link rel="stylesheet" href="css/search.css">

</head>

<body>

    <nav class="navbar">
        <ul>
            <li><a href="me.php">Me</a></li>
            <li><a href="report.php">Report</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="today.php">Today</a></li>
            <li><a href="friday.php">Friday</a></li>
            <li><a href="month.php">Calender</a></li>
            <li><a href="guessname.php">Gissa dagens namn</a></li>
            <li><a href="photocal.php">Photo-Cal</a></li>
            <li><a href="session.php">Session</a></li>
            <!-- <li><a href="name.php">Name</a></li> -->
            <li><a href="search.php">Search</a></li>
            <!-- Adding the navbar login or logout logic -->
            <!-- <li><a href="login.php">Login</a></li> -->
            <li><a href="me.php">Hem</a></li>
            <?php if (isset($_SESSION['user'])) : ?>
                <li><a href="#" style="pointer-events: none;">Inloggad som: <?= htmlspecialchars($_SESSION['user']['name']) ?></a></li>
                <li><a href="profile.php">Min Profil</a></li>
                <li><a href="logout.php">Logga ut</a></li>
            <?php else : ?>
                <li><a href="login.php">Logga In</a></li>
            <?php endif; ?>


        </ul>
    </nav>
    <header class="header">
        <img class="logo" src="img/bthtrans.svg" alt="bild på logo">
        <span class="title"><?= $title ?></span>
        <span class="subtitle">Raportsida</span>
    </header>