<?php
require_once('backend/setup.php');
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

  <?php
  
  require_once  'backend/vendor-fb/autoload.php'; 
$fb = new Facebook\Facebook([
  'app_id' => '307107977359709',
  'app_secret' => '8948a67e7c287f65d56f49c3dbeb580b',
  'default_graph_version' => 'v3.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$redirectURL = "https://".$_SERVER['SERVER_NAME']."/fb-callback.php";
$loginUrl = $helper->getLoginUrl($redirectURL, $permissions);



  require('backend/config.php');
  
  // If form submitted, insert values into the database.
  if (isset($_POST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    //Checking is user existing in the database or not
    $query = "SELECT * FROM `users` WHERE username='$username'
and password='" . md5($password) . "'";

    $result = mysqli_query($con,$query);
    $fila = mysqli_fetch_assoc($result);

     

   $rows = mysqli_num_rows($result);
        if($rows==1){

   $userid=$fila['id'];
   $rut=$fila['rut'];
   $tipo=$fila['tipo'];
   $comuna=$fila['id_comuna'];


      #Variables de Sesion
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['id'] = $userid;
      $_SESSION['rut'] = $rut;
      $_SESSION['sesion'] = 'Active';
      $_SESSION['id_comuna'] = $comuna;

      if ($tipo == 1) {

        header("Location: Dashboard-admin/index.php");
      }

      if ($tipo == 2) {

             header("Location: index.php");
           }
    
     if ($tipo==3) {

             header("Location: Dashboard-muni/index.php");
           }
         } 
    if ($rows == 0) {

      header("Location: 404.php");
    }
  } else {
  ?>



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
            <h1 class="page-heading">Formulario de acceso</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Title End -->

    <div class="listpgWraper">
      <div class="container">
        <div class="row">

          <div class="col-md-6 col-md-offset-3">

            <div class="userccount">
              <div class="socialLogin">
                <h5>Formulario de acceso</h5>
                
          <a class="fb" href="<?php print_r ($loginUrl); ?>" class="fa fa-facebook" >F</a> 
          
        

                
                
                
                <a href="<?php echo $google->createAuthUrl(); ?>" class="gp"><i class="fa fa-google-plus" aria-hidden="true"></i></a> 
              </div>


              <!-- login form -->
              <form form action="" method="post" name="login">
                <div class="formpanel">
                  <div class="formrow">

                    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
                  </div>
                  <div class="formrow">

                    <input name="password" id="password" type="password" class="form-control" placeholder="Contrase単a">
                  </div>
                  <input class="btn" name="submit" type="submit" value="Login">
                </div>
                <!-- login form  end-->

                <!-- sign up form -->
                <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> <a href="#.">Registrese aqui</a></div>
                <!-- sign up form end-->
              </form>

            </div>
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

  <?php } ?>
</body>

</html>