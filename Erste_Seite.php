<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freundebuch - Seite 1</title>
    <link rel="stylesheet" href="Erste_Seite.css">
</head>
<body>
    <div class="container">
        <div id="margin">
            <div id="zeit">
                <label for="date">Datum:</label>
                <input id="date" type="date" name="date">
            </div>

            <form action="submit_form.php" method="POST" id="page1Form">
                <div class="section1">
                    <h1 id="Überschrift">Das bin ich:</h1>                
                    <input type="file">

                    <label class="inputVerschieben">Name: <input class="mittig" type="text" name="name" placeholder="Gebe deinen Namen ein" required></label><br>
                    <label class="inputVerschieben">Alter: <input class="mittig" type="number" name="age" placeholder="Gebe dein Alter ein" required></label><br>
                    <label class="inputVerschieben">Beruf: <input class="mittig" type="text" name="job" placeholder="Gebe deinen Beruf ein" required></label><br>
                    <label class="inputVerschieben">Wohnort: <input class="mittig" type="text" name="residence" placeholder="Gebe deinen Wohnort ein"></label><br>
                    <label class="inputVerschieben">Tel.: <input class="mittig" type="tel" name="phone" placeholder="Gebe deine Nummer ein"></label><br>
                    <label class="inputVerschieben">E-Mail: <input class="mittig" type="email" name="email" placeholder="Gebe deine E-Mail ein"></label><br>
                </div>
                <div class="section2">
                    <label for="essen">Mein Lieblingsessen: <input type="text" name="essen" id="essen"></label><br>
                    <label for="tier">Mein Lieblingstier: <input type="text" name="tier" id="tier"></label><br>
                    <label for="land">Mein Lieblingsland: <input type="text" name="land" id="land"></label><br>
                    <label for="Team">Mein Lieblingsteam: <input type="text" name="Team" id="Team"></label><br>
                    <label for="farbe">Mein Lieblingsfarbe: <input type="text" name="farbe" id="farbe"></label><br>
                    <label for="tag">Mein Lieblingstag: <input type="text" name="tag" id="tag"></label><br>
                    <label for="spiel">Mein Lieblingspiel: <input type="text" name="spiel" id="spiel"></label><br>
                    <label for="film">Mein Lieblingsfilm: <input type="text" name="film" id="film"></label>
                </div>
                <div class="section">
                    <h2>Mein Lieblingszitat:</h2>
                    <textarea id="textarea2" name="quote" rows="4" cols="50" placeholder="Gib dein Lieblingszitat ein"></textarea>
                </div>
                <div class="section5">
                    <h1>Drei Dinge, die mich glücklich machen:</h1>
                    <label>1. <input class="input" id="verschieben" type="text" name="happy1" size="50" placeholder="Trage hier was ein"></label><br>
                    <label>2. <input class="input" type="text" name="happy2" size="50" placeholder="Trage hier was ein"></label><br>
                    <label>3. <input class="input" type="text" name="happy3" size="50" placeholder="Trage hier was ein"></label><br>
                </div>
                <div class="section4">
                    <h1>Das wollte ich als Kind werden:</h1><br>
                    <p id="obererPfeil">&darr;</p>
                    <textarea name="childDream" id="childDream" rows="2" cols="50"></textarea>
                    <h1>und das mache ich heute</h1>
                    <p id="unterePfeil">&uarr;</p>
                    <textarea name="matureDream" id="matureDream" rows="2" cols="50"></textarea>
                </div>
                <div class="container">
                    <div class="section6">
                        <h2>Ich bin ein:</h2>
                        <label><input type="checkbox" name="traits[]" value="überflieger"> ÜBERFLIEGER</label><br>
                        <label><input type="checkbox" name="traits[]" value="organisationstalent"> ORGANISATIONSTALENT</label><br>
                        <label><input type="checkbox" name="traits[]" value="gerechtigkeitsfanat"> GERECHTIGKEITSFANAT</label><br>
                        <label><input type="checkbox" name="traits[]" value="wildfang"> WILDFANG</label><br>
                        <label><input type="checkbox" name="traits[]" value="improvisationstalent"> IMPROVISATIONSTALENT</label><br>
                        <label><input type="checkbox" name="traits[]" value="grummelbär"> GRUMMELBÄR</label><br>
                        <label><input type="checkbox" name="traits[]" value="glückskind"> GLÜCKSKIND</label><br>
                        <label><input type="checkbox" name="traits[]" value="schlechter verlierer"> SCHLECHTER VERLIERER</label><br>
                        <label><input type="checkbox" name="traits[]" value="weltenbummler"> WELTENBUMMLER</label><br>
                        <label><input type="checkbox" name="traits[]" value="kummerkasten"> KUMMERKASTEN</label><br>
                        <label><input type="checkbox" name="traits[]" value="treuer freund"> TREUER FREUND</label><br>
                        <label><input type="checkbox" name="traits[]" value="komplimente-verteiler"> KOMPLIMENTE-VERTEILER</label><br>
                        <label><input type="checkbox" name="traits[]" value="komiker"> KOMIKER</label><br>
                        <label><input type="checkbox" name="traits[]" value="problemlöser"> PROBLEMLÖSER</label><br>
                    </div>
                    <div class="section7">
                        <h2>Ich bin eher ein:</h2>
                        <p>BITTE ANKREUZEN</p>
                        <label><input class="checkbox-right" type="checkbox" name="moreLike[]" value="film"> FILM</label><br>
                        <label><input class="checkbox-right" type="checkbox" name="moreLike[]" value="serie"> SERIE</label><br>
                        <label><input class="checkbox-right" type="checkbox" name="moreLike[]" value="kochen"> KOCHEN</label><br>
                        <label><input class="checkbox-right" type="checkbox" name="moreLike[]" value="auftauen"> AUFTAUEN</label><br>
                        <label><input class="checkbox-right" type="checkbox" name="moreLike[]" value="ordentlich"> ORDENTLICH</label><br>
                        <label><input class="checkbox-right" type="checkbox" name="moreLike[]" value="chaotisch"> CHAOTISCH</label><br>
                        <label><input class="checkbox-right" type="checkbox" name="moreLike[]" value="jäger"> JÄGER</label><br>
                        <label><input class="checkbox-right" type="checkbox" name="moreLike[]" value="sammler"> SAMMLER</label><br>
                    </div>
                    <div class="section8">
                        <label><input class="checkbox-left" type="checkbox" name="moreLike[]" value="katze"> KATZE</label><br>
                        <label><input class="checkbox-left" type="checkbox" name="moreLike[]" value="hund"> HUND</label><br>
                        <label><input class="checkbox-left" type="checkbox" name="moreLike[]" value="herz"> HERZ</label><br>
                        <label><input class="checkbox-left" type="checkbox" name="moreLike[]" value="kopf"> KOPF</label><br>
                        <label><input class="checkbox-left" type="checkbox" name="moreLike[]" value="optimist"> OPTIMIST</label><br>
                        <label><input class="checkbox-left" type="checkbox" name="moreLike[]" value="pessimist"> PESSIMIST</label><br>
                        <label><input class="checkbox-left" type="checkbox" name="moreLike[]" value="geduldig"> GEDULDIG</label><br>
                        <label><input class="checkbox-left" type="checkbox" name="moreLike[]" value="ungeduldig"> UNGEDULDIG</label><br>
                    </div>
                </div>
                <button id="submitBtn" type="submit">Abschicken</button><br>
            </form>
        </div>
    </div>
    <script src="projekt.js"></script>
</body>
</html>
