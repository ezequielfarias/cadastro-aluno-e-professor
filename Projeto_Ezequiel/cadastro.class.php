<?php
class cadastro
{
	//Aluno
	private $nome;
	private $Endereco;
	private $Cidade;
	private $Telefone;
	private $mail;
	private $Matricula;
	private $RG;
	private $datamatricula;
	private $Curso;
	private $Nota1;
	private $Nota2;
	private $ConceitoFinal;
	// professor
	private $nomep;
	private $Enderecop;
	private $Cidadep;
	private $Telefonep;
	private $mailp;
	private $matricula1;
	private $cursop;
	private $Titulacao;
	private $CPF;

	public function getnome()
	{
		return $this->nome;
	}

	public function getEndereco()
	{
		return $this->Endereco;
	}

	public function getCidade()
	{
		return $this->Cidade;
	}

	public function getTelefone()
	{
		return $this->Telefone;
	}

	public function getmail()
	{
		return $this->mail;
	}

	public function getMatricula()
	{
		return $this->Matricula;
	}

	public function getRG()
	{
		return $this->RG;
	}
	public function getdatamatricula()
	{
		return $this->datamatricula;
	}

	public function getCurso()
	{
		return $this->Curso;
	}
	public function getNota1()
	{
		return $this->Nota1;
	}
	public function getNota2()
	{
		return $this->Nota2;
	}
	public function getConceitoFinal()
	{
		return $this->ConceitoFinal;
	}
	public function getmatricula1()
	{
		return $this->matricula1;
	}
	public function getcursop()
	{
		return $this->cursop;
	}
	public function getTitulacao()
	{
		return $this->Titulacao;
	}
	public function getCPF()
	{
		return $this->CPF;
	}
	public function getnomep()
	{
		return $this->nomep;
	}
	public function getEnderecop()
	{
		return $this->Enderecop;
	}
	public function getCidadep()
	{
		return $this->Cidadep;
	}
	public function getTelefonep()
	{
		return $this->Telefonep;
	}
	public function getmailp()
	{
		return $this->mailp;
	}





	//Set's
	public function setnome($nome)
	{
		$this->nome = $nome;
	}

	public function setEndereco($Endereco)
	{
		$this->Endereco = $Endereco;
	}

	public function setCidade($Cidade)
	{
		$this->Cidade = $Cidade;
	}

	public function setTelefone($Telefone)
	{
		$this->Telefone = $Telefone;
	}

	public function setmail($mail)
	{
		$this->mail = $mail;
	}

	public function setMatricula($Matricula)
	{
		$this->Matricula = $Matricula;
	}

	public function setRG($RG)
	{
		$this->RG = $RG;
	}

	public function setdatamatricula($datamatricula)
	{
		$this->datamatricula = $datamatricula;
	}


	public function setCurso($Curso)
	{
		$this->Curso = $Curso;
	}

	public function setNota1($Nota1)
	{
		$this->Nota1 = $Nota1;
	}
	public function setNota2($Nota2)
	{
		$this->Nota2 = $Nota2;
	}
	public function setConceitoFinal($ConceitoFinal)
	{
		$this->ConceitoFinal = $ConceitoFinal;
	}
	public function setmatricula1($matricula1)
	{
		$this->matricula1 = $matricula1;
	}
	public function setcursop($cursop)
	{
		$this->cursop = $cursop;
	}
	public function setTitulacao($Titulacao)
	{
		$this->Titulacao = $Titulacao;
	}
	public function setCPF($CPF)
	{
		$this->CPF = $CPF;
	}
	public function setnomep($nomep)
	{
		$this->nomep = $nomep;
	}
	public function setEnderecop($Enderecop)
	{
		$this->Enderecop = $Enderecop;
	}
	public function setCidadep($Cidadep)
	{
		$this->Cidadep = $Cidadep;
	}
	public function setTelefonep($Telefonep)
	{
		$this->Telefonep = $Telefonep;
	}
	public function setmailp($mailp)
	{
		$this->mailp = $mailp;
	}
}
