<?php
    //De array boeken met daarin 3 arrays. deze twee dimensionale array gaan we met een functie oproepen.
    $boeken = array(
        array("titel"=> "Stoner", "auteur"=> "John Williams",
            "genre" => "Fictie", "prijs"=> 19.99),
        array("titel"=> "De cirkel", "auteur"=> "Dave Eggers",
            "genre" => "Fictie", "prijs"=> 22.50),
        array("titel"=> "Rayuela", "auteur"=> "Julio Cortazar",
            "genre" => "Fictie", "prijs"=> 25.50)
    );
    //Deze functie zorgt ervoor dat als de $key "prijs" is dat die wordt afgedrukt met de desbetreffende inhoud ($item).
    function prijsLijst($item, $key){
        //De if statement die de prijs filtert uit de tweedimensionale array.
        if($key == "prijs") {
            echo $key . ": " . "<i> $item </i>";
            echo "<br>";
        }
    }
    /*Hier de array_walk deze functie loopt alle 3 arrays binnen de array boeken af op basis van de functie prijsLijst.
    De functie prijsLijst zorgt ervoor dat alleen de prijs uit de 3 arrays wordt gehaald en deze worden hier dus met
    array_walk afgedrukt.*/
    array_walk($boeken[0], "prijsLijst");
    array_walk($boeken[1], "prijsLijst");
    array_walk($boeken[2], "prijsLijst");
?>