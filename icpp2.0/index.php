<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.6.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <title>ICPP</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/theme/css/estiloPropio.css">
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
<body>
  <div>
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
                          <img src="assets/images/logo2.png" alt="ICPP" style="height: 4rem;">
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
                      <a class="nav-link link text-white display-7" href="#">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                          INICIO
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link link text-white display-7" href="#servicio"><span class="mbri-delivery mbr-iconfont mbr-iconfont-btn"></span>
                          SERVICIOS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link link text-white display-7" href="#proyecto">
                      <span class="mbri-cash mbr-iconfont mbr-iconfont-btn"></span>
                       PROYECTOS
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link link text-white display-7" href="#contacto">
                      <span class="mbri-letter mbr-iconfont mbr-iconfont-btn"></span>
                          CONTACTANOS
                   </a>
                  </li>
            </ul>

          </div>
      </nav>
    </section>
  </div>

<section class="engine"><a href="https://mobirise.ws/p">open source web page creator</a></section><section class="cid-qHcIeQ02uj mbr-fullscreen" data-bg-video="https://www.youtube.com/watch?v=CuPQxvkETrI" id="header2-j">



    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(229, 86, 0);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-2">
                    INGENIERÍA Y CONSTRUCCIÓN PUERTO PRINCIPAL</h1>

                <p class="mbr-text pb-3 mbr-fonts-style display-7">
                    Más de 20 años especializados en la realización de proyectos</p>

            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="features3 cid-qHtuvBns9I" id="features3-l">




    <div id="servicio" class="container">
      <br><br>
      <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
          SERVICIOS
      </h2>
      <br>
          <?php
          require_once 'Datos/jsonServicios.php';
          for ($i=0; $i < sizeof($arraylistServicios);$i++) {
            /* REALIZAR MATRIZ PARA VERIFICAR LOS NUMEROS
                0  1 2
                3  4 5
                6  7 8
                Donde la fila izquierda es la empezada del div y la fila derecha es la terminada ejemplo (Inicio:0 - Final:2)
           */
            if ($i==0 || $i==3) {
              print_r('<div class="media-container-row">');
            }
            ?>
              <div class="card p-3 col-12 col-md-6 col-lg-4 alturaTarjeta">
                  <div class="card-wrapper">
                      <div class="card-img">
                          <img src="<?php print_r($arraylistServicios[$i]->url_imagen)?>" alt="<?php print_r($arraylistServicios[$i]->nombre_servicio);?>">
                      </div>
                      <div class="card-box">
                          <h4 class="card-title mbr-fonts-style display-7">
                              <?php print_r($arraylistServicios[$i]->nombre_servicio); ?>
                          </h4>
                          <p class="mbr-text mbr-fonts-style display-7 centrarTexto">
                            <?php print_r($arraylistServicios[$i]->descripcion); ?>
                          </p>
                      </div>
                          <div class="mbr-section-btn text-center posicionarAbajo">
                            <a href="<?php print_r("Servicio/servicio.php?id=".$arraylistServicios[$i]->numero_servicio);?>" class="btn btn-primary display-4">
                                SABER MÁS
                            </a>
                          </div>
                  </div>
              </div>
              <!-- REALIZAR MATRIZ PARA VERIFICAR LOS NUMEROS
                  0  1 2
                  3  4 5
                  6  7 8
                  Donde la fila izquierda es la empezada del div y la fila derecha es la terminada ejemplo (Inicio:0 - Final:2)
            -->
            <?php if ($i==2 || $i==5) {
              print_r('</div>');
            } ?>
          <?php } ?>
            <!-- EJEMPLO ORIGINAL
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/02.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Mobile Friendly
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            All sites you make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site.
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center">
                        <a href="https://mobirise.com" class="btn btn-primary display-4">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
          -->
    </div>
</section>

