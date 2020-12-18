
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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
<!-- Header start -->

<?php include("estructura/menu.php");?>
<!-- Header end --> <!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
   <h1>Agendar entrevista</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        


      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="error-page-wrap">
  <div class="container">
    <div class="errormain">

      
<?php

// If form submitted, insert values into the database.

        // removes backslashes

if(isset($_POST['add'])){
 $rut = stripslashes($_REQUEST['rut']);
  $nombres = stripslashes($_REQUEST['nombres']);
   $apellidos = stripslashes($_REQUEST['apellidos']);
    $fecha = stripslashes($_REQUEST['fecha']);
     $correo = stripslashes($_REQUEST['correo']);
      $telefono = stripslashes($_REQUEST['telefono']);
       $descripcion = stripslashes($_REQUEST['descripcion']);
        $municipalidad = stripslashes($_REQUEST['municipalidad']);


       

       $result = mysqli_query($con, "INSERT INTO entrevista (rut, nombres, apellidos, fecha, correo, telefono, descripcion, municipalidad)
VALUES ('$rut','$nombres','$apellidos','$fecha','$correo','$telefono','$descripcion','$municipalidad')") ;


 }


?>


    
      <div class="error-msg">
          <form class="form-horizontal" action="" method="post">
        <div class="form-group">
          <label class="col-sm-3 control-label">RUT</label>
          <div class="col-sm-2">
            <input type="text" name="rut" class="form-control" placeholder="RUT" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Nombres</label>
          <div class="col-sm-4">
            <input type="text" name="nombres" class="form-control" placeholder="Nombres" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Apellidos</label>
          <div class="col-sm-4">
            <input type="text" name="apellidos" class="form-control" placeholder="Nombres" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Fecha para agendar</label>
          <div class="col-sm-4">
            <input type="datetime-local" name="fecha" id="startDate" class="input-group date form-control" date=""  placeholder="00-00-0000 00:00" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Dirección de correo</label>
          <div class="col-sm-3">
             <input type="text" name="correo" class="form-control" placeholder="Correo" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Teléfono</label>
          <div class="col-sm-3">
            <input type="text" name="telefono" class="form-control" placeholder="Teléfono" required>
          </div>
        </div>

          <div class="form-group">
          <label class="col-sm-3 control-label">Descripcion</label>
          <div class="col-sm-3">
         
         
          <textarea name="descripcion" class="form-control" placeholder="Dirección de correo"></textarea> </div>
        </div>

       
        <div class="form-group">
          <label class="col-sm-3 control-label">Municipalidad</label>
          <div class="col-sm-3">
            <select name="municipalidad" class="form-control">
              <option value=""> ----- </option>

            
                           <option value="1">Quillota</option>
              <option value="2">La calera</option>
              
               <option value="3">Hijuelas</option>
                <option value="3">Nogales</option>
                <option value="3">La Cruz</option>
            </select>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-3 control-label">&nbsp;</label>
          <div class="col-sm-6">
            <input type="submit" name="add" class="btn btn-sm btn-primary" value="Enviar">
            <a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
          </div>
        </div>
      </form>
    </div>
  </div>
    </div>
  </div>
</div>


<!--Footer-->
<?php include("estructura/footer.php");?>
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
jQuery(function($){
   $("#startDate").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
});
  </script>
</body>
</html>