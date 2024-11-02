<?php
// session_start();
$title = "name.php";

// Fetch results from session
$namnlistaResult = $_SESSION['namnlistaResult'] ?? [];
$namnbetydelseResult = $_SESSION['namnbetydelseResult'] ?? [];
$peopleWithSameBirthday = $_SESSION['peopleWithSameBirthday'] ?? []; // Fetch birthday results

// Clear session data after fetching
unset($_SESSION['namnlistaResult']);
unset($_SESSION['namnbetydelseResult']);
unset($_SESSION['peopleWithSameBirthday']);
?>

<main>
    <div class="container-pn">
        <?php if (empty($namnlistaResult) && empty($namnbetydelseResult)) : ?>
            <p>Ingen information om namnet kunde hittas.</p>
        <?php else : ?>
            <?php if (!empty($namnlistaResult)) : ?>
                <h2>Detaljer om namnet från namnlista:</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Row ID</th>
                            <th>Namn</th>
                            <th>Datum</th>
                            <th>Namnlängd</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($namnlistaResult as $row) : ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['rowid']); ?></td>
                                <td><?php echo htmlspecialchars($row['namn']); ?></td>
                                <td><?php echo htmlspecialchars($row['datum']); ?></td>
                                <td><?php echo htmlspecialchars($row['namnlangd']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>

            <?php if (!empty($namnbetydelseResult)) : ?>
                <h2>Betydelse av namnet:</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Namn</th>
                            <th>Betydelse</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($namnbetydelseResult as $row) : ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['namn']); ?></td>
                                <td><?php echo htmlspecialchars($row['betydelse']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>

            <?php if (!empty($peopleWithSameBirthday)) : ?>
                <h2>Personer med samma namnsdag:</h2>
                <ul class="birthday-list">
                    <?php foreach ($peopleWithSameBirthday as $person) : ?>
                        <li>
                            <a href="search.php?query=<?php echo urlencode($person['namn']); ?>">
                                <?php echo htmlspecialchars($person['namn']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        <?php endif; ?>
        <div class="mt-3">
            <a href="search.php" class="btn btn-primary">Tillbaka till sökning</a>
        </div>
    </div>
</main>

<?php include('../view/footer.php'); ?>
