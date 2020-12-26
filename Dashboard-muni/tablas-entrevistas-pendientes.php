<?php
include "class.phpmailer.php";
include "class.smtp.php";
include "../backend/config.php";
session_start(); 


$id=$_SESSION['id'];
$username=$_SESSION['username'];
$comuna=$_SESSION['id_comuna'];

if(isset($_POST["correo"])){

$correousaurio=$_POST["correousaurio"];
$idusaurio=$_POST["identrevista"];
$email_user = "root@testingmetasoft.cl";
$email_password = "Metasoft123.";
$the_subject = "Su entrevista fue aprobada";
$address_to = $correousaurio;
$from_name = "Plataforma de trabajo Quillota";
$phpmailer = new PHPMailer();

// ---------- datos de la cuenta de Gmail -------------------------------
$phpmailer->Username = $email_user;
$phpmailer->Password = $email_password; 
//-----------------------------------------------------------------------
// $phpmailer->SMTPDebug = 1;
$phpmailer->SMTPSecure = 'ssl';
$phpmailer->Host = "testingmetasoft.cl"; // GMail
$phpmailer->Port = 465;
$phpmailer->IsSMTP(); // use SMTP
$phpmailer->SMTPAuth = true;

$phpmailer->setFrom($phpmailer->Username,$from_name);
$phpmailer->AddAddress($address_to); // recipients email

$phpmailer->Subject = $the_subject; 
$phpmailer->Body .="<h1 style='color:#3498db;'>Mensaje de prueba!</h1>";
$phpmailer->Body .= "<p>Mensaje personalizado</p>";
$phpmailer->Body .= "<p>Fecha y Hora: ".date("d-m-Y h:i:s")."</p>";
$phpmailer->IsHTML(true);

$phpmailer->Send();


 $cek = mysqli_query($con, "UPDATE entrevista SET estatus='1' WHERE id='$idusaurio'");


}


?>


<?php include("../backend/config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tabla entrevistaspendientes</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

   <?php include("../estructura/menumuni.php"); ?>


                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   <!--<h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>-->


    <?php
            if(isset($_GET['aksi']) == 'delete'){
                // escaping, additionally removing everything that could be (html/javascript-) code
                $nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
                $cek = mysqli_query($con, "SELECT * FROM entrevista WHERE id='$nik'");
                if(mysqli_num_rows($cek) == 0){
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
                }else{
                    $delete = mysqli_query($con, "UPDATE entrevista SET estatus='3' WHERE id='$nik'");
                    if($delete){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> La solicitud fue rechazada exitosamente.</div>';
                    }else{
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error.</div>';
                    }
                }
            }
            ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTableExample" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Numero</th>
                                            <th>Rut</th>
                                            <th>Nombre y apellido </th>
                                            <th>Correo</th>
                                            <th>Telefono</th>
                                            <th>Fecha</th>
                                             <th>Descripcion</th>
                                             <th>Estatus</th>
                                               <th>Acciones</th>

                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                      <?php
               
                    $sql = mysqli_query($con, "SELECT * FROM entrevista

INNER JOIN dic_comunas
WHERE 
entrevista.municipalidad='$comuna'
and entrevista.municipalidad = dic_comunas.id_comuna ");
             
                if(mysqli_num_rows($sql) == 0){
                    echo '<tr><td colspan="8">No hay datos.</td></tr>';
                }else{
                    $no = 1;
                    while($row = mysqli_fetch_assoc($sql)){
                $correo=$row['correo'];
                        echo '
                        <tr>
                            <td>'.$no.'</td>
                            <td>'.$row['rut'].'</td>
                            <td><a href="profile.php?nik='.$row['nombres'].'"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row['apellidos'].'</a></td>
                            <td>'.$row['correo'].'</td>
                            <td>'.$row['telefono'].'</td>
                            <td>'.$row['fecha'].'</td>
                            <td>'.$row['descripcion'].'</td>
                            <td>';
                            if($row['estatus'] == '1'){
                                echo '<span style="background-color: #72d272; color:white;" class="label label-success">Aprobado</span>';
                            }
                            else if ($row['estatus'] == '2' ){
                                echo '<span style="background-color: #968c2a; color:black;"  class="label label-info">Pendiente</span>';
                            }
                            else if ($row['estatus'] == '3' ){
                                echo '<span style="background-color: red; color:black;" class="label label-warning">Rechazado</span>';
                            }
                        echo ' 
                            </td>
                            <td>

                                <a href="edit.php?nik='.$row['id'].'" title="Editar datos" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>

                                <a href="tablas-entrevistas-pendientes.php?aksi=delete&nik='.$row['id'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['id'].'?\')" class="btn btn-danger btn-sm"><i class="fas fa-ban"></i></i></a>

                                
                                 <form action="" method="post" >

                    <input value="'.$row['correo'].'"  name="correousaurio" style="display: none;">
                     <input value="'.$row['id'].'"  name="identrevista" style="display: none;">
                   <input type="submit"  value="Correo" class="btn btn-success btn-sm fas fa-envelope "  name="correo">
                   
                    </input>

                                 </form>
                            </td>
                        </tr>
                        ';
                        $no++;
                    }
                }
                ?>

                


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
       
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>


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




</body>

</html>