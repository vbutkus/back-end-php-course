<?php
/**
 * Created by PhpStorm.
 * User: user15
 * Date: 2018-03-07
 * Time: 10:51
 */

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
