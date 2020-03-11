<?php
$id_cad_infra = $_GET['id_cad_infra'];
require 'conexaobd.php';

$sql = "DELETE FROM cadastro_infracoes WHERE id_cad_infra = '$id_cad_infra'";

mysqli_query($link, $sql) or die("Não foi possível deletar!!");

echo '<script language="javascript">';
echo 'alert("Dados deletados com sucesso!!!")';
echo '</script>';

echo '<script language="javascript">';
echo 'location.href="tabelas.php";';
echo '</script>';


?>