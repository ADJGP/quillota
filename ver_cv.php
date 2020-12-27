<?php 
include("backend/config.php");
session_start();

$searchUser = "SELECT * FROM informacion_personal WHERE id_usuario = '".$_SESSION['id']."'";
$result = $con->query($searchUser);
$User = mysqli_fetch_array($result);

$searchStyde = "SELECT * FROM estudios WHERE id_usuario = '".$_SESSION['id']."'";
$resultsStyde = $con->query($searchStyde);
#$User = mysqli_fetch_array($result);

$searchWork = "SELECT * FROM experiencia_laboral WHERE id_usuario = '".$_SESSION['id']."'";
$result1 = $con->query($searchWork);
#$User = mysqli_fetch_array($result);

$searchSkills = "SELECT * FROM habilidades WHERE id_usuario = '".$_SESSION['id']."'";
$result2 = $con->query($searchSkills);
#$User = mysqli_fetch_array($result);

?> 

<!DOCTYPE html>
<html lang="en">
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
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="css/font-awesome.css" rel="stylesheet">

<!-- Custom Style -->
<link href="css/main.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="Dashboard-admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
<!-- Header start -->
<?php include("estructura/menu.php"); ?>
<!-- Header end --> <!-- Page Title start -->
<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Ver CV</h1>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container"> 
    
    <!-- Blog start -->
    <div class="row">
      <div class="col-md-8"> 
        <!-- Blog List start -->
        <div class="blogWraper">
          <div class="blogList blogdetailbox">
            <!--<div class="postimg"><img src="images/blog/large-1.jpg" alt="Blog Title">
              <div class="date"> 17 SEP</div>
            </div>-->
            <div class="post-header margin-top30">
              <h4><a href="#."><?php echo $User['nombres'].' '.$User['apellidos']; ?></a></h4>
              <div class="postmeta">RUT : <span><?php echo $User['rut']; ?></span> Fecha de nacimiento : <a href="#."><?php echo $User['fecha_nacimiento']; ?></a></div>
            </div>
            <h4>Estudios</h4>
            <ul class="searchList">
            <?php while($stedys = mysqli_fetch_array($resultsStyde)){ ?>
            <!-- start -->
            <li>
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="jobimg"><img src="images/jobs/jobimg.jpg" alt="Job Name"></div>
                <div class="jobinfo">
                  <h3><a href="#."><?php echo $stedys['titulo'] ?></a></h3>
                  <div class="companyName"><a href="#."><?php echo $stedys['descripcion'] ?></a></div>
                  <div class="location"><span><?php echo $stedys['año'] ?></span></div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </li>
          <?php } ?>
            <!-- end --> 
          </ul>
          </div>
          <div class="comments margin-top30">
            <h4>Experiencia Laboral</h4>

            <ul class="media-list">
            <?php while($works = mysqli_fetch_array($result1)){ ?>
              <!-- COMMENTS -->
              <li class="media">
                <div class="media-left"> <a href="#."> <img class="media-object img-responsive" src="images/coment-avatar-1.jpg" alt=""> <br>
                  </a> </div>
                <div class="media-body">
                  <h6 class="media-heading"><?php echo $works['titulo'] ?><span> Año: <?php echo $works['año'] ?></span></h6>
                  <p><?php echo $works['descripcion'] ?></p>
                </div>
              </li>
             <?php } ?>
            </ul>
            
          </div>
        </div>
      </div>
      <div class="col-md-4"> 
        <!-- Side Bar -->
        <div class="sidebar"> 
          <!-- Categories -->
          <div class="widget">
            <h5 class="widget-title">Habilidades</h5>
            <ul class="categories">
            <?php while($skills = mysqli_fetch_array($result2)){ ?>
              <li><a href="#"><?php echo $skills['nombre'] ?></a></li> 
            <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4"> 
        <!-- Side Bar -->
        <div class="sidebar"> 
          <!-- Categories -->
          <div class="widget">
            <h5 class="widget-title">Informacion de Contacto</h5>
            <ul class="categories">
              <li><a href="#"><strong>Telefono:</strong><?php echo $User['telefono'] ?></a></li> 
              <li><a href="#"><strong>Correo Electrónico:</strong><br><?php echo $User['correo'] ?></a></li> 
            </ul>
          </div>
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
</body>
</html>