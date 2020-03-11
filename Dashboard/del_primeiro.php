<?php
$turma = $_GET['turma'];
require 'conexaobd.php';

$sql = "DELETE FROM 1bim WHERE turma = '$turma'";

mysqli_query($link, $sql) or die ("Não foi possível completar a ação!!!");

echo '<script language="javascript">';
echo 'alert("Dados deletados com sucesso!!!")';
echo '</script>';

echo '<script language="javascript">';
echo 'location.href="tabelas.php";';
echo '</script>';


?>