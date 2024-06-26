<?php
// Verbindung zur Datenbank herstellen
$host = 'localhost';
$dbname = 'freundebuch';
$username = 'root';
$password = 'Eisbombe11#';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Verbindungsfehler: " . $e->getMessage());
}

// Formulardaten verarbeiten und in die Datenbank einfügen
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = $_POST['date'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $job = $_POST['job'];
    $residence = $_POST['residence'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $essen = $_POST['essen'];
    $tier = $_POST['tier'];
    $land = $_POST['land'];
    $team = $_POST['Team'];
    $farbe = $_POST['farbe'];
    $tag = $_POST['tag'];
    $spiel = $_POST['spiel'];
    $quote = $_POST['quote'];
    $happy1 = $_POST['happy1'];
    $happy2 = $_POST['happy2'];
    $happy3 = $_POST['happy3'];
    $childDream = $_POST['childDream'];
    $matureDream = $_POST['matureDream'];
    $traits = implode(',', $_POST['traits']);
    $moreLike = implode(',', $_POST['moreLike']);

    // SQL-Statement vorbereiten und ausführen
    $stmt = $pdo->prepare("INSERT INTO user_entries (date, name, age, job, residence, phone, email, essen, tier, land, team, farbe, tag, spiel, quote, happy1, happy2, happy3, childDream, matureDream, traits, moreLike) 
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$date, $name, $age, $job, $residence, $phone, $email, $essen, $tier, $land, $team, $farbe, $tag, $spiel, $quote, $happy1, $happy2, $happy3, $childDream, $matureDream, $traits, $moreLike]);

    // Nach dem Speichern zur Seite mit den Einträgen weiterleiten
    header("Location: details.php");
    exit();
}
?>
