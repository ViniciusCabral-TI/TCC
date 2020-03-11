<?php

	$infracao = $_POST['infracao'];
	$nome = $_POST['nome'];
	$turma = $_POST['turma'];
	$data = $_POST['data'];
	$bimestre = $_POST['bimestre'];

	require ('conexaobd.php');

	$sqlinsert = "INSERT INTO cadastro_infracoes (id_cad_infra, infracao, nome_infrator, data_infracao, turma, bimestre) VALUES ('', '$infracao', '$nome', '$data', '$turma', '$bimestre')";

	mysqli_query($link, $sqlinsert)or die("Não foi possível cadastrar os jogadores no banco");

	echo '<script language="javascript">';
    echo 'alert("Dados cadastrados com sucesso!!!")';
    echo '</script>';

    echo '<script language="javascript">';
    echo 'location.href="infracoes.php";';
    echo '</script>';

?>