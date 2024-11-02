<?php
$name = preg_replace("/[^a-z\d]/i", "", __DIR__);
session_name($name);
session_start();
include("../config/config.php");
include('../src/functions.php');

$title = 'Session';
include("../view/header.php");

$sessionName = session_name();
$sessionCookie = session_get_cookie_params();

if (isset($_GET['destroy'])) {
    destroySession();
    header("Location: session.php");
    exit();
}

if (!isset($_SESSION['initialized'])) {
    $_SESSION['initialized'] = true;
    $_SESSION['created_at'] = date('Y-m-d H:i:s'); // Spara sessionens skapningstid
    $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT']; // Spara användaragent
    $_SESSION['ip_address'] = $_SERVER['REMOTE_ADDR']; // Spara IP-adress
}

// Visa sessionens innehåll
?>
<main>
    <h2>Session Detaljer</h2>
    <h3>Session ID:</h3>
    <p><?= session_id(); ?></p>
    <h3>Session name:</h3>
    <p><?= $sessionName ?></p>


    <h3>Innehåll:</h3>
    <ul>
        <?php if (empty($_SESSION)) : ?>
            <li>Inga session data finns.</li>
        <?php else : ?>
            <?php foreach ($_SESSION as $key => $value) : ?>
                <?php

                if (is_array($value)) {
                    echo "<li>" . htmlentities($key) . ": <pre>" . htmlentities(print_r($value, true)) . "</pre></li>";
                } else {
                    echo "<li>" . htmlentities($key) . ": " . htmlentities($value) . "</li>";
                }
                ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>

    <a href="?destroy=true">Förstöra Session</a>
</main>

<?php include("../view/footer.php") ?>