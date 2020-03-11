<div style="padding-left: 150px">
<h1>registros de infrações das turma</h1>
<table border="2px" style="border-color: black; font-family: Arial; width: 700px" >

    <div class="titulos">
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="150px"><center>Turma</cente></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="170px"><center>Infração</cente></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="200px"><center>Infrator</cente></th>
      <th style="font-size: 13px; color: #999999" align="center" height="30px" width="150px"><center>Data da infração</cente></th>
      </tr>
    </div>

<?php

require'conexaobd.php';

$sql = "SELECT cadastro_infracoes.id_cad_infra, cadastro_infracoes.turma, cadastro_infracoes.infracao, cadastro_infracoes.nome_infrator, cadastro_infracoes.data_infracao,tipo_infracao.descricao_infracao, turma.nome_turma FROM cadastro_infracoes INNER JOIN turma ON cadastro_infracoes.turma = turma.id_turma INNER JOIN tipo_infracao ON cadastro_infracoes.infracao = tipo_infracao.id_infracao ORDER BY nome_turma, nome_infrator, data_infracao ASC ";

$resultado = mysqli_query($link, $sql);

while ($cont = mysqli_fetch_array($resultado)) 
{
  echo"
    <tr>
       <td><center>".$cont['nome_turma']."</td>
       <td><center>".$cont['descricao_infracao']."</td>
       <th><center>".$cont['nome_infrator']."</th>     
       <th><center>".$cont['data_infracao']."</th>       
    </tr>
  ";
}
?>
</table>
</div>
