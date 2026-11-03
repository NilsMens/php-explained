<?php
    // Als je een stukje code meerdere keren uit wilt voeren, dan kun je dat met een for-statement doen.
    // Deze bestaat uit 3 delen: initialisatie, vergelijken, ophogen/verlagen. Dat gebeurt allemaal met een zelfgekozen variabelen:
    for ($i = 0; $i < 5; $i++) {    // Initialiseer je variabele met startwaarde, zeg wanneer deze door moet gaan, en tel 1 op bij variabele als deze door moet gaan.
        echo $i . "<br>";           // Zolang de for-statement loopt, voer elke keer dit uit.
    }
        # Resultaat: "0 1 2 3 4" (op aparte regels)

    // Nog een voorbeeldje, je wilt aftellen van 10 naar 5:
    for ($i = 10; $i >= 5; $i--) {  // Je begint bij 10, zolang de waarde gelijk of groter is dan 10 ga je door, steeds met 1 verminderen.
        echo $i . "<br>";           // Geef ook weer de waarde steeds weer.
    }
        # Resultaat: "10 9 8 7 6 5" (op aparte regels)
?>