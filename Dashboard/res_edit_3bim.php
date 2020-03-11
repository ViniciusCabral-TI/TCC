<?php
    $id_3bim = $_POST['id_3bim']; 
    $notas = $_POST['notas'];
    $bonus = $_POST['bonus'];
    $merito = $_POST['merito'];
    $humanitario = $_POST['humanitario'];
    $gregas = $_POST['gregas'];
    $outros = $_POST['outros'];
	$turma = $_POST['turma'];
	$cad =  $notas + $bonus + $merito + $humanitario + $gregas + $outros;
    $operacao = 0;
    $fun = 0;

	require ('conexaobd.php');

    $sql = "SELECT * FROM cadastro_infracoes WHERE turma ='$turma' and bimestre = '3'";
    $resultado = mysqli_query($link, $sql);
    while ($cont = mysqli_fetch_array($resultado)) 
    {  
        $infracao = $cont['infracao'];
        $desconto = 0;

        $sql = "SELECT pontuacao FROM tipo_infracao WHERE id_infracao ='$infracao'";
        $resultado = mysqli_query($link, $sql);
        while ($cont = mysqli_fetch_array($resultado))
        {            
              $pontos = $cont['pontuacao'];
              $desconto = $desconto + $pontos;
        } 
        $
        $operacao = $operacao + $cad - $desconto;
        $fun = $fun + $desconto;
    }  

    $sql = "SELECT * FROM corrida_maluca WHERE turma ='$turma'";
    $resultado = mysqli_query($link, $sql);
    while ($cont = mysqli_fetch_array($resultado)) 
    {  
        $pontos = $cont['total_pontos'];
    }

    $total = $cad + $pontos;

	$sqlinsert = "UPDATE 3bim SET 
    id_3bim = '$id_3bim', 
    pontos_notas = '$notas', 
    bonus_pontos_notas = '$bonus', 
    merito_academico = '$merito', 
    pontos_humanitario = '$humanitario', 
    pontos_olimp_gregas = '$gregas', 
    pontos_corrida_maluca = '$pontos', 
    desconto_disciplina = '$fun', 
    total_3bim = '$total', 
    turma = '$turma' WHERE id_3bim = '$id_3bim'";








	mysqli_query($link, $sqlinsert)or die("Não foi possível cadastrar os dados no banco");

	echo '<script language="javascript">';
    echo 'alert("Dados cadastrados com sucesso!!!")';
     echo '</script>';
 
    echo '<script language="javascript">';
    echo 'location.href="terceiro.php";';
    echo '</script>';

?>