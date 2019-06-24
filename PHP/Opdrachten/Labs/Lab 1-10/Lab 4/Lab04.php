<h3>php lab 1.4</h3>
<?php
    $naam = "Pepijn";
    $nederlands = "6.2";
    $engels = "7.7";
    $rekenen = "9.5";
    $programmeren = "7.1";
    $databases = "7.5";
    $naam2 = "Potloodventer";
    $nederlands2 = "9.8";
    $engels2 = "6.2";
    $rekenen2 = "8.6";
    $programmeren2 = "6.7";
    $databases2 = "8.2";
    $gemiddelde = ($nederlands + $programmeren + $engels + $rekenen + $databases)/5;
    $gemiddelde2 = ($nederlands2 + $programmeren2 + $engels2 + $rekenen2 + $databases2)/5;
    $gemiddelde = round($gemiddelde, 2);
    $gemiddelde2 = round($gemiddelde2, 2);
    $gemiddeld3 = ($gemiddelde + $gemiddelde2)/2;
    echo "<table border='1'>
    <caption>
        <strong>Rapport</strong>
    </caption>
    <thead>
        <tr>
            <th>Naam</th><th>Nederlands</th><th>Engels</th>
            <th>Rekenen</th><th>Programmeren</th>
            <th>Databases</th>
            <th>Gemiddeld</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>$naam</td><td>$nederlands</td><td>$engels</td>
            <td>$rekenen</td><td>$programmeren</td><td>$databases</td>
            <td>$gemiddelde</td>
        </tr>
        <tr>
        <td>$naam2</td><td>$nederlands2</td><td>$engels2</td>
            <td>$rekenen2</td><td>$programmeren2</td><td>$databases2</td>
            <td>$gemiddelde2</td>
        </tr>
    </tbody>
    <tfoot>
        <td colspan ='6'>Groep gemiddeld</td><td>$gemiddeld3</td>
    </tfoot>
    </table>";