<div class="header">

  <div class="container">

    <div class="row">
      <div class="col-md-2 col-sm-3 col-xs-12"> <a href="index.php" class="logo"><img src="images/logo.png" alt=""  width="50%"/></a>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="col-md-10 col-sm-12 col-xs-12 ml-2">
        <!-- Nav start -->
        <div class="navbar navbar-default" role="navigation">

          <div class="navbar-collapse collapse" id="nav-main">

            <ul class="nav navbar-nav">
              <li class="dropdown active"><a href="#">TE ORIENTAMOS <span class="caret"></span></a>
                
                <ul class="dropdown-menu" DE TE ORIENTAMOS>
                  <li class="active"><a href="index.html">TE ORIENTAMOS</a></li>
                </ul> 
              </li>
              <li class="dropdown active"><a href="#">EMPRESAS<span class="caret"></span></a>
                <ul class="dropdown-menu" DE TE ORIENTAMOS>
                  <li><a href="listado_empresas.php">Lista de Empresas</a></li>
                  <li><a href="listado_ofertas.php">Lista de Ofertas de empleo</a></li>
                </ul> 
              </li>
              <li><a href="contactanos.php">CONTÁCTANOS</a></li>

              <li class="postjob"><a href="subircv.php">ENVIAR CURRICULUM</a></li>

              <li class="jobseeker"><a href="agendarentrevista.php">ENTREVISTAS</a></li>

              <?php

              if (!isset($_SESSION["username"])) {

                //mostrar bienvenida

              ?>

                <li class=""><a href="register.php">REGISTRAR</a></li>

                <li class=""><a href="login.php">ENTRAR</a></li>

              <?php

              } else {

              ?>
                <li class="dropdown userbtn"><a href="" title=""><img src="images/user.jpg" alt="foto de perfil" width="10%" class="userimg" /></a>
                  <ul class="dropdown-menu">
                    <li><a href="dashboard-user.php"><i class="fa fa-tachometer" aria-hidden="true"></i> <?php $_SESSION['username']; ?></a></li>
                    <li><a href="edit-profile.php"><i class="fa fa-pencil" aria-hidden="true"></i> Perfil de Usuario</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="salir.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Salir</a></li>

                  </ul>
                </li>
              <?php  } ?>















            </ul>

            <!-- Nav collapes end -->

          </div>

          <div class="clearfix"></div>

        </div>

        <!-- Nav end -->

      </div>

    </div>

    <!-- row end -->

  </div>

  <!-- Header container end -->

</div>