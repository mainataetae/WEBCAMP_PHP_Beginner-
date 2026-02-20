<?php

$file_name = __FILE__;

$file_obj = file_get_contents($file_name);

var_dump($file_obj);