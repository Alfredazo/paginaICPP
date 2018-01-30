<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SERVICIOS</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="../assets/images/logo2.png" type="image/x-icon">
    <meta name="description" content="">
    <title>ICPP</title>
    <link rel="stylesheet" href="../assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="../assets/tether/tether.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../assets/socicon/css/styles.css">
    <link rel="stylesheet" href="../assets/dropdown/css/style.css">
    <link rel="stylesheet" href="../assets/theme/css/style.css">
    <link rel="stylesheet" href="../assets/gallery/style.css">
    <link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="../assets/theme/css/estiloPropio.css">

    <script>
          function mostrarNombreEmpresaSegunTamaño() {
            if (screen.width == 320) {
                document.write("ICPP");
            }else if(screen.width == 375 || screen.width==425){
                document.write("CONSTRUCTORA PUERTO PRINCIPAL")
            }else if(screen.width ==768){
                document.write("INGENIERIA Y CONSTRUCCIÓN PUERTO PRINCIPAL")
            }else if(screen.width == 1024){
                document.write("I C P P")
            }else if(screen.width >=1440 ){
              document.write("INGENIERÍA Y CONSTRUCCIÓN PUERTO PRINCIPAL")
            }else{
              document.write("ICPP")
            }

            console.log("Mi resolución de pantalla es: "+ + " px por "+screen.height);
          }
    </script>
  </head>

  <body>

    <div class="servicios">
      <section class="menu cid-qHcGPx0DPO" once="menu" id="menu2-i">
        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="www.icpp.cl">
                            <img src="../assets/images/logo2.png" alt="ICPP" style="height: 4rem;">
                        </a>
                    </span>
                    <div class="textoEmpresa" id="idTextoPantalla">
                        <span class="navbar-caption-wrap">
                          <a class="navbar-caption text-white display-6" href="#inicio">
                            <script type="text/javascript">
                                mostrarNombreEmpresaSegunTamaño();
                            </script>
                        </a>
                      </span>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                  <li class="nav-item">
                        <a class="nav-link link text-white display-7" href="../#inicio">
                          <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                            INICIO
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-7" href="../#servicio"><span class="mbri-delivery mbr-iconfont mbr-iconfont-btn"></span>
                            SERVICIOS</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link link text-white display-7" href="../#proyecto">
                        <span class="mbri-cash mbr-iconfont mbr-iconfont-btn"></span>
                         PROYECTOS
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link link text-white display-7" href="../#contacto">
                        <span class="mbri-letter mbr-iconfont mbr-iconfont-btn"></span>
                            CONTACTANOS
                     </a>
                    </li>
              </ul>

            </div>
        </nav>
      </section>
    </div>
    <section class="features3 esquemaServicio" id="features3-l">
      <br><br><br>
      <div class="col-12 col-md-12 col-lg-12">
        <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">

            <?php
              require_once '../Datos/jsonServicios.php';
              if (isset($_GET['id'])==false) {
                 $numeroServicio = 0;
              }else{
                $numeroServicio = $_GET['id'];
              }
              if ($numeroServicio < 0 || $numeroServicio > sizeOf($arraylistServicios)) {
                  $numeroServicio = 0;
              }
               print_r($arraylistServicios[$numeroServicio]->nombre_servicio);
             ?>
        </h2>
      </div>
      <br>
      <div class="media-container-row">
        <div class="col-12 col-md-12 col-lg-12">
          <p class="textoServicios mbr-fonts-style display-7 centrarTexto">
            <?php print_r($arraylistServicios[$numeroServicio]->descripcion) ?>
         </p>
        </div>
      </div>
    </section>


    <section class="mbr-gallery mbr-slider-carousel cid-qHtuqvMmT3" id="gallery1-k">
        <div id="proyecto" class="container">
          <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
              GALERIA DE IMAGENES
          </h2>
            <div>
              <!-- Filter --><!-- Gallery -->
              <div class="mbr-gallery-row">
                <div class="mbr-gallery-layout-default">
                  <div>
                    <div>
                      <?php
                      require_once '../Datos/jsonServicios.php';
                      for ($i=0; $i < sizeof($arraylistServicios[$numeroServicio]->listado_imagenes); $i++) {?>
                      <div class="mbr-gallery-item mbr-gallery-item--p4" data-video-url="false" data-tags="Awesome">
                        <div href="#lb-gallery1-k" data-slide-to="<?php print_r($i)?>" data-toggle="modal">
                          <img src="<?php print_r($arraylistServicios[$numeroServicio]->listado_imagenes[$i]);?>" alt="">
                          <span class="icon-focus"></span>
                          <span class="mbr-gallery-title mbr-fonts-style display-7"><?php print_r($arraylistServicios[$numeroServicio]->listado_titulo_imagen[$i]); ?></span>
                        </div>
                      </div>
                    <?php } ?>
                    <!-- Ejemplo original de como va
                      <div class="mbr-gallery-item mbr-gallery-item--p4" data-video-url="false" data-tags="Responsive">
                        <div href="#lb-gallery1-k" data-slide-to="1" data-toggle="modal">
                          <img src="assets/images/gallery01.jpg" alt="">
                          <span class="icon-focus"></span>
                          <span class="mbr-gallery-title mbr-fonts-style display-7">Type caption here</span>
                        </div>
                      </div>
                    -->
                      </div>
                    </div>
                  </div>
                  <div class="clearfix">
                  </div>
              </div>
            </div>
            <!-- Lightbox -->
            <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-k">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <ol class="carousel-indicators">
                      <!--Cerrar llave de php -->
                      <li data-app-prevent-settings="" data-target="#lb-gallery1-k" class=" active" data-slide-to="0"></li>
                      <?php for ($i=1; $i < sizeof($arraylistServicios[$numeroServicio]->listado_imagenes); $i++) {?>
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-k" data-slide-to="<?php print_r($i)?>"></li>
                      <?php } ?>
                      <!--Ejemplo original
                      <li data-app-prevent-settings="" data-target="#lb-gallery1-k" data-slide-to="7"></li>
                      -->
                    </ol>
                    <div class="carousel-inner">
                      <!-- Dejar la primera Obra la nro 00 Activa-->
                      <div class="carousel-item active">
                        <img src="<?php print_r($arraylistServicios[$numeroServicio]->listado_imagenes[0]);?>" alt="">
                        <span class="mbr-gallery-title mbr-fonts-style display-7">
                          <?php print_r($arraylistServicios[$numeroServicio]->listado_titulo_imagen[0]);?>
                        </span>
                      </div>
                      <?php for ($i=1; $i < sizeof($arraylistServicios[$numeroServicio]->listado_imagenes); $i++) {?>
                      <div class="carousel-item">
                        <img src="<?php print_r($arraylistServicios[$numeroServicio]->listado_imagenes[$i]);?>" alt="">
                        <span class="mbr-gallery-title mbr-fonts-style display-7">
                          <?php print_r($arraylistServicios[$numeroServicio]->listado_titulo_imagen[$i]);?>
                        </span>
                      </div>
                    <?php }?>
                      <!-- EJEMPLO ORIGINAL
                      <div class="carousel-item">
                        <img src="assets/images/gallery07.jpg" alt="">
                      </div>
                      -->
                  </div>
                  <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery1-k">
                    <span class="mbri-left mbr-iconfont" aria-hidden="true"></span>
                    <span class="sr-only">ATRAS</span>
                  </a>
                  <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery1-k">
                    <span class="mbri-right mbr-iconfont" aria-hidden="true"></span>
                    <span class="sr-only">SIGUIENTE</span>
                  </a>
                  <a class="close" href="#" role="button" data-dismiss="modal">
                    <span class="sr-only">CERRAR</span>
                  </a>
                </div>
              </div>
            </div>
           </div>
         </div>
    </section>
    <div class="media-container-row">
      <div class="col-12 col-md-4 col-lg-4">
        <div class="botonServicios text-center posicionarAbajo">
            <a href="../#servicio" class="btn btn-primary display-4">
                ¿QUIERES VER MAS SERVICIOS?
            </a>
        </div>
      </div>
    </div>
    <section class="cid-qHtuLem0Nj mbr-parallax-background" id="footer2-n">
        <div class="container">
            <div class="media-container-row content mbr-white">
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <p class="mbr-text"></p><p><strong>DIRECCIÓN</strong><br>
                        <br>Av, Alvarez 1136 Oficina C&nbsp;<br>Viña del Mar, Valparaiso.<br>
                        <br>
                        <br><strong>Contacto</strong><br>
                        <br>Email: soporte@icpp.cl&nbsp;<br>Telefono: 323320-355

                    </p><p></p>
                </div>
                <div class="col-12 col-md-2">
                </div>
                <div class="col-12 col-md-8" id="contacto">
                  <div class="loader"></div>
                  <form id="ajax-contact" class="mbr-form" action="../Contacto/contacto.php" method="post">
                      <div class="row row-sm-offset">
                          <div class="col-md-4 multi-horizontal" data-for="name">
                              <div class="form-group">
                                  <label class="form-control-label mbr-fonts-style display-7" for="name-form1-m">Nombre</label>
                                  <input type="text" class="form-control" name="nombre" data-form-field="Name" required="" id="name-form1-m">
                              </div>
                          </div>
                          <div class="col-md-4 multi-horizontal" data-for="email">
                              <div class="form-group">
                                  <label class="form-control-label mbr-fonts-style display-7" for="email-form1-m">Correo Electronico</label>
                                  <input type="email" class="form-control" name="correo" data-form-field="Email" required="" id="email-form1-m">
                              </div>
                          </div>
                          <div class="col-md-4 multi-horizontal" data-for="phone">
                              <div class="form-group">
                                  <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-m">Nro° Contacto</label>
                                  <input type="tel" class="form-control" name="telefono" data-form-field="Phone" id="phone-form1-m">
                              </div>
                          </div>
                      </div>
                      <div class="form-group" data-for="message">
                          <label class="form-control-label mbr-fonts-style display-7" for="message-form1-m">Mensaje</label>
                          <textarea type="text" class="form-control" name="mensaje" rows="7" data-form-field="Message" id="message-form1-m"></textarea>
                      </div>
                      <div class="row">
                        <span class="input-group-btn col-12 col-md-6">
                            <button type="submit" class="btn btn-primary btn-form display-4">ENVIAR MENSAJE</button>
                        </span>
                        <div id="respuesta" class="MensajeContacto col-12 col-md-6">
                        </div>
                      </div>
                  </form>

            <div class="footer-lower">
                <div class="media-container-row">
                    <div class="col-sm-12">
                        <hr>
                    </div>
                </div>
                <div class="media-container-row mbr-white">
                    <div class="col-sm-12 col-md-6 copyright">
                        <p class="mbr-text mbr-fonts-style display-7">
                            © TODOS LOS DERECHOS RESERVADOS A ICPP</p>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
            </div>
        </div>
    </section>

  <script src="../assets/web/assets/jquery/jquery.min.js"></script>
  <script src="../assets/popper/popper.min.js"></script>
  <script src="../assets/tether/tether.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/smoothscroll/smooth-scroll.js"></script>
  <script src="../assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="../assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="../assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="../assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="../assets/dropdown/js/script.min.js"></script>
  <script src="../assets/parallax/jarallax.min.js"></script>
  <script src="../assets/masonry/masonry.pkgd.min.js"></script>
  <script src="../assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../assets/theme/js/script.js"></script>
  <script src="../assets/slidervideo/script.js"></script>
  <script src="../assets/gallery/player.min.js"></script>
  <script src="../assets/gallery/script.js"></script>

  <script type="text/javascript">
          $(document).ready(function () {
              $('.loader').hide();
              $('#ajax-contact').submit(function () {
                  $(".loader").fadeOut("slow");
                  $(".loader").fadeIn("slow");
                  $('#respuesta').hide();
                  $.ajax({
                      type: 'POST',
                      url: "../Contacto/contacto.php",
                      data: $(this).serialize(),
                      success: function (data) {
                          $('#respuesta').html(data);
                          document.getElementById("name-form1-m").value = "";
                          document.getElementById("email-form1-m").value = "";
                          document.getElementById("phone-form1-m").value = "";
                          document.getElementById("message-form1-m").value = "";
                          $(".loader").hide("slow");
                          $('#respuesta').fadeIn('slow');
                      }
                  })
                  return false;
              });
          });
  </script>
  </body>
</html>
