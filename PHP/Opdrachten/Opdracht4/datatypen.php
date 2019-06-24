<?php
    $naam = "Pepijn";
    $straat = "Schatbergstraat 70";
    $woonplaats = "Lichtenvoorde";
    $naw = $naam . " " . $straat . " " . $woonplaats;
    echo "Gegevens: $naw";
    echo <<<TEKST
    <br>Salarisspecificatie van $naam: 2000 euro
    <br>Maand: November
    <br>Jaar: 2020
TEKST;
    echo "<br>";
    $dollars = 999.99;
    $koers = 1.2;
    $euros = $dollars * $koers;
    $euros = round($euros,2);
    echo "Bedrag: $euros";

?>