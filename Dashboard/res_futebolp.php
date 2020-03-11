<?php

	$id_turma = $_POST['turma'];
	$pontos = $_POST['pontos'];
	
	require ('conexaobd.php');

	$sqlinsert = "INSERT INTO pontos_futebol (id, turma, pontosf ) VALUES ('', '$id_turma', '$pontos')";

	mysqli_query($link, $sqlinsert)or die("Não foi possível cadastrar os jogadores no banco");

	echo '<script language="javascript">';
    echo 'alert("Dados cadastrados com sucesso!!!")';
    echo '</script>';

    echo '<script language="javascript">';
    echo 'location.href="Futebolp.php";';
    echo '</script>';

?>