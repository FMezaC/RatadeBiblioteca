<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/gif" href="img/favicon.gif">
        <title>LECTÓMANO | FORO</title>
        
        <!-- Styles -->
      <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/CustomStyle.css">
      <link rel="stylesheet" type="text/css" href="css/style-responsive.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>

    <body>
    <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="cabecera black-bg">
    <div class="sidebar-toggle-box">
      <div class="glyphicon glyphicon-tasks" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <a href="index.php" class="logo"><b><span>LECTÓMANO</span></b></a>
    <!--logo end-->
      
      
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
        <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu navbar-right">
          <!-- Login-->
          <li><a id="login">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              </a></li>
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">
              <span class="glyphicon glyphicon-queen" aria-hidden="true"></span>
              <span class="badge bg-theme">1</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">Meta diaria</p>
              </li>
              <li>
                <a href="#" id="seting">
                  <div class="col-md-4">
                    <h2><span class="glyphicon glyphicon-queen" aria-hidden="true"></span></h2>
                  </div>
                  <div class="col-md-8">
                    <h5>0 Meta diaria</h5>
                    <h6>0/30 hoy día</h6>
                  </div>
                </a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="glyphicon glyphicon-bell"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
  <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="#" id="Profile"><img src="img/about.jpg" class="img-circle" width="80"></a></p>
          <div class="profile-usertitle">
					<div class="profile-usertitle-name">
					<p>Federico Meza</p>
					</div>
					<div class="profile-usertitle-job">
					<p>Developer</p>
					</div>
				</div class="Sub-container">
            <li class="active">
							<a href="#" id="Home"><i class="glyphicon glyphicon-home"></i>Inicio</a>
						</li>
						<li>
							<a href="#" id="Books"><i class="glyphicon glyphicon-book"></i>Libros</a>
						</li>
						<li>
							<a href="#" id="Files"><i class="glyphicon glyphicon-bookmark"></i>Guardado</a>
						</li>
						<li>
							<a href="#" id="Questions"><i class="glyphicon glyphicon-info-sign"></i>Preguntas</a>
            </li>
            <li>
							<a href="#" id="upload"><i class="glyphicon glyphicon-cloud-upload"></i>Subir</a>
            </li>
            <li>
							<a href="index.php"><i class="glyphicon glyphicon-off"></i>Salir</a>
						</li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
            <!--BARRA DE BUSQUEDA -->
            <div class="barra-busqueda">
              <input type="text" placeholder="Buscar">
              <button type="submit" id="search"><i class="glyphicon glyphicon-search"></i></button>
            </div>
            <!--FIN BARRA DE BUSQUEDA -->
              <div id="LoadPage">
                  <!---**********************
                  ***************************
                  Aqui semuestra elcuerpo de la pagina
                  ***************************
                  ***********************--->
              </div>
            </div>
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg-3 ds">
            <!-- RECENT ACTIVITIES SECTION -->
            <h4 class="centered mt">LIBROS RECIENTES</h4>
            <!-- First Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>Just Now</muted>
                  <br/>
                  <a href="#">Paul Rudd</a> Subió Nuevo Articulo.<br/>
                </p>
              </div>
            </div>
            <!-- Second Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>2 Minutes Ago</muted>
                  <br/>
                  <a href="#">James Brown</a> Subió Nuevo libro.<br/>
                </p>
              </div>
            </div>
            <!-- Third Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>3 Hours Ago</muted>
                  <br/>
                  <a href="#">Diana Kennedy</a> Subió Nuevo Documento.<br/>
                </p>
              </div>
            </div>
            <!-- USERS ONLINE SECTION -->
            <h4 class="centered mt">TEAM MEMBERS ONLINE</h4>
            <!-- First Member -->
            <div class="desc">
              <div class="thumb">
                <img class="img-circle" src="img/ui-divya.jpg" width="35px" height="35px" />
              </div>
              <div class="details">
                <p>
                  <a href="#">DIVYA MANIAN</a><br/>
                  <muted>Available</muted>
                </p>
              </div>
            </div>
            <!-- Second Member -->
            <div class="desc">
              <div class="thumb">
                <img class="img-circle" src="img/ui-sherman.jpg" width="35px" height="35px" align="">
              </div>
              <div class="details">
                <p>
                  <a href="#">DJ SHERMAN</a><br/>
                  <muted>I am Busy</muted>
                </p>
              </div>
            </div>
            <!-- Third Member -->
            <div class="desc">
              <div class="thumb">
                <img class="img-circle" src="img/ui-danro.jpg" width="35px" height="35px" align="">
              </div>
              <div class="details">
                <p>
                  <a href="#">DAN ROGERS</a><br/>
                  <muted>Available</muted>
                </p>
              </div>
            </div>
            <!-- Fourth Member -->
            <div class="desc">
              <div class="thumb">
                <img class="img-circle" src="img/ui-zac.jpg" width="35px" height="35px" align="">
              </div>
              <div class="details">
                <p>
                  <a href="#">Zac Sniders</a><br/>
                  <muted>Available</muted>
                </p>
              </div>
            </div>
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <?php include("PresentationLayer/Includes/Footer.php"); ?>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>
