<form name="form" action="" method="post">
    <input required type="text"
           name="naam" placeholder="Naam" /><br>
    <input required type="text"
           name="straat" placeholder="Straat" /><br>
    <input required type="text"
           name="postcode" placeholder="Postcode" /><br>
    <input required type="text"
           name="plaats" placeholder="Plaats" /><br>
    <input required type="email"
           name="e-mail" placeholder="E-mailadres" /><br><br>
    <textarea name="commentaar"
              placeholder="Typ je commentaar in ..."
              rows=4></textarea><br>
    <input type="submit"
           name="submit" value="Submit" />
</form>
<?php
if(isset($_POST["submit"])){
    $naam = htmlspecialchars($_POST["naam"]);
    $straat = htmlspecialchars($_POST["straat"]);
    $postcode = htmlspecialchars($_POST["postcode"]);
    $plaats = htmlspecialchars($_POST["plaats"]);
    $email = htmlspecialchars($_POST["e-mail"]);
    $commentaar = htmlspecialchars($_POST["commentaar"]);
    $naam = trim($naam);
    $straat = trim($straat);
    $postcode = trim($postcode);
    $plaats = trim($plaats);
    $email = trim($email);
    $commentaar = trim($commentaar);
    $plaats = strtoupper($plaats);
    if($plaats == "AMSTERDAM"){
        $bezorgkosten = 10.00;
    }
    elseif($plaats == "UTRECHT"){
        $bezorgkosten = 20.00;
    }
    else{
        $bezorgkosten = 30.00;
    }
    echo "<br>Bezorgkosten: $bezorgkosten";
}
?>