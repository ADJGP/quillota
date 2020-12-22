<?php
include("backend/config.php");
session_start();
$result = $con->query("SELECT COUNT(*) as total_empresas FROM empresas WHERE  status=1");
$row = $result->fetch_assoc();
$num_total_rows = $row['total_empresas'];
#echo $num_total_rows; //739
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

        $result = $con->query("SELECT * FROM empresas WHERE status = 1 ORDER BY rut ASC LIMIT " . $start . ", " .NUM_ITEMS_BY_PAGE);
        
        ?>
        
       
        <!-- Header start -->
        <?php include('estructura/menu.php'); ?>
        <!-- Header end -->

        <!-- Page Title start -->
        <div class="pageTitle">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h1 class="page-heading"><label for="">Listado de Empresas</label></h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title End -->

        <!-- Latest Jobs start -->

        <div class="section greybg">

            <div class="container">

                <?php if ($result->num_rows > 0) {
            echo '<div class="jobslist row">';
            while ($row = $result->fetch_assoc()) {
                echo '<li class="col-md-4 col-sm-6">';
                echo '<div class="jobint">';
                echo '<div class="row">';
                #echo '<div class="col-md-2 col-sm-2"><img src="images/employers/emplogo1.jpg" alt="Job Name" /></div>';
                echo '<div class="col-md-12 col-sm-12">';
                echo '<a href="#.">' . $row['nombre'] . '</a><br>';
                #echo '<div class="company"><a href="#.">Datebase Management Company</a></div>';
                echo '<div class="jobloc mt-1"><label class="fulltime">'. $row['direccion'] .'</label></div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</li>';
            }
            echo '</div>';
        } ?>
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