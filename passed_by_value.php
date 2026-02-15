<?php

function myfink(int $val)
{
    $val *= 2;
    echo "{$val} \n";
}

$i = 10;
myfink($i);
echo "{$i} \n";