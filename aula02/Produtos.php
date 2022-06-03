<?php

declare(strict_types=1);

class Produtos//Classe
{
    //atributos
    private string $nome;
    private float $preco;
    private string $descricao;

    //metodos
    public function test(string $parametros):string 
    {
        return "testando com recebimento de {$parametros}";
    }

    public function getNome (): string 
    {
        return $this->nome;
    }

    public function getPreco (): float 
    {
        return $this->preco;
    }

    public function getDescricao (): string 
    {
        return $this->descricao;
    }

    public function setNome (string $novoNome): void
    {
        if (strlen($novoNome) <= 3 || strlen($novoNome) >= 30) {
            die('O nome precisa ter mais que 3 letras e menos que 30 letras.');
        }
        $this->nome = $novoNome;
    }

    public function setPreco (float $novoPreco): void
    {
       if ($novoPreco < 0) {
           die('Valor não pode ser menor que zero.');
       }
       $this->preco = $novoPreco;
    }

    public function setDescricao (string $novaDescricao): void
    {
        if (strlen($novaDescricao) <= 10 || strlen($novaDescricao) >= 100) {
            die('A descrição precisa ter mais que 10 characteres e menos que 100 characteres.');
        }
        $this->descricao = $novaDescricao;
    }
}

