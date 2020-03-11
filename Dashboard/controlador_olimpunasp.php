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