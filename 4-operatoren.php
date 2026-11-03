<?php
    // Als je wiskunde bewerkingen wilt doen met variabelen, dan kan dat.
    // We nemen onderstaand $x en $y als getallen, en gaan de belangrijkste operaties ermee door:
    $x = 15;
    $y = 8;

        // Optellen:
        $totaal = $x + $y;
            # Geeft 15 + 8 = 23
        
        // Aftrekken:
        $totaal = $x - $y;
            # Geeft 15 - 8 = 7
        
        // Vermenigvuldigen:
        $totaal = $x * $y;
            # Geeft 15 * 8 = 120
        
        // Delen:
        $totaal = $x / $y;
            # Geeft 15 / 8 = 1.875
        
        // Module van (wat overblijft na delen, rest eigenlijk)
        $totaal = $x % $y;
            # Geeft 15 % 8 = 7
        
        // Machten:
        $totaal = $x^$y
            # Geeft 15 tot de macht 8, of 15^8 = 2562890625

    // We hebben ook nog vergelijkingsoperatoren. Hier kun je twee waardes met elkaar vergelijken.
    // Deze gaan we zometeen ook daadwerkelijk toepassen:
        # $x == $y  --> Als de waardes van x en y gelijk zijn
        # $x != $y  --> Als de waardes van x en y niet gelijk zijn
        # x === y   --> Als de waardes van x en y gelijk zijn, en ze dezelfde datatype hebben (int, string)
        # x > y     --> Als x groter dan y
        # x < y     --> Als x kleiner dan y 
        # x >= y    --> Als x groter of gelijk aan y
        # x <= y    --> Als x kleiner of gelijk aan y

    // We hebben ook nog logische operatoren, waarin we bijvoorbeeld booleans kunnen vergelijken:
        # x && y    --> Als x en y waar zijn
        # x || y    --> Als tenminste x of y waar is
        # !x        --> Als x niet waar is
?>