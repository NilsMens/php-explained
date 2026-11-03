<?php
    // We kennen nu de for-loop en de count()-functie. Hoe kunnen we deze combineren?
    // Heel simpel: we kunnen alle waardes uit een array weergeven op het scherm!
    // We maken even een array aan voor ons voorbeeld:
    $vakken = ["Informatica", "Wiskunde B", "Natuurkunde", "Scheikunde", "Biologie"];
    // Als we deze waardes willen laten zien, dan hebben we 5 echo-statements nodig: voor index 0 t/m 4.
    // Dit kunnen we samenvatten in de volgende for-loop:
    for($i = 0; $i < count($vakken); $i++) {    // We beginnen bij 0, en ons eindpunten is 4. count($vakken) geeft 5, dus alles onder de 5, in dit geval dus t/m 4.
        echo $vakken[$i] . "<br>";              // Elke index gaat hier lang. Index 0, 1, 2, 3 en dan 4.
    }
        # Resultaat: "Informatica Wiskunde B Natuurkunde Scheikunde Biologie" (op andere regels)
?>