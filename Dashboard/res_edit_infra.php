<?php

	$infracao = $_POST['infracao'];
	$nome = $_POST['nome'];
	$turma = $_POST['turma'];
	$data = $_POST['data'];
	$bimestre = $_POST['bimestre'];
    $id_cad_infra = $_POST['id_cad_infra'];

	require ('conexaobd.php');

    echo "$infracao
$nome
$turma
$data
$bimestre
$id_cad_infra";

	$sqlupdate = "UPDATE cadastro_infracoes SET id_cad_infra = '$id_cad_infra', infracao = '$infracao', nome_infrator = '$nome', data_infracao = '$data', turma = '$turma', bimestre = '$bimestre' WHERE id_cad_infra = '$id_cad_infra'";






	mysqli_query($link, $sqlupdate)or die("Não foi possível atualizar os jogadores no banco");

	echo '<script language="javascript">';
    echo 'alert("Dados atualizados com sucesso!!!")';
    echo '</script>';

    echo '<script language="javascript">';
    echo 'location.href="tabelas.php";';
   echo '</script>';

?>