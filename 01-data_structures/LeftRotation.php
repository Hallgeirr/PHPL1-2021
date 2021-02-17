<?php

function rotateLeft($d, $arr)
{
    $n = count($arr);
    $mod = $d % $n;
    $result = [];
    for ($i = 0; $i < $n; $i++) {
        $result [] = $arr[($mod + $i) % $n];
    }
    return $result;
}