<?php
$id_turma = $_GET['id_turma'];
require 'conexaobd.php';

$sql ="DELETE FROM turma WHERE id_turma  = $id_turma";

mysqli_query($link, $sql) or die("Não foi possível deletar!!");

echo '<script language="javascript">';
echo 'alert("Dados deletados com sucesso!!!")';
echo '</script>';

echo '<script language="javascript">';
echo 'location.href="tabelas.php";';
echo '</script>';


?>