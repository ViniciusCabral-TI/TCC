<?php

	$turma = $_POST['turma'];
	$pontos = $_POST['pontos'];
	$id = $_POST['id'];
	
	require ('conexaobd.php');

	$sqlupdate = "UPDATE pontos_volei SET id = '$id', turma = '$turma', pontosv = '$pontos' WHERE id = '$id'";

	mysqli_query($link, $sqlupdate)or die("Não foi possível atualizar no banco");

	echo '<script language="javascript">';
    echo 'alert("Dados atualizados com sucesso!!!")';
    echo '</script>';

    echo '<script language="javascript">';
    echo 'location.href="tabelas.php";';
    echo '</script>';

?>