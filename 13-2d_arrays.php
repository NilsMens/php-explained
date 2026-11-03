<?php
    // Dit stukje is best ingewikkeld. Het komt er op neer: je kunt arrays oneindig blijven array-en.
    // Let me explain. Net hebben we arrays gezien met één setje blokhaken. Maar we kunnen een extra setje toevoegen.
    // Stel we willen een array maken met meerdere gebruikers, en van al deze gebruikers weten we de naam, leeftijd en adres:
    $gebruiker1 = [
        "naam" => "Mick",
        "leeftijd" => 36,
        "woonplaats" => "Haarlem"
    ];
    $gebruiker2 = [
        "naam" => "Milou",
        "leeftijd" => 45,
        "woonplaats" => "Groningen"
    ];
    $gebruiker3 = [
        "naam" => "Astrid",
        "leeftijd" => 27,
        "woonplaats" => "Breda"
    ];
    // Nu kunnen we dit combineren in één array:
    $gebruikers = [$gebruiker1, $gebruiker2, $gebruiker3];

    // Stel we willen nu de naam van gebruiker 2 weten. We weten dat $gebruiker2 index 1 heeft in de array $gebruikers. We weten dat de index vervolgens "naam" is:
    echo $gebruikers[1]["naam"];
        # Resultaat: "Milou"

    // Je kunt dit trucje nog zovaak herhalen als je wilt. Je kunt $gebruikers ook weer in een array zetten, en zo voort.
?>  