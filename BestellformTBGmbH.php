<!DOCTYPE html>
<html>
<head>
<title> Bestellung Tourist Bike GmbH </title>
</head>
<body>
    <h1>Bestellformular E-Bikes</h1>
    <p><h3> 
            <?php
            $datum=time();
            echo 'In Kalenderwoche '.date("W",$datum).' für die kommende Woche';
            ?>
    </h3></p>
    <p>
        <form action="http://192.168.64.2/BestellbestTBGmbH.php" method="post">
            <label for="anrede">Anrede:</label><br>
            <select id="anrede" name="anrede" required><br>
                <option value="no" selected>Keine Angabe</option>
                <option value="frau">Frau</option>
                <option value="herr">Herr</option>
            </select><br><br>
            <label for="vname">Vorname:</label><br>
            <input type="text" id="vname" name="vname" required><br><br>
            <label for="nname">Nachname:</label><br>
            <input type="text" id="nname" name="nname" required><br><br>
            <label for="hotelid">Hotel-ID:</label><br>
            <input type="number" id="hotelid" name="hotelid" min="1000" max="9999" step="1" required><br><br>
            <label for="bikeanz">Anzahl aller vorhandenen E-Bikes im Hotel:</label><br>
            <input type="number" id="bikeanz" name="bikeanz" min="0" max="100" step="1" required><br><br>
            <label for="bikeanzkap">Anzahl der davon reparaturbedürftigen E-Bikes:</label><br>
            <input type="number" id="bikeanzkap" name="bikeanzkap" min="0" max="100" step="1" required><br><br>
            <label for="bikeanzbes">Anzahl der in der nächsten Woche benötigten E-Bikes:</label><br>
            <input type="number" id="bikeanzbes" name="bikeanzbes" min="0" max="100" step="1" required><br><br>
            <label for="check">Hiermit bestätige ich, dass ich die obenstehenden Bestelldaten überprüft habe.</label><br>
            <input type="checkbox" id="check" name="check" required><br><br>
            <input type="submit" value="Bestellung aufgeben.">
         </form>
    </p>
</body>
</html>
