<div style="padding-left: 150px">
<h1>Tabela de informações dos alunos:</h1>

<table border="2px" style="border-color: black; font-family: Arial; width: 700px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="100px"><b><center> RA do aluno</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="200px" style="background-color: #F7F7F7"><b><center> Nome do aluno</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="150px"><center> Telefone(celular)</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="60px"><b herf="excluir.php"><center>Excluir</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="60px"><b herf="editar.php"><center>Editar</b></th>
      </tr>
    </div>

<?php

require'conexaobd.php';

$sql = "SELECT * FROM aluno" ;

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{
echo"
    <tr>
       <td><center>".$cont['ra_aluno']."</td>
       <td><center>".$cont['nome_aluno']."</td>
       <th><center>".$cont['celular']."</th>     
       <td><a href='del_aluno.php?ra_aluno=".$cont['ra_aluno']."'><center><img src='https://img.icons8.com/android/24/000000/delete.png'></a></td>
       <td><a href='edit_aluno.php?ra_aluno=".$cont['ra_aluno']."'><center><img src='https://img.icons8.com/android/24/000000/pencil.png'></a></td>      
    </tr>
  ";
}
?>