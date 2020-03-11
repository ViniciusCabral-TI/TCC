<?php
    $populares = $_POST['populares'];
	$turma = $_POST['turma'];
	$outros = $_POST['outros'];	
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
     $total = $bimestres + $populares + $outros;  
     
     $total_final = $total - $desconto_total; 
     
     
    if ($total_final >= 10000) 
    {
        $resultado = 1;
    }
    else
        {
            $resultado = 2;
        }


	$sqlinsert = "INSERT INTO 4bim (id_4bim, pontos_jogos_populares, pontos_finais, resultado, turma, desconto_disciplina ) VALUES ('', '$populares', '$total_final', '$resultado', '$turma', '$desconto_total')";

	mysqli_query($link, $sqlinsert)or die("Não foi possível cadastrar os dados no banco");

	echo '<script language="javascript">';
    echo 'alert("Dados cadastrados com sucesso!!!")';
    echo '</script>';
 
    echo '<script language="javascript">';
    echo 'location.href="quarto.php";';
    echo '</script>';

?>