<div style="padding-left: 150px">
<h1>Pontos das turmas primeiro bimestre<h4>ordenados pelos pontos obtidos em ordem decrescente</h4></h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 700px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="150px"><center>Turma</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Pontos por notas</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="200px"><center>Descontos por disciplinas</th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="150px"><center>Total de pontos</th>



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
    </tr>
  ";
  $inc++;
}
?>
</table>
</div>