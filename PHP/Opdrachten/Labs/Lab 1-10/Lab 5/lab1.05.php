<?php
    $cijfers = array("een","twee",3,"vier");
    array_push($cijfers,5);
    echo"<br>Stap 3. ";
    print_r($cijfers);

    echo"<br>Stap 4. Datatype is: ";
    echo gettype($cijfers[4]);

    array_pop($cijfers);
    echo"<br>Stap 6. ";
    print_r($cijfers);

    array_unshift($cijfers, 'nul');
    echo"<br>Stap 8. ";
    print_r($cijfers);

    array_shift($cijfers);
    echo"<br>Stap 10. Datatype is: ";
    gettype($cijfers[0]);
    echo"<br>";
    print_r($cijfers);

    unset($cijfers[1]);
    echo"<br>Stap 12. ";
    print_r($cijfers);

    unset($cijfers[1]);
    echo"<br>Stap 14.";
    print_r($cijfers);

    unset($cijfers[3]);
    echo "<br>Stap 16.";
    print_r($cijfers);

?>