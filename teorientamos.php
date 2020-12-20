<?php 
include("backend/auth.php");
include("backend/config.php");
session_start(); 


$id=$_SESSION['id'];
$username=$_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Te orientamos</title>
<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Owl carousel -->
<link href="css/owl.carousel.css" rel="stylesheet">

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="css/font-awesome.css" rel="stylesheet">

<!-- Custom Style -->
<link href="css/main.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
<!-- Header start -->
<?php  include("estructura/menu.php"); ?>
<!-- Header end --> 

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Te Orientamos</h1>
      </div>
      
      <div class="viewallbtn"><a href="#.">Ver todos los trabajos</a></div>
      
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="about-wraper"> 
  <!-- About -->
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h2>Análisis Foda </h2>
        <p>El módulo matriz FODA es un espacio donde podrán analizar y planificar los objetivos de tu búsqueda de empleo, es una instancia
para conocerse mejor y trabajar los puntos bajos en el ámbito laboral y personal.
<br>
<br>
El análisis FODA es una herramienta que te ayuda para que puedas
identificar y contrastar tus fortalezas y debilidades, contra las
oportunidades y amenazas que depara el mercado.
¡Inicia tu análisis ahora! <br>
        </p>
              <div class="viewallbtn"><a href="foda-1.php">Iniciar Ahora</a></div>
      </div>
      <div class="col-md-5">
        <div class="postimg"><img src="images/traineers.png" alt="your alt text" /></div>
      </div>
    </div>
  </div>
  
  <!-- Process -->
  <div class="what_we_do">
    <div class="container">
      <div class="main-heading" style="color:black">Material Complementario </div>
    
      <ul class="row whatList">
        <li class="col-md-3 col-sm-6">
          <div class="iconWrap">
           
          </div>
          <img src="images/materialcomplementario1.jpg">
        </li>
        <li class="col-md-3 col-sm-6">
          <div class="iconWrap">
            
          </div>
          <img src="images/materialcomplementario2.jpg">
        </li>
        <li class="col-md-3 col-sm-6">
          <div class="iconWrap">
            
          </div>
          <img src="images/materialcomplementario3.jpg">
        </li>
         <li class="col-md-3 col-sm-6">
          <div class="iconWrap">
           
          </div>
          <img src="images/materialcomplementario4.jpg">
        </li>
      </ul>
    </div>
  </div>
  
  <!-- Text -->
  <div class="videowraper3 section">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
       <div class="subtitle">Aquí te enseñamos a realizar un curriculum vitae, ideal para iniciar un nuevo trabajo.</div>
      <h3>CONSTRUCCIÓN DE CV
</h3>
     
      
    </div>
    <!-- title end -->
    
    
    <a href="#."><i class="fa fa-play-circle-o" aria-hidden="true"></i></a> </div>
</div>
</div>

<!--Footer--><?php  include("estructura/footer.php"); ?>
<!--Footer end--> 

<!--Copyright
<div class="copyright">
  <div class="container">
    <div class="bttxt">Copyright &copy; 2017 Your Company Name. All Rights Reserved. Design by: <a href="http://graphicriver.net/user/ecreativesol" target="_blank">eCreativeSolutions</a></div>
  </div>
</div>

-->

<!-- Bootstrap's JavaScript --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!-- Owl carousel --> 
<script src="js/owl.carousel.js"></script> 

<!-- Custom js --> 
<script src="js/script.js"></script>
</body>
</html>