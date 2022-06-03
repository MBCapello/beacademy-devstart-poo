<?php

declare(strict_types=1);

class Curso 
{
    private string $nome;
    private int $duracao;
    private array $conteudo;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDuracao(): int
    {
        return $this->duracao;
    }

    public function getConteudo(): array
    {
        return $this->conteudo;
    }

    public function setNome(string $novoNome): void
    {
        if (strlen($novoNome) <= 3) {
            die('O nome do curso precisa ter mais que 3 letras.');
        }
        $this->nome = $novoNome;
    }

    public function setDuracao(int $novaDuracao): void
    {
        if($novaDuracao <= 0) {
            die('Duração do curso inválida.');
        }
        $this->duracao = $novaDuracao;
    }

    public function setConteudo(array $novoConteudo): void
    {
        if (count($novoConteudo) < 1) {
            die('O conteúdo do curso precisa ter pelo menos 1 disciplina.');
        }
        $this->conteudo = $novoConteudo;
    }
}