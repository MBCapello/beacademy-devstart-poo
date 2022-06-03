<?php

declare(strict_types=1);

class Aluno //Clase
{
    public string $nome; //Atributos
    public string $turma; //Atributos
    public string $cpf; //Atributos

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getTurma(): string
    {
        return $this->turma;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setNome(string $novoNome): void
    {
        if (strlen($novoNome) <= 3) {
            die('O nome do professor precisa ter mais que 3 letras.');
        }
        $this->nome = $novoNome;
    }

    public function setTurma(string $novaTurma): void
    {
        if(strlen($novaTurma) < 3) {
            die('O nome do professor precisa ter no mínimo 3 letras.');
        }
        $this->turma = $novaTurma;
    }

    public function setCpf(string $novoCpf): void
    {
        if ($novoCpf <= 0) {
            die('O professor precisa ter salário. Ele merece, né?!');
        }
        $this->cpf = $novoCpf;
    }
}
