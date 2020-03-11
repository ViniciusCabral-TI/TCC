<?php
    $pontosprimeiro = $_POST['pontosprimeiro'];
	$turma = $_POST['turma'];
	$outros = $_POST['outros'];
    $desconto = 0;
    $total = 0;
    $sub = $pontosprimeiro + $outros;	

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

	$sqlinsert = "INSERT INTO 1bim (id_1bim, pontos_notas, desconto_disciplina, total_1bim, turma ) VALUES ('', '$pontosprimeiro', '$desconto', '$total', '$turma')";

	mysqli_query($link, $sqlinsert)or die("Não foi possível cadastrar os jogadores no banco");

	echo '<script language="javascript">';
    echo 'alert("Dados cadastrados com sucesso!!!")';
     echo '</script>';
 
    echo '<script language="javascript">';
    echo 'location.href="primeiro.php";';
    echo '</script>';

?>