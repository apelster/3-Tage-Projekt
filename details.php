<?php
// Verbindung zur Datenbank herstellen (wie oben bereits gemacht)

// Einträge aus der Datenbank abrufen
$stmt = $pdo->query("SELECT * FROM user_entries");
$entries = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Einträge im Freundebuch</title>
    <link rel="stylesheet" href="Erste_Seite.css">
</head>
<body>
    <div class="container">
        <h1>Alle Einträge im Freundebuch</h1>
        <?php foreach ($entries as $entry): ?>
            <div class="entry">
                <h2><?= htmlspecialchars($entry['name']) ?></h2>
                <p><strong>Alter:</strong> <?= htmlspecialchars($entry['age']) ?></p>
                <p><strong>Beruf:</strong> <?= htmlspecialchars($entry['job']) ?></p>
                <!-- Weitere Felder entsprechend ausgeben -->
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
