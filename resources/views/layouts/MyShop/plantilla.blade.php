<!doctype html>
<html lang="es">


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/tables/datatables.net.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:34:01 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="google" content="notranslate" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    @if (auth()->user()->id == 128)
    <title> MyShop
    | Administrador</title>
    @else
    <title> MyShop
    | Usuario</title>
    @endif
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="//www.creative-tim.com/product/material-dashboard-pro" />
    <!--  Social tags      -->
    <meta name="keywords" content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard, premiu material design admin">
    <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta itemprop="image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.creative-tim.com/product/material-dashboard-pro" />
    <meta property="og:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg" />
    <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
    <meta property="og:site_name" content="Creative Tim" />
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link  href="{{ asset('assets/css/material-dashboard.css') }}"  rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/css/material-dashboard.min') }}">
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/demo-economico.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/demo-whatsapp.css') }}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/google-roboto-300-700.css') }}" rel="stylesheet" />

    
    <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    

    <!--ESTILO DE BOTON TOGGLE-->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">




</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="blue" data-background-color="black" data-image="{{ asset('assets/img/sidebar-1.jpg') }}">

            <div class="logo">
                <a href="{{ route('home') }}" class="simple-text">
                    @if (auth()->user()->id == 1)
                    Administrador
                    @else
                    Usuario
                    @endif
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="" class="simple-text">
                    Lmy
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img class="img"  src="{{asset('assets/landing/images/person_4.jpg')}}" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                         {{ auth()->user()->name }}
                         <b class="caret"></b>
                     </a>
                     <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="">Perfil</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-link {{ request()->is('home')? 'active' : '' }}">
                <a href="{{ route('home') }}">
                    <i class="material-icons">home</i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-link {{ request()->is('Producto/index','Producto/propios','Producto/create')? 'active' : '' }}">
                <a href="{{ route('producto.index') }}">
                    <i class="material-icons">store</i>
                    <p>Tienda <b>MyShop
</b></p>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="main-panel">
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
            <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                    <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                    <i class="material-icons visible-on-sidebar-mini">view_list</i>
                </button>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">
                    @if (auth()->user()->id == 1)
                    MyShop
                    | <b>Administrador</b>
                    @else
                    MyShop
                    | <b>Usuario</b>
                    @endif
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">dashboard</i>
                            <p class="hidden-lg hidden-md">Dashboard</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">notifications</i>
                            <span class="notification">3</span>
                            <p class="hidden-lg hidden-md">
                                Notifications
                                <b class="caret"></b>
                            </p>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="https://www.bbc.com/mundo/noticias-america-latina-59631226"target="_blank">Adios al "El Rey"</a>
                            </li>
                            <li>
                                <a href="https://cinfasalud.cinfa.com/p/navidad-saludable/" target="_blank">Cuidados para la epoca</a>
                            </li>
                            <li>
                                <a href="https://vacunacoronavirus.canalinstitucional.tv/" target="_blank">Asi va la vacunación en Colombia</a>
                            </li>
                        </ul>
                    </li>
                    <li class="separator hidden-lg hidden-md"></li>
                </ul>
                   <!-- <form class="navbar-form navbar-right" role="search">
                        <div class="form-group form-search is-empty">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="material-input"></span>
                        </div>
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </form>
                -->
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="container-fluid">

            <!-- --------------------------[INICIO DE CONTENIDO]-------------------------- -->
            
            @yield('home')
            @yield('content')
            @yield('scripts')
            
            <!-- --------------------------[FIN CONTENIDO]-------------------------- -->

        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
                <!--
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
            -->
            <p class="copyright pull-right">
                Copyright
                &copy;
                <a href="https://MyShop.com/">MyShop</a>
                <script>
                    document.write(new Date().getFullYear())
                </script>
            </p>
        </div>
    </footer>
