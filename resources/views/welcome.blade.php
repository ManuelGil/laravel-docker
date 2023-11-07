<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>MyShop
 | inicio</title>
  <link rel="stylesheet" href="assets/landing/css/animate.css">
  
  <link rel="stylesheet" href="assets/landing/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/landing/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/landing/css/magnific-popup.css">

  <link rel="stylesheet" href="assets/landing/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="assets/landing/css/jquery.timepicker.css">

  <link rel="stylesheet" href="assets/landing/css/flaticon.css">
  <link rel="stylesheet" href="assets/landing/css/style.css">

  <!-- Bootstrap core CSS     -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <!--  Material Dashboard CSS    -->
  <link href="assets/css/material-dashboard.css" rel="stylesheet" />
  <link rel="canonical" href="//www.creative-tim.com/product/material-dashboard-pro" />
  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="assets/css/demo.css" rel="stylesheet" />
  <!--     Fonts and icons     -->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <link href="assets/css/google-roboto-300-700.css" rel="stylesheet" />
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
  <nav class="navbar navbar-dark">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <a class="navbar-brand" href="/">MyShop | <b>MyShop
</b></a> -->
        <a class="navbar-brand" href="/"><img src="assets/landing/images/logo.png" alt="250px" width="250px" style="margin-top:-30px"></a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active">
            <a href="/">
              <i class="material-icons">home</i> Inicio
            </a>
          </li>
          <li class="">
            <a href="{{ route('register') }}">
              <i class="material-icons">person_add</i> Register
            </a>
          </li>
        <li>
          <a href="{{ route('login') }}">
            <i class="material-icons">fingerprint</i> Login
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->


<div class="hero-wrap js-fullheight">
  <div class="home-slider owl-carousel js-fullheight">
    
    <div class="slider-item js-fullheight" style="background-image:url(assets/landing/images/lock.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-7 ftco-animate">
            <div class="text w-100">
              <h2><b>BIENVENIDO A MyShop</b></h2>
              <h1 class="mb-4 color-white">Contamos con los mejores espacios de trabajo</h1>
              <p><a href="{{ route('login') }}" class="btn btn-primary">ver más</a> <a href="#" class="btn btn-white">Cotactenos</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="slider-item js-fullheight" style="background-image:url(assets/landing/images/welcome.JPG);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-7 ftco-animate">
            <div class="text w-100">
              <h2><b>ATENCION AL CLIENTE</b></h2>
              <h1 class="mb-4 color-white">Nos destacamos por nuestro buen servicio y atención al usuario</h1>
              <p><a href="{{ route('login') }}" class="btn btn-primary">ver más</a> <a href="#" class="btn btn-white">Contáctanos</a></p>
            </div>
          </div>
        </div><strong></strong>
      </div>
    </div>
    
  </div>
