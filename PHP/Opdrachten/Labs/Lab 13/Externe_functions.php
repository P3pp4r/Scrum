<?php
function korting(){
    $korting = 0;
    if( isset($_POST['student'])) $korting = $korting + 15;
    if( isset($_POST['klant'])) $korting = $korting + 10;
    return($korting);
}
function serviceKosten($betalingswijze){
    if(isset($_POST["submit"]))
    {
        $betaling = isset($_POST["betaling"]);
        switch($_POST['betaling'])
        {
            case "vi":
                $betalingswijze = 2;
                return($betalingswijze);
            case "mc":
                $betalingswijze = 2.5;
                return($betalingswijze);
            case "pp":
                $betalingswijze = 1.5;
                return($betalingswijze);
            case "ideal":
                $betalingswijze = 1;
                return($betalingswijze);
            default :
                echo "<p>U heeft geen betaalwijze gekozen</p>";
        }
    }
}
?>

