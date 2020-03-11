<?php

	$ra = $_POST['ra'];
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$celular = $_POST['celular'];
	$pai = $_POST['pai'];
	$mae = $_POST['mae'];
	$municipio = $_POST['municipio'];
	$estado = $_POST['estado'];
	$email = $_POST['email'];
	$genero = $_POST['genero'];
	$cep = $_POST['cep'];
	$nasc = $_POST['nasc'];
	$turma = $_POST['turma'];
	
	require ('conexaobd.php');

	$sqlinsert = "INSERT INTO aluno (ra_aluno, nome_aluno, idade, celular, nome_pai, nome_mae, municipio, estado, email, sexo, cep, data_nascimento, turma) VALUES ('ra', '$nome', '$idade', '$celular', '$pai', '$mae', '$municipio', '$estado', '$email', '$genero', '$cep', '$nasc', '$turma')";

	mysqli_query($link, $sqlinsert)or die("Não foi possível cadastrar o aluno no banco");

	echo '<script language="javascript">';
    echo 'alert("Dados cadastrados com sucesso!!!")';
    echo '</script>';

    echo '<script language="javascript">';
    echo 'location.href="aluno.php";';
    echo '</script>';

?>