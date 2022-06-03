<?php

declare(strict_types=1);

class Disciplina
{
    public string $nome;
    public string $professorResponsavel;
    public array $cursoPresente;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getProfessorResponsavel(): string
    {
        return $this->professorResponsavel;
    }

    public function getCursoPresente(): array
    {
        return $this->cursoPresente;
    }

    public function setNome(string $novoNome): void
    {
        if (strlen($novoNome) <= 3) {
            die('O nome do curso precisa ter mais que 3 letras.');
        }
        $this->nome = $novoNome;
    }

    public function setProfessorResponsavel(string $novoProfessorResponsavel): void
    {
        if(strlen($novoProfessorResponsavel) <= 3) {
            die('O nome do Professor precisa ter mais que 3 letras.');
        }
        $this->professorResponsavel = $novoProfessorResponsavel;
    }

    public function setCursoPresente(array $novoCursoPresente): void
    {
        if (count($novoCursoPresente) < 1) {
            die('A disciplina precisa estar em pelo menos 1 curso.');
        }
        $this->conteudo = $novoCursoPresente;
    }

}