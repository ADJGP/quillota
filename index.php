<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

include("backend/config.php");
session_start();
$num_total_rows = '';


?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Portal virtual de trabajo</title>

  <!-- Fav Icon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Owl carousel -->
  <link href="css/owl.carousel.css" rel="stylesheet"> 

  <!-- Bootstrap 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="css/font-awesome.css" rel="stylesheet">

  <!-- Custom Style -->
  <link href="css/main.css" rel="stylesheet">

</head>

<body>

  <!-- Header start -->
  <?php include('estructura/menu.php'); ?>
  <!-- Header end -->

  <!-- Search start -->
  <div class="searchwrap">
    <div class="container">
      <div class="searchbar row">
        <form method="post" action="index_result.php">
        <div class="col-md-5">
            <input required name="keywords" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ejemplo: Repartidor" />
        </div>
        <div class="col-md-3">
          <select required name="tipo" class="form-control" >
            <option disabled selected value="null">Cualquier categoría</option>
            <option value="1">Agricultura</option>
            <option value="8">Educación </option>
          </select>
        </div>
        <div class="col-md-2">
          <select required name="municipalidad" class="form-control" >
            <option disabled selected value="null">Municipalidad</option>
            <option value="60">Quillota</option>
            <option value="55">La calera</option>
            <option value="54">Hijuelas</option>
            <option value="58">Nogales</option>
            <option value="56">La Cruz</option>
          </select>
        </div>
        <div class="col-md-2">
          <input type="submit" class="btn" value="Buscar">
        </div>
       </form>
      </div>
    </div>
  </div>
  <!-- Search End -->
  <!-- How it Works start -->
  <div class="section howitwrap">
    <div class="container">

      <!-- title start -->
      <div class="titleTop">
        <div><span style="font-size: 150%; color:darkgrey">Aquí puedes ver</span></div>
        <h1 style="margin-top: 1%;">¿Cómo funciona?</h1>
      </div>
      <!-- title end -->
      
     
      <ul class="howlist row" style="margin-left: 20%;">
        <!--step 1-->
        <li class="col-md-3 col-sm-4">
          <a href="register.php">
            <img src="images/perfil.png" alt="perfil" width="70%">
             <h4>Crea una cuenta </h4>
          </a>
        </li>
        <!--step 1 end-->



        <!--step 2-->
        <li class="col-md-3 col-sm-4">
         <a href="listado_ofertas.php">
           <img src="images/trabajo.png" alt="trabajo" width="70%">
             <h4>Buscar un trabajo</h4>
         </a>
        </li>
        <!--step 2 end-->



        <!--step 3-->
        <li class="col-md-3 col-sm-4">
         <a href="subircv.php">
            <img src="images/cv.png" alt="cv" width="70%">
             <h4>Envíe su CV</h4>
         </a>
        </li>
        <!--step 3 end-->

      </ul>
      
    </div>

  </div>

  <!-- How it Works Ends -->



  <!-- Top Employers start -->

  <div class="section greybg">

    <div class="container">

      <!-- title start -->

      <div class="titleTop">

        <div class="subtitle">Aquí puedes ver </div>

        <h3>Empresas destacadas</h3>

      </div>

      <!-- title end -->

      <center>

        <ul class="employerList" style="display: table-row-group;">

          <!--employer-->

          <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="images/empresaslogos/1.png" alt="Company Name" /></a></li>

          <!--employer-->

          <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="images/empresaslogos/2.png" alt="Company Name" /></a></li>

          <!--employer-->

          <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="images/empresaslogos/3.png" alt="Company Name" /></a></li>

          <!--employer-->

          <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="images/empresaslogos/4.png" alt="Company Name" /></a></li>

          <!--employer-->

          <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="images/empresaslogos/5.png" alt="Company Name" /></a></li>

        </ul>

      </center>

      <center>

        <ul class="employerList" style="display: table-row-group;">

          <!--employer-->

          <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="images/empresaslogos/6.png" alt="Company Name" /></a></li>

          <!--employer-->

          <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="images/empresaslogos/7.png" alt="Company Name" /></a></li>

          <!--employer-->

          <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="images/empresaslogos/8.png" alt="Company Name" /></a></li>

          <!--employer-->

          <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="images/empresaslogos/9.png" alt="Company Name" /></a></li>

          <!--employer-->

          <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="images/empresaslogos/10.png" alt="Company Name" /></a></li>

          <!--employer-->

      </center>

      </ul>

    </div>

  </div>

  <!-- Top Employers ends -->



  <!-- BUSQUEDAS POPULARES -->



  <!-- Popular Searches ends -->



  <!-- Featured Jobs start -->



  <!-- Featured Jobs ends -->



  <!-- Video start -->

  <div class="videowraper section" style="padding: 100px 0;">

    <div class="container">

      <!-- title start -->

      <div class="titleTop">

      <div><span style="font-size: 150%; color:white">Aquí puedes ver</span></div>

        <h3>Nuestra videoteca</h3>




      </div>

      <!-- title end -->



      <!--<p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non, semper orci.</p>-->

      <a href="videoteca.php"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
    </div>

  </div>

  <!-- Video end -->



  <!-- Latest Jobs start -->

  <div class="section greybg">
    <div class="container">
      <!-- title start -->
      <div class="titleTop">
        <div class="subtitle">Aquí puedes ver </div>
        <h3>Últimos trabajos </h3>
      </div>
      <!-- title end -->
      <?php $o = $con->query("SELECT * FROM ofertas ORDER BY id DESC LIMIT 0, 3"); ?>

      <ul class="jobslist row">

      <?php while ($row = $o->fetch_assoc()) { ?>
        <!--Job 1-->
        <li class="col-md-4 col-sm-6">
          <div class="jobint">
            <div class="row">
              <div class="col-md-3 col-sm-3"><img src="images/employers/emplogo1.jpg" alt="Job Name" /></div>
              <div class="col-md-9 col-sm-9">
                <h4><?php echo $row['titulo'] ?></h4>
                <div class="company"><a href="#."><?php echo $row['detalles'] ?></div>
                <div class="jobloc"><label class="fulltime">Disponible</label></div>
              </div>
            </div>
          </div>
        </li>
        <!--Job end-->
      <?php } ?>
      </ul>

      <!--view button-->
      <div class='text-center'><a class="btn btn-primary btn-xl" style="font-size: 150%; margin-top:5%; background-color:blue" href="listado_ofertas.php">Ver todos los trabajos</a></div>
      <!--view button end-->

    </div>

  </div>

  <!-- Latest Jobs ends -->





  <!-- Video start -->

  <div class="videowraper2 section" style="padding: 100px 0;">

    <div class="container">

      <!-- title start -->

            <div class="titleTop">
              <div style="margin-bottom: 1%;font-size: 120%; color:white">Encuentra el trabajo ideal, con la ayuda de nuestro equipo profesional</div>
                <h1 style="font-size: 500%; color:white">AQUÍ TE ORIENTAMOS</h1>
              <a class="btn btn-primary btn-xl" style="font-size: 150%; margin-top:10%; background-color:blue" href="agendarentrevista.php">Solicitar Entrevista</a>
            </div>
      <!-- title end -->
    </div>
        
  </div>
  <!-- Video end -->







  <!-- Testimonials start -->

  <div class="section" style="padding: 120px 0;">

    <div class="container">
       <!-- title start -->
         <div class="titleTop">
            <div><span style="font-size: 150%; color:darkgrey">Aquí puedes ver</span></div>
            <h1 style="margin-top: 1%;">Historias de Exitos</h1>
         </div>
      <!-- title end -->

         <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false" >
   
            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="height: 400px;">
              <div class="item active">
                <embed src="https://drive.google.com/file/d/1_IzYuk4Gfiz9o6frywddwwtONTrbVCBl/preview" width="100%" style="height: 400px;">
              </div>

              <div class="item">
                 <embed src="https://drive.google.com/file/d/13dLSEmpa13JAthalkIuea4h6cP_okwlV/preview" width="100%" style="height: 400px;">
              </div>
            
              <div class="item">
                <embed src="https://drive.google.com/file/d/1hZb9vBJshH_knI9VxB1ghLngKL4QYfpY/preview" width="100%" style="height: 400px;">
              </div>
            </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
        </div>


    </div>

  </div>
  <!-- Testimonials End -->



  <!-- App Start -->

  <div class="appwraper">

    <div class="container">

      <div class="row">

        <div class="col-md-5 col-sm-6">

          <!--app image Start-->

          <div class="appimg"><img src="images/app-mobile.png" alt="Your alt text here" /></div>

          <!--app image end-->

        </div>

        <div class="col-md-7 col-sm-6">

          <!--app info Start-->
          <div class="titleTop">

            <div class="subtitle">Descargar Ahora </div>
            <h3>Nuestra aplicación</h3>
            <div class="subtitle"> Nuestra provincia llena de oportunidades</div>
          </div>

          <div class="appbtn">

            <div class="row">

              <div class="col-md-6 col-sm-6 col-xs-6"><a href="#."><img src="images/apple-btn.png" alt="Your alt text here"></a></div>

              <div class="col-md-6 col-sm-6 col-xs-6"><a href="#."><img src="images/andriod-btn.png" alt="Your alt text here"></a></div>

            </div>

          </div>

          <!--app info end-->

        </div>

      </div>

    </div>

  </div>

  <!-- App End -->
  <!--Footer-->

  <?php include('estructura/footer.php'); ?>

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
<script src="/docs/4.0/assets/js/vendor/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script><script src="/docs/4.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script><script src="/docs/4.0/assets/js/docs.min.js"></script>
  


  <!-- Owl carousel -->

  <script src="js/owl.carousel.js"></script>



  <!-- Custom js -->

  <script src="js/script.js"></script>

</body>

</html>