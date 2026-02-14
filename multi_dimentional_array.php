<?php

$i = [
    [
        'key1' => 1,
        'key2' => 2,
        'key3' => 3,
    ],
    [
        'key1' => 11,
        'key2' => 12,
        'key3' => 13,
    ],
    [
        'key1' => 200,
        'key2' => 300,
        'key3' => 300, 
    ],
];

var_dump($i);

foreach($i as $k => $v){
    echo "{$k}番目の配列 \n";
    foreach($v as $h => $l){
        echo "{$h}:{$l} \n";
    }
    echo "\n";
    }