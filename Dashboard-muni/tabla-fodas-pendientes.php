<?php 



include("../backend/auth.php");
include("../backend/config.php");
session_start(); 


$id=$_SESSION['id'];
$username=$_SESSION['username'];
$comuna=$_SESSION['id_comuna'];
?>
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
                $cek = mysqli_query($con, "SELECT * FROM empleados WHERE codigo='$nik'");
                if(mysqli_num_rows($cek) == 0){
                    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
                }else{
                    $delete = mysqli_query($con, "DELETE FROM empleados WHERE codigo='$nik'");
                    if($delete){
                        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
                    }else{
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
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
                                            <th>Fortaleza</th>
                                            <th>Amenza</th>
                                            <th>Debilidades</th>
                                            <th>oportunidades</th>
                                             <th>Fecha</th>
                                          
                                               <th>Acciones</th>

                                        </tr>

                                  


                                    </thead>
                                   
                                    <tbody>
                                      <?php
               
                    $sql = mysqli_query($con, "SELECT * FROM formfoda where id_comuna='$comuna' ");
             
                if(mysqli_num_rows($sql) == 0){
                    echo '<tr><td colspan="8">No hay datos.</td></tr>';
                }else{
                    $no = 1;
                    while($row = mysqli_fetch_assoc($sql)){
                        echo '
                        <tr>
                            <td>'.$no.'</td>
                            <td>'.$row['rut'].'</td>
                           
                            <td>'.$row['fortaleza'].'</td>
                            <td>'.$row['amenza'].'</td>
                            <td>'.$row['debilidades'].'</td>
                            <td>'.$row['oportunidades'].'</td>
                            <td>'.$row['creado'].'</td>
                            ';
                           
                            
                        echo '
                           
                            <td>

                                <a href="edit.php?nik='.$row['id'].'" title="Editar datos" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="index.php?aksi=delete&nik='.$row['id'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['id'].'?\')" class="btn btn-danger btn-sm"><i class="fas fa-ban"></i></i></a>

                                 <a href="index.php?aksi=delete&nik='.$row['id'].'" title="Aprobar y mandar correo" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['id'].'?\')" class="btn btn-success btn-sm"><i class="fas fa-envelope"></i></a>
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