<section class="mbr-gallery mbr-slider-carousel cid-qHtuqvMmT3" id="gallery1-k">
    <div id="proyecto" class="container">
      <br><br><br>
      <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
          PROYECTOS
      </h2>
        <div>
          <!-- Gallery -->
          <div class="mbr-gallery-row">
            <div class="mbr-gallery-layout-default">
              <div>
                <div>
                  <?php
                  require_once 'Datos/jsonProyectos.php';
                  for ($i=0; $i < sizeof($arraylist); $i++) {?>
                  <div class="mbr-gallery-item mbr-gallery-item--p4" data-video-url="false" data-tags="Awesome">
                    <div href="#lb-gallery1-k" data-slide-to="<?php print_r($arraylist[$i]->numero_imagen);?>" data-toggle="modal">
                      <img src="<?php print_r($arraylist[$i]->url_imagen);?>" alt="">
                      <span class="icon-focus"></span>
                      <span class="mbr-gallery-title mbr-fonts-style display-7"><?php print_r($arraylist[$i]->nombre_obra); ?></span>
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
                  <?php for ($i=1; $i < sizeof($arraylist); $i++) {?>
                    <li data-app-prevent-settings="" data-target="#lb-gallery1-k" data-slide-to="<?php print_r($i)?>"></li>
                  <?php } ?>
                  <!--Ejemplo original
                  <li data-app-prevent-settings="" data-target="#lb-gallery1-k" data-slide-to="7"></li>
                  -->
                </ol>
                <div class="carousel-inner">
                  <!-- Dejar la primera Obra la nro 00 Activa-->
                  <div class="carousel-item active">
                    <img src="<?php print_r($arraylist[0]->url_imagen);?>"alt="">
                    <span class="mbr-gallery-title mbr-fonts-style display-7">
                      <div class="">
                      <a href="Proyecto/proyecto.php?id=0"><?php print_r($arraylist[0]->nombre_obra);?></a>
                      <button class="botonProyectosURL">
                        <a class="textoBotonProyecto"href="<?php print_r("Proyecto/proyecto.php?id=".$arraylist[0]->numero_imagen);?>">
                            SABER MÁS
                        </a>
                      </button>
                      </div>


                      <!--<a href="Proyecto/proyecto.php?id=0" class="mbr-fonts-style display-7 moverDerecha text-warning">SABER MÁS</a>-->
                    </span>
                  </div>
                  <?php for ($i=1; $i < sizeof($arraylist); $i++) {?>
                  <div class="carousel-item">
                    <img src="<?php print_r($arraylist[$i]->url_imagen);?>" alt="">
                    <span class="mbr-gallery-title mbr-fonts-style display-7">
                      <a href="Proyecto/proyecto.php?id=<?php print_r($arraylist[$i]->numero_imagen)?>"><?php print_r($arraylist[$i]->nombre_obra);?></a>
                      <!--<a href="Proyecto/proyecto.php?id=<?php print_r($arraylist[$i]->numero_imagen)?>" class="mbr-fonts-style display-7 moverDerecha text-warning">SABER MÁS</a>-->
                      <div class="botonProyectosURL">
                        <a href="<?php print_r("Proyecto/proyecto.php?id=".$arraylist[$i]->numero_imagen);?>">
                            SABER MÁS
                        </a>
                      </div>
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

<section>
  <div id="clientes" class="container">
    <br><br><br>
    <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
        CLIENTES
    </h2>
    <br>
    <?php
      require_once 'Datos/jsonClientes.php';
      for ($i=0; $i < sizeof($arraylistClientes);$i++) {
        /* REALIZAR MATRIZ PARA VERIFICAR LOS NUMEROS
            0  1 2
            3  4 5
            6  7 8
            Donde la fila izquierda es la empezada del div y la fila derecha es la terminada ejemplo (Inicio:0 - Final:2)
       */
        if ($i==0 || $i==3 || $i==6 || $i==9 || $i==12 || $i==15) {
          print_r('<div class="media-container-row">');
        }
        ?>
        <div class="card p-3 col-12 col-md-6 col-lg-4">
            <div class="card-wrapper">
                <div class="card-img imagenClientes">
                    <img clas="" src="<?php print_r($arraylistClientes[$i]->url_imagen)?>" alt="<?php print_r($arraylistClientes[$i]->nombre_cliente);?>">
                </div>
                <div class="card-box">
                    <h4 id="textoCliente" class="margenTitulos card-title mbr-fonts-style display-7">
                        <?php print_r($arraylistClientes[$i]->nombre_cliente); ?>
                    </h4>
                </div>
            </div>
        </div>

          <!-- REALIZAR MATRIZ PARA VERIFICAR LOS NUMEROS
              0  1 2
              3  4 5
              6  7 8
              9 10 11
              12 13 14
              15 16 17
              Donde la fila izquierda es la empezada del div y la fila derecha es la terminada ejemplo (Inicio:0 - Final:2)
        -->
            <?php if ($i==2 || $i==5 || $i==8 || $i ==11 || $i==14 || $i==17) {
              print_r('</div>');
            } ?>
    <?php } ?>
  </div>
</section>


<section class="mbr-section form1 cid-qHtuE5Jq3b" id="form1-m">
    <div id="contacto" class="container">
      <br>
      <br>
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2  class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    CONTACTANOS</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">Responderemos tu correo lo más rapido posible.&nbsp;</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
              <div class="loader2"></div>
                    <form id="ajax-contact" class="mbr-form" action="Contacto/contacto.php" method="post">
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
            </div>
        </div>
    </div>
</section>

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
            <div class="col-12 col-md-9">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJEfWHkXTeiZYRw3axtsNfmRA" allowfullscreen=""></iframe></div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row mbr-white">
                <div class="col-md-2">

                </div>
                <div class="col-sm-12 col-md-10 copyright">
                    <p class="margenTitulos mbr-text mbr-fonts-style display-7">
                        © TODOS LOS DERECHOS RESERVADOS A ICPP</p>
                </div>
                <div class="col-md-2">

                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  <script src="assets/gallery/player.min.js"></script>
  <script src="assets/gallery/script.js"></script>

  <script type="text/javascript">
          $(document).ready(function () {
              $('.loader2').hide();
              $('#ajax-contact').submit(function () {
                  $(".loader2").fadeOut("slow");
                  $(".loader2").fadeIn("slow");
                  $('#respuesta').hide();
                  $.ajax({
                      type: 'POST',
                      url: "Contacto/contacto.php",
                      data: $(this).serialize(),
                      success: function (data) {
                          $('#respuesta').html(data);
                          document.getElementById("name-form1-m").value = "";
                          document.getElementById("email-form1-m").value = "";
                          document.getElementById("phone-form1-m").value = "";
                          document.getElementById("message-form1-m").value = "";
                          $(".loader2").hide("slow");
                          $('#respuesta').fadeIn('slow');
                      }
                  })
                  return false;
              });
          });
  </script>

</body>
</html>
