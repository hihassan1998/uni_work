<?php

session_start();
require '../db/connectuser.php';
$title = "User Profile";
include("../view/header.php");


// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$user = $_SESSION['user'];

// Flash message
$flash_message = '';
if (isset($_SESSION['flash_message'])) {
    $flash_message = htmlspecialchars($_SESSION['flash_message']);
    unset($_SESSION['flash_message']);
}
?>

<link rel="stylesheet" href="css/register.css">
<main class="">
    <div class="form-reg">
        <h2>Profil Detaljer</h2>
        <p class=""><strong></strong> <br>
            <?php
            if (!empty($user['avatar'])) :
                echo '<img class= "centered_img" src="' . htmlspecialchars($user['avatar']) . '" alt="Avatar" width="250">';
            else :
                echo 'Avatar saknas';
            endif;
            ?>
        </p>
        <p><strong>Akronym:</strong> <?php echo htmlspecialchars($user['acronym'] ?? 'Saknas'); ?></p>
        <p><strong>Namn:</strong> <?php echo htmlspecialchars($user['name'] ?? 'Saknas'); ?></p>
        <p><strong>Signatur:</strong> <?php echo nl2br(htmlspecialchars($user['signature'] ?? 'Saknas')); ?></p>
    </div>

    <?php if ($flash_message) : ?>
        <p style="color: green;"><?php echo $flash_message; ?></p>
    <?php endif; ?>

    <!-- Change Password form -->
    <form class="" action="change_password.php" method="post">
        <h2>Bytta Lösenord</h2>
        <label for="current_password">Nuvarande Lösenord:</label>
        <input type="password" id="current_password" name="current_password" required>

        <label for="new_password">Ny Lösenord:</label>
        <input type="password" id="new_password" name="new_password" required>

        <label for="confirm_password">Bekräfta ny Lösenord:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <button type="submit">Bytta Lösenord</button>
    </form>

    <!-- Update Profile form -->
    <form class="" method="post" action="update_profile.php">
        <h2>Updatera Profilen</h2>
        <p>Name:</p>
        <input type="text" name="name" value="<?php echo htmlspecialchars($user['name'] ?? ''); ?>" required>
        <p>Avatar link:</p>
        <input type="text" name="avatar" value="<?php echo htmlspecialchars($user['avatar'] ?? ''); ?>" required>
        <p>Signatur:</p>
        <textarea name="signature" required><?php echo htmlspecialchars($user['signature'] ?? ''); ?></textarea>
        <button type="submit">Updatera Profilen</button>
    </form>

    <!-- Delete account form -->
    <form method="post" action="delete_account.php">
        <h2>Radera Konto</h2>
        <p><strong>OBS! </strong>Tryck på 'Radera Konto' knapp för att radera din konto om du är säker.</p>
        <button type="submit" name="delete">Radera Konto</button>
    </form>
    <!-- Log out from account form -->
    <form action="logout.php" method="post">
        <button type="submit">Logga ut</button>
    </form>

</main>


<?php include("../view/footer.php"); ?>