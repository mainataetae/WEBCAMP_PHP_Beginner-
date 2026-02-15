<?php

$a = 10;
echo "{$a} \n";

function myfunk()
{
    $b = 999;
    echo "{$b} \n";
    echo "{$a} \n";
}

myfunk();
echo "{$b} \n";