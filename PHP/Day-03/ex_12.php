<?php

function my_increment(int &$nb)
{
    $nb++;
    echo($nb);
}

$uwu = 42;
my_increment($uwu);