</div>
<div class="nav-center">
  <ul class="nav nav-pills nav-pills-warning nav-pills-icons" role="tablist">
                        <!--
            color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
          -->
          <li>
            <a href="#description-1" role="tab" data-toggle="tab">
              <i class="material-icons">info</i> Nuestra empresa
            </a>
          </li>
          <li class="">
            <a href="#schedule-1" role="tab" data-toggle="tab">
              <i class="material-icons">location_on</i> Ubicacion
            </a>
          </li>
          <li>
            <a href="#tasks-1" role="tab" data-toggle="tab">
              <i class="material-icons">gavel</i> Herramientas
            </a>
          </li>
          <li>
            <a href="#tasks-2" role="tab" data-toggle="tab">
              <i class="material-icons">help</i> How Do
            </a>
          </li>
        </ul>
      </div>
      <div class="tab-content">
        <div class="tab-pane" id="description-1">
          <div class="card card-plain2">
            <div class="empresa-texto-izquierdo">
              <div class="item-nosotros">
                <div class="col-4">
                  <h2><b>Nosotros</b></h2>    
                  <span></span>   
                </div>
                <div class="col-8">
                  <div>
                    <p>MyShop Colombiana Comercializadora S.A es una compañía con 40 años de experiencia dedicada a la comercialización de productos para el sector eléctrico, redes y comunicaciones, iluminación y seguridad electrónica, cuenta con 6 agencias comerciales en Colombia, además de su sede en Ecuador, cobertura que facilita la entrega oportuna de nuestros productos y soluciones a través de nuestra red de distribución.</p>
                    <p>MyShop S.A es una empresa siempre a la vanguardia, nuestra experiencia gira entorno a construir relaciones duraderas con nuestros clientes, donde además de brindar asesoría, capacitación y acompañamiento, los apoyamos para que alcancen sus metas comerciales y empresariales.</p>
                    <p>Nuestra oferta de productos atiende las necesidades de nuestros clientes en los sectores industrial, comercial y residencial. Una de nuestras fortalezas es ofrecer al mercado la mejor oferta de productos, soluciones y proveedores a nivel internacional para la satisfacción y solución de sus necesidades.</p>
                  </div>
                </div>
              </div>

              <div class="item-mision">
                <div class="col-4">
                  <h2><b>Misión</b></h2>    
                  <span> </span>  
                </div>
                <div class="col-8">
                  <div>
                    <p>Brindamos soluciones integrales e innovadoras que añaden valor a nuestros clientes.</p>
                  </div>
                </div>
              </div>

              <div class="item-vision">
                <div class="col-4">
                  <h2><b>Visión</b></h2>     
                  <span> </span>  
                </div>
                <div class="col-8">
                  <div>
                    <p>Generar rentabilidad para garantizar la permanencia en el largo plazo brindando soluciones integrales e innovadoras, valor para nuestros clientes, calidad de vida y satisfacción para nuestros empleados.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="politica-calidad">
              <div>
                <div class="col-3">
                  <h2><b>Política <br>Integrada del Sistema de Gestión</b></h2>
                  <span></span>
                </div>
                <div class="col-4">
                  <div class="texto-politica-calidad">
                    <p>MyShop S.A. empresa dedicada a brindar soluciones integrales por medio de la importación y comercialización de productos de energía, comunicaciones, iluminación y seguridad electrónica; está comprometida en mantener la satisfacción de nuestros clientes contando con un personal competente y capacitado.</p>
                    <p>MyShop S.A. adopta como parte de sus compromisos la prevención de los riesgos y la seguridad de la cadena de suministro internacional, la prevención de los accidentes y enfermedades laborales, la protección del medio ambiente y la prevención de la contaminación, cumpliendo así con los requisitos legales aplicables a la compañía y garantizando una mejora continua del Sistema de Gestión Integrado.</p>
                    <p>Esta política será comunicada y divulgada a todo el personal de la organización incluyendo contratistas y visitantes.</p>
                  </div>
                </div>
                <div class="col-5">
                  <div class="img-pol-calidad">
                    <br>
                    <p><img class="alignnone wp-image-7615 size-full" src="https://MyShop.com/wp-content/uploads/lista1/11/fachada-MyShop.jpg" alt="" width="100" height="100">  </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="schedule-1">
          <div class="card card-plain">
            <div class="card-content">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5035892721726!2d-75.58551318474926!3d6.197092628589801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4682446b6fa345%3A0x4b8abeddfff91c5d!2sMyShop%20Colombiana%20Comercializadora%20S.A.!5e0!3m2!1ses!2sco!4v1623276906760!5m2!1ses!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tasks-1">
          <div class="card card-plain">

            <div class="card-content">
              <div class="col-lg-3">
                <div class="card card-pricing card-raised">
                  <div class="content">
                    <h6 class="category"><b>HelpDesk</b></h6>
                    <div class="icon icon-rose">
                      <img src="assets/img/HelpDesk.png" alt="">
                    </div>
                    <h3 class="card-title">Soporte</h3>
                    <p class="card-description">
                      Mesa de ayuda general para la empresa.
                    </p>
                    <a href="https://MyShop.com.co/glpi/" target="_blank" class="btn btn-rose btn-round">Ingresar<div class="ripple-container"></div></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card card-pricing card-raised">
                  <div class="content">
                    <h6 class="category"><b>Inventario</b></h6>
                    <div class="icon icon-rose">
                      <img src="assets/img/Inventario.png" alt="">
                    </div>
                    <h3 class="card-title">Manejo de inventarios</h3>
                    <p class="card-description">
                      Manejo de inventarios.
                    </p>
                    <a href="https://MyShop.com.co/ocsreports/" target="_blank" class="btn btn-rose btn-round">Ingresar<div class="ripple-container"></div></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card card-pricing card-raised">
                  <div class="content">
                    <h6 class="category"><b>Universidad</b></h6>
                    <div class="icon icon-rose">
                      <img src="assets/img/Universidad.png" alt="">
                    </div>
                    <h3 class="card-title">Universidad MyShop</h3>
                    <p class="card-description">
                      Punto de aprendizaje.
                    </p>
                    <a href="http://universidad.MyShop
