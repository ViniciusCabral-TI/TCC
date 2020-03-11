<?php
   
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$class = $_POST['class'];
	$grau = $_POST['grau'];
	
	require ('conexaobd.php');

	$sqlinsert = "INSERT INTO login (id_usuario, usuario, senha, class, grau_escolar ) VALUES ('', '$usuario', '$senha', '$class', '$grau')";

	mysqli_query($link, $sqlinsert)or die("Não foi possível cadastrar os jogadores no banco");

	echo '<script language="javascript">';
    echo 'alert("Dados cadastrados com sucesso!!!")';
    echo '</script>';

    echo '<script language="javascript">';
    echo 'location.href="register.php";';
    echo '</script>';

?>