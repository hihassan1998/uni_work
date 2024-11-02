<?php
session_start();
$title = "";
include("../view/header.php");
require '../db/connectuser.php';

// Check if the user is logged in
if (isset($_SESSION['user'])) {
    header('Location: profile.php');
    exit;
}

$flash_message = '';
if (isset($_SESSION['flash_message'])) {
    $flash_message = htmlspecialchars($_SESSION['flash_message']);
    unset($_SESSION['flash_message']);
}

$error = '';
if (isset($_SESSION['error'])) {
    $error = htmlspecialchars($_SESSION['error']);
    unset($_SESSION['error']);
}
?>

<link rel="stylesheet" href="css/register.css">

<main class="form-reg">
    <h2>Logga In</h2>
    <?php if ($flash_message) : ?>
        <p style="color: green;"><?php echo $flash_message; ?></p>
    <?php endif; ?>
    <?php if ($error) : ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="login_process.php" method="post">
        <label for="acronym" >Akronym:</label>
        <input type="text" id="acronym" name="acronym" required>
        <label for="password">Lösenord:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Logga In</button>
    </form>
    <p><a href="register.php">Skapa ett konto</a></p>
</main>

<?php include("../view/footer.php"); ?>