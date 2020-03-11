<?php

require 'conexaobd.php';

$id_gerenciador = $_GET['id_gerenciador'];

$sql = mysqli_query($link, "SELECT * FROM gerenciador WHERE id_gerenciador = '$id_gerenciador'");

while ($cont = mysqli_fetch_array($sql)) 
	{  
		?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Cadastrar-se</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://img.icons8.com/ios/50/000000/trophy-filled.png">
    
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

   
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body>   
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              <div class="aa-signin-form-title">
                <a class="aa-property-home">Edição:</a>
                <h4></h4>
              </div>
              <form class="contactform" action="res_edit_gerenciador.php" method="POST">     


                <div class="aa-single-field">                
                  <input type="hidden" aria-required="false" value="<?php echo $cont['id_gerenciador']?>" name="id" >
                </div>    

                <div class="aa-single-field">
                  <label for="">Nome tabela:<span class="required"></span></label>
                  <input type="text" required="required" aria-required="false" value="<?php echo $cont['nome_tabela']?>" name="nome" >
                </div>          
                 <div class="aa-single-field">
                  <label for="">Estado:<span class="required"></span></label>
                  <select type="text" name="estado" required="required" style=" width: 585px; height:39px" >
                     <?php
                     $estado = $cont['estado'];
                     if ($estado == 1) 
                     {
                     	echo '
                      <option value="1">habilitado</option>
                      <option value="2">desabilitado</option>
                     	';
                     }
                     if ($estado == 2) 
                     {
                      echo '
                      <option value="2">desabilitado</option>
                      <option value="1">habilitado</option>
                      
                     ';
                     }
                     ?>
                  </select>
          
                  <div class="aa-single-submit">
                  <a><input type="submit" value="Cadastrar" href="res_edit_gerenciador.php"></a>              
                  </div>    

                  <a href="index.php"><h4>Voltar</h4></a>                      
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <select type="text" name="turma" style=" width: 585px; height:39px" >


  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="js/jquery.min.js"></script>   
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>   
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
   <!-- mixit slider -->
  <script type="text/javascript" src="js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 
  
  </body>
</html>

















<?php
}
?>
