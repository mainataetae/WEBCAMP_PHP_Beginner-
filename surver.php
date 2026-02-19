<?php

function h(string $s) : string
{
    return htmlspecialchars($s, ENT_QUOTES);
}

echo "ブラウザ(User Agent)は " , h($_SERVER['HTTP_USER_AGENT'])  , "です。<br>\n";
echo "接続元IPは " , h($_SERVER['REMOTE_ADDR']) , "です。<br>\n";

$i = intval($_COOKIE['counter'] ?? 1);
$ia = strval($i + 1);
setcookie('counter',$ia);
echo "あなたは" , h(intval($i)), "回目ですね \n";