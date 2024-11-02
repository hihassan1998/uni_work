<?php

session_start();
$title = "Detaljer";
include('../view/header.php');

require "../src/connect.php";

// Check if a name is provided in the query string
if (!isset($_GET['query']) || empty(trim($_GET['query']))) {
    echo "<div class='message'>Du måste fylla i querysträngen.</div>";
    include("../view/footer.php");
    exit;
}

// Get the name from the query string
$searchName = trim($_GET['query']);

// Create the SQL statement for namnlista
$sqlNamnlista = <<<EOD
SELECT
    rowid,
    *
FROM namnlista
WHERE
    namn = :namn
EOD;

// Prepare and execute the SQL statement for namnlista
$stmtNamnlista = $db->prepare($sqlNamnlista);
$stmtNamnlista->bindParam(':namn', $searchName);
$stmtNamnlista->execute();
$namnlistaResult = $stmtNamnlista->fetchAll();

// Get the date of birth of the searched person (if exists)
$birthDate = null;
if (!empty($namnlistaResult)) {
    $birthDate = $namnlistaResult[0]['datum']; // Assuming 'datum' is the date column
}

// Query to find all people with the same date of birth
$peopleWithSameBirthday = [];
if ($birthDate) {
    $sqlSameBirthday = <<<EOD
    SELECT namn, datum
    FROM namnlista
    WHERE datum = :datum
    AND namn != :namn  -- Exclude the original searched name
    EOD;

    $stmtSameBirthday = $db->prepare($sqlSameBirthday);
    $stmtSameBirthday->bindParam(':datum', $birthDate);
    $stmtSameBirthday->bindParam(':namn', $searchName);
    $stmtSameBirthday->execute();
    $peopleWithSameBirthday = $stmtSameBirthday->fetchAll();
}

//SQL statement for namnbetydelse
$sqlNamnbetydelse = <<<EOD
SELECT
    namn,
    betydelse
FROM namnbetydelse
WHERE
    namn = :namn
EOD;

// Prepare and execute the SQL statement for namnbetydelse
$stmtNamnbetydelse = $db->prepare($sqlNamnbetydelse);
$stmtNamnbetydelse->bindParam(':namn', $searchName);
$stmtNamnbetydelse->execute();
$namnbetydelseResult = $stmtNamnbetydelse->fetchAll();

// Store results in session and redirect to presentname.php
$_SESSION['namnlistaResult'] = $namnlistaResult;
$_SESSION['namnbetydelseResult'] = $namnbetydelseResult;
$_SESSION['peopleWithSameBirthday'] = $peopleWithSameBirthday;

require "../view/presentname.php";
exit();
