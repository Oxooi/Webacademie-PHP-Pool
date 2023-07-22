<?php

function print_calls()
{
    static $i = 1;
    echo ("$i\n");
    $i++;
}

print_calls();
print_calls();
print_calls();