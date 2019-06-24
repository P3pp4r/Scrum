<?php

if(isset($_POST["submit"]) ){
    $achternaam = $_POST["achternaam"];
    $straat = $_POST["straat"];
    $voornaam = $_POST["voornaam"];
    $postcode = $_POST["postcode"];
    $plaats = $_POST["plaats"];
    $email = $_POST["E-mailadres"];
    $studie = $_POST["studie"];

    if($studie == "ICT"){
        echo "ICT opleidingen zijn vol. Kies een andere opleiding";
    }
    else{
        echo "Uw gegevens zijn: <br>";
        echo "<br>";
        echo "Achternaam: ".$achternaam."<br>";
        echo "Voornaam: ".$voornaam."<br>";
        echo "Straat: ".$straat."<br>";
        echo "Postcode: ".$postcode."<br>";
        echo "Plaats: ".$plaats."<br>";
        echo "E-mailadres: ".$email."<br>";
        echo "<br>";
        echo "U wordt ingeschreven voor de volgende opleiding: <br>".$studie;
    }
}
?>