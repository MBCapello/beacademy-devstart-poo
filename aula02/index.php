<?php

include 'Produtos.php';

$produto01 = new Produtos();
$produto01 ->setNome('Tennis');
$produto01 ->setPreco(500.00);
$produto01 ->setDescricao('Tennis de corrida azul');

$produto02 = new Produtos();

// echo $produto02->test('parâmetro');

//var_dump($produto01);