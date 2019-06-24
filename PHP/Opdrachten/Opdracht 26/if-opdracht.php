<?php
$gewerkteuren = 45;
$uurtarief = 15.00;
$bonus = 100.00;
$bruto = $gewerkteuren * $uurtarief;
    if($gewerkteuren <= 40){
        echo "Uw basissalaris is: € ".$bruto;
        echo "<br>Uw belasting is: € ". 0.40*$bruto;
        echo "<br>Uw nettobedrag is: € ". 0.60*$bruto;
    }
    elseif($gewerkteuren > 40){
        echo "Uw basissalaris is: € ".$bruto;
        echo "<br>Uw basissalaris plus bonus is: € ".($bruto+$bonus);
        echo "<br>Uw belasting is is: € ". ($bruto+$bonus)*0.45;
    }
?>