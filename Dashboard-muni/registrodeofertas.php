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
                $detalles = mysqli_real_escape_string($con,(strip_tags($_POST["detalles"],ENT_QUOTES)));
                $lugar   = mysqli_real_escape_string($con,(strip_tags($_POST["lugar"],ENT_QUOTES))); 
                $rubro   = mysqli_real_escape_string($con,(strip_tags($_POST["rubro"],ENT_QUOTES)));
                $experiencia=mysqli_real_escape_string($con,(strip_tags($_POST["experiencia"],ENT_QUOTES)));
                $fecha   = mysqli_real_escape_string($con,(strip_tags($_POST["fecha"],ENT_QUOTES)));
                $edad   = mysqli_real_escape_string($con,(strip_tags($_POST["edad"],ENT_QUOTES)));
                $sueldo     = mysqli_real_escape_string($con,(strip_tags($_POST["sueldo"],ENT_QUOTES)));
                
            

                
          $insert = mysqli_query($con, "INSERT INTO ofertas ( id_muni, titulo, detalles, lugar, id_rubro, experiencia, edad, fecha, sueldo) VALUES ('$muni','$titulo','$detalles','$lugar','$rubro','$experiencia','$edad','$fecha','$sueldo')") or die(mysqli_error());

           
                        if($insert){
                            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
                        }else{
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
                        }
                     
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
                    <label class="col-sm-3 control-label">Detalles</label>
                    <div class="col-sm-4">
                        <input type="text" name="detalles" class="form-control" placeholder="Detalles" required>
                    </div>
                </div>


                 <div class="form-group">
                    <label class="col-sm-3 control-label">Lugar</label>
                    <div class="col-sm-4">
                        <input type="text" name="lugar" class="form-control" placeholder="Lugar" required>
                    </div>
                </div>

          

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Rubro</label>
                    <div class="col-sm-3">
                       <select name="rubro" class="form-control">
                    <?php 
                $query = $con -> query ("SELECT * FROM dic_rubros");
                    
while ($valores = mysqli_fetch_array($query)) {
                        
  echo '<option value="'.$valores['id_rubro'].'">'.$valores['rubro'].'</option>';
} ?>
              
            </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Experiencia</label>
                    <div class="col-sm-4">
                        <input type="text" name="experiencia" class="form-control" placeholder="Experiencia" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Fecha</label>
                    <div class="col-sm-4">
                        <input type="date" name="fecha" class="form-control" placeholder="Nombres" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Sueldo</label>
                    <div class="col-sm-4">
                        <input type="text" name="sueldo" class="form-control" placeholder="Sueldo" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Edad</label>
                    <div class="col-sm-3">
                 <select name="edad" class="form-control">

                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                   
                    <option value="30">30</option>
                    <option value="31">31</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                    <option value="46">46</option>
                    <option value="47">47</option>
                    <option value="48">48</option>
                    <option value="49">49</option>
                    <option value="50">50</option>
                    <option value="51">51</option>
                    <option value="52">52</option>
                    <option value="53">53</option>
                    <option value="54">54</option>
                    <option value="55">55</option>
                    <option value="56">56</option>
                    <option value="57">57</option>
                       <option value="58">58</option>
                        <option value="59">59</option>
                        <option value="60">60</option>
                    <option value="61">61</option>
                    <option value="62">62</option>
                 <option value="63">63</option>
                 <option value="64">64</option>
 

                 </select>
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