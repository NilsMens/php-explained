<?php
    // Een if-statement kan controleren of de gegeven statement waar is. Een voorbeeldje:
        # We gaan controleren of $x en $y gelijk zijn qua waarde:
    $x = 5;
    $y = 8;
    if ($x == $y) {     // We kijken of $x gelijk is qua waarde aan $y
        echo "Waardes gelijk!";
    } else {            // Als de statement niet waar is, gaat ie over op alles binnen else
        echo "Waardes ongelijk.";
    }
        # Resultaat: "Waardes ongelijk."

    // Je kunt meerdere if-else-statements aan elkaar 'plakken':
        # We gaan controleren of $x gelijk is aan $y qua waarde. Als dit niet zo is, dan kijken we of $x groter is dan $y:
    $x = 10;
    $y = 3;
    if ($x == $y) {         // We kijken dus eerst of $x is gelijk aan $y qua waarde
        echo "Waardes gelijk!";
    } else if ($x > $y) {   // Zijn ze niet gelijk, dan kijken we of $x groter dan $y
        echo "x is groter dan y!";
    } else {                // Is alles niet waar, dan voeren we als laatste nog een stukje code uit
        echo "x is kleiner dan y.";
    }
        # Resultaat: "x is groter dan y!"
?>  