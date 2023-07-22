<?php

$nb_a = 42;
$nb_b = 21;

function my_sub()
{
    global $nb_a, $nb_b;

    $nb_a = $nb_a - $nb_b;
    return $nb_a;
}

my_sub();
echo ($nb_a);
