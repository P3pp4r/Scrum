<?php
    /*De functie brief drukt een brief af deze brief moeten we <<abonnee>> en <<bedrag-met-korting>> vervangen met een
    Naam en een bedrag.*/
    $brief="
    Beste <b><<abonnee>></b><br>
    U heeft het laatste nummer van ons magazine ontvangen.<br>
    Omdat we u heel graag als abonnee willen behouden, bieden we 
    u een aantrekkelijke en exclusieve korting: <br>
    U betaalt <b><<bedrag-met-korting>></b>
    in plaats van 65 euro.<br><br>
    <i>Profiteer nu van deze aanbieding!</i><br><br>
    Met vriendelijke groet,<br>
    Pepijn Hones<br>
    Hoofdredacteur<br>";

    //Deze echo zorgt ervoor dat de tekst hierboven wordt aangepast en daarna wordt gedisplayed.
    echo str_replace(array("<<abonnee>>","<<bedrag-met-korting>>"),array("Kees Kaas Knikkerbaas","50"), "$brief");
    ?>