<?php
/**
 * Created by PhpStorm.
 * User: user15
 * Date: 2018-03-07
 * Time: 10:25
 */

function suma($skaicius1, $skaicius2) {
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