<?php 

include("../backend/auth.php");
include("../backend/config.php");
session_start(); 


$id=$_SESSION['id'];
$username=$_SESSION['username'];
         $muni=$_SESSION['id_comuna'];
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro de ofertas</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">



<?php include('../estructura/menumuni.php') ?>
<?php
            if(isset($_POST['add'])){
                

             
                $titulo  = mysqli_real_escape_string($con,(strip_tags($_POST["titulo"],ENT_QUOTES)));

              
      
            // Libreria PHPMailer
            require '../PHPMailer/PHPMailerAutoload.php';
            
            // Creamos una nueva instancia
            $mail = new PHPMailer();
 
            // Activamos el servicio SMTP
            $mail->isSMTP();
            // Activamos / Desactivamos el "debug" de SMTP (Lo activo para ver en el HTML el resultado)
            // 0 = Apagado 
            // 1 = Mensaje de Cliente 
            // 2 = Mensaje de Cliente y Servidor 
            $mail->SMTPDebug = 0; 

            // Log del debug SMTP en formato HTML 
            $mail->Debugoutput = 'html'; 

            // Servidor SMTP (para este ejemplo utilizamos gmail) 
            $mail->Host = 'smtp.gmail.com'; 

            // Puerto SMTP 
            $mail->Port = 587;
 
            // Tipo de encriptacion SSL ya no se utiliza se recomienda TSL 
            $mail->SMTPSecure = 'tls'; 

            // Si necesitamos autentificarnos 
            $mail->SMTPAuth = true; 

            // Usuario del correo desde el cual queremos enviar, para Gmail recordar usar el usuario completo (usuario@gmail.com) 
            $mail->Username = "pedrogamez9319@gmail.com"; 

            // Contraseña 
            $mail->Password = "Pedro123."; 
 
            // Conectamos a la base de datos 
            //El orden es: dirección del host, usuario, contraseña, nombre de la base de datos.
            $db = new mysqli('localhost', 'root', '', 'quillota'); 

            if ($db->connect_errno > 0) 
            {
                die('Error connect: [' . $db->connect_error . ']'); 
            } 

            // Creamos la sentencias SQL 
            $result = $db->query("select * from users;");

            // Iniciamos el "bucle" para enviar multiples correos. 
            while($row = $result->fetch_assoc())
            { 
                //Añadimos la direccion de quien envia el corre, en este caso 
                //YARR Blog, primero el correo, luego el nombre de quien lo envia. 
                $mail->setFrom('gymcaobacr@gmail.com', 'Taller laboral'); 
                $mail->addAddress($row['email'], $row['username']); 

                //La linea de asunto 
                $mail->Subject = 'Usted ha sido invitado a nuestro taller laboral!'; 
                
                /*
                 * Existen dos formas de mandar un correo:
                 * - Escribiendo el mensaje en un String y mandarlo. (Así se va hacer en el ejemplo).
                 * - Crear un HTML e ingresarlo Se haría así:
                 * $mail->msgHTML(file_get_contents('contenido.html'), dirname(__FILE__)); 
                 * PHPMailer permite insertar imágenes, css, etc.
                 * NOTA: No se recomienda el uso de JavaScript.
                 * 
                 * Mediante un String se haría así:
                 */
                //Creamos el mensaje
                $message = "Hola ".$row['username'].", Usted ha sido invitado a un taller laboral el proximo 12-01-2021 Ingrese al siguiente link: https://linkdeprueba.cl ";
                
                //Agregamos el mensaje al correo
                $mail->msgHTML($message);
                
                // Enviamos el Mensaje 
                $mail->send(); 

                // Borramos el destinatario, de esta forma nuestros clientes no ven los correos de las otras personas y parece que fuera un único correo para ellos. 
                $mail->ClearAddresses(); 
            }

            
            header('Location: index.php');
            } 
        ?>



                <!-- End of Topbar -->

                <!-- Begin Page Content -->
               

                    <!-- Page Heading -->
                      <!-- Begin Page Content -->
                <div class="container-fluid">
                                <form class="form-horizontal" action="" method="post">
               
                <div class="form-group">
                    <label class="col-sm-3 control-label">Titulo</label>
                    <div class="col-sm-4">
                        <input type="text" name="titulo" class="form-control" placeholder="Titulo" required>
                    </div>
                </div>





                <div class="form-group">
                    <label class="col-sm-3 control-label">&nbsp;</label>
                    <div class="col-sm-6">
                        <input type="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
                        <a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
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

</body>

</html>