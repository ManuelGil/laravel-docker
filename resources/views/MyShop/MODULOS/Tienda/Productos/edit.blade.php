@extends('layouts.MyShop.plantilla')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="col-sm-10 col-sm-offset-1">
            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="rose" id="wizardProfile">
                    <form action="{{route('producto.update', $producto)}}" method="POST">
                        <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                        @csrf
                        @method('PUT')
                        <div class="wizard-header">
                            <h3 class="wizard-title">
                                Editar Producto
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
                                                    <img src="{{asset($items->url1)}}" style="height: 100%" class="picture-src" id="wizardPicturePreview" title="" />
                                                    @endforeach
                                                </div>
                                                <label class="control-label"><strong>PORTADA</strong></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">face</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><strong>VENDEDOR</strong></label>
                                                    @foreach ($vendedor as $items)
                                                    <h6>{{$items->name}}</h6>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">attach_money</i>
                                                </span>
                                                <div class="form-group">
                                                    <label class="control-label"><strong>PRECIO</strong></label>
                                                    <input type="text" name="precio_producto" value="{{$producto->precio_producto}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-lg-offset-1">
                                            <div class="input-group">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><strong>TITULO</strong></label>
                                                    <input type="text" name="nombre_producto" id="nombre_producto" value="{{$producto->nombre_producto}}" class="form-control">
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
                                                    <!--VALIDAMOS PERMISOS DEL USUSARIO-->
                                                    @if ($roles <> "[]")
                                                    @foreach ($roles as $key => $item)
                                                    @if ($item->admin_tienda == $aprobado)
                                                    <select  name="aprobacion" id="aprobacion" class="form-control" required="true">
                                                        @foreach ($aprobacion as $items)
                                                        @if ($producto->aprobacion != $items->id_aprobacion)
                                                        <option  value="{{ $items->id_aprobacion}}">{{ $items->nombre_aprobacion}}</option>
                                                        @else
                                                        <option selected="selected" value="{{ $producto->aprobacion}}">{{ $items->nombre_aprobacion}}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                    @else
                                                    <select  name="aprobacion" id="aprobacion" class="form-control" disabled>
                                                        @foreach ($aprobacion as $items)
                                                        @if ($producto->aprobacion != $items->id_aprobacion)
                                                        <option  value="{{ $items->id_aprobacion}}">{{ $items->nombre_aprobacion}}</option>
                                                        @else
                                                        <option selected="selected" value="{{ $producto->aprobacion}}">{{ $items->nombre_aprobacion}}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                    @endif
                                                    @endforeach
                                                    @endif
                                                    <!--FIN VALIDACIÓN-->
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
                                                <select  name="categoria" id="categoria" class="form-control" required="true">
                                                    @foreach ($categoria as $items)
                                                    @if ($producto->categoria != $items->id_categoria)
                                                    <option  value="{{ $items->id_categoria }}">{{ $items->nombre_categoria}}</option>
                                                    @else
                                                    <option selected="selected" value="{{ $producto->categoria}}">{{ $items->nombre_categoria}}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>DISPONIBILIDAD</strong></label>
                                                <select  name="disponibilidad" id="disponibilidad" class="form-control" required="true">
                                                    @foreach ($disponibilidad as $items)
                                                    @if ($producto->disponibilidad != $items->id_disponibilidad)
                                                    <option  value="{{ $items->id_disponibilidad }}">{{ $items->nombre_disponibilidad}}</option>
                                                    @else
                                                    <option selected="selected" value="{{ $producto->disponibilidad}}">{{ $items->nombre_disponibilidad}}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>ESTADO DEL PRODUCTO</strong></label>
                                                <select name="estado_producto" id="estado_producto" class="form-control" required="true">
                                                    <option value="{{$producto->estado_producto}}">{{$producto->estado_producto}}</option>
                                                    <option value="Nuevo para estrenar">Nuevo para estrenar</option>
                                                    <option value="Casi nuevo pero en buen estado">Casi nuevo pero en buen estado</option>
                                                    <option value="Viejo pero en buen estado">Viejo pero en buen estado</option>
                                                    <option value="Malo para repuestos">Malo para repuestos</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="picture-container">
                                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail">
                                                        @foreach ($imagenes as $items)
                                                        <img class="img"  src="{{asset($items->url2)}}" />
                                                        @endforeach
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
                                                        <img class="img"  src="{{asset($items->url3)}}" />
                                                        @endforeach
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
                                                        <img class="img" src="{{asset($items->url4)}}" />
                                                        @endforeach
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
                                                        <img class="img" src="{{asset($items->url5)}}" />
                                                        @endforeach
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
                                                <label class="control-label"><strong>DESCRIPCION</strong></label>
                                                <textarea class="form-control"  name="descripcion_producto" id="descripcion_producto"  rows="10">{{$producto->descripcion_producto}}</textarea>
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
                                                <input type="number" name="contacto_vendedor" id="contacto_vendedor" value="{{$producto->contacto_vendedor}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <a href="{{route('producto.index')}}" class="button">
                                        <input  type='button' class='btn btn-fill btn-rose btn-wd' value="CANCELAR"/>
                                    </a>
                                    <a class="button">
                                        <input type='submit' class='btn btn-finish btn-fill btn-rose btn-wd' value="Guardar"/>
                                    </a>
                                    
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- wizard container -->
            </div>
        </div>
    </div>

    @endsection
    