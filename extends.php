<?php

class 親クラス
{
    public function 親メソッド()
    {
        echo "親クラス内親メソッド \n";
    }
    public function メソッド()
    {
        echo "親クラス内メソッド \n";
    }
}

class 子クラス extends 親クラス
{
    public function 子メソッド()
    {
        echo "子クラス内子メソッド \n";
    }

    public function メソッド()
    {
        echo "子クラス内メソッド \n";
    }
}

$abc = new 子クラス();
$abc -> 親メソッド();
$abc -> 子メソッド();
$abc -> メソッド();

$dmm = new 親クラス();
$dmm -> メソッド();