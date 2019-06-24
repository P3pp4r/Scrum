<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type"
          content="text/html"
          charset="UTF-8" />
    <style>
        .album{clear: left; width: 100%;}
        .omslag{float: left;}
        .gegevens{float: left; padding-left: 20px;}
        .korting{clear: left;}
        .aantal{background-color: #f8ce6c;}
    </style>
    <title>Mijn winkelmandje</title>
</head>
<body style="font-family: verdana; font-size: 9px;">
<h3>Mijn winkelmandje</h3>
<form name="albums" action="" method="post">
    <div class="album">
        <div class="omslag">
            <img src="evora.jpg" width="50px" alt="x"/>
        </div>
        <div class="gegevens">
            Ceseria Evora "Em Um Concerto" Prijs: $9
            <input type="hidden" name="albumcode[0]" value="001" >
            <input type="hidden" name="artiest[0]" value="Ceseria Evora" >
            <input type="hidden" name="album[0]" value="Em Un Concerto" >
            <input type="hidden" name="prijs[0]" value="9" >
            <input type="hidden" name="genre[0]" value="World" >
            <br> Aantal:
            <input type="text" size=2 maxlength=3
                   name="aantal[0]" class="aantal" value="0">
        </div>
    </div>
    <div class="album">
        <div class="omslag">
            <img src="manuchao.jpg" width="50px" alt="X" />
        </div>
        <div class="gegevens">
            Manu Chao "Clandestino" Prijs: $5
            <input type="hidden" name="albumcode[1]" value="002" >
            <input type="hidden" name="artiest[1]" value="Manu Chao" >
            <input type="hidden" name="album[1]" value="Clandestino" >
            <input type="hidden" name="prijs[1]" value="5" >
            <input type="hidden" name="genre[1]" value="World" >
            <br> Aantal:
            <input type="text" size=2 maxlength=3
                   name="aantal[1]" class="aantal" value="0">
        </div>
    </div>
    <div class="album">
        <div class="omslag">
            <img src="InitialD.jpg" width="50px" alt="X" />
        </div>
        <div class="gegevens">
            Initial D "Deja vu" Prijs: $69
            <input type="hidden" name="albumcode[2]" value="003" >
            <input type="hidden" name="artiest[2]" value="Initial D" >
            <input type="hidden" name="album[2]" value="Deja vu" >
            <input type="hidden" name="prijs[2]" value="69" >
            <input type="hidden" name="genre[2]" value="World" >
            <br> Aantal:
            <input type="text" size=2 maxlength=3
                   name="aantal[2]" class="aantal" value="0">
        </div>
    </div>
    <div class="korting">
        <br><hr/>Korting:<br/>
        <input type="checkbox" name="student" value="15" /> Student: 15%<br />
        <input type="checkbox" name="klant" value="10" /> Klant: 10%<br />
        <p>Selecteer een betalingswijze</p>
        <select name="betaling" value="true">
            <option value=" "></option>
            <option value="vi">Visa</option>
            <option value="mc">MasterCard</option>
            <option value="pp">PayPal</option>
            <option value="ideal">Ideal</option>
        </select>
        <input type="submit" width="300px" name="submit" value="Bestellen" />
    </div>
</form>
</body>
</html>

<?php
    $korting = 0;
    $aantal = implode($_POST["aantal"]);

    if (isset($_POST["student"]) && isset($_POST["klant"])){
        $korting = $korting + 25;
    }
    else if(isset($_POST["klant"])){
        $korting = $korting + 10;
    }
    else if(isset($_POST["student"])){
            $korting = $korting + 15;
    }
    echo "<br>Uw aantal is: $aantal";
    echo "<br>Uw korting is: $korting" . "%";

    if(isset($_POST["submit"]))
    {
        $betaling = isset($_POST["betaling"]);
        switch($_POST['betaling'])
        {
            case "vi":
                echo "<p>Betaalwijze:Visa</p>";
                break;
            case "mc":
                echo "<p>Betaalwijze:MasterCard</p>";
                break;
            case "pp":
                echo "<p>Betaalwijze:PayPal</p>";
                break;
            case "ideal":
                echo "<p>Betaalwijze:Ideal</p>";
                break;
            default :
                echo "<p>U heeft geen betaalwijze gekozen</p>";
        }
        include_once("Externe_functions.php");
        echo "<br>De korting()-function: " . korting() . "%";
        $betalingswijze = $_POST['betalingswijze'];
        $serviceKosten = servicekosten($betalingswijze);
        echo "<br>Servicekosten zijn: $" . $serviceKosten;
}
?>