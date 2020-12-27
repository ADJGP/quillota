<?php 
include("backend/config.php");
session_start();

$searchUser = "SELECT * FROM informacion_personal WHERE rut = '".$_SESSION['rut']."'";
$result = $con->query($searchUser);
$User = mysqli_fetch_array($result);

if(isset($_POST['guardar'])){

  $query = "UPDATE informacion_personal SET nombres = '".$_POST['nombres']."', apellidos = '".$_POST['apellidos']."', rut = '".$_POST['rut']."', fecha_nacimiento = '".$_POST['fecha_nacimiento']."', telefono = '".$_POST['telefono']."', correo = '".$_POST['email']."' WHERE id_usuario='".$_SESSION['id']."'";

  if($con->query($query)){
    header('location: edit-profile.php?exito=true;');
  }else{
    header('location: edit-profile.php?error=true;');
  }
  
}

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
<!-- Header end --> <!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Editar datos personales</h1>
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
    
    <?php include("estructura/usernavdash.php"); ?>
      <div class="col-md-9 col-sm-8">
        <?php if(isset($_GET['exito'])){ ?>
        <div class="alert alert-success">
        Actualizacion exitosa!
        </div>
        <?php } ?>
        <?php if(isset($_GET['error'])){ ?>
        <div class="alert alert-danger">
        Ha ocurrido un error, tu actualizacion no se completo.
        </div>
        <?php } ?>
        <div class="userccount">
          <div class="formpanel"> 
            
          <form action="" method="POST">
            <!-- Personal Information -->
            <h5>Datos Personales</h5>
            <div class="row">
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="nombres" class="form-control" placeholder="Nombres" value="<?php echo $User['nombres']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" value="<?php echo $User['apellidos']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="rut" class="form-control" placeholder="RUT" value="<?php echo $User['rut']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="date" name="fecha_nacimiento" class="form-control" placeholder="Fecha de nacimiento" value="<?php echo $User['fecha_nacimiento']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="telefono" class="form-control" placeholder="Telefono" value="<?php echo $User['telefono']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="email" class="form-control" placeholder="Correo Electrónico" value="<?php echo $User['correo']; ?>">
                </div>
              </div>
            <input type="submit" name='guardar' class="btn" value="Guardar">
            </form>
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