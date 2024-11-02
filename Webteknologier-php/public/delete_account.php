<?php

session_start();
require '../db/connectuser.php';

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$user = $_SESSION['user'];

if (isset($_POST['delete'])) {
    $db = connectToDatabase2($dsn);
    $stmt = $db->prepare("DELETE FROM user WHERE acronym = ?");
    $stmt->execute([$user['acronym']]);

    // Destroy the session
    session_destroy();
    $_SESSION['flash_message'] = "Account deleted successfully.";
    header('Location: login.php');
    exit;
}
