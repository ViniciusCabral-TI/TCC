<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Troféu Unasp</title>
    
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
  <body class="aa-price-range">  
  <!-- Pre Loader -->
  
  <!-- SCROLL TOP BUTTON -->
 

  <?php require("menu.php");?>
  <!-- End menu section -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<center>
<h1>
  &nbsp Bem-vindo,
  <?php

  require'conexaobd.php';
  $usuario = $_SESSION['usuario'];
  $senha = $_SESSION['senha'];
  $sql = "SELECT * FROM login WHERE usuario ='$usuario' AND senha = '$senha'";
  $resultado = mysqli_query($link, $sql);
  while ($cont = mysqli_fetch_array($resultado)) 
  {  
    $class = $cont['class'];
  }
  
  if ($class == 'adm') 
  {
    echo "ADM";
  }
  else
  {
    echo " representante do $usuario.";
  }



  ?> 
 </h1>

<br>
<br>
</center>
  <!-- Start slider  -->
  <section id="aa-slider">
    <div class="aa-slider-area"> 
      <!-- Top slider -->
      <div class="aa-top-slider">
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img\u8.png" alt="">
          <!-- Top slider content -->
         
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
        <!-- Top slider single slide -->
        
  </section>
  <!-- End slider  -->

  <!-- Advance Search -->
  
  <!-- / Advance Search -->

  <!-- About us -->
  <section id="aa-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-about-us-area">
            <div class="row">
              <div class="col-md-5">
                <div class="aa-about-us-left">
                  <img src="img/u4.png" alt="image">
                </div>
              </div>
              <div class="col-md-7">
                <div class="aa-about-us-right">
                  <div class="aa-title">
                    <h2>Sobre o site:</h2>
                    <span></span>
                  </div>
                  <p>O site tem como objetivo ajudar você, aluno Unasp-HT, a organizar-se neste evento maravilhoso: o Troféu Unasp-HT</p>                  
                  <ul>
                    <li>Aqui você pode:</li>
                    <li>Ver a pontução de sua sala no evento;</li>
                    <li>Inscrever seus colegas em nossas atividades esportivas;</li>                    
                    <li>Organizar-se previamente;</li>
                    <li>Ver as datas dos eventos;</li>
                    <li>Tirar dúvidas e resolver outros problemas.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / About us -->

  <!-- Latest property -->
  <section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        <div class="aa-title">
          <h2>Fotos Recentes</h2>
          <span></span>
          <p>Veja fotos sobre alguns de nosso últimos eventos:</p>         
        </div>
        <div class="aa-latest-properties-content">
          <div class="row">
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="img/u1.jpg" alt="img">
                </a>
               
                <div class="aa-properties-item-content">                  
                  <div class="aa-properties-about">
                                  
                  </div>
                  <div class="aa-properties-detial">
                    
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="img/unasp_azul.png" alt="img">
                </a>
 <div class="aa-properties-item-content">
                <div class="aa-properties-about">
                                  
                  
               
                
                  <div class="aa-properties-detial">
                    
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="img/u3.png" alt="img">
                </a>
                
                <div class="aa-properties-item-content">
                 <div class="aa-properties-about">
                  
                  <div class="aa-properties-detial">
                    
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="img/u4.png" alt="img">
                </a>
                
                <div class="aa-properties-item-content">
                 
                  <div class="aa-properties-about">
                   
                  <div class="aa-properties-detial">
                   
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="img/u5.png" alt="img">
                </a>                
                
                <div class="aa-properties-item-content">
                  
                  <div class="aa-properties-about">
                    
                  </div>
                  <div class="aa-properties-detial">
                    
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="img/u8.png" alt="img">
                </a>
               
                <div class="aa-properties-item-content">
                  
                  <div class="aa-properties-about">
                   
                  <div class="aa-properties-detial">
                    
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest property -->

  <!-- Service section -->
  
  <!-- / Service section -->

  <!-- Promo Banner Section -->
  <section id="aa-promo-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-banner-area">
            <h3>A melhor educação está em nossa escola</h3>
            <p></p>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Promo Banner Section -->



           

  

  <!-- Latest blog -->
  <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <div class="aa-title">
              <h2>Últimas notícias e eventos</h2>
              <span></span>
              
            </div>
            <div class="aa-latest-blog-content">
              <div class="row">
                <!-- start single blog -->
                <div class="col-md-4">
                  <article class="aa-blog-single">
                    <figure class="aa-blog-img">
                      <a href="#"><img src="img/u8.png" alt="img"></a>
                      <span class="aa-date-tag">23/04/2019</span>
                    </figure>
                    <div class="aa-blog-single-content">
                      <h3><a href="#">Centro do Unasp-HT</a></h3>
                      <p>O UNASP é uma instituição que cresce em estrutura e padrão de educação, atingindo o seu principal objetivo: formar cidadãos de caráter que façam diferença no mundo.<br>

Somos quatro campi e juntos somamos mais de 17 mil alunos que cursam da educação infantil até a faculdade. Oferecemos mais de 30 cursos de graduação com a opção de residirem ou não no campus. Àqueles que optam por viverem no campus proporcionamos um conceito de imersão no ensino.</p>
                      
                    </div>
                   
                  </article>
                </div>
                <!-- start single blog -->
                <div class="col-md-4">
                  <article class="aa-blog-single">
                    <figure class="aa-blog-img">
                      <a href="#"><img src="img/u8.png" alt="img"></a>
                      <span class="aa-date-tag">23/04/2019</span>
                    </figure>
                    <div class="aa-blog-single-content">
                      <h3><a href="#">Centro do Unasp-HT</a></h3>
                      <p>O UNASP é uma instituição que cresce em estrutura e padrão de educação, atingindo o seu principal objetivo: formar cidadãos de caráter que façam diferença no mundo.<br>

Somos quatro campi e juntos somamos mais de 17 mil alunos que cursam da educação infantil até a faculdade. Oferecemos mais de 30 cursos de graduação com a opção de residirem ou não no campus. Àqueles que optam por viverem no campus proporcionamos um conceito de imersão no ensino.</p>
                      
                    </div>                   
                  </article>
                </div>
                <!-- start single blog -->
                <div class="col-md-4">
                  <article class="aa-blog-single">
                    <figure class="aa-blog-img">
                      <a href="#"><img src="img/u8.png" alt="img"></a>
                      <span class="aa-date-tag">23/04/2019</span>
                    </figure>
                    <div class="aa-blog-single-content">
                      <h3><a href="#">Centro do Unasp-HT</a></h3>
                      <p>O UNASP é uma instituição que cresce em estrutura e padrão de educação, atingindo o seu principal objetivo: formar cidadãos de caráter que façam diferença no mundo.<br>

Somos quatro campi e juntos somamos mais de 17 mil alunos que cursam da educação infantil até a faculdade. Oferecemos mais de 30 cursos de graduação com a opção de residirem ou não no campus. Àqueles que optam por viverem no campus proporcionamos um conceito de imersão no ensino.</p>
                      
                    </div>                   
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest blog -->

  <?php require'rodape.php'; ?>