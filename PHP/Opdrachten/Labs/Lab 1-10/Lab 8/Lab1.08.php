<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type"
          content="text/html;
              charset=UTF-8" />
</head>
<body>
<h2>Inschrijfformulier</h2>
<form action="../../Extra%20Opdrachten/Lab08.verwerken.php" method="post">
    Achternaam
    <input type="text" name="achternaam" /><br>
    Voornaam
    <input type="text" name="voornaam" /><br>
    Straat
    <input type="text" name="straat" /><br>
    Postcode
    <input type="text" name="postcode" /><br>
    Plaats
    <input type="text" name="plaats" /><br>
    E-mailadres
    <input type="email" name="E-mailadres" /><br>
    <input type="hidden" name="studie" value="false">
    <br>Kies een Opleiding:
    <br><input type="radio" name="studie" value="ICT"> ICT
    <br><input type="radio" name="studie" value="Engels"> Engels
    <br><input type="radio" name="studie" value="Techniek"> Techniek
    <br><input type="radio" name="studie" value="Nederlands"> Nederlands
    <br>
    <input type="submit" name="submit" value="Versturen">
    <input type="reset" name="reset" value="Reset">
</form>
</body>
</html>