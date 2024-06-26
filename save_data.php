<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "Eisbombe11#";
$dbname = "freundebuch";

// Verbindung herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Verbindung prüfen
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Datei hochladen
$photo = '';
if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $photo = 'uploads/' . basename($_FILES['photo']['name']);
    if (!move_uploaded_file($_FILES['photo']['tmp_name'], $photo)) {
        die("Fehler beim Hochladen der Datei.");
    }
}

// Eingehende Formulardaten verarbeiten
$name = $_POST['name'];
$age = $_POST['age'];
$job = $_POST['job'];
$residence = $_POST['residence'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$likes = isset($_POST['likes']) && is_array($_POST['likes']) ? implode(",", $_POST['likes']) : '';
$quote = $_POST['quote'];

// Daten in die Datenbank einfügen
$stmt = $conn->prepare("INSERT INTO users (name, age, job, residence, phone, email, likes, quote, photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
    die("Fehler bei der Vorbereitung der Abfrage: " . $conn->error);
}
$stmt->bind_param("sisssssss", $name, $age, $job, $residence, $phone, $email, $likes, $quote, $photo);

if ($stmt->execute()) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error", "message" => $stmt->error]);
}

$stmt->close();
$conn->close();
?>
