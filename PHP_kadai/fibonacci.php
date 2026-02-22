<?php
$a = 0;
$b = 1;
echo "{$a} \n";
echo "{$b} \n";

for($i = 0; $i <=10000 ; ++$i)
{
    $c = $a + $b;
    echo "{$c} \n";

    if($c >10000){
        break;
    }

    $a = $b;
    $b = $c;
}