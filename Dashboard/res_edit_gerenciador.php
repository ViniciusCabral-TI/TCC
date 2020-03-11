<?php

	$estado = $_POST['estado'];
	$nome = $_POST['nome'];
	$id_gerenciador = $_POST['id'];

    require ('conexaobd.php');

	$sqlupdate = "UPDATE gerenciador SET id_gerenciador= '$id_gerenciador', nome_tabela = '$nome', estado = '$estado' WHERE id_gerenciador = '$id_gerenciador'";

	mysqli_query($link, $sqlupdate)or die("Não foi possível alterar no banco");

	echo '<script language="javascript">';
    echo 'alert("Dados atualizados com sucesso!!!")';
    echo '</script>';
 
    echo '<script language="javascript">';
    echo 'location.href="tabelas.php";';
    echo '</script>';


?>