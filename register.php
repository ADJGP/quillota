<?php

include("backend/config.php");

if (isset($_POST['add'])) {



  $telefono       = mysqli_real_escape_string($con, (strip_tags($_POST["telefono"], ENT_QUOTES)));

  $fecha_nacimiento = mysqli_real_escape_string($con, (strip_tags($_POST["fecha_nacimiento"], ENT_QUOTES)));

  $area       = mysqli_real_escape_string($con, (strip_tags($_POST["area"], ENT_QUOTES)));

  $municipalidad = mysqli_real_escape_string($con, (strip_tags($_POST["municipalidad"], ENT_QUOTES)));

  $nombre_usuario = mysqli_real_escape_string($con, (strip_tags($_POST["nombre_usuario"], ENT_QUOTES))); //Escanpando caracteres 

  $rut        = mysqli_real_escape_string($con, (strip_tags($_POST["rut"], ENT_QUOTES))); //Escanpando caracteres 

  $nombres    = mysqli_real_escape_string($con, (strip_tags($_POST["nombre"], ENT_QUOTES))); //Escanpando caracteres 

  $apellidos  = mysqli_real_escape_string($con, (strip_tags($_POST["apellido"], ENT_QUOTES))); //Escanpando caracteres 

  $usuarios   = mysqli_real_escape_string($con, (strip_tags($_POST["usuario"], ENT_QUOTES))); //Escanpando caracteres 

  $correo     = mysqli_real_escape_string($con, (strip_tags($_POST["correo"], ENT_QUOTES))); //Escanpando caracteres 

  $password   = mysqli_real_escape_string($con, (strip_tags($_POST["password"], ENT_QUOTES))); //Escanpando caracteres 

  $confirmar  = mysqli_real_escape_string($con, (strip_tags($_POST["confirmar"], ENT_QUOTES))); //Escanpando caracteres 

  md5($password);

  $date_create = date("d/m/y");





  $cek = mysqli_query($con, "SELECT * FROM users WHERE username='$nombre_usuario'");

  if (mysqli_num_rows($cek) == 0) {



    $insert = mysqli_query($con, "INSERT INTO users(username, email, password,rut, trn_date, tipo)

                  VALUES('$nombre_usuario','$correo','" . md5($password) . "','$rut','$date_create','2')") or die(mysqli_error($con));



    $insert2 = mysqli_query($con, "INSERT INTO informacion_personal(nombres, apellidos, rut, municipalidad, fecha_nacimiento, correo, telefono, area)

                  VALUES('$nombres','$apellidos','$rut','$municipalidad','$fecha_nacimiento','$correo','$telefono','$area')") or die(mysqli_error($con));



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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Registro</title>
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

          <h1 class="page-heading">Registro</h1>

        </div>
      </div>
    </div>
  </div>
  <!-- Page Title End -->


  <div class="listpgWraper">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-bottom: 5%;">
          <div class="userccount">
            <div class="socialLogin">
              <h5>Registro</h5>
            </div>
            <form class="form-horizontal" action="" method="post">
              <div class="userbtns">
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#candidate">Candidato</a></li>
                </ul>
              </div>

              <div class="tab-content">
                <div id="candidate" class="formpanel tab-pane fade in active">
                  <div class="formrow">
                    <input type="text" name="nombre_usuario" class="form-control" placeholder="Nombre de usuario">
                  </div>
                  <div class="formrow">
                    <input type="text" name="rut" class="form-control" placeholder="RUT">
                  </div>
                  <div class="formrow">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombres">
                  </div>
                  <div class="formrow">
                    <input type="text" name="apellido" class="form-control" placeholder="Apellidos">
                  </div>

                  <div class="formrow">
                    <input type="text" name="correo" class="form-control" placeholder="Correo">
                  </div>

                  <div class="formrow">
                    <input type="text" name="password" class="form-control" placeholder="Clave">
                  </div>

                  <div class="formrow">
                    <input type="text" name="confirmar" class="form-control" placeholder="Confirmar clave">
                  </div>

                  <div class="formrow">
                    <input type="text" name="ubicacion" class="form-control" placeholder="Dirección">
                  </div>

                  <div class="formrow">
                    <input type="text" name="telefono" class="form-control" placeholder="Teléfono">
                  </div>

                  <div class="formrow">
                    <input type="date" name="fecha_nacimiento" class="input-group date form-control" date="" data-date-format="dd-mm-yyyy" placeholder="Fecha de nacimiento" required>
                  </div>

                  <div class="formrow">
                    <select name="municipalidad" class="form-control">
                      <option> Comuna </option>
                      <option value="1">Quillota</option>
                      <option value="2">La calera</option>
                      <option value="3">Hijuelas</option>
                      <option value="4">Nogales</option>
                      <option value="5">La Cruz</option>
                    </select>
                  </div>

                  <div class="formrow">
                    <select name="area" class="form-control">
                      <option> Área </option>
                      <option value="1">Informática</option>
                      <option value="2">Salud</option>
                      <option value="3">Transporte</option>
                      <option value="3">Limpieza</option>
                      <option value="3">Administración</option>
                    </select>
                  </div>

                  <input type="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">

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





  <!-- Bootstrap's JavaScript -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- Owl carousel -->
  <script src="js/owl.carousel.js"></script>

  <!-- Custom js -->
  <script src="js/script.js"></script>

  <script>
    $('.date').datepicker({

      format: 'dd-mm-yyyy',

    })
  </script>
</body>
</html>