<?php

$i = 2;
$s = match ($i) {
    '2a' => "iは2aです \n",
    '2' => "iは'2'(string)です \n",
    2 => "iは2(int)です \n",
};

echo $s;

$i = 123;

if($s <= 100) {
    echo "100以下 \n";
} else {
    echo "100を超える \n";
}

$i = 123;

switch($i){
    case $i < 50:
        echo "50未満 \n";
        break;

    case $i < 100:
        echo "100未満 \n";
        break;

    case $i < 150:
        echo "150未満 \n";
        break;
    
    default :
        echo "150以上 \n";
 }