<?php
require_once('backend/auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head><meta charset="euc-jp">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
  
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
    <!-- Header container end -->
    </div>
    <!-- Header end -->
    <?php

    include("estructura/menu.php");
    ?>

    <!-- Page Title start -->
    <div class="pageTitle">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <h1 class="page-heading">Videoteca</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Title End -->

    <div class="listpgWraper">
      <div class="container">
        <div class="row">

          <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false" >
   
   <!-- Wrapper for slides -->
   <div class="carousel-inner" style="height: 400px;">
     <div class="item active">
       <embed src="https://drive.google.com/file/d/1ea_jIjW6_xsrAH71hCxVdkUUpAbW1VFn/preview" width="100%" style="height: 400px;">
     </div>

     <div class="item">
        <embed src="https://drive.google.com/file/d/1K7NrEb-nhyKhd62f7r1EGa5KylGsr0Gf/preview" width="100%" style="height: 400px;">
     </div>
   
     <div class="item">
       <embed src="https://drive.google.com/file/d/1je3gzGDjbY-zitTsT9uHvPjGc6-Fozmy/preview" width="100%" style="height: 400px;">
     </div>
   </div>

       <!-- Left and right controls -->
       <a class="left carousel-control" href="#myCarousel" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="right carousel-control" href="#myCarousel" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right"></span>
         <span class="sr-only">Next</span>
       </a>
</div>
          
        </div>
      </div>
    </div>

    <!--Footer-->
    <?php include('estructura/footer.php'); ?>
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