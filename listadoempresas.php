<?php 



include("backend/auth.php");
include("backend/config.php");



$id=$_SESSION['id'];
$username=$_SESSION['username'];


//Conectamos a la base de datos


//Evitamos que salgan errores por variables vacías
error_reporting(E_ALL ^ E_NOTICE);

//Cantidad de resultados por página (debe ser INT, no string/varchar)
$cantidad_resultados_por_pagina =12;

//Comprueba si está seteado el GET de HTTP
if (isset($_GET["pagina"])) {

  //Si el GET de HTTP SÍ es una string / cadena, procede
  if (is_string($_GET["pagina"])) {

    //Si la string es numérica, define la variable 'pagina'
     if (is_numeric($_GET["pagina"])) {

       //Si la petición desde la paginación es la página uno
       //en lugar de ir a 'index.php?pagina=1' se iría directamente a 'index.php'
       if ($_GET["pagina"] == 1) {
         header("Location: listadoempresas.php");
         die();
       } else { //Si la petición desde la paginación no es para ir a la pagina 1, va a la que sea
         $pagina = $_GET["pagina"];
      };

     } else { //Si la string no es numérica, redirige al index (por ejemplo: index.php?pagina=AAA)
       header("Location: listadoempresas.php");
      die();
     };
  };

} else { //Si el GET de HTTP no está seteado, lleva a la primera página (puede ser cambiado al index.php o lo que sea)
  $pagina = 1;
};

//Define el número 0 para empezar a paginar multiplicado por la cantidad de resultados por página
$empezar_desde = ($pagina-1) * $cantidad_resultados_por_pagina;

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Listado de empresas</title>
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

<?php 

include("estructura/menu.php");

?>
<!-- Header end --> 

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Listado de empresas</h1>
      </div>
      <div class="col-md-6 col-sm-6">
      
      </div>
    </div>
  </div>
</div>






<div class="listpgWraper">
  <div class="container"> 
    
    <!-- Page Title start -->
    
    <!-- Page Title end --> 
    
    <!-- Search Result and sidebar start -->
    <div class="row">
      <div class="col-md-3 col-sm-6"> 
        <!-- Side Bar start -->
        <div class="sidebar"> 
          <!-- Jobs By Title -->
        <!--  <div class="widget">
            <h4 class="widget-title">Jobs By Title</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="webdesigner" />
                <label for="webdesigner"></label>
                Web Designer <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="3dgraphic" />
                <label for="3dgraphic"></label>
                3D Graphic Designer <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="graphic" />
                <label for="graphic"></label>
                Graphic Designer <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="electronicTech" />
                <label for="electronicTech"></label>
                Electronics Technician <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="webgraphic" />
                <label for="webgraphic"></label>
                Web / Graphic Designer <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="brandmanager" />
                <label for="brandmanager"></label>
                Brand Manager <span>33</span> </li>
            </ul>-->
            <!-- title end --> 
           <!-- <a href="#.">View More</a> </div> -->
          
          <!-- Jobs By City
          <div class="widget">
            <h4 class="widget-title">Jobs By City</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="newyork" />
                <label for="newyork"></label>
                New York <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="losangles" />
                <label for="losangles"></label>
                Los Angeles <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="chicago" />
                <label for="chicago"></label>
                Chicago <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="houston" />
                <label for="houston"></label>
                Houston <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="sandiego" />
                <label for="sandiego"></label>
                San Diego <span>555</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="sanjose" />
                <label for="sanjose"></label>
                San Jose <span>44</span> </li>
            </ul>
            <a href="#.">View More</a> </div> -->
          <!-- Jobs By City end--> 
          
          <!-- Jobs By Experience 
          <div class="widget">
            <h4 class="widget-title">Jobs By Experience</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="permanent" />
                <label for="permanent"></label>
                Full Time/Permanent <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="contract" />
                <label for="contract"></label>
                Contract <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="parttime" />
                <label for="parttime"></label>
                Part Time <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="internship" />
                <label for="internship"></label>
                Internship <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="freelance" />
                <label for="freelance"></label>
                Freelance <span>33</span> </li>
            </ul>
            <a href="#.">View More</a> </div>-->
          <!-- Jobs By Experience end --> 
          
          <!-- Jobs By Industry 
          <div class="widget">
            <h4 class="widget-title">Jobs By Industry</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="infotech" />
                <label for="infotech"></label>
                Information Technology <span>22</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="advertise" />
                <label for="advertise"></label>
                Advertising/PR <span>45</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="services" />
                <label for="services"></label>
                Services <span>44</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="health" />
                <label for="health"></label>
                Health & Fitness <span>88</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="mediacomm" />
                <label for="mediacomm"></label>
                Media/Communications <span>22</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="fashion" />
                <label for="fashion"></label>
                Fashion <span>11</span> </li>
            </ul>
            <a href="#.">View More</a> </div>-->
          <!-- Jobs By Industry end --> 
          
          <!-- Top Companies 
          <div class="widget">
            <h4 class="widget-title">Top Companies</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="Envato" />
                <label for="Envato"></label>
                Envato <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="Themefores" />
                <label for="Themefores"></label>
                Themefores <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="GraphicRiver" />
                <label for="GraphicRiver"></label>
                Graphic River <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="Codecanyon" />
                <label for="Codecanyon"></label>
                Codecanyon <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="AudioJungle" />
                <label for="AudioJungle"></label>
                Audio Jungle <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="Videohive" />
                <label for="Videohive"></label>
                Videohive <span>33</span> </li>
            </ul>
            <a href="#.">View More</a> </div>-->
          <!-- Top Companies end --> 
          
          <!-- Salary 
          <div class="widget">
            <h4 class="widget-title">Salary Range</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="price1" />
                <label for="price1"></label>
                0 to $100 <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price2" />
                <label for="price2"></label>
                $100 to $199 <span>41</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price3" />
                <label for="price3"></label>
                $199 to $499 <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price4" />
                <label for="price4"></label>
                $499 to $999 <span>66</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price5" />
                <label for="price5"></label>
                $999 to $4999 <span>159</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price6" />
                <label for="price6"></label>
                Above $4999 <span>865</span> </li>
            </ul>
            <a href="#.">View More</a> </div>-->
          <!-- Salary end --> 
          
          <!-- button -->
          <div class="searchnt">
            <button class="btn"><i class="fa fa-search" aria-hidden="true"></i>Buscar</button>
          </div>
          <!-- button end--> 
        </div>
        <!-- Side Bar end --> 
      </div>
      <div class="col-md-3 col-sm-6 pull-right"> 
        <!-- Social Icons -->
        <div class="sidebar">
          
         
         
        </div>
        
        <!-- Sponsord By -->
       
      </div>
 <div class="col-md-6 col-sm-12"> 
      <?php
