<!doctype html>
<html lang="pt-br">

<head>
	<title>Informações

	</title>
	<link rel="icon" type="image/gif/png" href="./img/car-driving-61.gif">
	<meta charset="UTF-8">
</head>

<body>
	<?php

	require_once './model/cadastro.class.php';


	$nome     = $_POST['cadastro_nome'];
	$Endereco	 = $_POST['cadastro_Endereco'];
	$Cidade	     = $_POST['cadastro_Cidade'];
	$Telefone  = $_POST['cadastro_Telefone'];
	$mail	     = $_POST['cadastro_mail'];
	$Matricula = $_POST['cadastro_Matricula'];
	$RG	 = $_POST['cadastro_RG'];
	$datamatricula  		 = $_POST['cadastro_datamatricula'];
	$Curso 		 = $_POST['cadastro_Curso'];
	$Nota1  		 = $_POST['cadastro_Nota1'];
	$Nota2  		 = $_POST['cadastro_Nota2'];
	$ConceitoFinal 		 = $_POST['cadastro_Conceitofinal'];
	$matricula1  		 = $_POST['cadastro_matricula1'];
	$cursop		 = $_POST['cadastro_cursop'];
	$Titulacao 		 = $_POST['cadastro_Titulacao'];
	$CPF 		 = $_POST['cadastro_CPF'];
	$nomep     = $_POST['cadastro_nomep'];
	$Enderecop     = $_POST['cadastro_Enderecop'];
	$Cidadep     = $_POST['cadastro_Cidadep'];
	$Telefonep     = $_POST['cadastro_Telefonep'];
	$mailp    = $_POST['cadastro_mailp'];






	$cadastro = new cadastro();


	$cadastro->setnome($nome);
	$cadastro->setEndereco($Endereco);
	$cadastro->setCidade($Cidade);
	$cadastro->setTelefone($Telefone);
	$cadastro->setmail($mail);
	$cadastro->setMatricula($Matricula);
	$cadastro->setRG($RG);
	$cadastro->setdatamatricula($datamatricula);
	$cadastro->setCurso($Curso);
	$cadastro->setNota1($Nota1);
	$cadastro->setNota2($Nota2);
	$cadastro->setConceitoFinal($ConceitoFinal);
	$cadastro->setmatricula1($matricula1);
	$cadastro->setcursop($cursop);
	$cadastro->setTitulacao($Titulacao);
	$cadastro->setCPF($CPF);
	$cadastro->setnomep($nomep);
	$cadastro->setEnderecop($Enderecop);
	$cadastro->setCidadep($Cidade);
	$cadastro->setTelefonep($Telefonep);
	$cadastro->setmailp($mailp);

	?>

	<!doctype html>
	<html lang="pt-br">

	<head>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<meta charset="UTF-8">

		<head>

		<body background="./img/fundo_login.png">
			<style>
				input {
					color: red;
					background-color: blue;
					text-decoration-color: red;
				}

				h1 {
					color: red;
				}
			</style>

			<table align="center" class="tabela_borda">
				<h1 align="center"><b>Informações da matricula</b></h1>
				<td>

					<tr></tr>
					<tr></tr>


				<td></td>


				<td></td>
				<td>
					<h2>Dados do aluno</h2>
				</td>
				<tr>

					<td><b>Nome: </b></td>
					<td><?php echo $cadastro->getnome(); ?> </td>
					<td><b>Endereco: </b></td>
					<td><?php echo $cadastro->getEndereco(); ?></td>
				</tr>
				<td><b>Cidade: </b></td>
				<td><?php echo $cadastro->getCidade(); ?> </td>
				<td><b>Telefone: </b></td>
				<td><?php echo $cadastro->getTelefone(); ?></td>
				</tr>

				<td><b>Email: </b></td>
				<td><?php echo $cadastro->getmail(); ?> </td>
				<td><b>Matricula: </b></td>
				<td><?php echo $cadastro->getMatricula(); ?></td>
				</tr>
				<td><b>RG: </b></td>
				<td><?php echo $cadastro->getRG(); ?> </td>

				<td><b>Data da matricula: </b></td>
				<td><?php echo $cadastro->getdatamatricula(); ?></td>
				</tr>

				<td><b>Curso: </b></td>
				<td><?php echo $cadastro->getCurso(); ?> </td>
				<td><b>1ª Nota : </b></td>
				<td><?php echo $cadastro->getNota1(); ?></td>
				</tr>
				<td><b> 2ª Nota: </b></td>
				<td><?php echo $cadastro->getNota2(); ?> </td>
				<td><b>ConceitoFinal: </b></td>
				<td><?php echo $cadastro->getConceitoFinal(); ?></td>
				</tr>


				<tr>
				</tr>

				<tr></tr>
				<tr></tr>


				<td></td>


				<td></td>
				<td>
					<h2>Dados do Professor</h2>
				</td>


				<tr>
					<td><b> Nome : </b></td>
					<td><?php echo $cadastro->getnomep(); ?></td>
				</tr>
				<tr>
					<td><b>Cidade: </b></td>
					<td><?php echo $cadastro->getCidadep(); ?></td>
				<tr>
					<td><b>Email: </b></td>
					<td><?php echo $cadastro->getmailp(); ?></td>
				<tr>
					<td><b>Endereço: </b></td>
					<td><?php echo $cadastro->getEnderecop(); ?></td>
				<tr>
					<td><b>Telefone/Celular: </b></td>
					<td><?php echo $cadastro->getTelefonep(); ?></td>
				<tr>
					<td><b>Nº Matricula: </b></td>
					<td><?php echo $cadastro->getmatricula1(); ?></td>
				<tr>
					<td><b>Curso: </b></td>
					<td><?php echo $cadastro->getcursop(); ?></td>
				</tr>
				<td><b>CPF: </b></td>
				<td><?php echo $cadastro->getCPF(); ?> </td>
				</tr>
				<td><b>Titulação: </b></td>
				<td><?php echo $cadastro->getTitulacao(); ?> </td>
				</tr>

			</table>
			<br />


			<br>
			<br>
			<center>
				<img src="./img/Mobilization-For-Adaptive-Websites.gif" alt="100" width="500">
			</center>
			<br>
			<br>
			<form align="center">
				<input type="button" value="Voltar" onClick="history.go(-1)" class="botao_voltar">
			</form>

		</body>

	</html>