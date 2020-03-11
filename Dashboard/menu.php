<?php  

session_start();

if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
 unset($_SESSION['usuario']);
 unset($_SESSION['senha']);
 header('location:signin.php');
}
 
$logado = $_SESSION['usuario'];

?>

  <section id="aa-menu-area" style="background-color: #336;">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
         
          <!-- LOGO -->                                               
          <!-- Text based logo -->
         <img src="img/unasp_azul.png" height="65" width="200" alt="logo"> 
          <!-- Image based logo -->
          <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->                   
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">

             <li class="dropdown">
              <a href="index.php"> <span class=""></span>Home</a>
            </li>
            

<?php

  require'conexaobd.php';
  $usuario = $_SESSION['usuario'];
  $senha = $_SESSION['senha'];
  $sql = "SELECT * FROM login WHERE usuario ='$usuario' AND senha = '$senha'";
  $resultado = mysqli_query($link, $sql);
  while ($cont = mysqli_fetch_array($resultado)) 
  {  $class = $cont['class'];}

  if ($class == "adm") 
    {

  echo '
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">Funções</a>
              <ul class="dropdown-menu" role="menu">     
                <li><a href="turma.php">Cadastro das Turmas</a></li>
                <li><a href="register.php">Menu de Cadastro de Logins</a></li>
                <li><a href="tabelas.php">Menu de Edição</a></li>
                <li><a href="aluno.php">Cadastro de Alunos</a></li>      
                <li><a href="conselheiro.php">Cadastro de Conselheiros</a></li> 
                <li><a href="infracoes.php">Cadastrar Infrações das Turmas</a> 
                <li><a href="pontoscorrida.php">Pontos da Corrida Maluca</a>                          
                </ul>
            </li>    
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">Bimestres</a>
              <ul class="dropdown-menu" role="menu">     
                <li><a href="primeiro.php">Primeiro Bimestre</a> 
                <li><a href="segundo.php">Segundo Bimestre</a> 
                <li><a href="terceiro.php">Terceiro Bimestre</a>   
                <li><a href="quarto.php">Quarto Bimestre</a>    
                </ul>
            </li>   
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">Modalidades</a>
              <ul class="dropdown-menu" role="menu">     
                <li><a href="Futebolp.php">Pontos do Futebol</a>  
                <li><a href="Basquetebolp.php">Pontos do Basquete</a> 
                <li><a href="Voleip.php">Pontos do Vôlei</a> 
                <li><a href="Handbolp.php">Pontos do Handbol</a>
                </ul>
            </li>        
        ';
  }



  
        






  else {
  echo "
  <li class='dropdown'>
              <a class='dropdown-toggle' data-toggle='dropdown' href='properties.html'>Cadastro de jogadores</a>
           
                 <ul class='dropdown-menu' role='menu'>
                  <li><a href='Futebol.php'>Futebol</a>  
                    <li><a href='Basquetebol.php'>Basquetebol</a> 
                      <li><a href='Volei.php'>Vôlei</a> 
                        <li><a href='Handbol.php'>Handbol</a> 
                          <li><a href='gregas.php'>Olimpíadas Gregas</a>
                          <li><a href='exibir.php'>Menu de Exibição</a></li> 
                 </ul>
               </li>
             </li>
           </li>";
  }
?>            


            
            
            <li><a href="gallery.php">Galeria</a></li>                                         
            <li><a href="contact.php">Contate-nos</a></li>
            <li><a href="logout.php">Deslogar</a></li>
          

          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>

  

  