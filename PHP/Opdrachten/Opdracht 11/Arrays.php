<?php
    echo "<br>---- Opgave 5";
    $producten = array("Boeken","CD's","Smartphones","DVD's");
    echo "<br>---- Opgave 6: print_r()";
    print_r($producten);
    echo "<br>---- Opgave 7: var_dump(): ";
    var_dump($producten);
    echo "<br>---- Opgave 8: ";
    unset($producten[2]);
    print_r($producten);
    echo "<br>---- Opgave 9: ";
    $gevonden = array_key_exists(1,$producten);
    echo "Key 1gevonden?: ".$gevonden;
    echo "<br>---- Opgave 10: ";
    $gevonden = in_array('Boeken', $producten);
    echo "Boeken gevonden?: ". $gevonden;
    echo "<br>---- Opgave 11: ";
    $index = array_search("CD's", $producten);
    echo "De index van CD's is: " . $index;
?>