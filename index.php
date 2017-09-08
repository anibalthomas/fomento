<!DOCTYPE html>
<html lang="en">
<?php include("twitterconexion.php"); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <meta name="description" content="Éste proyecto busca acercar a los niños y jóvenes a la ciencia,
    considerando a la investigación científica como carrera y razón de vida. Gracias a este programa, los niños y
     jóvenes adquieren experiencia en el ámbito científico mediante el desarrollo de proyectos de investigación,
     los cuales, posteriormente serán expuestos y publicados en forma de artículos." >
    <meta name="author" content="">
    <meta name="Title" content="FOMENTO AL INTERÉS POR LA CARRERA CIENTÍFICA Y TECNOLÓGICA EN NIÑOS Y JÓVENES" >

    <title>FOMENTO AL INTERÉS POR LA CARRERA CIENTÍFICA Y TECNOLÓGICA EN NIÑOS Y JÓVENES</title>
    <link href="http://fomentoinecol.org/logo.png" rel="image_src" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	  <link href="css/loader.css" rel="stylesheet">
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body onload="myFunction()" style="margin:0;">
  <div id="preloader">
    <div id="loader">
    </div>
  </div>
<?php include('partials/header.php') ?>

    <section id="home">
		<div id="main-slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
				<li data-target="#main-slider" data-slide-to="2"></li>
				<li data-target="#main-slider" data-slide-to="3"></li>
				<li data-target="#main-slider" data-slide-to="4"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="images/slider/Seccion-Inicial.png" alt="slider">
				</div>

				<div class="item">
					<img class="img-responsive" src="images/slider/Seccion-Inicial2.png" alt="slider">
				</div>

				<div class="item">
					<img class="img-responsive" src="images/slider/Seccion-Inicial3.png" alt="slider">
				</div>

				<div class="item">
					<img class="img-responsive" src="images/slider/Seccion-Inicial4.png" alt="slider">
				</div>

				<div class="item">
					<img class="img-responsive" src="images/slider/Seccion-Inicial5.png" alt="slider">
				</div>

			</div>
		</div>
    </section>
	<!--/#home-->

	<section id="explore">
		<div class="container">
      <div class="row">
        <div class="watch">
          <img class="img-responsive" src="images/watch.png" alt="">
        </div>
        <div class="col-md-4 col-md-offset-2 col-sm-5">
          <h2>Nuestro próximo evento en</h2>
        </div>
        <div class="col-sm-7 col-md-6">
          <ul id="countdown">
            <li>
              <span class="days time-font">00</span>
              <p>días </p>
            </li>
            <li>
              <span class="hours time-font">00</span>
              <p class="">horas </p>
            </li>
            <li>
              <span class="minutes time-font">00</span>
              <p class="">minutos</p>
            </li>
            <li>
              <span class="seconds time-font">00</span>
              <p class="">segundos</p>
            </li>
          </ul>
        </div>
      </div>

    </div>
	</section><!--/#explore-->

  <section id="event">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-9">
					<div id="event-carousel" class="carousel slide" data-interval="false">
						<h2 class="heading">Periódicos</h2>
						<a class="even-control-left" href="#event-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="even-control-right" href="#event-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<div class="carousel-inner">
							<div class="item active">
								<div class="row">
									<div class="col-sm-4">
										<div class="single-event">
                      <a href="periodico/p2014.html" ><img class="img-responsive" src="images/event/1.jpg" alt="event-image"/></a>
											<h4>Periódico 2014 </h4>
											<!-- <h5>-</h5> -->
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-event">
                      <a href="periodico2/p2015.html" ><img class="img-responsive" src="images/event/2.jpg" alt="event-image"/></a>
                      <h4>Periódico 2015</h4>
											<!-- <h5>-</h5> -->
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-event">
                      <a href="periodico3/p2016.html" ><img class="img-responsive" src="images/event/3.jpg" alt="event-image"/></a>
                      <h4>Periódico 2016</h4>
											<!-- <h5>-</h5> -->
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-sm-4">
										<div class="single-event">
                      <a href="periodico4/p2017.html" ><img class="img-responsive" src="images/event/4.jpg" alt="event-image"/></a>
                      <h4>Periódico 2017</h4>
											<!-- <h5>Vocal</h5> -->
										</div>
									</div>
									<!-- <div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="images/event/event2.jpg" alt="event-image">
											<h4>Mike Shinoda</h4>
											<h5>vocals, rhythm guitar</h5>
										</div>
									</div> -->
									<!-- <div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="images/event/event3.jpg" alt="event-image">
											<h4>Rob Bourdon</h4>
											<h5>drums</h5>
										</div>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
  </section><!--/#event-->

	<section onclick="galerias();"  id="about-content">
