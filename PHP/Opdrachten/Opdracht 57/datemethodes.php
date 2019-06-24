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