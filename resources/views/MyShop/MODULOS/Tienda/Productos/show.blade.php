@extends('layouts.MyShop.plantilla')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="col-sm-8 col-sm-offset-2">
            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="rose" id="wizardProfile">
                    <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                    <div class="wizard-header">
                        <h3 class="wizard-title">
                            Detalle Producto
                        </h3>
                    </div>
                    <div class="wizard-navigation">
                        <ul>
                            <li>
                                <a href="#about" data-toggle="tab">INFORMACIÓN</a>
                            </li>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                                <div class="row">
                                    <h4 class="info-text"> <b>General</b> </h4>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="picture">
                                                @foreach ($imagenes as $items)
                                                <img src="{{asset($items->url1)}}" class="picture-src" id="wizardPicturePreview" title="" />
                                                @endforeach
                                            </div>
                                            <label class="control-label"><strong>PORTADA</strong></label>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>VENDEDOR</strong></label>
                                                @foreach ($vendedor as $items)
                                                <h6 class="form-control">{{ $items->name }}</h6>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">attach_money</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>PRECIO</strong></label>
                                                <h6 class="form-control">${{ $producto->precio_producto }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-lg-offset-1">
                                        <div class="input-group">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>TITULO</strong></label>
                                                <h6 class="form-control">{{ $producto->nombre_producto }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                @if ($producto->aprobacion == 1)
                                                <i style="color: #80b833" class="material-icons">star</i>
                                                @endif
                                                @if ($producto->aprobacion == 2)
                                                <i style="color: #f39200" class="material-icons">star</i>
                                                @endif
                                                @if ($producto->aprobacion == 3)
                                                <i style="color: #ca2c2c" class="material-icons">star</i>
                                                @endif
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>APROBACION DE GESTION HUMANA</strong></label>
                                                @foreach ($aprobacion as $items)
                                                <h6 class="form-control">{{ $items->nombre_aprobacion }}</h6>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> <b>Detallada</b> </h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label"><strong>CATEGORIA</strong></label>
                                            @foreach ($categoria as $items)
                                            <h6 class="form-control">{{ $items->nombre_categoria }}</h6>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label"><strong>DISPONIBILIDAD</strong></label>
                                            @foreach ($disponibilidad as $items)
                                            <h6 class="form-control">{{ $items->nombre_disponibilidad }}</h6>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label"><strong>ESTADO DEL PRODUCTO</strong></label>
                                            <h6 class="form-control">{{ $producto->estado_producto }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    @foreach ($imagenes as $items)
                                                    @if ($items->url2 <> "")
                                                    <img class="img"  src="{{asset($items->url2)}}" />
                                                    @else
                                                    <img src="../assets/img/image_placeholder.jpg" alt="...">
                                                    @endif
                                                    @endforeach
                                                    <!-- notice modal -->
                                                    <button class="btn btn-raised btn-round btn-rose" data-toggle="modal" data-target="#noticeModal">
                                                        Ver
                                                    </button>
                                                    <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-notice">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                                                    <h5 class="modal-title text-center" id="myModalLabel">{{ $producto->nombre_producto }}</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="instruction">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="picture2">
                                                                                    @foreach ($imagenes as $items)
                                                                                    @if ($items->url2 <> "")
                                                                                    <img  src="{{asset($items->url2)}}" alt="Thumbnail Image" class="img-rounded img-responsive" />
                                                                                    @else
                                                                                    <img src="../assets/img/image_placeholder.jpg" alt="Thumbnail Image" class="img-rounded img-responsive" >
                                                                                    @endif
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer text-center">
                                                                        <button type="button" class="btn btn-rose btn-round" data-dismiss="modal">Ok!</button>
                                                                        <div class="form-group label-floating" >
                                                                            <label class="form-control"><strong>DESCRIPCION</strong></label>
                                                                            <textarea class="form-control" readonly rows="5">{{ $producto->descripcion_producto }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end notice modal -->
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    @foreach ($imagenes as $items)
                                                    @if ($items->url3 <> "")
                                                    <img class="img"  src="{{asset($items->url3)}}" />
                                                    @else
                                                    <img src="../assets/img/image_placeholder.jpg" alt="...">
                                                    @endif
                                                    @endforeach
                                                    <!-- notice modal -->
                                                    <button class="btn btn-raised btn-round btn-rose" data-toggle="modal" data-target="#noticeModal2">
                                                        Ver
                                                    </button>
                                                    <div class="modal fade" id="noticeModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                                                        <div class="modal-dialog modal-notice">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                                                    <h5 class="modal-title text-center" id="myModalLabel2">{{ $producto->nombre_producto }}</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="instruction">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="picture2">
                                                                                    @foreach ($imagenes as $items)
                                                                                    @if ($items->url3 <> "")
                                                                                    <img  src="{{asset($items->url3)}}" alt="Thumbnail Image" class="img-rounded img-responsive" />
                                                                                    @else
                                                                                    <img src="../assets/img/image_placeholder.jpg" alt="Thumbnail Image" class="img-rounded img-responsive" >
                                                                                    @endif
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer text-center">
                                                                        <button type="button" class="btn btn-rose btn-round" data-dismiss="modal">Ok!</button>
                                                                        <div class="form-group label-floating" >
                                                                            <label class="form-control"><strong>DESCRIPCION</strong></label>
                                                                            <textarea class="form-control" readonly rows="5">{{ $producto->descripcion_producto }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end notice modal -->
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    @foreach ($imagenes as $items)
                                                    @if ($items->url4 <> "")
                                                    <img class="img"  src="{{asset($items->url4)}}" />
                                                    @else
                                                    <img src="../assets/img/image_placeholder.jpg" alt="...">
                                                    @endif
                                                    @endforeach
                                                    <!-- notice modal -->
                                                    <button class="btn btn-raised btn-round btn-rose" data-toggle="modal" data-target="#noticeModal3">
                                                        Ver
                                                    </button>
                                                    <div class="modal fade" id="noticeModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                                                        <div class="modal-dialog modal-notice">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                                                    <h5 class="modal-title text-center" id="myModalLabel3">{{ $producto->nombre_producto }}</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="instruction">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="picture2">
                                                                                    @foreach ($imagenes as $items)
                                                                                    @if ($items->url4 <> "")
                                                                                    <img  src="{{asset($items->url4)}}" alt="Thumbnail Image" class="img-rounded img-responsive" />
                                                                                    @else
                                                                                    <img src="../assets/img/image_placeholder.jpg" alt="Thumbnail Image" class="img-rounded img-responsive" >
                                                                                    @endif
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer text-center">
                                                                        <button type="button" class="btn btn-rose btn-round" data-dismiss="modal">Ok!</button>
                                                                        <div class="form-group label-floating" >
                                                                            <label class="form-control"><strong>DESCRIPCION</strong></label>
                                                                            <textarea class="form-control" readonly rows="5">{{ $producto->descripcion_producto }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end notice modal -->
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    @foreach ($imagenes as $items)
                                                    @if ($items->url5 <> "")
                                                    <img class="img"  src="{{asset($items->url5)}}" />
                                                    @else
                                                    <img src="../assets/img/image_placeholder.jpg" alt="...">
                                                    @endif
                                                    @endforeach
                                                    <!-- notice modal -->
                                                    <button class="btn btn-raised btn-round btn-rose" data-toggle="modal" data-target="#noticeModal4">
                                                        Ver
                                                    </button>
                                                    <div class="modal fade" id="noticeModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
                                                        <div class="modal-dialog modal-notice">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                                                    <h5 class="modal-title text-center" id="myModalLabel4">{{ $producto->nombre_producto }}</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="instruction">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="picture2">
                                                                                    @foreach ($imagenes as $items)
                                                                                    @if ($items->url5 <> "")
                                                                                    <img  src="{{asset($items->url5)}}" alt="Thumbnail Image" class="img-rounded img-responsive" />
                                                                                    @else
                                                                                    <img src="../assets/img/image_placeholder.jpg" alt="Thumbnail Image" class="img-rounded img-responsive" >
                                                                                    @endif
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer text-center">
                                                                        <button type="button" class="btn btn-rose btn-round" data-dismiss="modal">Ok!</button>
                                                                        <div class="form-group label-floating" >
                                                                            <label class="form-control"><strong>DESCRIPCION</strong></label>
                                                                            <textarea class="form-control" readonly rows="5">{{ $producto->descripcion_producto }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end notice modal -->
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group label-floating" >
                                            <label class="form-control"><strong>DESCRIPCION</strong></label>
                                            <textarea class="form-control" readonly rows="20">{{ $producto->descripcion_producto }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"><b>Contacto</b></h4>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label"><strong>WhatsApp</strong></label>
                                            <h6 class="form-control">{{ $producto->contacto_vendedor }}</h6>
                                            <?php
                                                $tell = $producto->contacto_vendedor;
                                                $compra_producto = $producto->nombre_producto;
                                            ?>
                                            <a href="https://api.whatsapp.com/send?phone=<?php echo"57$tell"?>&text=*_¡Saludos😀!_*,%20me%20interesa%20comprar%20su%20producto%20llamado:%20<?php echo$compra_producto?>,%20publicado%20en%20*MyShop🛒.*" target="_blank" class="button">
                                                <input type='submit' class='btn btn-rose' value="Comprar"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            <div class="pull-right">
                                <?php
                                    $user = $producto->vendedor; 
                                ?>
                                @if ($user == $id and $roles == "[]")
                                <a href="{{route('producto.edit', $producto)}}" class="button">
                                  <input type='submit' class='btn btn-rose' value="Editar"/>
                              </a>
                              <a href="{{ route('producto.index',$items->id) }}" class="button">
                                <input type='submit' class='btn btn-rose' value="Aceptar"/>
                            </a>
                            @else
                            <a href="{{ route('producto.index',$items->id) }}" class="button">
                              <input type='submit' class='btn btn-rose' value="Aceptar"/>
                          </a>
                          @endif
                          <!--VALIDAMOS PERMISOS DEL USUSARIO-->
                          @if ($roles <> "[]")
                          @foreach ($roles as $key => $item)
                          @if ($item->admin_tienda == $aprobado)
                          <a href="{{route('producto.edit', $producto)}}" class="button">
                              <input type='submit' class='btn btn-rose' value="Editar"/>
                          </a>
                          @endif
                          @endforeach
                          @endif
                          <!--FIN VALIDACIÓN-->
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
          </div>
          <!-- wizard container -->
      </div>
  </div>
</div>

@endsection
