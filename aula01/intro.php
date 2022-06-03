<?php

include 'Aluno.php';
include 'Professor.php';
include 'Disciplina.php';
include 'Curso.php';

$aluno01 = new Aluno();
$aluno01 ->nome = 'Alessandro';
$aluno01 ->turma = 'devStart';
$aluno01 ->cpf = '111.222.333-45';

$professor01 = new Professor();
$professor01 ->nome = 'Roberto';
$professor01 ->materia = 'HTML/CSS';
$professor01 ->salario = 2000;

$curso01 = new Curso();
$curso01 ->nome = 'desenvolvimento Web';
$curso01 ->duracao = 88;

$disciplina01 = new Disciplina();
$disciplina01 ->nome = 'introdução ao HTML';
$disciplina01 ->professorResponsavel = $professor01->nome;
$disciplina01 ->cursoPresente = $curso01->nome;

var_dump($disciplina01);