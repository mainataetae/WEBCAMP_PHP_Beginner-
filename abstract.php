<?php

abstract class 抽象クラス
{
    abstract public function 抽象メソッド();
    
    public function 普通のメソッド()
    {
        echo "普通のメソッド \n";
    }
}
class 子クラス extends 抽象クラス
{
    public function 抽象メソッド()
    {
        echo "子クラスで実装した抽象メソッド \n";
    }
}

$abc = new 子クラス();
$abc -> 普通のメソッド();
$abc -> 抽象メソッド();