<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

include("backend/config.php");
session_start();
$num_total_rows = '';
$searchResults = 0;

$palabras = $_POST['keywords'];
$tipo = $_POST['tipo'];
$municipalidad = $_POST['municipalidad'];

$result = $con->query("SELECT COUNT(*) as total_ofertas FROM ofertas WHERE titulo LIKE '%" . $palabras . "%' AND id_rubro = $tipo AND id_muni = $municipalidad");
$row = $result->fetch_assoc();
$num_total_rows = $row['total_ofertas'];

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
        <form method="post" action="index_result.php">
        <div class="col-md-5">
            <input required name="keywords" type="text" class="form-control mb-2" id="inlineFormInput" />
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

        $result = $con->query("SELECT * FROM ofertas WHERE titulo LIKE '%" . $palabras . "%' AND id_rubro = $tipo AND id_muni = $municipalidad ORDER BY id DESC LIMIT " . $start . ", " .NUM_ITEMS_BY_PAGE);
        
        ?>

    <!-- Resultados de la busqueda -->
        <div class="section greybg">
          <div class="container">
                <!-- title start -->
                <div class="titleTop">
                    <div class="subtitle"><span>Resultados de tu busqueda de ofertas de empleo</span> </div>
                </div>
                <!-- title end -->
                <?php if ($result->num_rows > 0) { ?>
                <!-- Search List -->
                <ul class="searchList">
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <!-- job start -->
                    <li>
                        <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div class="jobimg"><img src="images/jobs/jobimg.jpg" alt="Job Name"></div>
                            <div class="jobinfo">
                            <h3><a href="#."><?php echo $row['titulo'] ?></a></h3>
                            <div class="companyName"><a href="#."><?php echo $row['detalles'] ?></a></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="listbtn"><a href="detalle_oferta.php?oferta=<?php echo $row['id'] ?>" ?>Postular</a></div>
                        </div>
                        </div>
                    </li>
                    <!-- job end -->
  <?php } ?> 
     </ul> 
  <?php } ?> 
  </div>
</div>
<!-- Resultados de la busqueda -->
<?php }else{ ?> 
    <!-- Resultados de la busqueda -->
    <div class="section greybg">
          <div class="container">
                <!-- title start -->
                <div class="titleTop">
                    <div class="subtitle"><span>Resultados de tu busqueda</span> </div>
                </div>
                  <h3>No hay coincidencias para tu busqueda.</h3>
            </div>
     </div>
<?php } ?>


  <!--Footer-->
  <?php include('estructura/footer.php'); ?>
  <!--Footer end-->



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