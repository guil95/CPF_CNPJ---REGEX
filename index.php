<?php

class Documentos{
	public $cpf;
	public $cnpj;

	public function setMaskCpfRegex(){
		$this->cpf = preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/","$1.$2.$3-$4", $this->cpf);
	}
	
	public function setMaskCnpjRegex(){
		$this->cnpj = preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/","\$1.\$2.\$3/\$4-\$5", $this->cnpj);
	}
	
	
}
