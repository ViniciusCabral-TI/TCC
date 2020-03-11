<?php
    $pnotas = $_POST['pnotas'];
	$pbonus = $_POST['pbonus'];
	$phumanitario = $_POST['phumanitario'];	
    $poutros = $_POST['poutros']; 
    $turma = $_POST['turma'];
    $desconto = 0;

    $r = $pnotas + $pbonus + $phumanitario + $poutros;

	require ('conexaobd.php');

    $sql1 = "SELECT cadastro_infracoes.infracao,tipo_infracao.pontuacao FROM cadastro_infracoes INNER JOIN tipo_infracao ON cadastro_infracoes.infracao = tipo_infracao.id_infracao WHERE turma ='$turma' and bimestre = '2'";
    $resultado = mysqli_query($link, $sql1);
    while ($cont = mysqli_fetch_array($resultado)) 
    {  
        $desconto = $desconto + $cont['pontuacao'];
    }  

    $sql = "SELECT * FROM pontos_basquete WHERE turma ='$turma'";
    $resultado = mysqli_query($link, $sql);
    while ($cont = mysqli_fetch_array($resultado)) 
    {  
        $pontos1 = $cont['pontosb'];
    }
    $sql = "SELECT * FROM pontos_futebol WHERE turma ='$turma'";
    $resultado = mysqli_query($link, $sql);
    while ($cont = mysqli_fetch_array($resultado)) 
    {  
        $pontos2 = $cont['pontosf'];
    }
    $sql = "SELECT * FROM pontos_volei WHERE turma ='$turma'";
    $resultado = mysqli_query($link, $sql);
    while ($cont = mysqli_fetch_array($resultado)) 
    {  
        $pontos3 = $cont['pontosv'];
    }
    $sql = "SELECT * FROM pontos_handbol WHERE turma ='$turma'";
    $resultado = mysqli_query($link, $sql);
    while ($cont = mysqli_fetch_array($resultado)) 
    {  
        $pontos4 = $cont['pontosh'];
    }

    $subp = $pontos1 + $pontos2 + $pontos3 + $pontos4;

    $sub = $r + $subp;

    $total = $sub - $desconto;

	$sqlinsert = "INSERT INTO 2bim (id_2bim, pontos_olimpunasp, pontos_notas, bonus_pontos_notas, pontos_humanitario, descontos_disciplina, total_2bim, turma, pontosb,pontosf,pontosh,pontosv ) VALUES ('', '$subp', '$pnotas', '$pbonus', '$phumanitario', '$desconto', '$total', '$turma', '$pontos1','$pontos2','$pontos4','$pontos3')";

	mysqli_query($link, $sqlinsert)or die("Não foi possível cadastrar os jogadores no banco");

	echo '<script language="javascript">';
    echo 'alert("Dados cadastrados com sucesso!!!")';
    echo '</script>';
 
    echo '<script language="javascript">';
    echo 'location.href="segundo.php";';
    echo '</script>';

?>

