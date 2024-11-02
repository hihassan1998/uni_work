<?php

session_start();
require '../db/connectuser.php';

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$user = $_SESSION['user'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    $db = connectToDatabase2($dsn);
    $stmt = $db->prepare("SELECT * FROM user WHERE acronym = :acronym");
    $stmt->execute([':acronym' => $user['acronym']]);
    $existingUser = $stmt->fetch();

    // Verify set password
    if ($existingUser && password_verify($current_password, $existingUser['password'])) {
        if ($new_password === $confirm_password) {
            // Hash new password
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

            // Update password in db
            $update_stmt = $db->prepare("UPDATE user SET password = ? WHERE acronym = ?");
            $update_stmt->execute([$hashed_password, $user['acronym']]);

            // Update session data
            $_SESSION['flash_message'] = "Password changed successfully.";
            header('Location: profile.php');
            exit;
        } else {
            $_SESSION['flash_message'] = "New passwords do not match.";
        }
    } else {
        $_SESSION['flash_message'] = "Current password is incorrect.";
    }
}

// Redirect back to profile if not POST
header('Location: profile.php');
exit;
