<?php
// Datenbankverbindung herstellen (Beispiel)
$servername = "localhost";
$username = "root"; // Ihr Datenbank-Benutzername
$password = "Eisbombe11#"; // Ihr Datenbank-Passwort
$dbname = "freundebuch"; // Name Ihrer Datenbank

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen der Verbindung
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Daten aus dem Formular abrufen
$name = $_POST['name'];
$age = $_POST['age'];
$job = $_POST['job'];
$residence = $_POST['residence'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$essen = $_POST['essen'];
$tier = $_POST['tier'];
$land = $_POST['land'];
$Team = $_POST['Team'];
$farbe = $_POST['farbe'];
$tag = $_POST['tag'];
$spiel = $_POST['spiel'];
$quote = $_POST['quote'];
$happy1 = $_POST['happy1'];
$happy2 = $_POST['happy2'];
$happy3 = $_POST['happy3'];
$childDream = $_POST['childDream'];
$matureDream = $_POST['matureDream'];
$traits = implode(', ', $_POST['traits']); // Um Checkbox-Array in eine Zeichenfolge zu konvertieren
$moreLike = implode(', ', $_POST['moreLike']); // Um Checkbox-Array in eine Zeichenfolge zu konvertieren

// SQL-Query zum Einfügen der Daten in die Datenbank
$sql = "INSERT INTO user_details (name, age, job, residence, phone, email, essen, tier, land, Team, farbe, tag, spiel, quote, happy1, happy2, happy3, childDream, matureDream, traits, moreLike) 
        VALUES ('$name', '$age', '$job', '$residence', '$phone', '$email', '$essen', '$tier', '$land', '$Team', '$farbe', '$tag', '$spiel', '$quote', '$happy1', '$happy2', '$happy3', '$childDream', '$matureDream', '$traits', '$moreLike')";

if ($conn->query($sql) === TRUE) {
    echo "Daten erfolgreich gespeichert!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
