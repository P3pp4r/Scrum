<?php
    $playlist = array (
        array("genre"=> "Hiphop", "auteur"=> "John Williams",
            "titel" => "My Girl"),
        array("genre"=> "Jazz", "auteur"=> "John Coltrane",
            "titel" => "New York"),
        array("genre"=> "Hiphop", "auteur"=> "Shakira",
            "titel" => "Obsession")
    );
    function printArray($item, $key){
    echo "$key" . " | " . "<i> $item </i>";
    echo "<br>";
    }

    $playlist2 = array (
        array("genre"=> "Latin", "auteur"=> "Caetano Veloso",
            "titel" => "Cafe Atlantico")
    );
    $playlist = array_merge($playlist, $playlist2);
    array_walk_recursive($playlist, "printArray");
    echo "Track 0: " . $playlist[0]["genre"]."|".$playlist[0]["auteur"]."|".$playlist[0]["titel"]."<br>";
echo "Track 1: " . $playlist[1]["genre"]."|".$playlist[1]["auteur"]."|".$playlist[1]["titel"]."<br>";
echo "Track 2: " . $playlist[2]["genre"]."|".$playlist[2]["auteur"]."|".$playlist[2]["titel"]."<br>";
echo "Track 3: " . $playlist[3]["genre"]."|".$playlist[3]["auteur"]."|".$playlist[3]["titel"];
?>