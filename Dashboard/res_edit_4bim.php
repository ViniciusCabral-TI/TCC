<?php

    $populares = $_POST['populares'];
	$turma = $_POST['turma'];	
    $id_4bim = $_POST['id_4bim']; 
    $total_bimestres = 0;
    $desconto_total = 0;

	require ('conexaobd.php');

    $sql = "SELECT * FROM 1bim WHERE turma ='$turma'";
    $resultado = mysqli_query($link, $sql);
    while ($cont = mysqli_fetch_array($resultado)) 
    {  
        $total_1bim = $cont['total_1bim'];
        $total_bimestres = $total_bimestres + $total_1bim;

    }
     $sql = "SELECT * FROM 2bim WHERE turma ='$turma'";
    $resultado = mysqli_query($link, $sql);
    while ($cont = mysqli_fetch_array($resultado)) 
    {  
        $total_2bim = $cont['total_2bim'];
        $total_bimestres = $total_bimestres + $total_2bim;
        
    }
     $sql = "SELECT * FROM 3bim WHERE turma ='$turma'";
    $resultado = mysqli_query($link, $sql);
    while ($cont = mysqli_fetch_array($resultado)) 
    {  
        $total_3bim = $cont['total_3bim'];
        $total_bimestres = $total_bimestres + $total_3bim;
    }

    $bimestres = $total_bimestres;



    $sql = "SELECT * FROM cadastro_infracoes WHERE turma ='$turma' and bimestre = '4'";
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
        $bimestres = $bimestres - $desconto;  
        $desconto_total = $desconto_total + $desconto;
        
    }

     $desconto_total = $desconto_total +  0;
     $total = $bimestres + $populares;  
     
     $total_final = $total - $desconto_total; 
     
     
    if ($total_final >= 10000) 
    {
        $resultado = 1;
    }
    else
        {
            $resultado = 2;
        }


	$sqlupdate = "UPDATE 4bim SET 
    id_4bim = '$id_4bim', 
    pontos_jogos_populares = '$populares', 
    pontos_finais = '$total_final', 
    resultado = '$resultado', 
    turma ='$turma', 
    desconto_disciplina = '$desconto_total' WHERE id_4bim = '$id_4bim'";

	mysqli_query($link, $sqlupdate)or die("Não foi possível atualizar os dados no banco");

	echo '<script language="javascript">';
    echo 'alert("Dados atualizados com sucesso!!!")';
    echo '</script>';
 
    echo '<script language="javascript">';
    echo 'location.href="tabelas.php";';
    echo '</script>';

?>