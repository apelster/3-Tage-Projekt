<?php
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
?>
