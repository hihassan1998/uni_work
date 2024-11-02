<?php
session_start();

$title = "Sök-motorn";

include('../view/header.php');

require "../src/connect.php";

$db = connectToDatabase($dsn);

// Get query from the URL or form input
$searchTerm = isset($_GET['query']) ? trim($_GET['query']) : '';

// Array to hold the search results
$results = [];

if (!empty($searchTerm)) {
    // Search and remove duplicates
    $sqlQuery = <<<EOD
        SELECT namn AS name FROM namnlista WHERE namn LIKE :searchTerm
        UNION
        SELECT namn AS name FROM namnbetydelse WHERE namn LIKE :searchTerm
    EOD;

    $stmt = $db->prepare($sqlQuery);
    $stmt->execute([':searchTerm' => "%$searchTerm%"]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<main>
    <hr>
    <form method="GET" action="search.php" class="search-form">
        <input type="text" name="query" placeholder="Sök efter namn" required class="search-input">
        <button type="submit" class="search-button">Sök</button>
    </form>
    <hr>
    <h2 class="results-title">Sökresultat för "<?php echo htmlspecialchars($searchTerm); ?>" :</h2>
    <hr>
    <?php if (!empty($results)) : ?>
        <ul class="results-list">
            <?php foreach ($results as $row) : ?>
                <li class="result-item">
                    <a href="name.php?query=<?php echo urlencode($row['name']); ?>" class="result-link">
                        <?php echo htmlspecialchars($row['name']); ?>
                    </a> <br>
                    <span class="next-link">
                        https://name.php?query=<?php echo urlencode($row['name']); ?>/adbskdbkjbsknadbAML/a31a13srgt/sd3fs3
                    </span>

                </li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p class="no-results">Ingen information om namnet kunde hittas.</p>
    <?php endif; ?>
</main>



<?php
include('../view/footer.php');
?>