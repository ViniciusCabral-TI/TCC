<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Listagem</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://img.icons8.com/ios/50/000000/trophy-filled.png">  
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    
   
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body>

<?php require("menu.php");?>

<div style="width: 1000px; height: 200px;"></div>

<?php

require'conexaobd.php';

$sql = "SELECT estado FROM gerenciador WHERE nome_tabela = 'Turma'";

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  if ($cont['estado'] == 1) {
  require"controlador_turma.php";
  }else{
   
  }
}

?>

<div style="width: 1000px; height: 60px;"></div>

<?php

require'conexaobd.php';

$sql = "SELECT estado FROM gerenciador WHERE nome_tabela = 'Volei'";

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  if ($cont['estado'] == 1) {
  require"controlador_volei.php";
  }else{
   
  }
}

?>

<div style="width: 1000px; height: 60px;"></div>

<?php

require'conexaobd.php';

$sql = "SELECT estado FROM gerenciador WHERE nome_tabela = 'Olimpunasp'";

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  if ($cont['estado'] == 1) {
  require"controlador_olimpunasp.php";
  }else{
   
  }
}

?>

<div style="width: 1000px; height: 60px;"></div>

<?php

require'conexaobd.php';

$sql = "SELECT estado FROM gerenciador WHERE nome_tabela = 'Handbol'";

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  if ($cont['estado'] == 1) {
  require"controlador_handbol.php";
  }else{
   
  }
}

?>

<div style="width: 1000px; height: 60px;"></div>

<?php

require'conexaobd.php';

$sql = "SELECT estado FROM gerenciador WHERE nome_tabela = 'Futebol'";

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  if ($cont['estado'] == 1) {
  require"controlador_futebol.php";
  }else{
   
  }
}

?>

<div style="width: 1000px; height: 60px;"></div>

<?php

require'conexaobd.php';

$sql = "SELECT estado FROM gerenciador WHERE nome_tabela = 'Basquete'";

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  if ($cont['estado'] == 1) {
  require"controlador_basquete.php";
  }else{
   
  }
}

?>

<div style="width: 1000px; height: 60px;"></div>

<?php

require'conexaobd.php';

$sql = "SELECT estado FROM gerenciador WHERE nome_tabela = 'infracoes'";

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  if ($cont['estado'] == 1) {
  require"controlador_infra.php";
  }else{
   
  }
}

?>

<div style="width: 1000px; height: 60px;"></div>

<?php

require'conexaobd.php';

$sql = "SELECT estado FROM gerenciador WHERE nome_tabela = '1bim'";

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  if ($cont['estado'] == 1) {
  require"controlador_1bim.php";
  }else{
   
  }
}

?>

<div style="width: 1000px; height: 60px;"></div>

<?php

require'conexaobd.php';

$sql = "SELECT estado FROM gerenciador WHERE nome_tabela = '2bim'";

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  if ($cont['estado'] == 1) {
  require"controlador_2bim.php";
  }else{
   
  }
}

?>

<div style="width: 1000px; height: 60px;"></div>

<?php

require'conexaobd.php';

$sql = "SELECT estado FROM gerenciador WHERE nome_tabela = '3bim'";

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  if ($cont['estado'] == 1) {
  require"controlador_3bim.php";
  }else{
   
  }
}

?>

<div style="width: 1000px; height: 60px;"></div>

<?php

require'conexaobd.php';

$sql = "SELECT estado FROM gerenciador WHERE nome_tabela = '4bim'";

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  if ($cont['estado'] == 1) {
  require"controlador_4bim.php";
  }else{
   
  }
}

?>

<div style="width: 1000px; height: 60px;"></div>

<?php

require'conexaobd.php';

$sql = "SELECT estado FROM gerenciador WHERE nome_tabela = 'Final'";

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  if ($cont['estado'] == 1) {
  require"controlador_final.php";
  }else{
   
  }
}

?>

















<div style="width: 1000px; height: 200px;"></div>
 <?php require'rodape.php'; ?>
