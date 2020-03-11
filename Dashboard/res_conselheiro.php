<?php

	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$materia = $_POST['materia'];
	
	
	require ('conexaobd.php');

	$sqlinsert = "INSERT INTO conselheiro (id_conselheiro, nome_professor, telefone, materia) VALUES ('','$nome', '$telefone', '$materia')";

	mysqli_query($link, $sqlinsert)or die("Não foi possível cadastrar os alunos no banco");

	echo '<script language="javascript">';
    echo 'alert("Dados cadastrados com sucesso!!!")';
    echo '</script>';

    echo '<script language="javascript">';
    echo 'location.href="conselheiro.php";';
    echo '</script>';

?>