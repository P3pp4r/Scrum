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
    echo "<br>---- Opgave 12: ";
    array_push($producten, "Laptops", "Tablets");
    print_r($producten);
    echo "<br>---- Opgave 13: ";
    $laatsteElement = array_pop($producten);
    echo $laatsteElement . " is verwijderd: ";
    print_r($producten);
    echo "<br>---- Opgave 14: ";
    $eersteElement = array_shift($producten);
    echo $eersteElement . 'verwijderd: ';
    print_r($producten);
    echo "<br>---- Opgave 15: ";
    array_unshift($producten, "TV's", "Stereo's");
    echo "TV's en Stereo's ";
    print_r($producten);
    echo "<br>---- Opgave 16: ";
    $random_keys = array_rand($producten, 2);
    echo "<br />Eerste random product: ".
        $producten[$random_keys[0]];
    echo "<br />Tweede random product: ".
        $producten[$random_keys[1]];
    function printArray($item, $key){
        echo "<br>$key" . ": " . "<i> $item </i>";
    }
    echo "<br>---- Opgave 17: Producten array doorlopen: ";
    array_walk($producten, 'printArray');
    $getallen = ["nul", "een","twee","drie","vier","vijf"];
    $tools = ["boek", "pen", "laptop", "potlood"];
    $tekst1 = implode("*", $getallen);
    echo "<br>---- Opgave 18: Array getallen in tekst1 converteren: $tekst1";
    $tekst2 = implode("|", $tools);
    echo "<br>---- Opgave 18: Array tools in tekst2 converteren: $tekst2";
?>