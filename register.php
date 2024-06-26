<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verbindung zur Datenbank herstellen
    $servername = "localhost"; // oder IP-Adresse deines Servers
    $dbusername = "root"; // Benutzername für MySQL
    $dbpassword = "Eisbombe11#"; // Passwort für MySQL
    $dbname = "freundebuch"; // Name deiner Datenbank

    // Verbindung aufbauen
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Überprüfen, ob die Verbindung erfolgreich war
    if ($conn->connect_error) {
        die("Verbindung fehlgeschlagen: " . $conn->connect_error);
    }

    // Formulardaten sicher verarbeiten
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    // Debugging: Ausgabe der POST-Daten
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // Überprüfen, ob die Formulardaten gesetzt sind
    if (empty($username) || empty($password) || empty($email)) {
        die("Bitte fülle alle Felder aus. Username: $username, Passwort: $password, Email: $email");
    }

    // Passwort hashen
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL-Befehl zum Einfügen der Daten mit vorbereiteten Anweisungen
    $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sss", $username, $hashed_password, $email);

        if ($stmt->execute()) {
            // Erfolgreiche Registrierung, weiterleiten zur login.php
            $stmt->close();
            $conn->close();
            header("Location: login.php");
            exit();
        } else {
            echo "Fehler beim Einfügen der Daten: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Fehler bei der Vorbereitung der SQL-Anweisung: " . $conn->error;
    }

    // Verbindung schließen
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freundebuch Registrierung</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="register-container">
        <div class="Techstarter"><img src="./img/Screenshot 2024-06-24 150905.png" alt=""></div>
        <h1>Freundebuch</h1>
        <p>Gib hier deine Registrierungsdaten an</p>
        <form id="registerForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required placeholder="Username">
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="E-mail">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Password">
                <span class="toggle-password" onclick="togglePasswordVisibility()">👁️</span>
            </div>
            <div class="input-group">
                <button type="submit" class="btn-registrierung">Registriere dich</button>
            </div>
        </form>
        <div class="footer">
            <p>Du hast bereits einen Account? <a href="login.php" class="login-link">Logge dich ein</a></p>
        </div>
    </div>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }
    </script>
</body>
</html>

