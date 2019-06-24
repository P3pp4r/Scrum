<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Lab 17</title>
</head>
<body>
    <h3>Voorbeeld van de do-while lus</h3><?php
        echo "<br>Reken het saldo uit zolang saldo lager dan 2000 is";
        $saldo = 110;
        $rente = 0.1;
        $maand = 1;
        echo "<br>Beginsaldo is: $saldo";
        echo "<br>START...";
        do{
            if($maand == 2){
                echo "<br>Februari betaald geen rente.";
                $maand++;
            }
            if($maand == 6){
                echo "<br>Je saldo is te laag";
                break;
            }
            else {
                $saldo = $saldo + ($saldo * $rente);
                $saldo = sprintf("%0.2f", $saldo);
                echo "<br>Maand: $maand je saldo is: $saldo";
                $maand++;
                if($saldo >= 2000){
                    echo "Maximale saldo 2000 is bereikt<br>";
                    break;
                }
            }
        }
        while($saldo < 2000);
        echo "<br>FINISH";
    ?>
</body>
</html>