<div class="camara">

</div>
<div class="letra">

</div>
	</section><!--/#about-->


<div onclick="blog();"  id="blog">
  <div class="compu">

  </div>
</div>


	<section id="twitter">
		<div id="twitter-feed" class="carousel slide" data-interval="false">
			<div class="twit">
				<img class="img-responsive" src="images/twit.png" alt="twit">
			</div>

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="text-center carousel-inner center-block">



  <div class="item active">
          <script>document.write('<img src="'+arreglo3[0]+'" alt="">')</script>
						<p><script>document.write(arreglo[0])</script></p>
               <script>document.write
               ('<a href="https://twitter.com/Inecol_mx/status/'+arreglo2[0]+'"target="_blank">Ver tweet</a>')
                </script>
	</div>

	<div class="item">
    <script>document.write('<img src="'+arreglo3[1]+'" alt="">')</script>
      <p><script>document.write(arreglo[1])</script></p>
         <script>document.write
         ('<a href="https://twitter.com/Inecol_mx/status/'+arreglo2[1]+'"target="_blank">Ver tweet</a>')
          </script>
	</div>

	<div class="item">
    <script>document.write('<img src="'+arreglo3[2]+'" alt="">')</script>
      <p><script>document.write(arreglo[2])</script></p>
         <script>document.write
         ('<a href="https://twitter.com/Inecol_mx/status/'+arreglo2[2]+'"target="_blank">Ver tweet</a>')
          </script>
	</div>


					</div>
					<a class="twitter-control-left" href="#twitter-feed" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="twitter-control-right" href="#twitter-feed" data-slide="next"><i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</div>
	</section><!--/#twitter-feed-->



	<section id="contact">
                    		<div class="Blog">



                    		</div><!--/#map-->
		<div class="contact-section">

			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-sm-offset-4">
						<div class="contact-text">
							<h3>Contacto</h3>
							<address>
								Correo: andrea.farias@inecol.mx<br>
								Teléfono: (228) 842 18 00 ext. 3518/3520<br>
							</address>
						</div>
						<div class="contact-address">
							<h3>Dirección</h3>
							<address>
								Carretera Antigua a Coatepec No. 351,<br>
								C.P. 91070,<br>
								El Haya,<br>
								Xalapa, Veracruz.
							</address>
						</div>
					</div>
					<div class="col-sm-5">
						<div id="contact-section">
							<h3>Enviar Mensaje</h3>
					    	<div class="status alert alert-success" style="display: none"></div>
                <?php
            		if (!isset($_POST['email'])) {
            		?>
            		  <form  action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <div class="form-group">
              					<input name="nombre" type="text"  class="form-control" required="required" placeholder="Nombre">
              			</div>
              			<div class="form-group">
              					<input name="email" type="email" class="form-control" required="required" placeholder="Correo">
              			</div>
              			<div class="form-group">
              					<textarea name="mensaje"  required="required" class="form-control" rows="4" placeholder="Introduce tu mensaje"></textarea>
              			</div>
              			<div class="form-group">
              					<button type="submit" class="btn btn-primary pull-right">Enviar</button>&nbsp;&nbsp;
                        <button type="reset" class="btn btn-primary pull-right">Borrar</button>
              			</div>
            		  </form>
            		<?php
            		}else{
              $mensaje="Mensaje enviado desde el formulario de la página Fomento\n";
            		  $mensaje.= "\nNombre: ". $_POST['nombre']."\n";
            		  $mensaje.= "\nEmail: ".$_POST['email']."\n";
            		  $mensaje.= "\nMensaje: ".$_POST['mensaje']."\n";
            		  $destino= "andrea.farias@inecol.mx";
            		  $remitente = $_POST['email'];
            		  $asunto = "Mensaje enviado por: ".$_POST['nombre'];
            		  mail($destino,$asunto,$mensaje,"FROM: $remitente");
                  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
            		?>
            <script type="text/javascript">
              alert('Tu mensaje ha sido enviado')
            </script>


            		<?php
            }
            		?>

					    </div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!--/#contact-->

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
    <script type="text/javascript" src="js/nav.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  	<script type="text/javascript" src="js/gmaps.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/coundown-timer.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
