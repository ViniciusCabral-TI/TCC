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

<div style="width: 1000px; height: 250px;"></div>
<?php
//selecionar informacao do banco

//vefirficar se o dado do banco esta lioberando o usuario com if

//exebir ou nao?
?>

</th>
</table>

<div style="padding-left: 150px">
<h1>Tabela de informações das turmas:</h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 700px">

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="100px"><b><center> ID da turma</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="200px" style="background-color: #F7F7F7"><b><center> Nome da turma</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="250px"><center> Nome do conselheiro da turma</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="50px"><b herf="del_turma.php"><center>Excluir</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="50px"><b herf="edit_turma.php"><center>Editar</b></th>
      </tr>
    </div>

<?php

require'conexaobd.php';

$sql = "SELECT turma.id_turma, turma.nome_turma, conselheiro.nome_professor FROM turma INNER JOIN conselheiro ON turma.professor_conselheiro = conselheiro.id_conselheiro ORDER BY id_turma";

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  echo"
    <tr>
       <td><center>".$cont['id_turma']."</td>
       <td><center>".$cont['nome_turma']."</td> 
       <td><center>".$cont['nome_professor']."</center></td>    
        <td><a href='del_turma.php?id_turma=".$cont['id_turma']."'><center><img height='30px' width='30px' src='img/trash.png'></a></td>           
       <td><a href='edit_turma.php?id_turma=".$cont['id_turma']."'><center><center><img height='30px' width='30px' src='img/lapis.png'></a></td>        
    </tr>";
}
?>
</table>
</div>
<div style="width: 1000px; height: 100px;"></div>

</table>
</div>
<div style="width: 1000px; height: 100px;"></div>

<div style="padding-left: 150px">
<h1>Pontos das turmas primeiro bimestre<h4>ordenados pelos pontos obtidos em ordem decrescente</h4></h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 700px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="150px"><center>Turma</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Pontos por notas</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="200px"><center>Descontos por disciplinas</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="150px"><center>Total de pontos</th>


      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="50px"><b herf="excluir.php"><center>Excluir</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="50px"><b herf="editar.php"><center>Editar</b></th>
      </tr>
    </div>

<?php

require'conexaobd.php';

$sql = "SELECT 1bim.turma, 1bim.desconto_disciplina, 1bim.total_1bim, 1bim.pontos_notas, turma.nome_turma FROM 1bim INNER JOIN turma ON 1bim.turma = turma.id_turma";

$resultado = mysqli_query($link, $sql);

$inc = 0;

while ($cont = mysqli_fetch_array($resultado)) 
{
  echo"
    <tr>
       <td><center>".$cont['nome_turma']."</td>
       <td><center>".$cont['pontos_notas']."</td>
       <th><center>".$cont['desconto_disciplina']."</th>     
       <th><center>".$cont['total_1bim']."</th>  
       <td><a href='del_primeiro.php?turma=".$cont['turma']."'><center><img height='30px' width='30px' src='img/trash.png'></a></td>
       <td><a href='edit_1bim.php?turma=".$cont['turma']."'><center><img height='30px' width='30px' src='img/lapis.png'></a></td>      
    </tr>
  ";
  $inc++;
}
?>
</table>
</div>
<div style="width: 1000px; height: 100px;"></div>

<div style="padding-left: 150px">
<h1>Pontos das turmas no segundo bimestre <h4>ordenados pelos pontos obtidos em ordem decrescente</h4></h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 1000px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="150px"><center>Turma</center></th>

      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Basqutebol</center></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Futebol</center></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Handbol</center></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Vôlei</center></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Total OlimpUnasp</center></th>   

      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Notas</center></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Bonus de notas</center></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Projeto Humanitário</center></th>  

      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="200px"><center>Descontos disciplinares</center></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="150px"><center>Total </center></th>


      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="60px"><b herf="excluir.php"><center>Excluir</center></b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="60px"><b herf="editar.php"><center>Editar</center></b></th>
      </tr>
    </div>

<?php

require'conexaobd.php';

