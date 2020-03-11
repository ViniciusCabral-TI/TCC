<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.

// A variavel $result pega as varias $usuario e $senha, faz uma 
//pesquisa na tabela de usuarios

  require("conexaobd.php");
  $result = mysqli_query($link, "SELECT * FROM login WHERE usuario ='$usuario' AND senha = '$senha'");

/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
resultado ele redirecionará para a página site.php ou retornara  para a página 
do formulário inicial para que se possa tentar novamente realizar o usuario */
if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['usuario'] = $usuario;
$_SESSION['senha'] = $senha;
header('location:index.php');
}
else{
  unset ($_SESSION['usuario']);
  unset ($_SESSION['senha']);
  header('location:signin.php');
   
  }



//require'conexaobd.php';

//$class = "SELECT class FROM login WHERE usuario ='$usuario' ";

//$resultado = mysqli_query($link, $class);

	//echo"
    //<tr>
       //<td>".$cont['class']."</td>
       //<td><a href='menu.php?class=".$cont['class']."'>è a sua classe</a></td>       
    //</tr>
	//";
	


?>