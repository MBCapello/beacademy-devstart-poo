<?php

include 'Aluno.php';
include 'Professor.php';
include 'Disciplina.php';
include 'Curso.php';

$aluno01 = new Aluno();
$aluno01 ->setNome('Alessandro');
$aluno01 ->setTurma('devStart');
$aluno01 ->setCpf('111.222.333-45');

$professor01 = new Professor();
$professor01 ->setNome('Roberto');
$professor01 ->setMateria('HTML/CSS');
$professor01 ->setSalario(2000);

$curso01 = new Curso();
$curso01 ->setNome('Desenvolvimento Web');
$curso01 ->setDuracao(88);

$curso02 = new Curso();
$curso02 ->setNome('UI/UX');
$curso02 ->setDuracao(105);

$disciplina01 = new Disciplina();
$disciplina01 ->setNome('introdução ao HTML');
$disciplina01 ->setProfessorResponsavel($professor01->nome);
//$disciplina01 ->setCursoPresente($curso01::getNome()); //tipo array 

var_dump($disciplina01);