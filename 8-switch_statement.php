<?php
    // Met een switch-statement kun je meerdere waardes van een variabelen voorspellen en apart van de waarde code schrijven:
    $seizoen = "Zomer";                     // Maak een nieuwe variabele
    switch($seizoen) {                      // Geef switch met de variabele/waarde
        case "Zomer":                       // Elke mogelijke optie wordt aangegeven met case en dan de waarde van de optie, met daarna een ":"
            echo "Het zonnetje schijnt!";   // Voer dan deze echo uit
            break;                          // Geeft het einde van deze optie aan
        case "Herfst":
            echo "De blaadjes worden oranje.";
            break;
        case "Winter":
            echo "Het is koud.";
            break;
        case "Lente":
            echo "Het wordt eindelijk weer wat warmer!";
            break;
        default:                            // Je kunt met "default:" een case toevoegen die wordt gebruikt als geen enkele andere optie is gebruikt
            echo "Dit is geen seizoen.";
    }
    # Resultaat: "Het zonnetje schijnt!"
?>