$sql = "SELECT 2bim.id_2bim, 2bim.turma, 2bim.pontos_olimpunasp, 2bim.bonus_pontos_notas, 2bim.pontos_humanitario, 2bim.pontos_notas, 2bim.descontos_disciplina, 2bim.total_2bim,pontos_basquete.pontosb, pontos_futebol.pontosf, pontos_handbol.pontosh, pontos_volei.pontosv, turma.nome_turma FROM 2bim                    INNER JOIN turma ON 2bim.turma = turma.id_turma                                                                                                         INNER JOIN pontos_basquete ON 2bim.turma = pontos_basquete.turma                                                                                         INNER JOIN pontos_futebol ON 2bim.turma = pontos_futebol.turma                                                                                           INNER JOIN pontos_handbol ON 2bim.turma = pontos_handbol.turma                                                                                           INNER JOIN pontos_volei ON 2bim.turma = pontos_volei.turma ORDER BY total_2bim DESC";

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{
  echo"
    <tr>
       <td><center>".$cont['nome_turma']."</td>
       <td><center>".$cont['pontosb']."</td>
       <td><center>".$cont['pontosf']."</td>
       <td><center>".$cont['pontosh']."</td>
       <td><center>".$cont['pontosv']."</td>
       <td><center>".$cont['pontos_olimpunasp']."</td>
       <td><center>".$cont['pontos_notas']."</td>
       <td><center>".$cont['bonus_pontos_notas']."</td>
       <td><center>".$cont['pontos_humanitario']."</td>
       <th><center>".$cont['descontos_disciplina']."</th>     
       <th><center>".$cont['total_2bim']."</th>  
       <td><a href='del_segundo.php?id_2bim=".$cont['id_2bim']."'><center><img height='30px' width='30px' src='img/trash.png'></a></td>
       <td><a href='edit_2bim.php?id_2bim=".$cont['id_2bim']."'><center><img height='30px' width='30px' src='img/lapis.png'></a></td>      
    </tr>
  ";
}
?>
</table>
</div>
<div style="width: 1000px; height: 100px;"></div>

<div style="padding-left: 150px">
<h1>Pontos das turmas Terceiro bimestre<h4>ordenados pelos pontos obtidos em ordem decrescente</h4></h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 1050px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="150px"><center>Turma</center></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Notas</center></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Bonus</center></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Mérito Acadêmico</center></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Projeto Humanitario</center></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Olipíadas Gregas</center></th>   
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Corrida Maluca</center></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Descontos disciplinares</center></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Total</center></th> 
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="60px"><b herf="excluir.php"><center>Excluir</center></b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="60px"><b herf="editar.php"><center>Editar</center></b></th>
      </tr>
    </div>

<?php

require'conexaobd.php';

$sql = "SELECT 3bim.merito_academico, 3bim.bonus_pontos_notas, 3bim.pontos_olimp_gregas, 3bim.pontos_corrida_maluca, 3bim.pontos_humanitario, 3bim.pontos_notas, 3bim.desconto_disciplina, 3bim.total_3bim, 3bim.turma, turma.nome_turma FROM 3bim INNER JOIN turma ON 3bim.turma = turma.id_turma";

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{

  echo"
    <tr>
       <td><center>".$cont['nome_turma']."</td>
       <td><center>".$cont['pontos_notas']."</td>
       <td><center>".$cont['bonus_pontos_notas']."</td>
       <td><center>".$cont['merito_academico']."</td>
       <td><center>".$cont['pontos_humanitario']."</td>
       <td><center>".$cont['pontos_olimp_gregas']."</td>
       <td><center>".$cont['pontos_corrida_maluca']."</td>
       <th><center>".$cont['desconto_disciplina']."</th>     
       <th><center>".$cont['total_3bim']."</th>  
       <td><a href='del_terceiro.php?turma=".$cont['turma']."'><center><img height='30px' width='30px' src='img/trash.png'></a></td>
       <td><a href='edit_3bim.php?turma=".$cont['turma']."'><center><img height='30px' width='30px' src='img/lapis.png'></a></td>      
    </tr>
  ";
  $inc++;
}
?>
</table>
</div>
<div style="width: 1000px; height: 100px;"></div>

