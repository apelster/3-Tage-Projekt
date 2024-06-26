<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freundebuch - Details</title>
    <link rel="stylesheet" href="Erste_Seite.css">
</head>
<body>
    <div class="container">
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

        $id = intval($_GET['id']);
        $sql = "SELECT * FROM users WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<div class='section1'>";
            echo "<h1 style='text-align: center;'>Das bin ich:</h1>";
            if (!empty($row['photo'])) {
                echo "<img src='" . $row['photo'] . "' alt='Foto von " . $row['name'] . "' style='width:200px;height:auto;'><br>";
            }
            echo "<p>Name: " . $row["name"] . "</p>";
            echo "<p>Alter: " . $row["age"] . "</p>";
            echo "<p>Beruf: " . $row["job"] . "</p>";
            echo "<p>Wohnort: " . $row["residence"] . "</p>";
            echo "<p>Tel.: " . $row["phone"] . "</p>";
            echo "<p>E-Mail: " . $row["email"] . "</p>";
            echo "</div>";

            echo "<div class='section2'>";
            echo "<h2>Das mag ich besonders:</h2>";
            $likes = explode(",", $row["likes"]);
            foreach ($likes as $like) {
                echo "<p>" . htmlspecialchars($like) . "</p>";
            }
            echo "</div>";

            echo "<div class='section'>";
            echo "<h2>Mein Lieblingszitat:</h2>";
            echo "<p>" . $row["quote"] . "</p>";
            echo "</div>";
        } else {
            echo "<p>Eintrag nicht gefunden</p>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
