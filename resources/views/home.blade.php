@extends('layouts.MyShop.plantilla')

@section('content')

<!-- ESTILOS DEL CARRUSEL-->
<link rel="stylesheet" href="{{ asset('assets/landing/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/landing/css/owl.carousel-cartas.min.css') }}">
<!-- FIN ESTILOS CARRUSEL-->

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-icon" data-background-color="blue">
            <i class="material-icons">home</i>
          </div>
          <div class="card-content">
            <h4 class="card-title">Welcome to <b>MyShop</b></h4>
          </div>
          <!-- end content-->
        </div>
        <!--  end card  -->
        <!--SCROLL DE IMAGENES-->
        <div class="hero-wrap col-md-9 ">
          <div class="home-slider owl-carousel">

            <div class="col-sm-10 col-sm-offset-1 ">
              <div class="card card-product2">
                <div class="card-header card-header-image" data-header-animation="true">
                  <a href="#pablo">
                  <img  src="{{asset('assets/landing/images/image_2.jpg')}}" />
                  </a>
                </div>
                <div class="card-body">
                  <div class="card-actions text-center">
                    <button type="button" class="btn btn-danger btn-link fix-broken-card">
                      <i class="material-icons">build</i> ¡RECONSTRUIR!
                    </button>
                    <a href="" class="btn btn mb1 bg-blue">ver más</a>
                  </div>
                  <h4 class="card-title">
                    <a href="">Bienvenido</a>
                  </h4>
                  <div class="card-description">
                    <h3>COMPRA TUS ALIMENTOS FRESCOS</h3>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="author foto">
                    <img class="img" style="background-color: white" src="{{asset('assets/landing/images/person_4.jpg')}}" />
                    <h2 class="autor"><b>Alexander</b></h2>
                  </div>
                  <div class="stats">
                    <p class="card-category"><i class="material-icons">place</i> MyShop, Medellin</p>
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
        </div>
        <!--FIN SCROLL DE IMAGENES-->

        <div class="row col-md-3 col-sm-offset-9"  style="float: revert">
          <div class="col-sm-12">
            <div class="card card-stats">
              <div class="card-header card-header-warning card-header-icon" >
                <div class="card-icon">
                <i class="fa fa-youtube blue-color " ></i>
                </div>
                <p class="card-category">MyShop</p>
                <h3 class="card-title-2">Youtube</h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                  <a href="https://www.youtube.com/channel/UCMH--" target="_blank">Visitar</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="card card-stats">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                <i class='fa fa-linkedin-square'></i>
                </div>
                <p class="card-category">MyShop</p>
                <h3 class="card-title">Linkedin</h3>
              </div>
              <div class="card-footer">
              <div class="stats">
                  <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                  <a href="https://www.linkedin.com/company/-s-a-" target="_blank">Visitar</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="card card-stats">
              <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                <i class='fa fa-google-plus-square'></i>
                </div>
                <p class="card-category">MyShop</p>
                <h3 class="card-title">Gmail</h3>
              </div>
              <div class="card-footer">
              <div class="stats">
                  <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                  <a href="https://accounts.google.com/signin/v2/ident=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank">Visitar</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="card card-stats">
              <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                <i class='fa fa-flag-checkered'></i>
                </div>
                <p class="card-category">MyShop</p>
                <h3 class="card-title">MyShop</h3>
              </div>
              <div class="card-footer">
              <div class="stats">
                  <i class="fa fa-flag-checkered" aria-hidden="true"></i>
                  <a href="https://MyShop.com/" target="_blank">Visitar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end col-md-12 -->
    </div>
    <!-- end row -->
  </div>
</div>

<!-- SRCRIPS DE SCROLL-->
<!-- SRCRIPS DE SCROLL-->
<script src="{{ asset('assets/landing/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/landing/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('assets/landing/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('assets/landing/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/landing/js/main.js') }}"></script>
<!-- FIN SRCRIPS DE SCROLL--> 
<!-- FIN SRCRIPS DE SCROLL--> 
@endsection

