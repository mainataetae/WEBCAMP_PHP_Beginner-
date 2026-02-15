<?php

function Double(int $i) :int
{
    $r = $i * 2;
    return $r;
}
$n = Double(10);
echo "{$n} \n"; 

function math(int $l,int $o) : int
{
    $k = $l + $o;
    return $k;
}

$p = math(3,4);
echo "{$p} \n";