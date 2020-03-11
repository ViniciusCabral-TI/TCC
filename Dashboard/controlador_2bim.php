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


      
      </tr>
    </div>

<?php

require'conexaobd.php';

$sql = "SELECT 2bim.turma, 2bim.pontos_olimpunasp, 2bim.bonus_pontos_notas, 2bim.pontos_humanitario, 2bim.pontos_notas, 2bim.descontos_disciplina, 2bim.total_2bim,pontos_basquete.pontosb, pontos_futebol.pontosf, pontos_handbol.pontosh, pontos_volei.pontosv, turma.nome_turma FROM 2bim                     INNER JOIN turma ON 2bim.turma = turma.id_turma                                                                                                         INNER JOIN pontos_basquete ON 2bim.turma = pontos_basquete.turma                                                                                         INNER JOIN pontos_futebol ON 2bim.turma = pontos_futebol.turma                                                                                           INNER JOIN pontos_handbol ON 2bim.turma = pontos_handbol.turma                                                                                           INNER JOIN pontos_volei ON 2bim.turma = pontos_volei.turma ";

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
       
    </tr>
  ";
}
?>
</table>
</div>