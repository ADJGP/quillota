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
<?php include("estructura/menu.php"); ?>
<!-- Header end --> <!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Editar perfil</h1>
      </div>
      <div class="col-md-6 col-sm-6">
    
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
            
            <!-- Personal Information -->
            <h5>Editar informacion</h5>
            <div class="row">
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="name" class="form-control" placeholder="User Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="email" class="form-control" placeholder="Correo">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="phone" class="form-control" placeholder="Telefono">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="website" class="form-control" placeholder="Website">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="address" class="form-control" placeholder="Direccion">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="designation" class="form-control" placeholder="Designacion">
                </div>
              </div>
              <div class="col-md-3">
                <div class="formrow">
                  <select class="form-control" name="experience">
                    <option>Experiencia</option>
                    <option>Fresh</option>
                    <option>1 Año</option>
                    <option>2 Años</option>
                    <option>3 Años</option>
                    <option>4 Años</option>
                    <option>5 Años</option>
                    <option>6 Años</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="formrow">
                  <select class="form-control" name="age">
                    <option>Edad</option>
                    <option>20 Años</option>
                    <option>21 Años</option>
                    <option>22 Años</option>
                    <option>23 Años</option>
                    <option>24 Años</option>
                    <option>25 Años</option>
                    <option>26 Años</option>
                    <option>27 Años</option>
                    <option>28 Años</option>
                    <option>29 Años</option>
                    <option>30 Años</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="formrow">
                  <select class="form-control" name="current">
                    <option>Current Salary</option>
                    <option>$500 - $999</option>
                    <option>$999 - $1499</option>
                    <option>$1500 - $1999</option>
                    <option>$2000 - $3000</option>
                    <option>$3000+</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="formrow">
                  <select class="form-control" name="demand">
                    <option>Demand</option>
                    <option>$500 - $999</option>
                    <option>$999 - $1499</option>
                    <option>$1500 - $1999</option>
                    <option>$2000 - $3000</option>
                    <option>$3000+</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="edulevel" class="form-control" placeholder="Education Level">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="file" name="uploadcv" class="form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <textarea name="aboutme" class="form-control" placeholder="About Me"></textarea>
                </div>
              </div>
            </div>
            <hr>
            
            <!-- Skills -->
            <h5>Habilidades</h5>
            <div class="row">
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="skill" class="form-control" placeholder="Skill Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="skilllevel" class="form-control" placeholder="Skill Level in %">
                </div>
              </div>
            </div>
            <a href="#.">Add Other</a>
            <hr>
            
            <!-- Education -->
            <h5>Education</h5>
            <div class="row">
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="degreename" class="form-control" placeholder="Degree Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="degreedate" class="form-control" placeholder="Degree Compelete Date">
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <textarea class="form-control" name="aboutdeg" placeholder="About Degree"></textarea>
                </div>
              </div>
            </div>
            <a href="#.">Add Other</a>
            <hr>
            
            <!-- Experience -->
            <h5>Experience</h5>
            <div class="row">
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="company" class="form-control" placeholder="Company">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="webcom" class="form-control" placeholder="Company Website">
                </div>
              </div>
              <div class="col-md-3">
                <div class="formrow">
                  <select class="form-control" name="join-frm">
                    <option>Join From</option>
                    <option>2011</option>
                    <option>2012</option>
                    <option>2013</option>
                    <option>2014</option>
                    <option>2015</option>
                    <option>2016</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="formrow">
                  <select class="form-control" name="endon">
                    <option>End on</option>
                    <option>2011</option>
                    <option>2012</option>
                    <option>2013</option>
                    <option>2014</option>
                    <option>2015</option>
                    <option>Present</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="location" class="form-control" placeholder="Location">
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <textarea class="form-control" name="about-company" placeholder="About Company"></textarea>
                </div>
              </div>
            </div>
            <a href="#.">Add Other</a>
            <hr>
            
            <!-- Portfolio -->
            <h5>Portfolio</h5>
            <div class="row">
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="projname" class="form-control" placeholder="Project Name">
                </div>
              </div>
              <div class="col-md-3">
                <div class="formrow">
                  <select class="form-control" name="startfrm">
                    <option>Srart From</option>
                    <option>2011</option>
                    <option>2012</option>
                    <option>2013</option>
                    <option>2014</option>
                    <option>2015</option>
                    <option>2016</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="formrow">
                  <select class="form-control" name="endon2">
                    <option>End on</option>
                    <option>2011</option>
                    <option>2012</option>
                    <option>2013</option>
                    <option>2014</option>
                    <option>2015</option>
                    <option>Present</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <input type="text" name="projdesc" class="form-control" placeholder="Project Short Description">
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <input type="file" name="image" class="form-control">
                </div>
              </div>
            </div>
            <a href="#.">Add Other</a>
            <hr>
            
            <!-- Social -->
            <h5>Social</h5>
            <div class="row">
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="fb" class="form-control" placeholder="Facebook">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="twitter" class="form-control" placeholder="Twitter">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="gplus" class="form-control" placeholder="Google Plus">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="linkedin" class="form-control" placeholder="Linked In">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="pinterest" class="form-control" placeholder="Pinterest">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" class="form-control" placeholder="Behance">
                </div>
              </div>
            </div>
            <br>
            <input type="submit" class="btn" value="Update and Save">
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


<!-- Bootstrap's JavaScript --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!-- Owl carousel --> 
<script src="js/owl.carousel.js"></script> 

<!-- Custom js --> 
<script src="js/script.js"></script>
</body>
</html>