<?php

ini_set('display_errors',1);

include 'vendor/autoload.php';

use Classes\Config\Usuario;
use Classes\Categoria;

$us1 = new Usuario();

$c1 = new Categoria();

var_dump($us1);
var_dump($c1);