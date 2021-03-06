<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

include("backend/config.php");
session_start();
$num_total_rows = '';
$searchResults = 0;


if(isset($_POST['palabraClave'])){

$result = $con->query("SELECT * FROM ofertas WHERE titulo LIKE '".$_POST['palabraClave']."%' OR id_muni ='".$_POST['municipalidad']."' OR rubro ='".$_POST['tipo']."'");
$row = $result->fetch_assoc();
$num_total_rows = $result->num_rows;

$searchResults = ($result->num_rows>0) ? 1 : 2 ;

}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $_SESSION['sesion']; ?></title>

  <!-- Fav Icon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Owl carousel --> 
  <link href="css/owl.carousel.css" rel="stylesheet">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
        <form method="post" action="index.php">
        <div class="col-md-5">
            <input required name="palabraClave" type="text" class="form-control mb-2" id="inlineFormInput" />
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

  <?php
    if ($num_total_rows > 0) {
        $page = false;

        //examino la pagina a mostrar y el inicio del registro a mostrar
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        }

        if (!$page) {
            $start = 0;
            $page = 1;
        } else {
            $start = ($page - 1) * NUM_ITEMS_BY_PAGE;
        }
        //calculo el total de paginas
        $total_pages = ceil($num_total_rows / NUM_ITEMS_BY_PAGE);

        $result = $con->query("SELECT * FROM ofertas WHERE titulo LIKE '".$_POST['palabraClave']."%' OR id_muni ='".$_POST['municipalidad']."' OR rubro ='".$_POST['tipo']."' ORDER BY id ASC LIMIT " . $start . ", " .NUM_ITEMS_BY_PAGE);
        
        ?>


<?php if($searchResults==1) { ?>
<!-- Resultados de la busqueda -->
<div class="section greybg">
  <div class="container">
                      <!-- title start -->
                      <div class="titleTop">
                        <div class="subtitle"><span>Resultados de tu busqueda</span> </div>
                      </div>
                      <!-- title end -->
      

                      <?php if ($result->num_rows > 0) {
                      echo '<div class="jobslist row">';
                      while ($row = $result->fetch_assoc()) {
                      echo '<li class="col-md-4 col-sm-6">';
                      echo '<div class="jobint">';
                      echo '<div class="row">';
                      #echo '<div class="col-md-2 col-sm-2"><img src="images/employers/emplogo1.jpg" alt="Job Name" /></div>';
                      echo '<div class="col-md-12 col-sm-12">';
                      echo '<a href="#.">' . $row['titulo'] . '</a>';
                      echo '<div class="company"><a href="#.">'.$row['rubro'].'</a></div>';
                      echo '<div class="jobloc"><label class="fulltime">'.$row['lugar'].'</label></div>';
                      echo '</div>';
                      echo '</div>';
                      echo '</div>';
                      echo '</li>';
                      }
                      echo '</div>';
                      }
                      ?>
                      
                      

                     
       <!--Paginacion-->
       <div class="viewallbtn">
          <?php echo '<nav>';
            echo '<ul class="pagination">';

          if ($total_pages > 1) {
            if ($page != 1) {
            echo '<li class="page-item"><a class="page-link" href="index.php?page=' . ($page - 1) . '"><span aria-hidden="true">&laquo;</span></a></li>';
            }

            for ($i = 1; $i <= $total_pages; $i++) {
            if ($page == $i) {
                echo '<li class="page-item active"><a class="page-link" href="#">' . $page . '</a></li>';
            } else {
                echo '<li class="page-item"><a class="page-link" href="listado_empresas.php?page=' . $i . '">' . $i . '</a></li>';
            }
            }

            if ($page != $total_pages) {
            echo '<li class="page-item"><a class="page-link" href="listado_empresas.php?page=' . ($page + 1) . '"><span aria-hidden="true">&raquo;</span></a></li>';
            }
            }
            echo '</ul>';
            echo '</nav>';
            }
            
            ?>
        </div>

    <!--view button end-->
  </div>
