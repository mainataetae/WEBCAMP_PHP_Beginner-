<?php

$i = "Hello,World,kansai,area";
echo "元の文字列 \n";
var_dump($i);

$e = explode(",", $i);
echo "\n explodeした配列 \n";
var_dump($e);

$s = implode(";", $e);
echo "\n implodeで繋げた文字列 \n";
var_dump($s);

