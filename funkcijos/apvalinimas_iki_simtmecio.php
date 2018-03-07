<?php
/**
 * Created by PhpStorm.
 * User: user15
 * Date: 2018-03-07
 * Time: 10:30
 */

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


function suapvalint_iki_simtmecio2 ($metai) {
    if ($metai%100 === 0) {
        return ($metai/100). " osom";
    }
    else {
        return (int)($metai/100+1). " reikejo apvalint";
    }
}