<?php

session_start();
include('../config/config.php');
require '../db/connectuser.php';

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$user = $_SESSION['user'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $avatar = $_POST['avatar'];
    $signature = $_POST['signature'];

    // Connect to the database
    $db = connectToDatabase2($dsn);

    // Heredoc syntax for SQL statement
    $sql = <<<EOD
    UPDATE user 
    SET name = ?, avatar = ?, signature = ? 
    WHERE acronym = ?
    EOD;

    $stmt = $db->prepare($sql);
    $stmt->execute([$name, $avatar, $signature, $user['acronym']]);

    // Update session data
    $_SESSION['user']['name'] = $name;
    $_SESSION['user']['avatar'] = $avatar;
    $_SESSION['user']['signature'] = $signature; // Ensure signature is also updated in session

    $_SESSION['flash_message'] = "Profilen updaterad.";
    header('Location: profile.php'); // Redirect to profile
    exit;
}
