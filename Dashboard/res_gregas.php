<?php

$turma = $_POST['turma'];
$velocidade = $_POST['velocidade'];
$revezamento = $_POST['revezamento'];
$resistencia = $_POST['resistencia'];
$altura = $_POST['altura'];
$distancia = $_POST['distancia'];
$genero = $_POST['genero'];
$dardo = $_POST['dardo'];
$peso = $_POST['peso'];
$inc = 0;

    require('conexaobd.php');
    $sql = "SELECT * FROM olimpiadas_gregas WHERE turma ='$turma' AND genero = '$genero'";
    if($sql != NULL)
    {
    $resultado = mysqli_query($link, $sql);
    while ($cont = mysqli_fetch_array($resultado)) 
    {  
        $num = $cont['turma'];       
        $inc++;
        if ($inc = 2) 
        {
          echo '<script language="javascript">';
          echo 'alert("Ja há dados existentes para sua turma")';
          echo '</script>';

          echo '<script language="javascript">';
          echo 'location.href="gregas.php";';
          echo '</script>';
          break;
        }
    }
}

include('conexaobd.php');

$sqlinsert = "INSERT INTO olimpiadas_gregas ( turma, velocidade, revezamento, resistencia, altura, distancia, peso, dardo, genero) VALUES ( '$turma',
'$velocidade','$revezamento','$resistencia','$altura','$distancia','$peso','$dardo','$genero')";

mysqli_query($link, $sqlinsert) or die("Não foi possível armazenar no banco");

echo '<script language="javascript">';
echo 'alert("Dados cadastrados com sucesso!!!")';
echo '</script>';

echo '<script language="javascript">';
echo 'location.href="gregas.php";';
echo '</script>';
?>