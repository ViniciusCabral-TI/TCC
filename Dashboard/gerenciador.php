<div style="padding-left: 150px">
<h1>Gerenciador</h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 700px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="200px" style="background-color: #F7F7F7"><b><center>Nome da tabela</b></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="250px"><center>Estado</th>
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
       <td><a href='edit_controlador.php?nome_tabela=".$cont['nome_tabela']."'><center><center><img src='https://img.icons8.com/android/24/000000/pencil.png'></a></td>        
    </tr>";
}
?>
</table>
</div>
<div style="width: 1000px; height: 200px;"></div>