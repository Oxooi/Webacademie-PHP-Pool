<?php

function get_args(array $arr)
{
    print_r($arr);
    return func_get_args();
}

function get_last_args(mixed $vars)
{
    $args = func_get_args();
    echo end($args);
}

get_args(["uwu", "lol", "mdr", "jpp", "tuémoi"]);
get_last_args("uwu", "fqfqf", "jf", "putain");