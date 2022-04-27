<?php

require 'Apple.php';
require 'Sony.php' ;
require 'LG.php';

$iPhone = new  Sony\CreatePhone();
$iPhone->sayHello();
print_r($iPhone) ;