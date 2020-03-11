<?php
$turma = $_GET['turma'];
require 'conexaobd.php';

$sql = "DELETE FROM pontos_futebol WHERE turma = '$turma'";

mysqli_query($link, $sql) or die("Não foi possível deletar!!");

echo '<script language="javascript">';
echo 'alert("Dados deletados Com Sucesso!!!")';
echo '</script>';

echo '<script language="javascript">';
echo 'location.href="tabelas.php";';
echo '</script>';


?>