<?php
session_start();
require '../db/connectuser.php';
$title = "Register";
include("../view/header.php");

// Check if the user is logged in
if (isset($_SESSION['user'])) {
    header('Location: profile.php');
    exit;
}

$flash_message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $acronym = trim($_POST['acronym']);
    $name = trim($_POST['name']);
    $avatar = trim($_POST['avatar']);
    $signature = trim($_POST['signature']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // validation
    if (empty($acronym) || empty($name) || empty($avatar) || empty($signature) || empty($password) || empty($confirm_password)) {
        $flash_message = "All fields are required.";
    } elseif ($password !== $confirm_password) {
        $flash_message = "Passwords do not match.";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Connect to the database
        $db = connectToDatabase2($dsn);
        $stmt = $db->prepare("INSERT INTO user (acronym, name, avatar, signature, password) VALUES (?, ?, ?, ?, ?)");

        // Check if acronym already exists
        $existingUserCheck = $db->prepare("SELECT * FROM user WHERE acronym = ?");
        $existingUserCheck->execute([$acronym]);
        if ($existingUserCheck->fetch()) {
            $flash_message = "Acronym redan tagen. Vänligen välj en annan.";
        } else {
            // Execute the insert statement
            if ($stmt->execute([$acronym, $name, $avatar, $signature, $hashed_password])) {
                $_SESSION['flash_message'] = "Registrationen lyckades. Du kan nu logga in.";
                header('Location: login.php'); // Redirect to login
                exit;
            } else {
                $flash_message = "Registrationen misslycakdes. Vänligen försök igen.";
            }
        }
    }
}
?>
<link rel="stylesheet" href="css/register.css">
<main class="form-reg">
    <!-- <h2>Register</h2> -->
    <?php if ($flash_message) : ?>
        <p style="color: red;"><?php echo htmlspecialchars($flash_message); ?></p>
    <?php endif; ?>

    <form class="" action="register.php" method="post">
        <h2>Registerera ett nytt konto</h2>
        <label for="acronym">Akronym:</label>
        <input type="text" id="acronym" name="acronym" required>

        <label for="name">Namn:</label>
        <input type="text" id="name" name="name" required>

        <label for="avatar">Avatar URL:</label>
        <input type="text" id="avatar" name="avatar" required>

        <label for="signature">Signatur:</label>
        <textarea name="signature" id="signature" required></textarea>

        <label for="password">Lösenord:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password">Bekräfta Lösenord:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <button type="submit">Registerera</button>
        <p><a href="login.php">Redan har ett konto? Logga in här.</a></p>
    </form>

</main>

<?php include("../view/footer.php"); ?>