<?php
    
    $id_turma = $_POST['id_turma'];
	$nome = $_POST['nome'];
	$numa = $_POST['numa'];
	$nums = $_POST['nums'];
	$conselheiro = $_POST['conselheiro'];
	require ('conexaobd.php');

	$sqlinsert = "UPDATE turma SET 
	id_turma = '$id_turma',
    nome_turma = '$nome', 
    numero_alunos = '$numa', 
    numero_sala = '$nums', 
    professor_conselheiro = '$conselheiro' WHERE id_turma = '$id_turma'";

	mysqli_query($link, $sqlinsert)or die("Não foi possível cadastrar os jogadores no banco");

	echo '<script language="javascript">';
    echo 'alert("Dados cadastrados com sucesso!!!")';
    echo '</script>';

    echo '<script language="javascript">';
    echo 'location.href="tabelas.php";';
    echo '</script>';

?>