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
    <section class="features3 esquemaServicio" id="features3-l">
      <br><br><br>
      <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-3">
          <?php
            require_once '../Datos/jsonServicios.php';
            $numeroServicio = $_GET['id'];
            if ($numeroServicio < 0 || $numeroServicio > sizeOf($arraylistServicios)) {
                $numeroServicio = 0;
            }
             print_r($arraylistServicios[$numeroServicio]->nombre_servicio);
           ?>
      </h2>
      <br>
      <div class="media-container-row">
        <div class="col-12 col-md-6 col-lg-6">
          <p class="textoServicios mbr-fonts-style display-7 centrarTexto">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida purus mauris, et tincidunt ipsum mattis ac. Mauris sit amet porta leo. Duis luctus, purus in sagittis sagittis, orci nunc imperdiet erat, sit amet gravida risus nisi nec justo. Donec est sem, condimentum non convallis sit amet, consequat quis turpis. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique cursus neque non ultrices. Fusce ullamcorper tellus quis nulla euismod, et feugiat ipsum rutrum.

            Aliquam eu lorem porttitor, convallis felis vel, auctor purus. Fusce quis nisi urna. Mauris nec nibh fermentum, feugiat felis eu, porta lectus. Suspendisse sit amet mattis sapien. Maecenas vel varius dui. Integer consequat euismod enim eget blandit. Praesent bibendum non purus ut pulvinar. Pellentesque in diam laoreet, congue justo vel, blandit lacus. Sed sagittis, tellus a gravida convallis, velit sem ornare tortor, a vestibulum justo augue ac metus. Donec tristique neque ut magna tristique placerat. Donec ultricies sollicitudin libero, sed ultrices justo molestie vitae. Integer et mauris porta, maximus magna ac, suscipit nunc.

            Maecenas est lacus, condimentum rutrum laoreet vitae, lobortis non sapien. Nulla facilisi. Sed venenatis dolor quis nunc mattis, a tempor quam scelerisque. Nullam justo eros, pretium in iaculis ut, efficitur sit amet mi. Proin accumsan quis urna vel placerat. Duis sed mi nec purus viverra gravida eget varius eros. Mauris ac venenatis libero. Vestibulum nunc ligula, commodo id efficitur non, blandit eget elit.

            Quisque nec metus sed leo euismod interdum id quis arcu. Suspendisse id orci eget neque semper finibus et vel nulla. Vivamus consequat neque vel lectus mollis luctus. Donec in accumsan neque. Nulla ut condimentum eros, et scelerisque felis. Cras scelerisque enim lorem, eget euismod lacus tempor eu. Integer laoreet ultricies leo nec porta. Quisque sit amet nulla lectus. Suspendisse ligula justo, posuere eu posuere quis, ullamcorper placerat sapien. Pellentesque id odio a ipsum consectetur maximus ornare vel quam. Phasellus cursus urna eleifend augue sagittis, pulvinar consectetur odio tempor. Nulla elementum varius cursus. Quisque lectus eros, finibus sit amet odio vitae, imperdiet rhoncus est. Vivamus blandit nulla id elit suscipit mattis.

            Phasellus eros orci, euismod eu sem et, iaculis rhoncus mauris. Praesent accumsan interdum turpis eget scelerisque. Nunc tellus nibh, suscipit vitae feugiat blandit, tincidunt ac quam. Phasellus vehicula leo a mi vestibulum tincidunt. Aenean eget accumsan eros. Curabitur lobortis orci in cursus auctor. In aliquam elit a mi semper consectetur non ut ligula. Etiam molestie ornare lacus eget consectetur. Quisque malesuada quis elit a dictum. Fusce vel dolor eu felis tincidunt pellentesque. Quisque eget odio tristique, condimentum mauris in, placerat elit. In urna risus, viverra ut mi quis, bibendum vehicula eros. Cras quis libero non elit condimentum luctus. Nulla rhoncus orci leo, venenatis tempus justo convallis sit amet. Integer nulla arcu, semper sit amet consequat vitae, commodo et purus. Vivamus tellus ex, posuere id interdum in, posuere sit amet nisi.
          </p>
        </div>

        <div class="col-12 col-md-6 col-lg-6">
          aca van las fotos
        </div>
      </div>
      <div class="media-container-row">
        <div class="col-12 col-md-4 col-lg-4">
          <div class="botonServicios text-center posicionarAbajo">
              <a href="../#servicio" class="btn btn-primary display-4">
                  ¿QUIERES VER MAS SERVICIOS?
              </a>
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
                <div class="col-12 col-md-2">

                </div>
                <div class="col-12 col-md-8">
                  <form class="mbr-form" action="#" method="post">
                      <div class="row row-sm-offset">
                          <div class="col-md-4 multi-horizontal" data-for="name">
                              <div class="form-group">
                                  <label class="form-control-label mbr-fonts-style display-7" for="name-form1-m">Nombre</label>
                                  <input type="text" class="form-control" name="name" data-form-field="Name" required="" id="name-form1-m">
                              </div>
                          </div>
                          <div class="col-md-4 multi-horizontal" data-for="email">
                              <div class="form-group">
                                  <label class="form-control-label mbr-fonts-style display-7" for="email-form1-m">Correo Electronico</label>
                                  <input type="email" class="form-control" name="email" data-form-field="Email" required="" id="email-form1-m">
                              </div>
                          </div>
                          <div class="col-md-4 multi-horizontal" data-for="phone">
                              <div class="form-group">
                                  <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-m">Nro° Contacto</label>
                                  <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="phone-form1-m">
                              </div>
                          </div>
                      </div>
                      <div class="form-group" data-for="message">
                          <label class="form-control-label mbr-fonts-style display-7" for="message-form1-m">Mensaje</label>
                          <textarea type="text" class="form-control" name="message" rows="7" data-form-field="Message" id="message-form1-m"></textarea>
                      </div>

                      <span class="input-group-btn">
                          <button href="" type="submit" class="btn btn-primary btn-form display-4">ENVIAR MENSAJE</button>
                      </span>
                  </form>
                </div>
            </div>
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
  </body>
</html>
