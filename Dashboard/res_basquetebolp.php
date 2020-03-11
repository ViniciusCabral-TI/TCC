<?php

	$turma = $_POST['turma'];
	$pontos = $_POST['pontos'];
	
	require ('conexaobd.php');

	$sqlinsert = "INSERT INTO pontos_basquete (id, turma, pontosb ) VALUES ('', '$turma', '$pontos')";

	mysqli_query($link, $sqlinsert)or die("Não foi possível cadastrar os jogadores no banco");

	echo '<script language="javascript">';
    echo 'alert("Dados cadastrados com sucesso!!!")';
    echo '</script>';

    echo '<script language="javascript">';
    echo 'location.href="Basquetebolp.php";';
    echo '</script>';

?>