</div>
</div>
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title">Configuración</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger active-color">
                    <div class="badge-colors text-center">
                        <span class="badge filter badge-purple" data-color="purple"></span>
                        <span class="badge filter badge-blue" data-color="blue"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-rose active" data-color="rose"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Color de menu</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="text-center">
                        <span class="badge filter badge-white" data-color="white"></span>
                        <span class="badge filter badge-black active" data-color="black"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Minimizar menu</p>
                    <div class="togglebutton switch-sidebar-mini">
                        <label>
                            <input type="checkbox" unchecked="">
                        </label>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Imgen de fondo</p>
                    <div class="togglebutton switch-sidebar-image">
                        <label>
                            <input type="checkbox" checked="">
                        </label>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Fondos</li>
            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('assets/img/sidebar-1.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('assets/img/sidebar-2.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('assets/img/sidebar-3.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('assets/img/sidebar-4.jpg') }}" alt="" />
                </a>
            </li>
            <li class="button-container">
                <div class="">
                    <a href="https://MyShop.com/" target="_blank" class="btn btn-rose btn-block">MyShop</a>
                </div>
                <!--
                <div class="">
                    <a href=""  class="btn btn-info btn-block">Nuevo</a>
                </div>
            -->
        </li>
        <li class="header-title">Generando valor cada día</li>
        <div>
            <a href="https://www.linkedin.com/company/MyShop-s-a-/mycompany/"  target="_blank">
                <button id="linkedin" class="btn btn-social-icon btn-linkedin btn-round"><i class="fa fa-linkedin"></i> &middot; 2023</button>
            </a>
            <a href="https://www.youtube.com/channel/UCMH--3BJDj5uDQEIRZha1iA"  target="_blank">
                <button id="youtube" class="btn btn-social-icon btn-youtube btn-round"><i class="fa fa-youtube"></i> &middot; 2023</button>
            </a>
        </div>

    </ul>
</div>
</div>

<div class="fixed-plugin2">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-usd fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title">Indicadores Economicos</li>
            <div class="module">    
                <div class="mod-wrapper clearfix">
                    <div class="mod-content clearfix">  
                        <div class="mod-inner clearfix">
                            <div class="bannergroup">

                                <div class="banneritem">
                                    <!-- DolarWeb IndMax Start --><div id="IndicadoresMax">
                                        <h2><a href="https://dolar.wilkinsonpc.com.co/">Dolar Hoy Colombia</a></h2>
                                    </div>
                                    <script type="text/javascript" src="https://dolar.wilkinsonpc.com.co/widgets/gratis/indicadores-economicos-max.js?ancho=260&alto=265&fondo=transparent&fsize=11&font-family=Helvetica&fcolor=black"></script><!-- DolarWeb IndMax End -->
                                    <!-- <b style="color: brown">IMPORTANTE</b>
                                    <p>El el momento la pagina no esta actualizando bien el TRM, por lo que se recomienda visitar la siguiente pagina para visualizar la información de manera correcta.
                                    </p>
                                    <br>
                                    <a href="https://dolar.wilkinsonpc.com.co/" target="_blank"><b>🡆 Consulta TRM</b></a>
                                    <br>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </ul>
</div>
</div>

<div class="fixed-plugin3">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-whatsapp fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title">Contactar con proceso<h2 style="color:#03718e"><b>TIC</b></h2></li>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="module text-center">    
                <div class="mod-wrapper clearfix">
                    <div class="mod-content clearfix">  
                        <div class="mod-inner clearfix">
                            <div class="bannergroup">

                                <div class="banneritem">
                                    <img src="{{ asset('assets/img/TI.png') }}" alt="">
                                    <a href="https://wa.link/7ughta" target="_blank" class="btn btn-primary">Contactar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </ul>
    </div>
</div>


</body>
<!--   Core JS Files   -->
<script src="{{ asset('assets/js/jquery-3.1.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/material.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<!--  Charts Plugin -->
<script src="{{ asset('assets/js/chartist.min.js') }}"></script>
<!--  Plugin for the Wizard -->
<script src="{{ asset('assets/js/jquery.bootstrap-wizard.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('assets/js/bootstrap-notify.js') }}"></script>
<!--   Sharrre Library    -->
<script src="{{ asset('assets/js/jquery.sharrre.js') }}"></script>
<!-- DateTimePicker Plugin -->
<script src="{{ asset('assets/js/bootstrap-datetimepicker.js') }}"></script>
<!-- Vector Map plugin -->
<script src="{{ asset('assets/js/jquery-jvectormap.js') }}"></script>
<!-- Sliders Plugin -->
<script src="{{ asset('assets/js/nouislider.min.js') }}"></script>
<!--  Google Maps Plugin    -->
<!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
<!-- Select Plugin -->
<script src="{{ asset('assets/js/jquery.select-bootstrap.js') }}"></script>
<!--  DataTables.net Plugin    -->
<script src="{{ asset('assets/js/jquery.datatables.js') }}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{ asset('assets/js/sweetalert2.js') }}"></script>
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('assets/js/jasny-bootstrap.min.js') }}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{ asset('assets/js/fullcalendar.min.js') }}"></script>
<!-- TagsInput Plugin -->
<script src="{{ asset('assets/js/jquery.tagsinput.js') }}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{ asset('assets/js/material-dashboard.js') }}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{ asset('assets/js/sweetalert2.js') }}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/js/demo.js') }}"></script>
<!-- SCRIPT BOTON TOGGLE-->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script type="text/javascript">
    $().ready(function() {
        demo.initMaterialWizard();
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
                searchPlaceholder: "Buscar",
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
@if (Session::has('mensaje'))
<script class="text/javascript">
  var alertTimeout = setTimeout(function() {
    swal.close();
  }, 3000); // 5000 milisegundos = 5 segundos

  swal({
    title: 'ATENCIÓN',
    text: "{{Session::get('mensaje')}}",
    type: 'warning',
    showCancelButton: false,
    showConfirmButton: true,
    confirmButtonColor: '#205F6D',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Aceptar'
}).then(function() {
    clearTimeout(alertTimeout); // Limpiar el temporizador si el usuario cierra la alerta manualmente
});
</script>
<style>
  div.dataTables_wrapper div.dataTables_filter input {
    display: inline-block;
    background-color: #f9f9f9;
    width: 200px;
    color: #003c4d;
}
</style>
@endif




<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/tables/datatables.net.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:34:01 GMT -->
</html>