<?php
    // Nu wordt het eindelijk wat leuker ;)
    // Functies kun je gebruiken om een stukje code een keer te schrijven een vervolgens meerdere keren uit te voeren.
    // Een functie maken is niet zo moeilijk:
    function functieNaam() {
        # Code die de functie uitvoert.
    }

    // Om een functie vervolgens aan te roepen, gebruik je de naam en "()":
    functieNaam();

    // Een voorbeeldje. Je wilt tekst op het scherm zetten:
    function maakTekst() {          // Maak een functie aan
        echo "Dit is tekst.<br>";   // Geef wat die functie moet doen
    }
    functieNaam();                  // Roep de functie aan
    functieNaam();
    functieNaam();
        # Resultaat: "Dit is tekst. Dit is tekst. Dit is tekst." (op aparte regels)
    
    // Het kan ook zijn dat je een waarde mee wilt geven aan de functie. Dat de functie daar iets mee met doen.
    // Een voorbeeldje, we willen twee getallen vermenigvuldigen en er 3 vanaf halen. Dit getalen moeten we echo-en:
    function toverMetGetal($getal1, $getal2) {  // Binnen de haakjes geef je de naam van de variabelen die een functie kent. Elke nieuwe variabele wordt met een komma gescheiden.
        $totaal = $getal1 * $getal2 - 3;        // Bereken het totaal
        echo $totaal;                           // Laat het getal zien
    }
    toverMetGetal(4, 7);                        // Roep functie aan. Je ziet dat er ook twee getallen meegegeven worden. Er zijn ook twee onbekende is de functie. 
                                                // $getal1 zou 4 worden, $getal 2 logischerwijs 7.
        # Resultaat: "25"
    
    // Het kan ook zijn dat je een waarde terug wilt van de functie. Dit kun je doen door gebruik je te maken van return.
    // We willen een groet maken met een functie. Deze groet wordt door de functie teruggegeven, en kunnen we vervolgens echo-en:
    function maakGroet($naam) {             // Maak de functie
        $groet = "Hallo, " . $naam . "!";   // **LET OP**, om tekst aan elkaar te plakken gebruiken we een punt!
        return $groet;                      // We geven $groet terug
    }
    $groet = maakGroet("Kees");             // Onze variabele $groet wordt hier wat de functie teruggeeft via return.
    echo $groet;
        # Resultaat: "Hallo, Kees!";
?>