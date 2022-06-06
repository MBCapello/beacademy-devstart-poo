<?php

ini_set('display_errors',1);

include 'vendor/autoload.php';

// use Classes\Config\Usuario;
// use Classes\Categoria;

// $us1 = new Usuario();

// $c1 = new Categoria();

// var_dump($us1);
// var_dump($c1);

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();