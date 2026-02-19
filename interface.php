<?php

interface インタA
{
    public function メソッドA();
}

interface インタB
{
    public function メソッドB(int $i);
}

class Maina implements インタA, インタB
{
    public function メソッドA()
    {
        echo "メソッドA \n";
    }

    public function メソッドB(int $i)
    {
        echo "メソッドB \n";
    }
}

$abc = new Maina;
$abc -> メソッドA();
$abc -> メソッドB(999);
