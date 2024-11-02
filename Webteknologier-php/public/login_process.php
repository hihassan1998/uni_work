<?php

session_start();
require '../db/connectuser.php';

// incoming POST data
$acronym = $_POST['acronym'] ?? "";
$password = $_POST['password'] ?? "";

$db = connectToDatabase2($dsn);

// SQL stmt to fetch user
$sql = "SELECT * FROM user WHERE acronym = :acronym";
$stmt = $db->prepare($sql);
$stmt->execute([':acronym' => $acronym]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Check user creds
if ($user && password_verify($password, $user['password'])) {
    // Save user data
    $_SESSION['user'] = [
        'acronym' => $user['acronym'],
        'name' => $user['name'],
        // 'role' => $user['role'],
        'avatar' => $user['avatar'],
        'signature' => $user['signature'],
    ];
    header('Location: profile.php');
} else {
    $_SESSION['error'] = "Felaktigt användarnamn eller lösenord.";
    header('Location: login.php');
    exit;
}
