<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Periódico</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	   <link href="css/main2.css" rel="stylesheet">
	 <link href="css/animate.css" rel="stylesheet">
	  <link href="css/responsive.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>


</head><!--/head-->

<body>

<div style="margin-top: 120px; margin-bottom: 180px;   margin-left: 45px; ">
<!--                  default.css archivo a modificar para estilos                         -->

  <div class="labell bottomleft">
      <p>2014</p>
    <a href="periodico/p2014.html"><img  src="images/1.jpg" /></a>
    <a href="/periodico/2014.pdf" download="Periódico Fomento 2014.pdf" type="button" class="btn btn-success">Descargar <i class="fa fa-download" aria-hidden="true"></i></a>
  </div>

  <div class="labell bottomleft">
      <p>2015</p>
    <a href="periodico2/p2015.html"><img  src="images/2.jpg" /></a>
    <a href="/periodico2/2015.pdf" download="Periódico Fomento 2015.pdf" type="button" class="btn btn-info">Descargar <i class="fa fa-download" aria-hidden="true"></i></a>
  </div>

  <div class="labell bottomleft">
    <p>2016</p>
    <a href="periodico3/p2016.html"><img src="images/3.jpg" /></a>
    <a href="/periodico3/2016.pdf" download="Periódico Fomento 2016.pdf" type="button" class="btn btn-primary">Descargar <i class="fa fa-download" aria-hidden="true"></i></a>
  </div>

  <div class="labell bottomleft">
    <p>2017</p>
      <a href="periodico4/p2017.html"> <img  src="images/4.jpg" /></a>
      <a href="/periodico4/2017.pdf" download="Periódico Fomento 2017.pdf" type="button" class="btn btn-warning">Descargar <i class="fa fa-download" aria-hidden="true"></i></a>
  </div>

</div>



	<header id="header" role="banner">
		<div class="main-nav fixed-menu animated">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<!-- <a href="#"><i class="fa fa-google-plus"></i></a> -->
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
		        <div class="row">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="/">
                    <img class="img-responsive" src="images/logo.png" alt="logo" style="max-width: 120%;">
                  </a>
              </div>
		            <div class="collapse navbar-collapse">
                  <?php include('partials/__nav.php') ?>
                  <li><a href="javascript:void(0)" onclick="contacto();">Contacto</a></li>
            </ul>
		            </div>
		        </div>
	        </div>
        </div>
    </header>
    <!--/#header-->







    <footer id="footer">
      <div class="colibri"></div>
      <div class="conacyt"></div>

        <div class="container">
            <div class="text-center">

                 <p>
                   Carretera antigua a Coatepec 351, El Haya <br>
                   Xalapa, Ver. 91070, México (228) 842 1800 ext. 1010 <br>
                   <a target="_blank" href="http://www.inecol.mx/">
                     <strong>www.inecol.mx</strong>
                      </a>
                 </p>
            </div>
        </div>
        <div class="mota"></div>
        <div class="carrera"></div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  	<script type="text/javascript" src="js/gmaps.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/coundown-timer.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/main2.js"></script>
            <script src="js/nav.js"></script>
</body>
</html>
