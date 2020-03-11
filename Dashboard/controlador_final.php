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