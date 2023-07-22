<?php

function my_swap_vars(mixed &$a, mixed &$b)
{
    $temp_var = $a;
    $a = $b;
    $b = $temp_var;

    echo("a = $a \nb = $b");
}

$varA = "uwu";
$varB = "padidés"; 
my_swap_vars($varA, $varB);