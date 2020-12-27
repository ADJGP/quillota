<?php
include("backend/config.php");
session_start();

$empresa='';

if(isset($_GET['empresa'])){

$empresa=$_GET['empresa'];

}else{

$empresa=null;

}

//Buscar la empresa
$query="SELECT * FROM empresas WHERE nombre='".$empresa."'";
$row=$con->query($query);
$emp=mysqli_fetch_array($row);
//echo $emp['nombre'];


//Buscar las ofertas de la empresa
//echo $q="SELECT COUNT(*) as total_ofertas FROM ofertas WHERE id_empresa=".$emp['id_empresa'];
$result2 = $con->query("SELECT COUNT(*) as total_ofertas FROM ofertas WHERE id_empresa=".$emp['id_empresa']);
$row2 = $result2->fetch_assoc();
$num_total_rows = $row2['total_ofertas'];

?>

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
        <?php include('estructura/menu.php'); ?>
        <!-- Header end -->


            <!-- Page Title start -->
            <div class="pageTitle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h1 class="page-heading"><label for="">Ofertas de empleo de <?php echo $emp['nombre'] ?></label></h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Title End -->

            <!-- Latest Jobs start -->

           <div class="section greybg">

           <div class="container">

    <?php
    if ($num_total_rows > 0) {
        $page = false;

        //examino la pagina a mostrar y el inicio del registro a mostrar
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        }

        if (!$page) {
            $start = 0;
            $page = 1;
        } else {
            $start = ($page - 1) * NUM_ITEMS_BY_PAGE;
        }
        //calculo el total de paginas
        $total_pages = ceil($num_total_rows / NUM_ITEMS_BY_PAGE);

        $result = $con->query("SELECT * FROM ofertas WHERE  id_empresa=".$emp['id_empresa']." ORDER BY id DESC LIMIT " . $start . ", " .NUM_ITEMS_BY_PAGE);
        
        ?>
        
        <div class="col-md-12 col-sm-12">

<?php if ($result->num_rows > 0) { ?>
<!-- Search List -->
<ul class="searchList">
<?php while ($row = $result->fetch_assoc()) { ?>
  <!-- job start -->
  <li>
    <div class="row">
      <div class="col-md-8 col-sm-8">
        <div class="jobimg"><img src="images/jobs/jobimg.jpg" alt="Job Name"></div>
        <div class="jobinfo">
          <h3><a href="#."><?php echo $row['titulo'] ?></a></h3>
          <div class="companyName"><a href="#."><?php echo $row['detalles'] ?></a></div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="listbtn"><a href="detalle_oferta.php?oferta=<?php echo $row['id'] ?>" ?>Postular</a></div>
      </div>
    </div>
  </li>
  <!-- job end -->
  <?php } ?> 
     </ul> 
  <?php } ?> 
  
</div>


                <!--Paginacion-->
                <div class="viewallbtn">
                <?php echo '<nav>';
                echo '<ul class="pagination">';

                if ($total_pages > 1) {
                    if ($page != 1) {
                        echo '<li class="page-item"><a class="page-link" href="index.php?page=' . ($page - 1) . '"><span aria-hidden="true">&laquo;</span></a></li>';
                    }

                    for ($i = 1; $i <= $total_pages; $i++) {
                        if ($page == $i) {
                            echo '<li class="page-item active"><a class="page-link" href="#">' . $page . '</a></li>';
                        } else {
                            echo '<li class="page-item"><a class="page-link" href="listado_empresas.php?page=' . $i . '">' . $i . '</a></li>';
                        }
                    }

                    if ($page != $total_pages) {
                        echo '<li class="page-item"><a class="page-link" href="listado_empresas.php?page=' . ($page + 1) . '"><span aria-hidden="true">&raquo;</span></a></li>';
                    }
                }
                echo '</ul>';
                echo '</nav>';
            }else{
                echo "<h3>Esta empresa aun no ha publicado ofertas.</h3>";
            }
                ?>
                </div>

                <!--view button end-->

            </div>

        </div>

        <!-- Latest Jobs ends -->

        <!--Footer-->
        <?php include('estructura/footer.php'); ?>
        <!--Footer end-->

        <!-- Bootstrap's JavaScript -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Owl carousel -->
        <script src="js/owl.carousel.js"></script>

        <!-- Custom js -->
        <script src="js/script.js"></script>
</body>

</html>