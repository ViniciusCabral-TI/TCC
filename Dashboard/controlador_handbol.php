<div style="padding-left: 150px">
<h1>Tabela de informações Olimpunasp - Modalidade: Handbol</h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 700px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="200px" style="background-color: #F7F7F7"><b><center> Nome da turma</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="250px"><center>Pontos</th>

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
      
    </tr>";
}
?>
</table>
</div>
