<?php
$vandaag = new DateTime("now");
echo "<br>Vandaag timestamp: ".$vandaag->getTimestamp();
$eenDag = 86400;
$begin2000 = DateTime::createFromFormat("d/m/Y","1/1/2000");
$eind2000 = DateTime::createFromFormat("d/m/Y","31/12/2000");
$begin = $begin2000->getTimestamp();
$einde = $eind2000->getTimestamp();
$dagenIn2000 = ($einde - $begin)/ $eenDag;
echo "<br>Aantal dagen in 2000: ". $dagenIn2000;
// Add DateInterval
    $datum = new DateTime("2000-01-01");
    echo "<br>Begindatum: " . $datum->format("Y-m-d");
    $datum->add(new DateInterval("P10D"));
    echo"<br>Tien dagen toevoegen: " . $datum->format("Y-m-d");
// Subtract DateInterval
    $datum->sub(new DateInterval("P10D"));
    echo "<br>Tien dagen weghalen: " . $datum->format("Y-m-d");
// Formatteren
    $format = '%A %d %B %Y %H:%M:%S';
    $geformatteerde_datum = strftime($format);
    echo "<br>Geformatteerde datum: ". $geformatteerde_datum;
// Lokale datuminstelling
    setlocale(LC_TIME, "nld_NLD");
    $ned = strftime($format);
    echo "<br>In het Nederlands: ". $ned;
// date_format verwerken
    $datum = date_create("2000-01-01");
    echo "<br>Datum formatteren: ". date_format($datum, "Y-m-d");
    echo "<br>Datum formatteren: ". date_format($datum, "d-m-Y");