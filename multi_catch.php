<?php

class Myclass extends Exception
{
}

try{
    throw new \Myclass("自力で投げた例外");
    throw new TypeError("自力で投げたType error");
    throw new Exception("自力で投げたExceprion");
} catch (Myclass $e){
    echo "myclassをキャッチしました \n";
    var_dump($e -> getMessage());
} catch (\Error $e){
    echo "Errorをキャッチしました \n";
    var_dump($e -> getMeesage());
} catch (\Throwable $e){
    echo "Throwableをキャッチしました \n";
    var_dump($e -> getMeesage());
}

echo "fin. \n";