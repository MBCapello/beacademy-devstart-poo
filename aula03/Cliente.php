<?php

declare(strict_types=1);


final class Cliente extends Usuario
{
	private string $dataDeCadastro;
	
	public function __construct(string $email, string $senha, string $dataDeCadastro)
	{
		parent::setEmail($email);
		parent::setSenha($senha);
		$this->$dataDeCadastro = $dataDeCadastro;
	}
	function getDataDeCadastro(): string {
		return $this->dataDeCadastro;
	}
	
	function setDataDeCadastro(string $dataDeCadastro): void {
		$this->dataDeCadastro = $dataDeCadastro;
	}
}


