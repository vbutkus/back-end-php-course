<!DOCTYPE html>
<html>

<head>
    <title>Lists</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>

<!--Matematiniai veiksmai-->
<?php

include ('./funkcijos/matematiniai_operatoriai.php');

echo '10+2='. suma(10,2). '<br>';
echo '10-2='. atimtis(10,2). "<br>";
echo '10*2='. daugyba(10,2). "<br>";
echo '10/2='. dalyba(10,2). "<br>";
echo '10%3='. liekana(10,3). "<br>";
echo '10^2='. kelimas_laipsniu(10,2). '<br>'. '<br>';

?>

<!--Ar pilnametis-->
<?php
$amzius=15;

if ($amzius>=21) {
    echo $amzius;
}

else {
    echo "nepilnametis". "<br>". "<br>";
}

?>


<!--Apvalinimas iki simtmecio-->
<?php

include ('./funkcijos/apvalinimas_iki_simtmecio.php');

echo suapvalint_iki_sitmecio(1949). '<br>';

echo suapvalint_iki_simtmecio2(1949). "<br>". "<br>";

?>


<!--Teksto pakeitimas-->
<?php

include ('./funkcijos/teksto_pakeitimai.php');
include ('./funkcijos/palendromas.php');

echo reverse("labas"). "<br>";
echo didziosios("labas"). "<br>";
echo mazosios("LABAS"). "<br>";

echo is_palendromas("aha"). "<br>". "<br>";

?>


<!--Daugybos lentele-->
<table>
    <?php
    for ($row = 1; $row <= 10; $row++) {
       echo "<tr>";
        for ($column = 1; $column <= 10; $column++) {
           echo "<td>";
           echo $row. " x ". $column. " = ". $row * $column;
        }
             echo "</td>";
        echo "</tr>";
    }

    ?>
</table>
<br>

<!--Paveiksliuko paisymas-->
<?php

include ('./funkcijos/paveiksliuko_paisymas.php');

trikampis(10);
echo "<br>";

?>


<!--Kaloriju skaiciavimas-->
<?php

include ('./funkcijos/kaloriju_skaiciavimas.php');

$laikas = 3;
$greitis_kmh = 5;
$kalorijos_per_h = 100;

echo "Nueita - ". atstumas ($laikas,$greitis_kmh). " km<br>";
echo "Kalorijos per km - ". kiek_kaloriju_per_km ($laikas, $greitis_kmh, $kalorijos_per_h). " kcal<br>";
echo "Sudeginta kaloriju - ". kalorijos ($laikas, $kalorijos_per_h). " kcal<br>". "<br>";

?>


</body>

</html>