<?php
require('backend/config.php');
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

<body>
  <!-- Header start -->
  <?php include("estructura/menu.php"); ?>
  <!-- Header end -->
  <!-- Page Title start -->
  <div class="pageTitle">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <h1>Agendar entrevista</h1>
        </div>
      </div>
    </div>
  </div>
  <?php

   if(isset($_POST['rut'])){

    $rut = $_POST['rut'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $fecha = $_POST['fecha'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $descripcion = $_POST['descripcion'];
    $municipalidad = $_POST['municipalidad'];
    $alertEvent = '';
    $event = '';

    $query="INSERT INTO entrevista (rut, nombres, apellidos, fecha, correo, telefono, descripcion, municipalidad)
    VALUES ('$rut','$nombres','$apellidos','$fecha','$correo','$telefono','$descripcion','$municipalidad')";

    if($result = mysqli_query($con,$query)){
      $alertEvent = 'Se ha agendado exitosamente tu entrevista!.';
      $event = 'success';
    }else{
      $alertEvent = 'No se ha podido agendar tu entrevista, por favor intenta nuevamente.';
      $event = 'danger';
    }

  }

  ?>

  <div class="listpgWraper">
    <div class="container">
      
      <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-bottom: 5%;">
          <div class="userccount">
           
          
          <?php if(!empty($alertEvent)){?>

           <!--Alert de evento-->
           <?php echo "<div class='alert alert-".$event."'>" ?>
            <?php echo $alertEvent ?> 
           </div>

           <?php }?>

            <div class="socialLogin">
              <h5>Agendar Entrevista</h5>
            </div>
            <form class="form-horizontal" action="agendarentrevista.php" method="POST">
              <div class="tab-content">
                <div id="candidate" class="formpanel tab-pane fade in active">
                  <div class="formrow">
                    <input type="text" name="rut" class="form-control" placeholder="Rut" required>
                  </div>
                  <div class="formrow">
                    <input type="text" name="nombres" class="form-control" placeholder="Nombres" required>
                  </div>
                  <div class="formrow">
                    <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required>
                  </div>
                  <div class="formrow">
                    <input type="date" name="fecha" id="startDate" class="form-control" date="" placeholder="00-00-0000 00:00" required>
                  </div>
                  <div class="formrow">
                    <input type="email" name="correo" class="form-control" placeholder="Correo Electrónico" required>
                  </div>
                  <div class="formrow">
                    <input type="text" name="telefono" class="form-control" placeholder="Teléfono" required>
                  </div>

                  <div class="formrow">
                    <textarea name="descripcion" class="form-control" placeholder="Ingrese una descripcion breve..."></textarea>
                  </div>

                  <div class="formrow">
                    <select name="municipalidad" class="form-control">
                      <option disabled selected>-- Seleccione --</option>
                      <option value="1">Quillota</option>
                      <option value="2">La calera</option>
                      <option value="3">Hijuelas</option>
                      <option value="4">Nogales</option>
                      <option value="5">La Cruz</option>
                    </select>
                  </div>
                </div>
                <div class="form-group text-center">
                  <label class="col-sm-3 control-label">&nbsp;</label>
                  <div class="col-lg-12">
                    <input type="submit" name="add" class="btn btn-success"  value="Agendar cita" />
                    <a href="index.php" class="btn btn-danger">Cancelar</a>
                  </div>
                </div>
            </form>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script>
    jQuery(function($) {
      $("#startDate").mask("99/99/9999", {
        placeholder: "dd/mm/yyyy"
      });
    });
  </script>
</body>

</html>