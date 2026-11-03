<?php
    // Er zijn vaste functies door PHP toegevoegd die je kunt gebruiker voor je array.
    // We maken even een array aan:
    $kazen = ["Goudse kaas", "Edammer kaas", "Leidse kaas", "Maasdammer"];

    // Stel, je wilt weten hoeveel verschillende indexen er in een array zitten, dan gebruik je de functie count():
    $indexen = count($kazen);
    echo $indexen;
        # Resultaat: "4"
    
    // Stel je wilt de array omdraaien (laatste index wordt eerste, en vice versa), dan gebruik je array_reverse(). Let wel op, je maakt een nieuwe array hiervoor (of update de bestaande)!
    echo $kazen[1];             
    $kazen = array_reverse($kazen);     // Onze nieuwe/bestaande array is gelijk aan de omgekeerde array $kazen
    echo $kazen[1];
        # Resultaat: "Edammer kaas" en na omdraaien "Leidse kaas"
    
    // We kunnen ook getallen automatisch sorteren van hoog naar laag. We moeten dan eerst even een nieuwe array aanmaken:
    $getallen = [5, 19, 9, 10, 3];

    // Oké, we willen van laag naar hoog sorteren. We gebruiken daarvoor sort():
    echo $getallen[0];
    sort($getallen);        // Bij deze functie hoeven we GEEN nieuwe array aan te maken, we updaten slechts automatisch de bestaande.
    echo $getallen[0];
        # Resultaat: "5" en na sorteren "3"
    
    // We kunnen ook andersom sorteren, dus van hoog naar laag. Dan gebruiken we rsort():
    echo $getallen[0];
    rsort($getallen);
    echo $getallen[0];
        # Resultaat: "5" en na sorteren "19"
    
    // We hebben nog een functie die wel eens van pas kan komen: var_dump(). Als je de volledige inhoud van een array wilt zien, kun je deze gebruiken.
    // We geven ons voorbeeld met onze al 2 bestaande arrays:
    var_dump($kazen);
        # Resultaat: "array(4) { [0]=> string(10) "Maasdammer" [1]=> string(11) "Leidse kaas" [2]=> string(12) "Edammer kaas" [3]=> string(11) "Goudse kaas" }"
            // Je ziet dat de array 4 waardes heeft (array(4)), en je ziet telkens welke index bij welke value hoort ([index]=> "value").
    var_dump($getallen);
        # Resultaat: "array(5) { [0]=> int(19) [1]=> int(10) [2]=> int(9) [3]=> int(5) [4]=> int(3) }"
            // Je ziet hier dat er geen string maar int staat. Dat komt omdat de opgeslagen waarde een getal is. Bij $kazen waren dit alleen maar stukjes tekst (string).
?>