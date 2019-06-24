function exchange(){
    var a = document.getElementById("bedrag").value;
    var b = document.getElementById("conversie").value;
    var cal;
    if(b === 'euro/dollar'){
         cal = a * 1.36;
        document.write('<br>Het bedrag is: ' + cal);
    }
    else if(b === 'dollar/euro'){
         cal = a* 0.74;
        document.write('<br>Het bedrag is: ' + cal);
    }
    else if(b === 'ruble/euro'){
         cal = a * 0.02;
        document.write('<br>Het bedrag is: ' + cal);
    }
    else if(b === 'euro/ruble'){
         cal = a * 48.40;
        document.write('<br>Het bedrag is: ' + cal);
    }
    else{
        document.write('<br>vul het formulier correct in');
    }
}