.info/index.php" target="_blank" class="btn btn-rose btn-round">Ingresar<div class="ripple-container"></div></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card card-pricing card-raised">
                  <div class="content">
                    <h6 class="category"><b>CRM</b></h6>
                    <div class="icon icon-rose">
                      <img src="assets/img/CRM.png" alt="">
                    </div>
                    <h3 class="card-title">Administración</h3>
                    <p class="card-description">
                      Sistema de Administración.
                    </p>
                    <a href="https://crmMyShop.com/index.php?module=Users&action=Login&login_language=es_ES" target="_blank" class="btn btn-rose btn-round">Ingresar<div class="ripple-container"></div></a>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>

        <div class="tab-pane" id="tasks-2">
          <div class="card card-plain2">
            <div class="empresa-texto-izquierdo">
              <div class="item-nosotros">
                <div class="col-4">
                  <h2><b>¿Cómo conectar al video proyector?</b></h2>    
                  <span></span>   
                </div>
                <div class="col-8">
                  <div>
                    <p>C-Connection es un software para proyección en red utilizando un proyector CASIO. Lea atentamente la siguiente información antes de descargar el software.</p>
                    <p><b>Requerimientos mínimos del sistema</b></p>
                    <small><b>Sistema operativo</b></small>
                    <p>
                      - Microsoft Windows®10 (64/32bit).
                      <br>
                      - Microsoft Windows®8/8.1 (64/32bit).
                      <br>
                      - Microsoft Windows®7 SP1 (64/32bit).
                      <br>
                      - OS X 10.11 o superior.
                    </p>
                    <small><b>Software</b></small>
                    <p>
                      - CPU Intel Core i3 o superior o CPU recomendada para el sistema operativo que se utiliza.
                      <br>
                      - CPU Intel Core 2 Duo o superior.
                    </p>
                    <small><b>Hardware</b></small>
                    <p>
                      - Pantalla a todo color con una resolución de al menos 1024x768 que es compatible con Windows ® 10, Windows ® 8 / 8.1, Windows ® 7.
                      <br>
                    </p>
                    <p>A continuación encontrara la descarga directa del programa que requiere para hacer uso de esta herramienta, solo necesita escoger cual necesita dependiendo del equipo que tenga.</p>
                  </div>
                </div>
              </div>

              <div class="item-mision">
                <div class="col-4">
                  <h2><b>Windows <i class='fa fa-windows'></i></b></h2>    
                  <span> </span>  
                </div>
                <div class="col-8">
                  <div>
                    <p>Si tienes un dispositivo con sistema operativo <b>Windows</b>, descarga acá.</p>
                  </div>
                  <a href="https://support.casio.com/common/support/download_files/en/007/software/C-ConnectionSetup107112.msi" class="button">
                    <input type='submit' class='btn btn-finish btn-fill btn-rose btn-wd' value="Descargar"/>
                  </a>
                </div>
              </div>

              <div class="item-vision">
                <div class="col-4">
                  <h2><b>Mac <i class='fa fa-apple'></i></b></h2>     
                  <span> </span>  
                </div>
                <div class="col-8">
                  <div>
                    <p>Si tienes un dispositivo con sistema operativo <b>Mac</b>, descarga acá.</p>
                  </div>
                  <a href="https://support.casio.com/common/support/download_files/en/007/software/C-ConnectionSetup107112.dmg" class="button">
                    <input type='submit' class='btn btn-finish btn-fill btn-rose btn-wd' value="Descargar"/>
                  </a>
                </div>
              </div>

              <div class="item-vision">
                <div class="col-4">
                  <h2><b>Movil</b></h2>     
                  <span> </span>  
                </div>
                <div class="col-12">
                  <div>
                    <p>Si tienes un dispositivo movil <b>IOS</b> o <b>Android</b>.</p>
                  </div>
                  <div class="col-sm-4 form-group label-floating">
                    <p><i class='fa fa-android'></i> Android</p>
                    <img src="assets/img/app-casio-android.png" alt="">
                    <button class="btn btn-raised btn-round btn-rose" data-toggle="modal" data-target="#noticeModal1">
                      Ampliar
                    </button>
                    <div class="modal fade" id="noticeModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                      <div class="modal-dialog modal-notice">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title text-center" id="myModalLabel1"><b><i class='fa fa-android'></i> Android</b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                          </div>
                          <div class="modal-body">
                            <div class="instruction">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="picture2">
                                    <img src="assets/img/app-casio-android.png" alt="Thumbnail Image" class="img-rounded img-responsive">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer text-center">
                              <button type="button" class="btn btn-rose btn-round" data-dismiss="modal">Ok!</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end notice modal -->
                  </div>
                  <div class="col-sm-4 form-group">
                    <p><i class='fa fa-apple'></i> IOS</b></p>
                    <img src="assets/img/app-casio-IOS.png" alt="">
                    <button class="btn btn-raised btn-round btn-rose" data-toggle="modal" data-target="#noticeModal">
                      Ampliar
                    </button>
                    <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-notice">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title text-center" id="myModalLabel"><b><i class='fa fa-apple'></i> IOS</b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                          </div>
                          <div class="modal-body">
                            <div class="instruction">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="picture2">
                                    <img src="assets/img/app-casio-IOS.png" alt="Thumbnail Image" class="img-rounded img-responsive">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer text-center">
                              <button type="button" class="btn btn-rose btn-round" data-dismiss="modal">Ok!</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end notice modal -->
                  </div>
                </div>
              </div>

            </div>
            <div class="politica-calidad">
              <div>
                <div class="col-3">
                  <h2><b>¡YOU CAN DO IT! <br>Instalación en PC</b></h2>
                  <span></span>
                </div>
                <div class="col-4">
                  <div class="texto-politica-calidad">
                    <p><b>1). </b>Descargue la aplicación anteriormente mencionada dependiendo del sistema operativo que tenga.</p>
                    <p><b>2). </b>Una vez termine la descarga abra el archivo.</p>
                    <p><b>3). </b>Clic en "siguiente".</p>
                    <p><b>4). </b>Leemos los terminos y condiciones (de ser necesario) y le damos en "Siguiente".</p>
                    <p><b>5). </b>Se abrira una ventana en la que se pediran unos permisos para que la aplicación haga cambios en el equipo y le damos en "Si", (nada peligroso) he inmediatamente empezara la instalación.</p>
                    <p><b>6). </b>Al terminar la instalación aparecera una ventana información la cual confirmara que la instalación ha sido un exito, acá marcamos la opción de "Iniciar aplicación" y le damos en "Finalizar".</p>
                  </div>
                </div>
                <div class="col-3">
                  <h2><b>Uso</b></h2>
                  <span></span>
                </div>
                <div class="col-4">
                  <div class="texto-politica-calidad">
                    <p><b>1). </b>Con el programa previamente instalado en el equipo, nos conectamos a la red de wifi llamada "Videoproyector".</p>
                    <p><b>2). </b>Abrimos la aplicación.</p>
                    <p><b>3). </b>Dentro de la aplicación aparece un dispositivo llamado <b>casiolpjB94</b>, damos clic al lado derecho donde dice "Connect".</p>
                    <p><b>4). </b>Se abre una ventana en que que se debe colocar el codigo de ingreso, en este caso es el <b>1234</b>.</p>
                    <p><b>5). </b>Una vez ingresado el codigo estara listo para compartir pantalla, solo hay que dar clic en la flecha que apunta hacia arriba que esta ubicada en la parte superior del dispositivo ya mencionado anteriormente.</p>
                  </div>
                  <div class="col-5">
                    <div class="img-pol-calidad">
                      <br>
                      <p><img class="alignnone wp-image-7615 size-full" src="https://www.casio-intl.com/product/image/1425568479367/" alt="" width="100" height="100">  </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<footer class="footer">
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-10 col-lg-6">
    <!--<div class="subscribe mb-5">
     <form action="" class="subscribe-form" method="POST">
      @csrf
      <div class="form-group d-flex">
        <input type="email" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" title="Ingresa un email válido"
        class="form-control rounded-left" name="email" placeholder="Ingrese su correo eléctronico">

        <input type="submit" value="Suscribirse" class="form-control submit px-3">
      </div>
    </form>
  </div>-->