//Obtiene TODO de la tabla
$obtener_todo_BD = "SELECT * FROM empresas";

//Realiza la consulta
$consulta_todo = mysqli_query($con, $obtener_todo_BD);

//Cuenta el número total de registros
$total_registros = mysqli_num_rows($consulta_todo);

//Obtiene el total de páginas existentes
$total_paginas = ceil($total_registros / $cantidad_resultados_por_pagina); 

//Realiza la consulta en el orden de ID ascendente (cambiar "id" por, por ejemplo, "nombre" o "edad", alfabéticamente, etc.)
//Limitada por la cantidad de cantidad por página
$consulta_resultados = mysqli_query($con, "
SELECT * FROM `empresas` ORDER BY `empresas`.`id_empresa` 
LIMIT $empezar_desde, $cantidad_resultados_por_pagina");

//Crea un bluce 'while' y define a la variable 'datos' ($datos) como clave del array
//que mostrará los resultados por nombre
while($datos = mysqli_fetch_array($consulta_resultados)) {
?>
     
        <!-- Search List -->
        <ul class="searchList">
          <!-- job start -->

            <li>
              <!-- Page Title End -->

            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="jobimg"><img src="images/jobs/jobimg.jpg" alt="Job Name" /></div>
                <div class="jobinfo">

        
                  <h3><a href="#."><?php echo $datos['nombre']; ?></a></h3>
                  <div class="companyName"><a href="#.">Datebase Management Company</a></div>
                  <div class="location"><label class="fulltime">Full Time</label>   - <span><?php echo $datos['direccion']; ?></span></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="listbtn"><a href="#.">Aplicar Ahora</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce venenatis arcu est. Phasellus vel dignissim tellus. Aenean fermentum fermentum convallis.</p>
          </li>
          <!-- job end --> 
          <?php
};
?>

          <!-- job start -->
         
          <!-- job end --> 
         
        </ul>
        
        <!-- Pagination Start -->
      <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
   <li class='page-item'>

    <?php
//Crea un bucle donde $i es igual 1, y hasta que $i sea menor o igual a X, a sumar (1, 2, 3, etc.)
//Nota: X = $total_paginas
for ($i=1; $i<=$total_paginas; $i++) {
echo "<a class='page-link' href='?pagina=".$i."'>".$i."</a>";
} ?>

    </li>
    
  </ul>
</nav>

                  
  

          
                           

   


              
         
        <!-- Pagination end --> 
      </div>
    </div>
  </div>
</div>

<!--Footer-->
<?php 

include('estructura/footer.php');

?>
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