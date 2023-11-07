@extends('layouts.MyShop.plantilla')

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-icon" data-background-color="blue">
            <i class="material-icons">store</i>
          </div>
          <div class="card-content">
            <h4 class="card-title">Tienda <b>MyShop</b></h4>
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <div class="material-datatables">
              <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <h3>Productos en venta</h3>
                <hp>MyShop no se hace responsable por garantia de los productos aqui mostrados.</hp>
                <br>
                <div class="botnes-pedidos">
                  <a href="{{ route('producto.index') }}" class="btn btn-next btn-fill btn-rose btn-wd">Inicio</a>
                  <a href="{{ route('producto.propios') }}" class="btn btn-next btn-fill btn-rose btn-wd">Mis Productos</a>
                  <a href="{{ route('producto.create') }}" class="btn btn-next btn-fill btn-rose btn-wd">Vender</a>
                  <!--VALIDAMOS PERMISOS DEL USUSARIO-->
                  @if ($roles <> "[]")
                  @foreach ($roles as $key => $item)
                  @if ($item->admin_tienda == $aprobado)
                  <a href="{{ route('producto.administrar') }}" class="btn btn-next btn-fill btn-rose btn-wd">Administrar <i style="color: #f39200" class="material-icons">star</i></a>
                  @endif
                  @endforeach
                  @endif
                  <!--FIN VALIDACIÓN-->
                </div>
                <br>
                <article class="estados">

                  <h3>Estados</h3>
                  
                  <ul>
                    <li class="primer"><span></span><b>Disponible</b></li>
                    
                    <li class="segun"><span></span><b>En Transito</b></li>      
                    
                    <li class="tercer"><span></span><b>No Disponble</b></li>

                  </ul>
                  
                </article>
                <div class="wrapper">

                  @foreach ($producto as $items)
                  <div class="col-lg-3">
                    <div class="card card-pricing card-raised">
                      <div class="content">
                        <h6 class="category-2"><b>{{ $items->nombre_categoria }}</b></h6>
                        <!-- VALIDAMOS EL COLOR DEL ESTADO-->
                        
                        <?php
                        $estado = $items->disponibilidad; 
                        ?>
                        @if ($estado == 1)
                        <article class="estados" style="margin-left: -3%">
                          <ul>
                            <li class="primer" style="margin-top: -60px"><span></span><p></p></li>
                          </ul>
                        </article>
                        @endif

                        @if ($estado == 2)
                        <article class="estados" style="margin-left: -3%">
                          <ul>
                            <li class="segun" style="margin-top: -60px"><span></span><p></p></li>
                          </ul>
                        </article>
                        @endif
                        
                        @if ($estado == 3)
                        <article class="estados" style="margin-left: -3%">
                          <ul>
                            <li class="tercer" style="margin-top: -60px"><span></span><p></p></li>
                          </ul>
                        </article>
                        @endif
                        <div class="card__collection clear-fix">
                          <div class="cards cards--two">
                            @foreach ($imagenes as $key => $item)
                            @if ($item->id_image == $items->imagenes)
                            <img class="img" src="{{asset($item->url1)}}"/>
                            @endif
                            @endforeach
                            <span class="cards--two__rect"></span>
                            <span class="cards--two__tri"></span>
                            <p>Tienda <b>MyShop</b></p>
                          </div>
                        </div>
                        <br>
                        <br>
                        <h3 class="card-title">${{ $items->precio_producto }}</h3>
                        <p class="card-description">
                        <textarea class="form-control text-center" readonly rows="2">{{ $items->nombre_producto }}</textarea>
                        </p>
                        <?php
                        $user = $items->vendedor; 
                        ?>
                        @if ($user == $id)
                        <a href="{{ route('producto.show',$items->id) }}" class="button">
                          <input type='submit' class='btn btn-rose btn-round' value="Modificar"/>
                        </a>
                        @else
                        <a href="{{ route('producto.show',$items->id) }}" class="button">
                          <input type='submit' class='btn btn-rose btn-round' value="Informacion"/>
                        </a>
                        @endif
                        
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </table>
            </div>
          </div>
          <!-- end content-->
        </div>
        <!--  end card  -->
      </div>
      <!-- end col-md-12 -->
    </div>
    <!-- end row -->
  </div>
</div>

@endsection
