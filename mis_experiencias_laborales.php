<?php 
include("backend/config.php");
session_start();

$searchWork = "SELECT * FROM experiencia_laboral WHERE id_usuario = '".$_SESSION['id']."'";
$result = $con->query($searchWork);
#$User = mysqli_fetch_array($result);

if(isset($_POST['guardar'])){

  $query = "INSERT INTO experiencia_laboral(id_usuario, titulo,año,descripcion) VALUES('$_SESSION[id]','$_POST[titulo]','$_POST[ano]','$_POST[descripcion]')";

  if($con->query($query)){
    header('location: mis_experiencias_laborales.php?exito=true;');
  }else{
    header('location: mis_experiencias_laborales.php?error=true;');
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
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Editar Mis Experiencias Laborales</h1>
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
        Registro exitoso!
        </div>
        <?php } ?>
        <?php if(isset($_GET['error'])){ ?>
        <div class="alert alert-danger">
        Ha ocurrido un error, tu registro no se completo.
        </div>
        <?php } ?>

        <div class="userccount">
          <div class="formpanel">
            <form action="" method="POST">
             <!-- Education -->
             <h5>Registra el detalle de tus experiencias:</h5>
            <div class="row">
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="titulo" class="form-control" placeholder="Titulo">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" max='4' name="ano" class="form-control" placeholder="Año de la experiencia">
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <textarea class="form-control" name="descripcion" placeholder="Breve descripcion del trabajo realizado..."></textarea>
                </div>
              </div>
            </div>
            <hr> 
            <input type="submit" name="guardar" class="btn" value="Guardar">
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-sm-8" style="margin-top: 3%;">
        <div class="userccount">
          <div class="formpanel"> 
             <!-- Education -->
             <h5>Listado de experiencias laborales</h5>
             <div class="table-responsive">
                    <table class="table table-bordered" id="dataTableExample" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Año</th>
                                    <th>Descripcion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($works = mysqli_fetch_array($result)){ ?>
                                 <tr>
                                     <td><?php echo $works['titulo'] ?></td>
                                     <td><?php echo $works['año'] ?></td>
                                     <td><?php echo $works['descripcion'] ?></td>
                                 </tr>
                                <?php } ?>
                            </tbody>
                    </table>
              </div>
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

<script src="Dashboard-admin/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="Dashboard-admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  
$('#dataTableExample').DataTable({
       "language": {
           "sProcessing":    "Procesando...",
           "sLengthMenu":    "Mostrar _MENU_ registros",
           "sZeroRecords":   "No se encontraron resultados",
           "sEmptyTable":    "Ningún dato disponible en esta tabla",
           "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
           "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
           "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
           "sInfoPostFix":   "",
           "sSearch":        "Buscar:",
           "sUrl":           "",
           "sInfoThousands":  ",",
           "sLoadingRecords": "Cargando...",
           "oPaginate": {
               "sFirst":    "Primero",
               "sLast":    "Último",
               "sNext":    "Siguiente",
               "sPrevious": "Anterior"
           },
           "oAria": {
               "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
               "sSortDescending": ": Activar para ordenar la columna de manera descendente"
           }
       }
});




</script>

<!-- Custom js --> 
<script src="js/script.js"></script>
</body>
</html>