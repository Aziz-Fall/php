<?php 

var_dump(dirname(dirname(__DIR__)));
$ficher = __DIR__. DIRECTORY_SEPARATOR.'demo.txt';
@file_put_contents($ficher, 'Comment allez vous .', FILE_APPEND);