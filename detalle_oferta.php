<?php
include("backend/config.php");
session_start();

$empresa='';

if(isset($_GET['oferta'])){

$oferta=$_GET['oferta'];

}else{

    $oferta=null;

}

//Buscar la oferta
$query="SELECT * FROM ofertas WHERE id='".$oferta."'";
$row=$con->query($query);
$ofert=mysqli_fetch_array($row);
//echo $ofert['id_empresa'];

//Buscar la empresa
$query2="SELECT * FROM empresas WHERE id_empresa=".$ofert['id_empresa'];
$row2=$con->query($query2);
$emp=mysqli_fetch_array($row2);
//$emp['nombre'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Job Portal HTML</title>
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
        <?php include('estructura/menu.php'); ?>
        <!-- Header end -->

         <!-- Page Title start -->
         <div class="pageTitle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h1 class="page-heading"><label for="">Detalle de la Oferta</label></h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Title End -->

<div class="listpgWraper">
  <div class="container"> 
    
    <!-- Job Header start -->
    <div class="job-header">
      <div class="jobinfo">
        <div class="row">
          <div class="col-md-8 col-sm-8"> 
            <!-- Candidate Info -->
            <div class="candidateinfo">
              <div class="userPic"><img src="images/employers/emplogo1.jpg" alt=""></div>
              <div class="title"><?php echo $ofert['titulo'] ?></div>
              <div class="desi"><?php echo $ofert['detalles'] ?></div>
              <div class="loctext"><i class="fa fa-history" aria-hidden="true"></i> Publicado:  <?php echo $ofert['fecha'] ?></div>
              <div class="loctext"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $ofert['lugar'] ?></div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4"> 
            <!-- Candidate Contact -->
            <div class="candidateinfo">
              <div class="loctext"><i class="fa fa-user" aria-hidden="true"></i> Experiencia: <?php echo $ofert['experiencia'] ?></div>
              <div class="loctext"><i class="fa fa-money" aria-hidden="true"></i> Sueldo: <?php echo $ofert['sueldo'] ?></div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Buttons -->
      <div class="jobButtons"> 
      <a href="#." class="btn apply"><i class="fa fa-paper-plane" aria-hidden="true"></i> Realizar Postulacion</a> 
      <a href="lista_ofertas_empresas.php?empresa=<?php echo $emp['nombre']; ?>" class="btn freelance"></i> Cancelar</a> 
      </div>
    </div>
    
    <!-- Job Detail start -->
    <div class="row">
      <div class="col-md-12"> 
        <!-- About Employee start -->
        <div class="job-header">
          <div class="contentbox">
            <h3><?php echo $emp['nombre']; ?></h3>
            <p><?php echo $emp['direccion']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 <!--Footer-->
 <?php include('estructura/footer.php'); ?>
        <!--Footer end-->

        <!-- Bootstrap's JavaScript -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Owl carousel -->
        <script src="js/owl.carousel.js"></script>

        <!-- Custom js -->
        <script src="js/script.js"></script>
</body>

</html>