</div>
</div>



<div class="row mt-5">
  <div class="col-md-6 col-lg-8">

    <p class="copyright">
      Copyright
      &copy;
      <a href="https://MyShop.com/">MyShop</a>
      <script>
        document.write(new Date().getFullYear())
      </script>
    </p>

  </div>
  <div class="col-md-6 col-lg-4 text-md-right">
   <p class="mb-0 list-unstyled">
    <a class="mr-md-3" style="color: white"   target="_blank" href="http://MyShop.com/politicas-de-privacidad/">Términos y condiciones</a>
  </p>
</div>
</div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<script src="assets/landing/js/jquery.min.js"></script>
<script src="assets/landing/js/jquery-migrate-3.0.1.min.js"></script>
<script src="assets/landing/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/landing/js/jquery.easing.1.3.js"></script>
<script src="assets/landing/js/jquery.waypoints.min.js"></script>
<script src="assets/landing/js/jquery.stellar.min.js"></script>
<script src="assets/landing/js/jquery.animateNumber.min.js"></script>
<script src="assets/landing/js/bootstrap-datepicker.js"></script>
<script src="assets/landing/js/jquery.timepicker.min.js"></script>
<script src="assets/landing/js/owl.carousel.min.js"></script>
<script src="assets/landing/js/jquery.magnific-popup.min.js"></script>
<script src="assets/landing/js/scrollax.min.js"></script>
<script src="assets/landing/js/main.js"></script>

<!--  DataTables.net Plugin    -->
<script src="assets/js/jquery.datatables.js"></script>

<script src="assets/js/material.min.js" type="text/javascript"></script>
<script src="assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>


<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<script type="text/javascript">
  $().ready(function() {
    demo.checkFullPageBackgroundImage();

    setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
      $('.card').removeClass('card-hidden');
    }, 700)
  });
</script>


<script type="text/javascript">
  $(document).ready(function() {
    $('#datatables').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
        ],
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
      }

    });


    var table = $('#datatables').DataTable();

        // Edit record
    table.on('click', '.edit', function() {
      $tr = $(this).closest('tr');

      var data = table.row($tr).data();
      alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
    });

        // Delete a record
    table.on('click', '.remove', function(e) {
      $tr = $(this).closest('tr');
      table.row($tr).remove().draw();
      e.preventDefault();
    });

        //Like record
    table.on('click', '.like', function() {
      alert('You clicked on Like button');
    });

    $('.card .material-datatables label').addClass('form-group');
  });
</script>




</body>
</html>