<div style="padding-left: 150px">
<h1>Pontos das turmas no quarto bimestre <h4>ordenados pelos pontos obtidos em ordem decrescente</h4></h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 700px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="150px"><center>Turma</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Jogos populares</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="200px"><center>Descontos disciplinares</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="150px"><center>Final geral</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="60px"><b herf="excluir.php"><center>Excluir</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="60px"><b herf="editar.php"><center>Editar</b></th>
      </tr>
    </div>

<?php

require'conexaobd.php';

$sql = "SELECT 4bim.turma, 4bim.desconto_disciplina, 4bim.pontos_finais, 4bim.pontos_jogos_populares, turma.nome_turma FROM 4bim INNER JOIN turma ON 4bim.turma = turma.id_turma";

$resultado = mysqli_query($link, $sql);

$inc = 0;

while ($cont = mysqli_fetch_array($resultado)) 
{

  echo"
    <tr>
       <td><center>".$cont['nome_turma']."</td>
       <td><center>".$cont['pontos_jogos_populares']."</td>
       <th><center>".$cont['desconto_disciplina']."</th>     
       <th><center>".$cont['pontos_finais']."</th>  
       <td><a href='del_quarto.php?turma=".$cont['turma']."'><center><img height='30px' width='30px' src='img/trash.png'></a></td>
       <td><a href='edit_4bim.php?turma=".$cont['turma']."'><center><img height='30px' width='30px' src='img/lapis.png'></a></td>      
    </tr>
  ";
  $inc++;
}
?>
</table>
</div>
<div style="width: 1000px; height: 100px;"></div>

<div style="padding-left: 150px">
<h1>Tabela dos resultados finais</h4></h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 300px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="60px"><center>Turma</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="60px"><center>Total</th>
      </tr>
    </div>

<?php

require'conexaobd.php';

$sql = "SELECT 4bim.turma, 4bim.pontos_finais, turma.nome_turma FROM 4bim INNER JOIN turma ON 4bim.turma = turma.id_turma" ;


$resultado = mysqli_query($link, $sql);



while ($cont = mysqli_fetch_array($resultado)) 
{

$total = $cont['pontos_finais'];
$id = $cont['turma'];

if ($total > 10000) 
{
  echo"
    <tr>
       <td style='background-color: PaleGreen'><center><b>".$cont['nome_turma']."</td>
       <td style='background-color: PaleGreen'><center><b>".$cont['pontos_finais']."</td>
    </tr>
  ";
}else{
 echo"
    <tr>
       <td style='background-color: Tomato'><center><b>".$cont['nome_turma']."</td>
       <td style='background-color: Tomato'><center><b>".$cont['pontos_finais']."</td>
    </tr>
  ";
}
  
}
?>

</table>
</div>
<div style="width: 1000px; height: 100px;"></div>

<div style="padding-left: 150px">

<h1>Tabela pontos OlimpUnasp</h4></h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 600px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="60px"><center>Turma</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Basquete</center></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Futebol</center></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Handbol</center></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Vôlei</center></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Total OlimpUnasp</center></th>   
      </tr>
    </div>

<?php

require'conexaobd.php';

$sql = "SELECT 2bim.turma, 2bim.pontosb, 2bim.pontosf, 2bim.pontosh, 2bim.pontosv, 2bim.pontos_olimpunasp, turma.nome_turma FROM 2bim INNER JOIN turma ON 2bim.turma = turma.id_turma" ;

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{
echo"
    <tr>
       <td><center>".$cont['nome_turma']."</td>
       <td><center>".$cont['pontosb']."</td>
       <td><center>".$cont['pontosf']."</td>
       <td><center>".$cont['pontosh']."</td>
       <td><center>".$cont['pontosv']."</td>
       <td><center>".$cont['pontos_olimpunasp']."</td>     
    </tr>
  ";
}
?>

</table>
</div>
<div style="width: 1000px; height: 100px;"></div>

