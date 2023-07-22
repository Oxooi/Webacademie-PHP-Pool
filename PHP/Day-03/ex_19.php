<?php

function calc(string $operation, int $nb1, int $nb2)
{
    switch ($operation) {
        case '%':
            $result = ($nb1 % $nb2);
            echo $result;
            return $result;
            break;

        case '/':
            $result = ($nb1 / $nb2);
            echo $result;
            return $result;
            break;

        case '*':
            $result = ($nb1 * $nb2);
            echo $result;
            return $result;
            break;

        case '-':
            $result = ($nb1 - $nb2);
            echo $result;
            return $result;
            break;

        case '+':
            $result = ($nb1 + $nb2);
            echo $result;
            return $result;
            break;

        default:
            echo ("invalid");
            return;
            break;
    }
}

calc("/", 42, 21);
