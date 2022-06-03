<?php

include 'Produtos.php';

$produto01 = new Produtos();
$produto01 ->alterarNome('Tennis');
$produto01 ->alterarPreco(500.00);
$produto01 ->alterarDescricao('Tennis de corrida azul');

$produto02 = new Produtos();

// echo $produto02->test('parâmetro');

//var_dump($produto01);