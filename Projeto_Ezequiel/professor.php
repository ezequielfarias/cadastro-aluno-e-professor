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