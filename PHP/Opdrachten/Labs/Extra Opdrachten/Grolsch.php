<?php
    $leeftijd = rand(10,30);
    echo "Uw leeftijd is:  ".$leeftijd;
    if($leeftijd >= 18 ){
        echo"<br>";
       echo "<a href= https://www.grolsch.nl/agegate?returnUri=/>Naar de Grolsch website.</a>";
    }
    else{
        echo"<br>";
        echo "<a href= https://www.alcoholinfo.nl/publiek>Alcohol drinken mag je niet lees hier meer.</a>";
    }
?>