<?php 




include("backend/config.php");



$id=$_SESSION['id'];
$username=$_SESSION['username'];


$texto= $_POST['PalabraClave'];
$tipo= $_POST['tipo'];
$municipalidad= $_POST['municipalidad'];




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
     
     
        <!-- Search List -->
        <ul class="searchList">
          <!-- job start -->

<?php
if(!empty($_POST))
{
      $aKeyword = explode(" ", $_POST['PalabraClave']);
      $query ="SELECT * FROM ofertas WHERE nombres like '%" . $aKeyword[0] . "%' ";
      
     for($i = 1; $i < count($aKeyword); $i++) {
        if(!empty($aKeyword[$i])) {
            $query .= " OR descripcion like '%" . $aKeyword[$i] . "%'";
        }
      }
     
     $result = $con->query($query);
     echo "<br>Has buscado la palabra clave:<b> ". $_POST['PalabraClave']."</b>";
                     
     if(mysqli_num_rows($result) > 0) {
        $row_count=0;
        echo "<span><br><br>Resultados encontrados: ";
        echo "<br><table class='table table-striped'> </span>";
        while($row = $result->fetch_assoc()) {   
            $row_count++;                         
           
       


?>



            <li>
              <!-- Page Title End -->

            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="jobimg"><img src="images/jobs/jobimg.jpg" alt="Job Name" /></div>
                <div class="jobinfo">

        
                  <h3><a href="#."><?php echo $row['nombres'] ?></a></h3>
                  <div class="companyName"><a href="#."><?php echo $row['nombres'] ?></a></div>
                  <div class="location"><label class="fulltime">Full Time</label>   - <span></span></div>
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
  

          <!-- job start -->
         
          <!-- job end --> 
         
        </ul>
        
<?php
         }
        echo "</table>";
  
    }
    else {
        echo "<br>Resultados encontrados: Ninguno";
    
    }
}

?>
        <!-- Pagination Start -->
      

                  
  

          
                           

   


              
         
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