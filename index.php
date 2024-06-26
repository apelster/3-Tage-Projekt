<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freundebuch - Einträge</title>
    <link rel="stylesheet" href="Erste_Seite.css">
</head>
<body>
    <div class="container">
        <h1>Gespeicherte Einträge</h1>
        <?php
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

        $sql = "SELECT id, name, photo FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='entry'>";
                if (!empty($row['photo'])) {
                    echo "<img src='" . $row['photo'] . "' alt='Foto von " . $row['name'] . "' style='width:100px;height:auto;'><br>";
                }
                echo "<a href='details.php?id=" . $row["id"] . "'>" . $row["name"] . "</a>";
                echo "</div>";
            }
        } else {
            echo "Keine Einträge gefunden";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
