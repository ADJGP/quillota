<?php 
include("backend/auth.php");

include("backend/config.php");
session_start(); 









$rut=$_SESSION['rut'];
$username=$_SESSION['username'];



    $sql = mysqli_query($con, "SELECT * FROM informacion_personal WHERE rut='$rut'");
      
        $row = mysqli_fetch_assoc($sql);

         $sql2 = mysqli_query($con, "SELECT * FROM users WHERE rut='$rut'");
      
        $row2 = mysqli_fetch_assoc($sql2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Detalles del candidato</title>
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

<?php 

  include("estructura/menu.php");

?>
<!-- Header end --> 

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Detalles del candidato</h1>
      </div>
      <div class="col-md-6 col-sm-6">
       
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
              <div class="userPic"><img src="images/candidates/01.jpg" alt=""></div>
              <div class="title"><?php echo $row['nombres']; echo $row['apellidos']; ?></div>
              <div class="desi">Senior Data Analytist</div>
              <div class="loctext"><i class="fa fa-history" aria-hidden="true"></i> Miembro desde, <?php echo $row2['trn_date'];  ?></div>
              <div class="loctext"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php  echo $row['apellidos']; ?> </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4"> 
            <!-- Candidate Contact -->
            <div class="candidateinfo">
              <div class="loctext"><i class="fa fa-phone" aria-hidden="true"></i> (+56) <?php  echo $row['telefono']; ?> </div>
              <div class="loctext"><i class="fa fa-envelope" aria-hidden="true"></i><?php  echo $row['correo']; ?></div>
              <div class="loctext"><i class="fa fa-globe" aria-hidden="true"></i> www.mywebsite.com</div>
              <div class="cadsocial"> <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="http://www.plus.google.com" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> <a href="http://www.facebook.com" target="_blank"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="https://www.pinterest.com" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a> <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Buttons 
      <div class="jobButtons"> <a href="#." class="btn apply"><i class="fa fa-paper-plane" aria-hidden="true"></i> Hire Me</a> <a href="#." class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download CV</a> <a href="#." class="btn"><i class="fa fa-envelope" aria-hidden="true"></i> Send Message</a> <a href="#." class="btn"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save User</a> <a href="#." class="btn report"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Report Abuse</a> </div>
    </div>
    -->
    <!-- Job Detail start -->
    <div class="row">
      <div class="col-md-8"> 
        <!-- About Employee start -->
        <div class="job-header">
          <div class="contentbox">
            <h3>About me</h3>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque massa vel lorem fermentum fringilla. Pellentesque id est et neque blandit ornare malesuada a mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, quam a fringilla congue, turpis turpis molestie ligula, ut laoreet elit arcu sed nulla. Sed at quam commodo, egestas turpis eget, fringilla dui. Etiam sit amet nulla metus. Etiam iaculis lobortis ultricies. <strong>Maecenas maximus magna a metus consectetur, vel fermentum nisl ultrices</strong>. Quisque eget ante id dui posuere ullamcorper ut molestie eros. Aliquam ultrices lacinia risus, at lacinia ante vehicula id. Nulla in lectus dignissim, egestas purus sit amet, mattis libero. Maecenas ullamcorper rutrum porta. </p>
            <ul>
              <li>In non augue eget purus placerat aliquet sit amet lobortis lacus.</li>
              <li>Curabitur interdum nisl quis placerat ornare.</li>
              <li>Curabitur ornare enim ac aliquam efficitur.</li>
              <li>Etiam volutpat leo et orci luctus, blandit accumsan arcu placerat.</li>
              <li>Proin egestas dui et pulvinar pellentesque.</li>
              <li>In ultricies nulla eget lacus tempor lobortis.</li>
            </ul>
          </div>
        </div>
        
        <!-- Education start 
        <div class="job-header">
          <div class="contentbox">
            <h3>Education</h3>
            <ul class="educationList">
              <li>
                <div class="date">31<br>
                  May<br>
                  2012</div>
                <h4>Masters Degree</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque massa vel lorem fermentum fringilla. Pellentesque id est et neque blandit ornare malesuada a mauris.</p>
                <div class="clearfix"></div>
              </li>
              <li>
                <div class="date">31<br>
                  May<br>
                  2012</div>
                <h4>Masters Degree</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque massa vel lorem fermentum fringilla. Pellentesque id est et neque blandit ornare malesuada a mauris.</p>
                <div class="clearfix"></div>
              </li>
              <li>
                <div class="date">31<br>
                  May<br>
                  2012</div>
                <h4>Masters Degree</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque massa vel lorem fermentum fringilla. Pellentesque id est et neque blandit ornare malesuada a mauris.</p>
                <div class="clearfix"></div>
              </li>
            </ul>
          </div>
        </div>
        -->
        <!-- Experience start 
        <div class="job-header">
          <div class="contentbox">
            <h3>Experience</h3>
            <ul class="experienceList">
              <li>
                <div class="row">
                  <div class="col-md-2"><img src="images/employers/emplogo1.jpg" alt="your alt text"></div>
                  <div class="col-md-10">
                    <h4>Company Name</h4>
                    <div class="row">
                      <div class="col-md-6">www.companywebsite.com</div>
                      <div class="col-md-6">From 2014 - Present</div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque massa vel lorem fermentum fringilla. Pellentesque id est et neque blandit ornare</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-2"><img src="images/employers/emplogo1.jpg" alt="your alt text"></div>
                  <div class="col-md-10">
                    <h4>Company Name</h4>
                    <div class="row">
                      <div class="col-md-6">www.companywebsite.com</div>
                      <div class="col-md-6">From 2014 - Present</div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque massa vel lorem fermentum fringilla. Pellentesque id est et neque blandit ornare</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-2"><img src="images/employers/emplogo1.jpg" alt="your alt text"></div>
                  <div class="col-md-10">
                    <h4>Company Name</h4>
                    <div class="row">
                      <div class="col-md-6">www.companywebsite.com</div>
                      <div class="col-md-6">From 2014 - Present</div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque massa vel lorem fermentum fringilla. Pellentesque id est et neque blandit ornare</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        -->
        <!-- Portfolio start -->
        <div class="job-header">
          <div class="contentbox">
            <h3>Portfolio</h3>
            <ul class="row userPortfolio">
              <li class="col-md-6 col-sm-6">
                <div class="imgbox"><img src="images/portfolio/portfolio-img1.jpg" alt="your alt text">
                  <div class="itemHover">
                    <div class="zoombox"><a href="" title="images/portfolio/portfolio-img1" class="item-zoom fancybox-effects-a"><i class="fa fa-search" aria-hidden="true"></i></a> <a href="" rel="nofollow" class="item-zoom" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i></a> </div>
                    <div class="infoItem">
                      <div class="itemtitle">
                        <h5>Title Here</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="col-md-6 col-sm-6">
                <div class="imgbox"><img src="images/portfolio/portfolio-img2.jpg" alt="your alt text">
                  <div class="itemHover">
                    <div class="zoombox"><a href="" title="images/portfolio/portfolio-img2" class="item-zoom fancybox-effects-a"><i class="fa fa-search" aria-hidden="true"></i></a> <a href="" rel="nofollow" class="item-zoom" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i></a> </div>
                    <div class="infoItem">
                      <div class="itemtitle">
                        <h5>Title Here</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="col-md-6 col-sm-6">
                <div class="imgbox"><img src="images/portfolio/portfolio-img3.jpg" alt="your alt text">
                  <div class="itemHover">
                    <div class="zoombox"><a href="" title="images/portfolio/portfolio-img3" class="item-zoom fancybox-effects-a"><i class="fa fa-search" aria-hidden="true"></i></a> <a href="" rel="nofollow" class="item-zoom" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i></a> </div>
                    <div class="infoItem">
                      <div class="itemtitle">
                        <h5>Title Here</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="col-md-6 col-sm-6">
                <div class="imgbox"><img src="images/portfolio/portfolio-img4.jpg" alt="your alt text">
                  <div class="itemHover">
                    <div class="zoombox"><a href="" title="images/portfolio/portfolio-img4" class="item-zoom fancybox-effects-a"><i class="fa fa-search" aria-hidden="true"></i></a> <a href="" rel="nofollow" class="item-zoom" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i></a> </div>
                    <div class="infoItem">
                      <div class="itemtitle">
                        <h5>Title Here</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="col-md-6 col-sm-6">
                <div class="imgbox"><img src="images/portfolio/portfolio-img5.jpg" alt="your alt text">
                  <div class="itemHover">
                    <div class="zoombox"><a href="" title="images/portfolio/portfolio-img5" class="item-zoom fancybox-effects-a"><i class="fa fa-search" aria-hidden="true"></i></a> <a href="" rel="nofollow" class="item-zoom" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i></a> </div>
                    <div class="infoItem">
                      <div class="itemtitle">
                        <h5>Title Here</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="col-md-6 col-sm-6">
                <div class="imgbox"><img src="images/portfolio/portfolio-img6.jpg" alt="your alt text">
                  <div class="itemHover">
                    <div class="zoombox"><a href="" title="images/portfolio/portfolio-img6" class="item-zoom fancybox-effects-a"><i class="fa fa-search" aria-hidden="true"></i></a> <a href="" rel="nofollow" class="item-zoom" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i></a> </div>
                    <div class="infoItem">
                      <div class="itemtitle">
                        <h5>Title Here</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4"> 
        <!-- Candidate Detail start -->
        <div class="job-header">
          <div class="jobdetail">
            <h3>Candidate Detail</h3>
            <ul class="jbdetail">
              <li class="row">
                <div class="col-md-6 col-xs-6"><?php echo $_SESSION['rut'];?></div>
                <div class="col-md-6 col-xs-6"><span>5 Years</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">Age</div>
                <div class="col-md-6 col-xs-6"><span>28 Years</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">Current Salary($)</div>
                <div class="col-md-6 col-xs-6"><span class="permanent">10K - 12K</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">Expected Salary($)</div>
                <div class="col-md-6 col-xs-6"><span class="freelance">14K - 18K</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">Education Levels</div>
                <div class="col-md-6 col-xs-6"><span>Masters</span></div>
              </li>
            </ul>
          </div>
        </div>
       

<?php





include("backend/config.php");

$rut2=$_SESSION['rut'];

        $habilidades = mysqli_query($con, "SELECT * FROM habilidades WHERE rut='$rut2'");
      if(mysqli_num_rows($habilidades) == 0){
      

        if(isset($_POST['addhailidad'])){
    $habilidad1      = mysqli_real_escape_string($con,(strip_tags($_POST["habilidad1"],ENT_QUOTES)));
    $habilidad2      = mysqli_real_escape_string($con,(strip_tags($_POST["habilidad2"],ENT_QUOTES)));
    $habilidad3      = mysqli_real_escape_string($con,(strip_tags($_POST["habilidad3"],ENT_QUOTES)));
    $habilidad4      = mysqli_real_escape_string($con,(strip_tags($_POST["habilidad4"],ENT_QUOTES)));
    $habilidad5      = mysqli_real_escape_string($con,(strip_tags($_POST["habilidad5"],ENT_QUOTES)));
    $habilidad6      = mysqli_real_escape_string($con,(strip_tags($_POST["habilidad6"],ENT_QUOTES)));


    $query="INSERT INTO habilidades (rut,habilidad1, habilidad2, habilidad3, habilidad4, habilidad5, habilidad6) VALUES ('$rut','$habilidad1','$habilidad2','$habilidad3','$habilidad4','$habilidad5','$habilidad6')";
    
    $insert1 = mysqli_query($con, $query) or die ('Error: ' . mysqli_error($con));
                           

                            }
       ?>

        <div class="job-header">
          <div class="jobdetail">
            <h3>Ingrese aqui sus habilidades</h3>
            <div class="formpanel">
                <form class="form-horizontal" action="" method="post">
              <div class="formrow">
                <input type="text" class="form-control" name="habilidad1" placeholder="Habilidad 1">
              </div>
              <div class="formrow">
                <input type="text" class="form-control" name="habilidad2" placeholder="Habilidad 2">
              </div>
              <div class="formrow">
                <input type="text" class="form-control" name="habilidad3" placeholder="Habilidad 3">
              </div>
              <div class="formrow">
                <input type="text" class="form-control" name="habilidad4" placeholder="Habilidad 4">
              </div>
              <div class="formrow">
                <input type="text" class="form-control" name="habilidad5" placeholder="Habilidad 5">
              </div>
              <div class="formrow">
                <input type="text" class="form-control" name="habilidad6" placeholder="Habilidad 6">
              </div>
             
           <input type="submit" name="addhailidad" class="btn btn-sm btn-primary" value="Guardar datos">
            </div>
          </div>
        </div>

<?php

      } else {

      $row = mysqli_fetch_assoc($habilidades);
        
?> 

  <!-- Google Map start -->
        <div class="job-header">
          <div class="jobdetail">
            <h3>Habilidades</h3>
            <div class="skillswrap"> 
              <!-- Skill -->
              <h5><?php echo $row['habilidad1']; ?></h5>
              <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <span>100%</span> </div>
              </div>
              <!-- Skill -->
              <h5><?php echo $row['habilidad2']; ?></h5>
              <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <span>100%</span> </div>
              </div>
              <!-- Skill -->
              <h5><?php echo $row['habilidad3']; ?></h5>
              <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <span>100%</span> </div>
              </div>
              <!-- Skill -->
              <h5><?php echo $row['habilidad4']; ?></h5>
              <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <span>100%</span> </div>
              </div>
              <!-- Skill -->
              <h5><?php echo $row['habilidad5']; ?></h5>
              <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%"> <span>100%</span> </div>
              </div>
              <!-- Skill -->
              <h5><?php echo $row['habilidad6']; ?></h5>
              <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <span>100%</span> </div>
              </div>
            </div>
          </div>
        </div>




<?php
      }
?>


      
        
        <!-- Contact Company start 
        <div class="job-header">
          <div class="jobdetail">
            <h3>Contact Elliot Scott</h3>
            <div class="formpanel">
              <div class="formrow">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="formrow">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="formrow">
                <input type="text" class="form-control" placeholder="Phone">
              </div>
              <div class="formrow">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="formrow">
                <textarea class="form-control" placeholder="Message"></textarea>
              </div>
              <input type="submit" class="btn" value="Submit">
            </div>
          </div>
        </div>
      </div>-->
    </div>
  </div>
</div>

<!--Footer-->

<?php 
  include("estructura/footer.php");
?>
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
</html>