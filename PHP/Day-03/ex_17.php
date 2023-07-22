<?php

function array_key(array $arr, int $key)
{
    $result = $arr[$key];
    echo ($result);
    return $result;
}

$array = ["uwu", "lol", "mdr", "jpp", "tuémoi"];
array_key($array, 4);
