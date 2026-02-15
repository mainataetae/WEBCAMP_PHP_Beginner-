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

$c =[
    "Red",
    "Yellow",
    "Green",
    "Blue",
    "Black",
    ];
foreach($c as $k){
    echo "{$k} \n";
}

$h = [
    "Red" => "#ff0000",
    "Yellow" => "#ffff00",
    "Green" => "#00ff00",
    "Blue" => "#0000ff",
    "Black" => "#000000",
];

foreach($h as $v => $l){
    echo "{$v} : {$l} \n";
}