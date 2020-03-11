<?php

  $turma = $_POST['turma'];
  $nome = $_POST['nome_jogador'];
  $camisa = $_POST['numero_camisa'];
  $genero = $_POST['genero'];
  $inc = 0;

    require('conexaobd.php');
    $sql = "SELECT * FROM basquete WHERE sala ='$turma' AND genero = '$genero'";
    $resultado = mysqli_query($link, $sql);
    while ($cont = mysqli_fetch_array($resultado) ) 
    {         
        $inc++;
    }
    
    if ($inc < 11) {
    
     $sqlinsert = "INSERT INTO basquete (id_jogador, sala, nome_jogador, numero_camisa, genero) VALUES ('', '$turma', '$nome', '$camisa', '$genero')";

          mysqli_query($link, $sqlinsert) or die("Não foi possivel realizar o cadastro");
          echo '<script language="javascript">';
          echo 'alert("Dados cadastrados com sucesso!!!")';
          echo '</script>';

          echo '<script language="javascript">';
          echo 'location.href="Basquetebol.php";';
          echo '</script>';
    }
    else
    {
          echo '<script language="javascript">';
          echo 'alert("Ja há dados existentes para sua turma")';
          echo '</script>';

          echo '<script language="javascript">';
          echo 'location.href="basquetebol.php";';
          echo '</script>';
    }

?>