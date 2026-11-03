<?php
    // We hebben het al gehad over 4 datatypes. Maar er is er nog eentje: een array.
    // Een array is eigenlijk een variabelen die meerdere waardes op kan slaan, afzonderlijk van elkaar.
    // Een array geef je net zoals een variabele ook gewoon een naam. Alleen de waardes invoeren is wat moeilijker.
    // Waardes worden bij het aangeven tussen blokhaken ([]) gezet, en gescheiden met een komma:
    $schoolsoorten = ["Basisschool", "Middelbare school", "MBO", "HBO", "Universiteit"];
    // De array $schoolsoorten heeft nu 5 waardes. Maar hoe kun je nou bijvoorbeeld alleen "HBO" zien uit te lezen?
    // Daar gebruiken we de index van de array voor. Eerste value is index 0, en elke daarna is +1.
    // "Basisschool" is dus index 0, en HBO uiteindelijk index 3. Deze halen we zo terug:
    echo $schoolsoorten[3];     // Ik zet dus tussen de blokhaken het indexnummer.
        # Resultaat: "HBO"
    // Als ik de waarde van index 3 wil veranderen, kan dat ook op eenzelfde manier:
    $schoolsoorten[3] = "Peuterspeelzaal";
    // Als ik een nieuwe waarde wil toevoegen zonder dat ik moet gaan zoeken welke index het nieuwste is, kan ik dit doen:
    $schoolsoorten[] = "Peuterspeelzaal";
    // Deze nieuwe waarde krijgt dan de eerst volgende beschikbare index (in het voorbeeld index 5).

    // Je hebt ook zogenaamde associatieve arrays.
    // Dit zijn array waarbij je zélf de index kunt bedenken.
    // Dit is handig als je bijvoorbeel de gegevens van een gebruiker wilt opslaan in een array.
    // Als de index GEEN GETAL is, dan gebruik je AANHALINGSTEKEN (dubbele of enkele) voor het noemen van de index:
    $gebruiker = [
        "naam" => "Timo",           // Geef eerst de index aan, opgevolgt door een pijl, daarna de waarde van de index.
        "leeftijd" => 19,
        "woonplaats" => "Apeldoorn"
    ];
    // Als ik nu bijvoorbeeld de naam van de gebruiker wil weten, kan ik deze terughalen door "naam" als index te gebruiken:
    echo $gebruiker["naam"];
        # Resultaat: "Timo"
    // Als je later nog een nieuwe index toe wilt voegen, kan dat uiteraard:
    $gebruiker["geabboneerd"] = true;
    // Er wordt nu een nieuwe waarde met value true en index "geabboneerd" toegevoegd aan de al bestaande array.
?>