<!DOCTYPE html>
<html>
    <head>
        <title>Bestätigung Ihrer Bestellung</title>
    </head>
    <body>
        <h1>Bestätigung Ihrer Bestellung</h1>
        <?php
            $vorort=$_POST["bikeanz"];
            $kaputt=$_POST["bikeanzkap"];
            $bestellt=$_POST["bikeanzbes"];
            $ergebnis=$bestellt - $vorort + $kaputt;
            if($kaputt<=$vorort)
            {
                $anrede=$_POST["anrede"];
                $weiblich="frau";
                $maennlich="herr";
                if($anrede==$weiblich){
                    echo 'Sehr geehrte Frau '.$_POST["nname"].',';
                } else if ($anrede==$maennlich){
                    echo 'Sehr geehrter Herr '.$_POST["nname"].',';
                } else {
                echo 'Hallo,';
                }
                echo '<br>'.'vielen Dank für Ihre Bestellung!'.'<br>'.'Kommenden Montag werden';
                if ($ergebnis>0) {
                    echo ' wir Ihnen '.$ergebnis.' E-Bike';
                    if($ergebnis!=1) {
                        echo 's';
                    }
                    echo ' liefern sowie '.$kaputt.' E-Bike';
                    if($kaputt!=1) {
                        echo 's';
                    }
                    echo ' zur Reparatur abholen.';
                } else if ($ergebnis<0) {
                    echo ' wir bei Ihnen '.-$ergebnis+$kaputt.' E-Bike';
                    if(-$ergebnis!=1) {
                        echo 's';
                    }
                    echo ' abholen, davon ';
                    if($kaputt!=1) {
                        echo 'sind ';
                    } else if($kaputt=1) {
                        echo 'ist ';
                    }
                    echo $kaputt.' kaputt.';
                } else if ($ergebnis==0){
                    if($kaputt!=0) {
                    echo ' wir bei Ihnen '.$kaputt.' E-Bike';
                    if($kaputt!=1) {
                    echo 's';
                    }
                    echo ' zur Reparatur abholen.';
                    } else {
                        echo ' wir Sie nicht beliefern.';
                    }
                }
            } else {
                header("Location: http://192.168.64.2/BestellfehlerTBGmbH.php");
            }
        ?></p>
    </body>
</html>