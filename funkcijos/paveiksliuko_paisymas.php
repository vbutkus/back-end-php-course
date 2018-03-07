<?php
/**
 * Created by PhpStorm.
 * User: user15
 * Date: 2018-03-07
 * Time: 10:46
 */

function trikampis($virsune) {
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