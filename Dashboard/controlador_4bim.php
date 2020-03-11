<div style="padding-left: 150px">
<h1>Pontos das turmas no quarto bimestre <h4>ordenados pelos pontos obtidos em ordem decrescente</h4></h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 700px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="150px"><center>Turma</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Jogos populares</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="200px"><center>Descontos disciplinares</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="150px"><center>Final geral</th>
     
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
      
    </tr>
  ";
  $inc++;
}
?>
</table>
</div>