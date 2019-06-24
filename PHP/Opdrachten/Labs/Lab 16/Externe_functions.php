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
function facturering(){
    $totaal = 0;

    echo '
        <hr>
        <table>
            <th>Genre</th>
            <th>Artiest</th>
            <th>Album</th>
            <th>Aantal</th>
            <th>Prijs</th>
            <th>Bedrag</th>
        ';
    for($x=0; $x < sizeof($_POST["albumcode"]); $x++)
    {
        $genre = $_POST["genre"][$x];
        $artiest = $_POST["artiest"][$x];
        $album = $_POST["album"][$x];
        $aantal = $_POST["aantal"][$x];
        $prijs = $_POST["prijs"][$x];
        $bedrag = $prijs * $aantal;

        $totaal = $totaal + $bedrag;

        echo"
    <tr>
      <td>$genre</td>
      <td>$artiest</td>
      <td>$album</td>
      <td>$aantal</td>
      <td>$prijs</td>
      <td>$$bedrag</td>
    </tr>";
    }
    $korting = $totaal * korting() / 100;
    $servicekosten = serviceKosten($_POST['payMethode']);
    $betalen = ($totaal + $servicekosten) - ($totaal * (korting() / 100)) ;
    echo"
  <tr>
    <td>Totaal</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>$$totaal</td>
  </tr>
  <tr>
    <td>Korting</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>$korting%</td>
  </tr>
  <tr>
    <td>Servicekosten</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>$$servicekosten</td>
  </tr>
  <tr>
    <td>Te betalen</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>$$betalen</td>
  </tr>"
    ;
    }
function premium(){
    $aantal = $_POST["aantal"];
    if ($aantal >= 5){
        echo"Word lid van onze premium club";
    }
}
?>

