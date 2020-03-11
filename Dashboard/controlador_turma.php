<div style="padding-left: 150px">
<h1>Tabela de informações das turmas:</h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 700px">

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="100px"><b><center> ID da turma</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="200px" style="background-color: #F7F7F7"><b><center> Nome da turma</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="250px"><center> Nome do conselheiro da turma</th>
      
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
       
    </tr>";
}
?>
</table>
</div>
