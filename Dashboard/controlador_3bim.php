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
        
    </tr>
  ";
  $inc++;
}
?>
</table>
</div>