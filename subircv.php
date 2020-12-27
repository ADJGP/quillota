<?php
#include("backend/config.php");
session_start();
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

</head>
<?php if(isset($_SESSION['sesion'])) { ?>
<body>
<!-- Header start -->
<?php include("estructura/menu.php"); ?>

<!-- Header end -->
<?php

include("backend/config.php");

if (isset($_POST['add'])) {


  $Nombre = mysqli_real_escape_string($con, (strip_tags($_POST["Nombre"], ENT_QUOTES)));

  $rut = mysqli_real_escape_string($con, (strip_tags($_POST["rut"], ENT_QUOTES)));

  $municipio = mysqli_real_escape_string($con, (strip_tags($_POST["municipio"], ENT_QUOTES)));

  $date_create = date("d/m/y");


  $cek = mysqli_query($con, "SELECT * FROM uploadcv WHERE Nombre='$Nombre'");

  if (mysqli_num_rows($cek) == 0) {



    $insert = mysqli_query($con, "INSERT INTO uploadcv (Nombre, rut, municipalidad, trn_date, tipo)

                    VALUES ('$Nombre','$rut', '$municipio', '$date_create', '2',") or die(mysqli_error($links));

    if ($insert) {

      echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
    } else {

      echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
    }
  } else {

    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. código exite!</div>';
  }
}

?>




<!-- Page Title start -->

<div class="pageTitle">

  <div class="container">

    <div class="row">

      <div class="col-md-6 col-sm-6">

        <h1 class="page-heading">Sube tu curriculum</h1>

      </div>

      <div class="col-md-6 col-sm-6">

        <div class="breadCrumb"><a href="#.">Home</a> / <span>Post Job</span></div>

      </div>

    </div>

  </div>

</div>

<!-- Page Title End -->



<div class="listpgWraper">

  <div class="container">

    <div class="row">

      <div class="col-md-8 col-md-offset-2">

        <div class="userccount">

          <div class="formpanel">



            <!-- Job Information -->




            <h5>Subir Curriculum</h5>

            <div class="row">

              <div class="col-md-12">

                <div class="formrow">

                  <input type="text" name="Nombre" class="form-control" placeholder="Nombre Completo">

                </div>

              </div>

              <div class="col-md-12">

                <div class="formrow">

                  <input type="text" name="rut" class="form-control" placeholder="Ingrese su rut">

                </div>

              </div>

              <div class="col-md-12">

                <div class="formrow">

                  <input type="text" name="municipio" class="form-control" placeholder="Ingrese su Municipio">

                </div>

              </div>



              <div class="col-md-12">

                <div class="formrow">


                  <form method="POST" action="uploadcv.php" enctype="multipart/form-data">

                    <input type="file" name="archivo">


                </div>
              </div>



            </div>

          </div>

          <br>

          <input type="submit" class="btn" value="Enviar">

        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!--Footer-->
<?php include("estructura/footer.php"); ?>
<!--Footer end-->

<!--Copyright-->
<div class="copyright">
  <div class="container">
    <div class="bttxt">Copyright &copy; 2017 Your Company Name. All Rights Reserved. Design by: <a href="http://graphicriver.net/user/ecreativesol" target="_blank">eCreativeSolutions</a></div>
  </div>
</div>



<!-- Bootstrap's JavaScript -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Owl carousel -->
<script src="js/owl.carousel.js"></script>

<!-- Custom js -->
<script src="js/script.js"></script>
  
</body>
<?php } else {

header('location: login.php');

} ?>
</html>