<?php
    $getal1 = random_int(0, 1000);
    $getal2 = random_int(0,1000);

    $getal1_is_groter_dan_getal2 = ($getal1 > $getal2 ? 'True' : 'False');
    $getal1_is_kleiner_dan_getal2 = ($getal1 < $getal2 ? 'True' : 'False');
    $getal1_is_gelijk_aan_getal2 = ($getal1 == $getal2 ? 'True' : 'False');
    $getal1_is_exact_gelijk_aan_getal2 = ($getal1 === $getal2 ? 'True' : 'False');
    $getal1_is_groter_of_gelijk_aan_getal2 = ($getal1 >= $getal2 ? 'True' : 'False');
    $getal1_is_kleiner_of_gelijk_aan_getal2 = ($getal1 <= $getal2 ? 'True' : 'False');
    $getal1_is_niet_gelijk_aan_getal2 = ($getal1 != $getal2 ? 'True' : 'False');

    echo"<br>$getal1 > $getal2 = $getal1_is_groter_dan_getal2";
    echo"<br>$getal1 < $getal2 = $getal1_is_kleiner_dan_getal2";
    echo"<br>$getal1 == $getal2 = $getal1_is_gelijk_aan_getal2";
    echo"<br>$getal1 === $getal2 = $getal1_is_exact_gelijk_aan_getal2";
    echo"<br>$getal1 >= $getal2 = $getal1_is_groter_of_gelijk_aan_getal2";
    echo"<br>$getal1 <= $getal2 = $getal1_is_kleiner_of_gelijk_aan_getal2";
    echo"<br>$getal1 != $getal2 = $getal1_is_niet_gelijk_aan_getal2";
    ?>