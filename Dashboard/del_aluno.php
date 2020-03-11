<?php
$ra_aluno = $_GET['ra_aluno'];
require 'conexaobd.php';

$sql = "DELETE FROM aluno WHERE ra_aluno = '$ra_aluno'";

mysqli_query($link, $sql) or die("Não foi possível deletar!!");

echo '<script language="javascript">';
echo 'alert("Dados deletados Com Sucesso!!!")';
echo '</script>';

echo '<script language="javascript">';
echo 'location.href="tabelas.php";';
echo '</script>';


?>