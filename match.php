<?php

$i = 2;
$s = match ($i) {
    '2a' => "iは2aです \n",
    '2' => "iは'2'(string)です \n",
    2 => "iは2(int)です \n",
};

echo $s;