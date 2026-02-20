<?php

class MyException extends Exception
{
}
try{
    throw new \MyException("自分で投げた例外");
    $obj = new SplFileObject();
    echo "例外が起きた後の処理。ここを通る？ \n";
} catch(\Throwable $e) {
    echo "例外が発生したらここを通る \n";
    var_dump($e -> getMessage());
}

echo "fin \n";