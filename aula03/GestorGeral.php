<?php

declare(strict_types=1);
final class GestorGeral extends Gestor    
{
    private float $bonusAnual;

    public function __construct(string $email, string $senha, float $salario, float $bonusAnual)
    {
        parent::setEmail($email);
        parent::setSenha($senha);
        parent::setSalario($salario);
        $this->$bonusAnual = $bonusAnual;
    }
    
    public function getBonusAnual():float
    {
        return $this->bonusAnumal;
    }

    public function setBonusAnual(float $bonusAnual):void
    {
        if ($bonusAnual<=0) {
            die('O bonus anual precisa ser naior que zero.');
        }
        $this->bonusAnual = $bonusAnual;
    }
}