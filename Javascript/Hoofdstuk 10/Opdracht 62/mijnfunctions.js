function afmelden() {
    var antwoord = confirm('Wilt u zich afmelden?');
    if(antwoord == true) {
        alert('U wordt afgemeld!!!');
    }
}
function begroeten() {
    var datum = new Date();
    var uren = datum.getHours();
    if (uren >= 0 && uren <=11){
        document.write('<br>Goedemorgen!');
    }
    else if (uren >= 12 && uren <= 17){
        document.write('<br>Goedemiddag!');
    }
    else {
        document.write('<br>Goedenavond!');
    }

}