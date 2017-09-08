<!DOCTYPE html>

<html lang="en">
<head>
<title>Como Inscribirme</title>
<?php include 'partials/__headerpag.php'; ?>

<section id="contact">
                      <div class="Blog">



                      </div><!--/#map-->
  <div class="contact-section">

    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-sm-offset-4">
          <div class="contact-text">
            <h2>Contacto</h2>
            <address>
              Correo: andrea.farias@inecol.mx<br>
              Teléfono: (228) 842 18 00 ext. 3518/3520<br>
            </address>
          </div>
          <div class="contact-address">
            <h2>Dirección</h2>
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
            <h2>Enviar Mensaje</h2>
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
              print "<meta http-equiv=\"refresh\" content=\"0;URL=contacto.php\">";
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


<?php include 'partials/__footerpag.php'; ?>
