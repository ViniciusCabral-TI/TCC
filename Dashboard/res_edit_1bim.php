<?php
	$turma = $_POST['turma'];
    $notas = $_POST['notas'];
    $desconto = 0;
    $total = 0;
    $sub = $notas + 0;
    	

	require ('conexaobd.php');

	$sql = "SELECT * FROM cadastro_infracoes WHERE turma ='$turma' and bimestre = '1'";
    $resultado = mysqli_query($link, $sql);
    while ($cont = mysqli_fetch_array($resultado)) 
    {  
    	$infracao = $cont['infracao'];

    	$sql = "SELECT * FROM tipo_infracao WHERE id_infracao ='$infracao'";
        $resultado = mysqli_query($link, $sql);
        while ($cont = mysqli_fetch_array($resultado))
        {
              $desconto = $desconto + $cont['pontuacao'];
        } 
    }
    $total = $sub - $desconto;

	$sqlupdate = "UPDATE 1BIM SET id_1bim ='', pontos_notas = '$notas', desconto_disciplina='$desconto', total_1bim='$total', turma = '$turma' WHERE turma = '$turma'";

	mysqli_query($link, $sqlupdate)or die("Não foi possível atualizar no banco");

	echo '<script language="javascript">';
    echo 'alert("Dados atualizados com sucesso!!!")';
     echo '</script>';
 
    echo '<script language="javascript">';
    echo 'location.href="primeiro.php";';
    echo '</script>';

?>