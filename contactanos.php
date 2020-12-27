<?php
include("backend/config.php");
require_once('PHPMailer/config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contáctanos</title>

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
  <?php 
  
  include("estructura/menu.php");
  
  $alertEvent='';
  
  if(isset($_POST['name'])){

    $mail->ClearAllRecipients( );

    $mail->AddAddress("gonzalezalexis034@gmail.com");
    
    $mail->IsHTML(true);  //podemos activar o desactivar HTML en mensaje
    $mail->Subject = 'Solicitud de contacto:'.$_POST['name'];
    
    $msg = "<h2>Contenido mensaje HTML:</h2>
    <p>Contenido</p>
    <p>Más Contenido...</p>
    ";
    
    $mail->Body    = $msg;
    
    if(!$mail->Send()){

      $alertEvent="Disculpe, se ha presentado un inconveniente al tratar de enviar su correo. Vuelva a intentarlo.";

    }else{

      $alertEvent="Su correo fue enviado exitosamente!.";
    }

  }
  ?>

  <!-- Header end -->
  <!-- Page Title start -->

  <div class="pageTitle">

    <div class="container">

      <div class="row">

        <div class="col-md-6 col-sm-6">

          <h1 class="page-heading">Contáctanos</h1>

        </div>

        <div class="col-md-6 col-sm-6">



        </div>

      </div>

    </div>

  </div>

  <!-- Page Title End -->



  <!-- Contact us -->

  <div class="inner-page">

    <div class="container">

      <?php  if(!empty($alertEvent)) { ?>
      <div class="alert alert-info" role="alert">
        <?php  echo $alertEvent ?>
      </div>
      <?php } ?>
      <div class="contact-wrap">

        <div class="row">

          <div class="col-md-12 column">
          </div>

        </div>

      </div>

      <!-- Contact Now -->

    </div>



    <!-- Contact form -->

    <div class="container">
      Envianos un correo electronico, completando el siguiente formulario. 
      <hr>
      <div class="contact-form">

        <div id="message"></div>

        <form method="POST" action="contactanos.php" name="contactform" id="contactform">

          <div class="row">

            <div class="col-md-6">

              <input name="name" type="text" id="name" placeholder="Nombre completo" class="form-control" required>

            </div>

            <div class="col-md-6">

              <input type="text" name="phone" placeholder="Numero de teléfono" class="form-control" required>

            </div>

            <div class="col-md-6">

              <input name="email" type="email" id="email" placeholder="Correo electrónico" class="form-control" required>

            </div>

            <div class="col-md-6">

              <select name="municipalidad" class="form-control mb-1" required>
                <option value="null" disabled selected> Municipalidad a la que perteneces </option>
                <option value="1">Quillota</option>
                <option value="2">La calera</option>
                <option value="3">Hijuelas</option>
                <option value="4">Nogales</option>
                <option value="5">La Cruz</option>
              </select>

            </div>

            <div class="col-md-12">

              <textarea  name="comments" id="comments" placeholder="Detalles de tu consulta..." class="form-control" required></textarea>

            </div>

            <div class="col-md-12">

              <button title="" class="btn btn-success" type="submit" id="submit">Enviar ahora</button>

            </div>

          </div>

        </form>

      </div>

    </div>

  </div>

  </div>

  </div>

  </div>



  <!-- Google Map -->

  <div class="googlemap">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53616.258427300854!2d-71.28326244956193!3d-32.871292071419525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689cd8fecd724c7%3A0xefe20583632b9e90!2sQuillota%2C%20Valpara%C3%ADso%2C%20Chile!5e0!3m2!1ses-419!2sve!4v1607349512361!5m2!1ses-419!2sve"></iframe>

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

</html>