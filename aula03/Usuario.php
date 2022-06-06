<?php

declare (strict_types=1);


abstract class Usuario
{
    private string $nome;
    private string $email;
    private string $senha;
    private string $cpf;

    public function __construct(string $email, string $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getNome (): string
    {
        return $this->nome;
    }

    public function setNome (string $nome) : void
    {
        if (strlen($nome)<=2) {
            die('O nome precisa conter no minimo 3 letras.');
        }
        $this->nome = $nome;
    }

    public function  getEmail () :string 
    {
        return $this->email;
    }

    public function setEmail (string $email): void
    {   
        $this->email = $email;
    }

    public function getsenha (): string
    {
        return $this->senha;
    }

    public function setSenha (string $senha) : void
    {
        if (strlen($senha)<=4) {
            die('Senha precisa ter mais que 4 digitos.');
        }
        $this->senha = $senha;
    }

    public function getCpf (string $cpf): string
    {
        return $this->cpf;
    }

    public function setCpf (string $cpf) : void
    {   
        if (strlen($cpf)<11) {
            die('O CPF deve conter 11 digitos.');
        }
        $this->cpf = $cpf;
    }
}