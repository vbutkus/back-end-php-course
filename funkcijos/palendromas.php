<?php
/**
 * Created by PhpStorm.
 * User: user15
 * Date: 2018-03-07
 * Time: 10:37
 */

function is_palendromas($string) {
    if ($string == strrev($string)) {
        return strtoupper($string);
    }
    else {
        return strtolower($string);
    }
}