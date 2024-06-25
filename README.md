<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freundebuch - Seite 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <form id="page1Form">
            <div class="section">
                <h1>Das bin ich:</h1>
                <label>Name: <input type="text" name="name"></label><br>
                <label>Alter: <input type="number" name="age"></label><br>
                <label>Beruf: <input type="text" name="job"></label><br>
                <label>Wohnort: <input type="text" name="residence"></label><br>
                <label>Tel.: <input type="tel" name="phone"></label><br>
                <label>E-Mail: <input type="email" name="email"></label><br>
            </div>
            <div class="section">
                <h2>Das mag ich besonders:</h2>
                <label><input type="checkbox" name="likes" value="tanzen"> Im Regen tanzen</label><br>
                <label><input type="checkbox" name="likes" value="lachen"> Lachen</label><br>
                <label><input type="checkbox" name="likes" value="spieleabend"> Spieleabend</label><br>
                <label><input type="checkbox" name="likes" value="meer"> Das Meer</label><br>
                <label><input type="checkbox" name="likes" value="buch"> Ein gutes Buch lesen</label><br>
                <label><input type="checkbox" name="likes" value="schlafen"> Lange schlafen</label><br>
                <label><input type="checkbox" name="likes" value="sport"> Sport</label><br>
                <label><input type="checkbox" name="likes" value="spaziergänge"> Waldspaziergänge</label><br>
                <label><input type="checkbox" name="likes" value="reisen"> Reisen</label><br>
                <label><input type="checkbox" name="likes" value="familie"> Familie</label><br>
                <label><input type="checkbox" name="likes" value="tiere"> Tiere</label><br>
            </div>
            <div class="section">
                <h2>Mein Lieblingszitat:</h2>
                <textarea name="quote" rows="4" cols="50"></textarea>
            </div>
            <button type="button" onclick="nextPage()">Weiter zur Seite 2</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>

