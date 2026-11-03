<?php
    // Variabelen in PHP beginnen altijd met een '$'.
    // Daarachter volgt een naam. Het eerste karakter moet ALTIJD een LETTER zijn:
    $leeftijd = 18;

    // Er zijn verschillende datatypen. Dit zijn soorten data die je kunt opslaan. Denk aan tekst, getallen, etc.
    // We Zullen nu de belangrijkste bespreken:
        # String: alle letters/tekst. Waarde staat tussen "":
        $naam = "Piet";
        # Integer: alle hele getallen (1, 2, 3...):
        $leeftijd = 18;
        # Float: alle kommagetallen. Gebruik ipv een komma een punt:
        $bedrag = 15.75;
        # Boolean: true of false. Dit is ook tekst, maar omdat er maar 2 mogelijk waardes zijn staan deze NIET tussen "":
        $jarig = false;
    
    // Als je namen gaat bedenken voor je variabelen, bedenk dan zinnige namen die representeren wat de variabelen opslaat.
    // Houd ook een vaste opmaak aan tussen alle variabelen. Een paar voorbeelden:
        # Hoofdletters voor nieuwe woorden:
            $nogNietAangemeld = true;
        # '_' tussen elk nieuw woord:
            $nog_niet_aangemeld = true;
    // Zorg er wel voor dat je opmaak consistent blijft. Dit ziet er netter uit.

    // Je kunt variabelen direct gebruiken in echo:
    echo $naam;
?>