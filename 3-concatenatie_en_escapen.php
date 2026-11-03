<?php
    // Het kan zijn dat je in één echo meerdere variabelen wilt echo-en, ofdat je er nog tekst aan toe wilt voegen.
    // Dit kun je doen door middel van concatenatie. Als je letterlek tekst aan elkaar wilt plakken, zet je overal een punt tussen:
    $naam = "Piet";
    $leeftijd = "21";
    echo $naam . " is " . $leeftijd . " jaar oud.";
        # Resultaat: "Piet is 21 jaar oud."
    
    // Het kan zijn dat je in een echo meerdere waardes wilt optellen. Dan gebruik je een plusteken:
    $product1 = 4.50;
    $product2 = 2.75;
    $product3 = 6.35;
    echo "Het totaalbedrag wordt " . $product1 + $product2 + $product3;
        # Resultaat: "Het totaalbedrag wordt 13.6"
    
    // Het kan zijn dat je in je tekst bijvoorbeeld aanhalingstekens wilt gebruiken. 
    // Dan moet je escapen, zodat PHP de " als tekst leest, en niet als daadwerkelijk deel van de echo-statement.
    // Dit doe je door een backslash (\) voor de aanhalingstekens te zetten die je wilt weglaten uit de PHP-code:
    echo "\"Dat is erg duur\", zei Klaas.";
        # Resultaat: ""Dat is erg duur", zei Klaas."
?>