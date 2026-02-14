<?php

$k = [123];
var_dump($k);

$i = [ 999, "hello", 3.14];
var_dump($i);
var_dump($i[0]);

$i[0]= 654321;
var_dump($i[0]);

$k[] = 1.41431456;
$k[] = "string value";
var_dump($k);