<?php
    // Dit is als een for-loop ook een loop gericht op herhaling, maar net wat anders.
    // Zolang de statement in de haakjes waar is, zal de code uitgevoerd worden:
    $x = 5;                 // Geef eerste waarde van $x
    while ($x < 20) {       // Geef statement (in dit geval zolang x is kleiner dan 20)
        echo $x . "<br>";   // Geef waarde op scherm weer
        $x = $x + 3;        // Tel 3 bij huidige x op
    }
        # Resultaat: "5 8 11 14 17" (op aparte regels)
?>