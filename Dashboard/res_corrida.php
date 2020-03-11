<?php

	$turma = $_POST['turma'];
	$numprovas = $_POST['numprovas'];
	$pontosprova = $_POST['pontosprova'];
	$outros = $_POST['outros'];

	$sub = $numprovas * $pontosprova;
	$total =  $sub + $outros;

	require ('conexaobd.php');

	$sqlinsert = "INSERT INTO corrida_maluca (id_corrida_maluca, provas_concluidas, pontos_por_prova, total_pontos, turma ) VALUES ('', '$numprovas', '$pontosprova', '$total', '$turma')";

	mysqli_query($link, $sqlinsert)or die("Não foi possível cadastrar os pontos no banco");

	echo '<script language="javascript">';
    echo 'alert("Dados cadastrados com sucesso!!!")';
    echo '</script>';

    echo '<script language="javascript">';
    echo 'location.href="pontoscorrida.php";';
    echo '</script>';

?>