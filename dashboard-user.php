<?php 
include("backend/config.php");
session_start();
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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

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
        <h1 class="page-heading">Escritorio</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><span>Bienvenido</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container">
    <div class="row">
    <?php include("estructura/usernavdash.php"); ?>
      <div class="col-md-9 col-sm-8">
        <!--<ul class="row profilestat">
          <li class="col-md-2 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-eye" aria-hidden="true"></i>
              <h6>10</h6>
              <strong>Vistas del perfil</strong> </div>
          </li>
          <li class="col-md-2 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-tachometer" aria-hidden="true"></i>
              <h6>2 <span>hr</span></h6>
              <strong>Tiempo de respuesta</strong> </div>
          </li>
          <li class="col-md-2 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-clock-o" aria-hidden="true"></i>
              <h6>10</h6>
              <strong>Trabajo expirado</strong> </div>
          </li>
          <li class="col-md-2 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-user-o" aria-hidden="true"></i>
              <h6>21</h6>
              <strong>Seguidores</strong> </div>
          </li>
          <li class="col-md-2 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-briefcase" aria-hidden="true"></i>
              <h6>2</h6>
              <strong>Mi lista de CV</strong> </div>
          </li>
          <li class="col-md-2 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
              <h6>8</h6>
              <strong>Mensajes</strong> </div>
          </li>
        </ul>-->
        
       
          
        <div class="myads">
          <h3>Trabajos similares</h3>
          <ul class="searchList">
            <!-- start -->
            <li>
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="jobimg"><img src="images/jobs/jobimg.jpg" alt="Job Name"></div>
                <div class="jobinfo">
                  <h3><a href="#.">Technical Database Engineer</a></h3>
                  <div class="companyName"><a href="#.">Datebase Management Company</a></div>
                  <div class="location">Permanent   - <span>New York</span></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="#.">Postula</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce venenatis arcu est. Phasellus vel dignissim tellus. Aenean fermentum fermentum convallis.</p>
          </li>
            <!-- end --> 
            
            <!-- start -->
            <li>
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="jobimg"><img src="images/jobs/jobimg.jpg" alt="Job Name"></div>
                <div class="jobinfo">
                  <h3><a href="#.">Technical Database Engineer</a></h3>
                  <div class="companyName"><a href="#.">Datebase Management Company</a></div>
                  <div class="location">Permanent   - <span>New York</span></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="#.">Apply Now</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce venenatis arcu est. Phasellus vel dignissim tellus. Aenean fermentum fermentum convallis.</p>
          </li>
            <!-- end --> 
            
            <!-- start -->
            <li>
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="jobimg"><img src="images/jobs/jobimg.jpg" alt="Job Name"></div>
                <div class="jobinfo">
                  <h3><a href="#.">Technical Database Engineer</a></h3>
                  <div class="companyName"><a href="#.">Datebase Management Company</a></div>
                  <div class="location">Permanent   - <span>New York</span></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="#.">Apply Now</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce venenatis arcu est. Phasellus vel dignissim tellus. Aenean fermentum fermentum convallis.</p>
          </li>
            <!-- end -->
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Footer-->

<?php include('estructura/footer.php') ?>
<!--Footer end--> 

<!--Copyright-->


<!-- Bootstrap's JavaScript --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!-- Owl carousel --> 
<script src="js/owl.carousel.js"></script> 

<!-- Custom js --> 
<script src="js/script.js"></script>
</body>
</html>