<?php

	$nome = $_POST['nome'];
	$numa = $_POST['numa'];
	$nums = $_POST['nums'];
	$conselheiro = $_POST['conselheiro'];
	require ('conexaobd.php');

	$sqlinsert = "INSERT INTO turma (id_turma, nome_turma, numero_alunos, numero_sala, professor_conselheiro ) VALUES ('', '$nome', '$numa', '$nums', '$conselheiro')";

	mysqli_query($link, $sqlinsert)or die("Não foi possível cadastrar os jogadores no banco");

	echo '<script language="javascript">';
    echo 'alert("Dados cadastrados com sucesso!!!")';
    echo '</script>';

    echo '<script language="javascript">';
    echo 'location.href="turma.php";';
    echo '</script>';

?>