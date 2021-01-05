<?php
include("backend/config.php");
?>
<!DOCTYPE html>



<html lang="en">



<head><meta charset="gb18030">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Analisis FODA</title>
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
<!-- estilos imagenes foda -->
<link href="css/estilos-imagenes-foda.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>

  <script src="js/respond.min.js"></script>

<![endif]-->

</head>

<body>

<!-- Header start -->

<?php include('estructura/menu.php');?>
<!-- Header end --> 

<!-- Page Title start -->



<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Análisis Foda</h1>
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
      <div class="col-md-12">
    
           <?php
              if(isset($_POST['add'])){
                $amenza        = mysqli_real_escape_string($con,(strip_tags($_POST["amenaza"],ENT_QUOTES)));//Escanpando caracteres 
                $oportunidades         = mysqli_real_escape_string($con,(strip_tags($_POST["oportunidades"],ENT_QUOTES)));//Escanpando caracteres 
                $debilidades  = mysqli_real_escape_string($con,(strip_tags($_POST["debilidades"],ENT_QUOTES)));//Escanpando caracteres 
                $fortaleza  = mysqli_real_escape_string($con,(strip_tags($_POST["fortaleza"],ENT_QUOTES)));//Escanpando caracteres 
                $fecha= date("d/m/yy");
              
                
              

                $cek = mysqli_query($con, "SELECT * FROM formfoda");
                if(mysqli_num_rows($cek) >= 0){
                  
                    $insert = mysqli_query($con, "INSERT INTO formfoda( fortaleza, amenza, debilidades, oportunidades, creado) VALUES('$amenza','$oportunidades','$debilidades','$fortaleza','$fecha')")  or die(mysqli_error());
                    if($insert){
                      echo '<script> alert("Guardado"); </script>';
                    }else{
                      echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
                    }
                  
                }else{
                  echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. código exite!</div>';
                }
              }
          ?>




        <!-- <IMAGENES FODA" > -->
<form action="" method="post">

  <div class="contenedor-foda">

         <img src="6.png" href="#" class="fondo-gris" style="margin-left: 21%;">
         <img src="5.png" href="#" class="imagen-centro" style="margin-left: 20%;">
         <img src="2.png" href="#" class="imagen-rosa" style="margin-left: 20%;">

            <div class="texto-rosa" style="margin-left: 100%; margin-right:-20%">
              <label for="w3review"></label>
              <textarea id="w3review" name="amenaza" rows="5" cols="20">
              </textarea>
            </div>

         <img src="1.png" href="#" class="imagen-naranja" title="(Situación que provienen del entorno atentando contra la estabilidad laboral)." style="margin-left: 20%;">

            <div class="texto-naranja" style="margin-left: 20%;">
              <label for="w3review"></label>
              <textarea id="w3review" name="fortaleza" rows="5" cols="20">
              </textarea>
            </div>

         <img src="3.png" href="#" class="imagen-morada" title="(Factores que resultan positivos y favorables en el entorno laboral)." style="margin-left: 20%;">

            <div class="texto-morada" style="margin-left: 100%; margin-right:-20%">
              <label for="w3review"></label>
              <textarea id="w3review" name="oportunidades" rows="5" cols="20">
              </textarea>
            </div>

         <img src="4.png" href="#" class="imagen-azul" title="(Capacidades y resultados con que cuenta la empresa)." style="margin-left: 20%;">

            <div class="texto-azul" style="margin-left: 20%;">
              <label for="w3review"></label>
              <textarea id="w3review" name="debilidades" rows="5" cols="20">
              </textarea>
            </div>

  </div>

          <div class="viewallbtn" style="margin-left: 20%;">
           <input type="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
          </div>
</form>



 
         
      </div>
    </div>
  </div>

</div>

<!--Footer-->
<?php include("estructura/footer.php"); ?>

<!-- Bootstrap's JavaScript --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<!-- Owl carousel --> 
<script src="js/owl.carousel.js"></script> 
<!-- Custom js --> 
<script src="js/script.js"></script>
</body>
</html>