<div style="padding-left: 150px">
<h1>registros de infrações das turma</h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 700px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="150px"><center>Turma</cente></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Infração</cente></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="200px"><center>Infrator</cente></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="150px"><center>Data da infração</cente></th>


      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="60px"><b herf="excluir.php"><center>Excluir</cente></b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="60px"><b herf="editar.php"><center>Editar</cente></b></th>
      </tr>
    </div>

<?php

require'conexaobd.php';

$sql = "SELECT cadastro_infracoes.id_cad_infra, cadastro_infracoes.turma, cadastro_infracoes.infracao, cadastro_infracoes.nome_infrator, cadastro_infracoes.data_infracao,tipo_infracao.descricao_infracao, turma.nome_turma FROM cadastro_infracoes INNER JOIN turma ON cadastro_infracoes.turma = turma.id_turma INNER JOIN tipo_infracao ON cadastro_infracoes.infracao = tipo_infracao.id_infracao ORDER BY nome_turma, nome_infrator, data_infracao ASC ";

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{
  echo"
    <tr>
       <td><center>".$cont['nome_turma']."</td>
       <td><center>".$cont['descricao_infracao']."</td>
       <th><center>".$cont['nome_infrator']."</th>     
       <th><center>".$cont['data_infracao']."</th>  
       <td><a href='del_infra.php?id_cad_infra=".$cont['id_cad_infra']."'><center><img height='30px' width='30px' src='img/trash.png'></a></td>
       <td><a href='edit_infra.php?id_cad_infra=".$cont['id_cad_infra']."'><center><img height='30px' width='30px' src='img/lapis.png'></a></td>      
    </tr>
  ";
  $inc++;
}
?>
</table>
</div>
<div style="width: 1000px; height: 100px;"></div>

<div style="padding-left: 150px">
<h1>Tabela de informações Olimpunasp - Modalidade: Basquete</h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 440px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="90px" style="background-color: #F7F7F7"><b><center> Nome da turma</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="70px"><center>Pontos</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="40px"><b herf="del_turma.php"><center>Excluir</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="40px"><b herf="edit_turma.php"><center>Editar</b></th>
      </tr>
    </div>

<?php

require'conexaobd.php';

$sql = "SELECT pontos_basquete.turma, pontos_basquete.pontosb, turma.nome_turma FROM pontos_basquete INNER JOIN turma ON pontos_basquete.turma = turma.id_turma ORDER BY pontosb DESC";
$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  echo"
    <tr>
       <td><center>".$cont['nome_turma']."</td>
       <td><center>".$cont['pontosb']."</td>          
       <td><a href='del_basquetep.php?turma=".$cont['turma']."'><center><img height='30px' width='30px' src='img/trash.png'></a></td>           
       <td><a href='edit_basquetep.php?turma=".$cont['turma']."'><center><center><img height='30px' width='30px' src='img/lapis.png'></a></td>        
    </tr>";
}
?>
</table>
</div>
<div style="width: 1000px; height: 100px;"></div>

<div style="padding-left: 150px" >
<h1>Tabela de informações Olimpunasp - Modalidade: Futebol</h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 440px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="90px" style="background-color: #F7F7F7"><b><center> Nome da turma</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="70px"><center>Pontos</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="40px"><b herf="del_turma.php"><center>Excluir</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="40px"><b herf="edit_turma.php"><center>Editar</b></th>
      </tr>
    </div>

<?php

require'conexaobd.php';

$sql = "SELECT pontos_futebol.turma, pontos_futebol.pontosf, turma.nome_turma FROM pontos_futebol INNER JOIN turma ON pontos_futebol.turma = turma.id_turma ORDER BY pontosf DESC";
$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  echo"
    <tr>
       <td><center>".$cont['nome_turma']."</td>
       <td><center>".$cont['pontosf']."</td>          
       <td><a href='del_futebolp.php?turma=".$cont['turma']."'><center><img height='30px' width='30px' src='img/trash.png'></a></td>           
       <td><a href='edit_futebolp.php?turma=".$cont['turma']."'><center><center><img height='30px' width='30px' src='img/lapis.png'></a></td>        
    </tr>";
}
?>
</table>
</div>
<div style="width: 1000px; height: 100px;"></div>