</div>
<!-- Resultados de la busqueda -->
<?php }else if($searchResults==2){?>

  <!-- Resultados de la busqueda -->
<div class="section greybg">
  <div class="container text-center">
  <h2>No hay registros con esas coincidencias! </h2>
  </div>
</div>
<!-- Resultados de la busqueda -->

<?php } ?>

  <!-- How it Works start -->
  <div class="section howitwrap">
    <div class="container">

      <!-- title start -->
      <div class="titleTop">
        <div class="subtitle"><span>Aquí puedes ver cómo funciona</span> </div>
      </div>
      <!-- title end -->

      <ul class="howlist row">
        <!--step 1-->
        <li class="col-md-4 col-sm-4">
          <a href="register.php">
            <div class="iconcircle"><i class="fa fa-user" aria-hidden="true"></i></div>

            <h4>Crea una cuenta </h4>

            <p>Regístrate y conoce todas las funcionalidades y material informativo que te brinda la plataforma.</p>
          </a>

        </li>

        <!--step 1 end-->



        <!--step 2-->

        <li class="col-md-4 col-sm-4">

          <div class="iconcircle"><i class="fa fa-black-tie" aria-hidden="true"></i></div>

          <h4>Buscar un trabajo</h4>

          <p>Infórmate con el material complementario y busca trabajo através de los medios que te brinda la plataforma.</p>

        </li>

        <!--step 2 end-->



        <!--step 3-->

        <li class="col-md-4 col-sm-4">

          <div class="iconcircle"><i class="fa fa-file-text" aria-hidden="true"></i></div>

          <h4>Envíe su CV

          </h4>

          <p>Utiliza la funcionalidad que te brindamos para enviar tu curriculum por medio de nuestra plataforma.</p>

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

  <div class="videowraper section">

    <div class="container">

      <!-- title start -->

      <div class="titleTop">

        <div class="subtitle">Aquí puedes ver</div>

        <h3>Mira Nuestro Video</h3>

        <h3>Videoteca</h3>



      </div>

      <!-- title end -->



      <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non, semper orci.</p>

      <a href="#."><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
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



      <ul class="jobslist row">

        <!--Job 1-->

        <li class="col-md-4 col-sm-6">

          <div class="jobint">

            <div class="row">

              <div class="col-md-3 col-sm-3"><img src="images/employers/emplogo1.jpg" alt="Job Name" /></div>

              <div class="col-md-9 col-sm-9">

                <h4><a href="#.">Technical Database Engineer</a></h4>

                <div class="company"><a href="#.">Datebase Management Company</a></div>

                <div class="jobloc"><label class="fulltime">Full Time</label> - <span>New York</span></div>

              </div>

            </div>

          </div>

        </li>

        <!--Job end-->



        <!--Job 2-->

        <li class="col-md-4 col-sm-6">

          <div class="jobint">

            <div class="row">

              <div class="col-md-3 col-sm-3"><img src="images/employers/emplogo11.jpg" alt="Job Name" /></div>

              <div class="col-md-9 col-sm-9">

                <h4><a href="#.">Technical Database Engineer</a></h4>

                <div class="company"><a href="#.">Datebase Management Company</a></div>

                <div class="jobloc"><label class="freelance">Free Lancer</label> - <span>New York</span></div>

              </div>

            </div>

          </div>

        </li>

        <!--Job end-->



        <!--Job 3-->

        <li class="col-md-4 col-sm-6">

          <div class="jobint">

            <div class="row">

              <div class="col-md-3 col-sm-3"><img src="images/employers/emplogo12.jpg" alt="Job Name" /></div>

              <div class="col-md-9 col-sm-9">

                <h4><a href="#.">Technical Database Engineer</a></h4>

                <div class="company"><a href="#.">Datebase Management Company</a></div>

                <div class="jobloc"><label class="partTime">Part Time</label> - <span>New York</span></div>

              </div>

            </div>

          </div>

        </li>

        <!--Job end-->



        <!--Job 4-->

        <li class="col-md-4 col-sm-6">

          <div class="jobint">

            <div class="row">

              <div class="col-md-3 col-sm-3"><img src="images/employers/emplogo13.jpg" alt="Job Name" /></div>

              <div class="col-md-9 col-sm-9">

                <h4><a href="#.">Technical Database Engineer</a></h4>

                <div class="company"><a href="#.">Datebase Management Company</a></div>

                <div class="jobloc"><label class="freelance">Free Lancer</label> - <span>New York</span></div>

              </div>

            </div>

          </div>

        </li>

        <!--Job end-->



        <!--Job 5-->

        <li class="col-md-4 col-sm-6">

          <div class="jobint">

            <div class="row">

              <div class="col-md-3 col-sm-3"><img src="images/employers/emplogo14.jpg" alt="Job Name" /></div>

              <div class="col-md-9 col-sm-9">

                <h4><a href="#.">Technical Database Engineer</a></h4>

                <div class="company"><a href="#.">Datebase Management Company</a></div>

                <div class="jobloc"><label class="fulltime">Full Time</label> - <span>New York</span></div>

              </div>

            </div>

          </div>

        </li>

        <!--Job end-->



        <!--Job 6-->

        <li class="col-md-4 col-sm-6">

          <div class="jobint">

            <div class="row">

              <div class="col-md-3 col-sm-3"><img src="images/employers/emplogo15.jpg" alt="Job Name" /></div>

              <div class="col-md-9 col-sm-9">

                <h4><a href="#.">Technical Database Engineer</a></h4>

                <div class="company"><a href="#.">Datebase Management Company</a></div>

                <div class="jobloc"><label class="fulltime">Full Time</label> - <span>New York</span></div>

              </div>

            </div>

          </div>

        </li>

        <!--Job end-->



        <!--Job 7-->

        <li class="col-md-4 col-sm-6">

          <div class="jobint">

            <div class="row">

              <div class="col-md-3 col-sm-3"><img src="images/employers/emplogo16.jpg" alt="Job Name" /></div>

              <div class="col-md-9 col-sm-9">

                <h4><a href="#.">Technical Database Engineer</a></h4>

                <div class="company"><a href="#.">Datebase Management Company</a></div>

                <div class="jobloc"><label class="partTime">Part Time</label> - <span>New York</span></div>

              </div>

            </div>

          </div>

        </li>

        <!--Job end-->



        <!--Job 8-->

        <li class="col-md-4 col-sm-6">

          <div class="jobint">

            <div class="row">

              <div class="col-md-3 col-sm-3"><img src="images/employers/emplogo2.jpg" alt="Job Name" /></div>

              <div class="col-md-9 col-sm-9">

                <h4><a href="#.">Technical Database Engineer</a></h4>

                <div class="company"><a href="#.">Datebase Management Company</a></div>

                <div class="jobloc"><label class="freelance">Free Lancer</label> - <span>New York</span></div>

              </div>

            </div>

          </div>

        </li>

        <!--Job end-->



        <!--Job 9-->

        <li class="col-md-4 col-sm-6">

          <div class="jobint">

            <div class="row">

              <div class="col-md-3 col-sm-3"><img src="images/employers/emplogo3.jpg" alt="Job Name" /></div>

              <div class="col-md-9 col-sm-9">

                <h4><a href="#.">Technical Database Engineer</a></h4>

                <div class="company"><a href="#.">Datebase Management Company</a></div>

                <div class="jobloc"><label class="fulltime">Full Time</label> - <span>New York</span></div>

              </div>

            </div>

          </div>

        </li>

        <!--Job end-->

      </ul>

      <!--view button-->

      <div class="viewallbtn"><a href="#.">Ver todos los trabajos</a></div>

      <!--view button end-->

    </div>

  </div>

  <!-- Latest Jobs ends -->





  <!-- Video start -->

  <div class="videowraper2 section">

    <div class="container">

      <!-- title start -->

      <div class="titleTop">

        <div class="subtitle">Encuentra el trabajo ideal, con la ayuda de nuestro equipo profesional</div>

        <h3>AQUÍ TE ORIENTAMOS</h3>





      </div>

      <!-- title end -->



      <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non, semper orci.</p>







    </div>

  </div>



  <div class="viewallbtn"><a href="#.">Solicita una entrevista</a></div>

  <!-- Video end -->







  <!-- Testimonials start -->

  <div class="section">

    <div class="container">

      <!-- title start -->

      <div class="titleTop">

        <div class="subtitle">Aquí puedes ver </div>

        <h3><span>Historias de éxito </span></h3>

      </div>

      <!-- title end -->



      <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="height: 100%">
      <div class="item active"  >
        <iframe src="https://drive.google.com/file/d/1_IzYuk4Gfiz9o6frywddwwtONTrbVCBl/preview" style="width: 100%;
    height: -webkit-fill-available; "  ></iframe>
      </div>

      <div class="item">
       <iframe src="https://drive.google.com/file/d/13dLSEmpa13JAthalkIuea4h6cP_okwlV/preview" style="width: 100%;
    height: -webkit-fill-available; "></iframe>
      </div>
    
      <div class="item">
        <iframe src="https://drive.google.com/file/d/1hZb9vBJshH_knI9VxB1ghLngKL4QYfpY/preview"  style="width: 100%;
    height: -webkit-fill-available; " ></iframe>
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



        <!--user 1 end-->



        <!--user 2 Start-->


        <!--user 2 end-->

      </ul>

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

            <div class="subtitle">Descarga Ahora </div>

            <h3>Nuestra aplicación</h3>

            <div class="subtitle"> Un mundo de oportunidades en tus manos</div>



          </div>

          <div class="subtitle2">Nuestra provincia llena de oportunidades</div>

          <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non, semper orci. Curabitur blandit, diam ut ornare ultricies.</p>

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