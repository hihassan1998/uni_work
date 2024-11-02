<?php
include('../config/config.php');

// Include the database connection file
require '../db/connectuser.php';


$db = connectToDatabase2($dsn);

// SQL query to retrieve all users
$sql = "SELECT * FROM user";
$stmt = $db->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Användare</title>
</head>
<body>
    <h2>Lista över användare</h2>
    <?php if (!empty($users)) : ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Acronym</th>
                    <th>Namn</th>
                    <th>Lösenord</th>
                    <th>Roll</th>
                    <th>Avatar</th>
                    <th>Signature</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= htmlspecialchars($user['acronym']) ?></td>
                        <td><?= htmlspecialchars($user['name']) ?></td>
                        <td><?= htmlspecialchars($user['password']) ?></td>
                        <td><?= htmlspecialchars($user['role']) ?></td>
                        <td><img src="<?= htmlspecialchars($user['avatar']) ?>" alt="Avatar" style="width: 50px;"></td>
                        <td><?= htmlspecialchars($user['signature']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>Inga användare hittades.</p>
    <?php endif; ?>
</body>
</html>