<div style="padding-left: 150px">
<h1>Tabela de informações Olimpunasp - Modalidade: Handbol</h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 440px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="90px" style="background-color: #F7F7F7"><b><center> Nome da turma</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="70px"><center>Pontos</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="40px"><b herf="del_turma.php"><center>Excluir</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="40px"><b herf="edit_turma.php"><center>Editar</b></th>
      </tr>
    </div>

<?php

require'conexaobd.php';

$sql = "SELECT pontos_handbol.turma, pontos_handbol.pontosh, turma.nome_turma FROM pontos_handbol INNER JOIN turma ON pontos_handbol.turma = turma.id_turma ORDER BY pontosh DESC";
$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  echo"
    <tr>
       <td><center>".$cont['nome_turma']."</td>
       <td><center>".$cont['pontosh']."</td>          
       <td><a href='del_handbolp.php?turma=".$cont['turma']."'><center><img height='30px' width='30px' src='img/trash.png'></a></td>           
       <td><a href='edit_handbolp.php?turma=".$cont['turma']."'><center><center><img height='30px' width='30px' src='img/lapis.png'></a></td>        
    </tr>";
}
?>
</table>
</div>
<div style="width: 1000px; height: 100px;"></div>

<div style="padding-left: 150px">
<h1>Tabela de informações Olimpunasp - Modalidade: Vôlei</h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 440px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="90px" style="background-color: #F7F7F7"><b><center> Nome da turma</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="70px"><center>Pontos</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="40px"><b herf="del_turma.php"><center>Excluir</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="40px"><b herf="edit_turma.php"><center>Editar</b></th>
      </tr>
    </div>

<?php

require'conexaobd.php';

$sql = "SELECT pontos_volei.turma, pontos_volei.pontosv, turma.nome_turma FROM pontos_volei INNER JOIN turma ON pontos_volei.turma = turma.id_turma ORDER BY pontosv DESC";
$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  echo"
    <tr>
       <td><center>".$cont['nome_turma']."</td>
       <td><center>".$cont['pontosv']."</td>          
       <td><a href='del_voleip.php?turma=".$cont['turma']."'><center><img height='30px' width='30px' src='img/trash.png'></a></td>           
       <td><a href='edit_voleip.php?turma=".$cont['turma']."'><center><center><img height='30px' width='30px' src='img/lapis.png'></a></td>        
    </tr>";
}
?>
</table>
</div>
<div style="width: 1000px; height: 100px;"></div>
 
 <div style="padding-left: 150px">
<h1>Gerenciador</h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 400px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="175px" style="background-color: #F7F7F7"><b><center>Nome da tabela</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="175px"><center>Estado</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="50px"><b herf="edit_turma.php"><center>Editar</b></th>
      </tr>
    </div>

<?php

require'conexaobd.php';

$sql = "SELECT gerenciador.estado,gerenciador.nome_tabela,tipo_estado.descricao,gerenciador.id_gerenciador FROM gerenciador INNER JOIN tipo_estado ON gerenciador.estado = tipo_estado.id_estado ORDER BY nome_tabela ASC";

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{       
  echo"
    <tr>
       <td><center>".$cont['nome_tabela']."</td>
       <td><center>".$cont['descricao']."</td>                    
       <td><a href='edit_controlador.php?id_gerenciador=".$cont['id_gerenciador']."'><center><center><img height='30px' width='30px' src='img/lapis.png'></a></td>        
    </tr>";
}
?>
</table>
</div>
<div style="width: 1000px; height: 200px;"></div> 
 
 <div style="width: 1000px; height: 10px;"></div>
 <?php require'rodape.php'; ?>


<a aria-label="home" id="snap-home" title="UNASP EDUCAÇÃO A DISTÂNCIA" class="logo" href="https://unasp.mrooms.net"><span class="sr-only">UNASP EDUCAÇÃO A DISTÂNCIA</span></a>