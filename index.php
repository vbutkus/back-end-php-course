<!DOCTYPE html>
<html>

<head>
    <title>Lists</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>

<?php
/*function suma($skaicius1, $skaicius2) {
    $suma = $skaicius1 + $skaicius2;
    return $suma;
}

function atimtis($skaicius1, $skaicius2) {
    $atimtis = $skaicius1 - $skaicius2;
    return $atimtis;
}

function daugyba($skaicius1, $skaicius2) {
    $daugyba = $skaicius1 * $skaicius2;
    return $daugyba;
}

function dalyba($skaicius1, $skaicius2) {
    $dalyba = $skaicius1 / $skaicius2;
    return $dalyba;
}

function liekana($skaicius1, $skaicius2) {
    $liekana = $skaicius1 % $skaicius2;
    return $liekana;
}

function kelimas_laipsniu ($skaicius1, $skaicius2) {
    $kelimas_laipsniu = $skaicius1 ** $skaicius2;
    return $kelimas_laipsniu;
}

echo '10+2='. suma(10,2). '<br>';
echo '10-2='. atimtis(10,2). "<br>";
echo '10*2='. daugyba(10,2). "<br>";
echo '10/2='. dalyba(10,2). "<br>";
echo '10%3='. liekana(10,3). "<br>";
echo '10^2='. kelimas_laipsniu(10,2). '<br>'. '<br>';

$amzius=15;

if ($amzius>=21) {
    echo $amzius;
}

else {
    echo "nepilnametis". "<br>". "<br>";
}

function suapvalint_iki_sitmecio ($metai) {
    if ($metai%100 == 0) {
       $simtmetis = $metai/100;
       return $simtmetis. " osom";
    }

    else {
        $simtmetis = round($metai/100,0);
        return $simtmetis. " reikejo apvalint";
    }
}

echo suapvalint_iki_sitmecio(1949). '<br>';

function suapvalint_iki_simtmecio2 ($metai) {
    if ($metai%100 === 0) {
        return ($metai/100). " osom";
    }
    else {
        return (int)($metai/100+1). " reikejo apvalint". "<br>";
    }
}

echo suapvalint_iki_simtmecio2(1949);

function reverse($string) {
    $string = strrev($string);
    return $string. "<br>";
}

echo reverse("labas");

function didziosios($string) {
    $string = strtoupper($string);
    return $string. "<br>";
}

echo didziosios("labas");

function mazosios($string) {
    $string = strtolower($string);
    return $string. "<br>";
}

echo mazosios("LABAS");

function is_palendromas($string) {
    if ($string == strrev($string)) {
        return strtoupper($string);
    }
    else {
        return strtolower($string);
    }
}

echo is_palendromas("aha"). "<br>";

*/?><!--

<table>
    <?php
/*    for ($row = 1; $row <= 10; $row++) {
       echo "<tr>";
        for ($column = 1; $column <= 10; $column++) {
           echo "<td>";
           echo $row. " x ". $column. " = ". $row * $column;
        }
             echo "</td>";
        echo "</tr>";
    }
    */?>
</table>-->

<?php

/*function trikampis($virsune) {
    for ($eilute = 1; $eilute <= $virsune; $eilute++) {
        for ($simbolis = 1; $simbolis <= $eilute; $simbolis++) {
            echo '*';
        }
        echo "<br>";
    }
    for ($eilute = $virsune; $eilute >= 1; $eilute--) {
        for ($simbolis = 1; $simbolis <= $eilute; $simbolis++) {
            echo '*';
        }
        echo "<br>";
    }
}

trikampis(10);*/

/*laikas, greitis, atstumas, kiek sudeginom kaloriju per km, kaloriju

per kiek laiko kiek nuejom ir kiek sudeginom kaloriju*/


/*
function atstumas ($laikas, $greitis_kmh) {
    return $laikas * $greitis_kmh;
}

function kalorijos ($laikas, $kalorijos_per_h) {
    return $kalorijos_per_h * $laikas;
}

function kiek_kaloriju_per_km ($laikas, $greitis_kmh, $kalorijos_per_h) {
    $atstumas = atstumas ($laikas, $greitis_kmh);
    $kalorijos = kalorijos ($laikas, $kalorijos_per_h);
    return $kalorijos / $atstumas;
}



$laikas = 3;
$greitis_kmh = 5;
$kalorijos_per_h = 100;


echo "Nueita - ". atstumas ($laikas,$greitis_kmh). " km<br>";
echo "Kalorijos per km - ". kiek_kaloriju_per_km ($laikas, $greitis_kmh, $kalorijos_per_h). " kcal<br>";
echo "Sudeginta kaloriju - ". kalorijos ($laikas, $kalorijos_per_h). " kcal<br>";*/

?>

<form method="post">
    <input type="text" name="number1">
    <input type="text" name="number2">
    <select name="operator" id="">
        <option>None</option>
        <option>Add</option>
        <option>Substract</option>
        <option>Multiply</option>
        <option>Divide</option>
        <option>Exponentiate</option>
    </select>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>

<?php

    if (isset($_POST["submit"])) {
        $result1 = $_POST["number1"];
        $result2 = $_POST["number2"];
        $operator = $_POST["operator"];
        switch ($operator) {
            case "Add":
                echo $result1 + $result2;
                break;
            case "Substract":
                echo $result1 - $result2;
                break;
            case "Multiply":
                echo $result1 * $result2;
                break;
            case "Divide":
                echo $result1 / $result2;
                break;
            case "Exponentiate":
                echo $result1 ** $result2;
                break;
            default:
                echo "Please select a calculator action.";
        }
    }

?>


</body>

</html>