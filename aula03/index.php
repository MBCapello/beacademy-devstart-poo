<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';

$cliente1 = new Cliente('email@.com', '123123', '11/11/21');
$cliente1 ->setCpf('12345678911');

$gestor1 = new Gestor('pedro@email.com', '123123', 6000);
$gestor1->setNome('Pedro');

$getorGeral1 = new GestorGeral('zeca@email.com', '321321', 9000, 18000);

var_dump($cliente1);
echo '';
var_dump($gestor1);
echo '';
var_dump($getorGeral1);