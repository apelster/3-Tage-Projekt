<?php
session_start();
require_once 'db.php'; // Verbindungsdatei zur Datenbank

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id']; // Benutzer-ID aus der Session
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
    $film = $_POST['film'];
    $quote = $_POST['quote'];
    $happy1 = $_POST['happy1'];
    $happy2 = $_POST['happy2'];
    $happy3 = $_POST['happy3'];
    $child_dream = $_POST['childDream'];
    $mature_dream = $_POST['matureDream'];
    $traits = implode(',', $_POST['traits']);
    $more_like = implode(',', $_POST['moreLike']);

    $stmt = $pdo->prepare("INSERT INTO user_entries (user_id, date, name, age, job, residence, phone, email, essen, tier, land, team, farbe, tag, spiel, film, quote, happy1, happy2, happy3, child_dream, mature_dream, traits, more_like) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$user_id, $date, $name, $age, $job, $residence, $phone, $email, $essen, $tier, $land, $team, $farbe, $tag, $spiel, $film, $quote, $happy1, $happy2, $happy3, $child_dream, $mature_dream, $traits, $more_like]);

    header("Location: view_freundebuch.php");
    exit;
}
?>
