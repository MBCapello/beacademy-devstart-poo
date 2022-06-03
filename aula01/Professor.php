<?php

declare(strict_types=1);

class Professor
{
    public string $nome;
    public string $materia;
    public float $salario;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getMateria(): string
    {
        return $this->materia;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setNome(string $novoNome): void
    {
        if (strlen($novoNome) <= 3) {
            die('O nome do professor precisa ter mais que 3 letras.');
        }
        $this->nome = $novoNome;
    }

    public function setMateria(string $novaMateria): void
    {
        if(strlen($novaMateria) < 3) {
            die('O nome do professor precisa ter no mínimo 3 letras.');
        }
        $this->materia = $novaMateria;
    }

    public function setSalario(float $novoSalario): void
    {
        if ($novoSalario <= 0) {
            die('O professor precisa ter salário. Ele merece, né?!');
        }
        $this->salario = $novoSalario;
    }
}