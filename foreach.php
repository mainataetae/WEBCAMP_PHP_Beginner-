<?php

$i = [
    "key1" => " Hellow",
    0 => '1st',
    1 => '2nd',
    "key2" => 3.14,
];

foreach($i as $k => $v) {
    echo "{$k} -> {$v} \n";
}

foreach($i as $h){
    echo"{$h} \n";
}