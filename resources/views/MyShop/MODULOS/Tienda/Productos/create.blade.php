@extends('layouts.MyShop.plantilla')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="col-sm-10 col-sm-offset-1">
            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="rose" id="Producto">
                    <form action="{{route('producto.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="wizard-header">
                            <h3 class="wizard-title">
                                Nuevo Producto
                            </h3>
                            <h5>Ingresa la información del prouducto</h5>
                        </div>
                        <div class="wizard-navigation">
                            <ul>
                                <li>
                                    <a href="#about" data-toggle="tab">General</a>
                                </li>
                                <li>
                                    <a href="#account" data-toggle="tab">Detallada</a>
                                </li>
                                <li>
                                    <a href="#address" data-toggle="tab">Contacto</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                                <div class="row">
                                    <h4 class="info-text">Información general del producto</h4>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="../assets/img/image_placeholder.jpg" alt="...">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Portada</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="url1" accept="image/*">
                                                    </span>
                                                    @error('url1')
                                                    <br>
                                                    <small style="color: red">{{$message}}</small>
                                                    @enderror
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Vendedor
                                                    <small>(Obligatorio)</small>
                                                </label>
                                                <select name="vendedor" class="form-control">
                                                    @foreach ($vendedor as $key => $items)
                                                    <option value="{{$items->id}}">{{$items->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">attach_money</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Precio
                                                    <small>(Oblgatorio)</small>
                                                </label>
                                                <input name="precio_producto" type="text" id="precio_producto" class="form-control" value="{{old('precio_producto')}}">
                                                @error('precio_producto')
                                                <br>
                                                <small style="color: red">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-lg-offset-1">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">category</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Categoria
                                                    <small>(Obligatorio)</small>
                                                </label>
                                                <select name="categoria" id="categoria" class="form-control" value="{{old('categoria')}}">
                                                    @foreach ($categoria as $key => $items)
                                                    <option value="{{$items->id_categoria}}">{{$items->nombre_categoria}}</option>
                                                    @endforeach
                                                </select>
                                                @error('categoria')
                                                <br>
                                                <small style="color: red">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="account">
                                <h4 class="info-text"> Información detallada del producto </h4>
                                <div class="row">
                                    <div class="col-sm-7 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Titulo
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <input type="text" name="nombre_producto" id="nombre_producto" class="form-control" value="{{old('nombre_producto')}}">
                                            @error('nombre_producto')
                                            <br>
                                            <small style="color: red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Disponibilidad
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <select name="disponibilidad" class="form-control" value="{{old('disponibilidad')}}">
                                                @foreach ($disponibilidad as $key => $items)
                                                <option value="{{$items->id_disponibilidad}}">{{$items->nombre_disponibilidad}}</option>
                                                @endforeach
                                            </select>
                                            @error('disponibilidad')
                                            <br>
                                            <small style="color: red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-9 col-sm-offset-1" style="height: 30px">
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Estado del producto
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <select name="estado_producto" class="form-control" value="{{old('estado_producto')}}">
                                                <option value="Indefinido">Seleccionar...</option>
                                                <option value="Nuevo para estrenar">Nuevo para estrenar</option>
                                                <option value="Casi nuevo pero en buen estado">Casi nuevo pero en buen estado</option>
                                                <option value="Viejo pero en buen estado">Viejo pero en buen estado</option>
                                                <option value="Malo para repuestos">Malo para repuestos</option>
                                            </select>
                                            @error('estado_producto')
                                            <br>
                                            <small style="color: red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-9 col-sm-offset-1" style="height: 50px">
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="../assets/img/image_placeholder.jpg" alt="..." style="float: left">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Foto 1</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="url2" value="" accept="image/*">
                                                    </span>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="../assets/img/image_placeholder.jpg" alt="..." style="float: left">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Foto 2</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="url3" value="" accept="image/*">
                                                    </span>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="../assets/img/image_placeholder.jpg" alt="..." style="float: left">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Foto 3</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="url4"  value="" accept="image/*">
                                                    </span>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="../assets/img/image_placeholder.jpg" alt="..." style="float: left">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Foto 4</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="url5" value="" accept="image/*">
                                                    </span>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Descripcion
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <textarea class="form-control"  name="descripcion_producto" id="descripcion_producto"  rows="4" value="{{old('descripcion_producto')}}"></textarea>
                                            @error('descripcion_producto')
                                            <br>
                                            <small style="color: red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text">Contacto del vendedor</h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">WhatsApp
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <input type="number" name="contacto_vendedor" id="contacto_vendedor" class="form-control" value="{{old('contacto_vendedor')}}">
                                            @error('contacto_vendedor')
                                            <br>
                                            <small style="color: red">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Aprobación
                                                <small></small>
                                            </label>
                                            <input type="text"  class="form-control" value="Pendiente" required disabled>
                                        </div>
                                    </div>
                        
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <small><b>POLITICAS DE VENTAS INTERNAS EN MyShop S.A</b></small>
                                        <label class="control-label">
                                            <p style="text-align: justify">Las ventas internas son permitidas por la compañía y están condicionadas a las políticas aquí
                                                establecidas, que son de conocimiento general y deben ser aceptadas por los emprendedores,
                                                al realizar la inscripción.
                                                <br>
                                                <br>
                                                1. MyShop no se responsabiliza por el manejo de las ventas ni de las formas de pago y/o
                                                inconvenientes que puedan presentarse por esta razón.
                                                <br>
                                                2. En caso que las ventas de productos se realicen entre empleados de diferentes sedes, el envío
                                                de productos y/o documentación, debe ser asumido por el colaborador y no está permitido
                                                hacer uso de la correspondencia interna de la empresa.
                                                <br>
                                                3. Como la mayoría de las ventas se realizan “Bajo pedido”, estas deben ser gestionadas por los
                                                diferentes canales de comunicación definidos por el vendedor tales como: correos personales,
                                                Whatsapp o redes sociales, por fuera del horario laboral o sin que esto afecte el desarrollo de sus
                                                funciones y/ responsabilidades con la empresa.
                                                <br>
                                                4. Quedan exentas de esta actividad: la venta de sustancias psicoactivas, licor o armas, la captación
                                                de dinero, natilleras y la realización de colectas. Esto último, se excluye para actividades sociales
                                                internas (cumpleaños, baby shower, grados, despedidas o reconocimientos de logros).
                                                <br>
                                                5. En caso de presentarse algún conflicto por motivo del desarrollo de esta actividad
                                                discrecional del empleado y autorizada por la empresa, dicha dificultad deberá ser escalada al
                                                comité de convivencia, quien actuará conforme a la ley con el fin de buscar conciliación y evitar
                                                afectar el ambiente laboral.
                                                <br>
                                                6. Es responsabilidad de todos los colaboradores, tanto compradores como emprendedores
                                                garantizar el buen manejo de esta actividad.</p>
                                        </label>
                                        <br>
                                        <input type="checkbox" name="terminos_condiciones" id="terminos_condiciones"> Aceptar
                                        @error('terminos_condiciones')
                                        <br>
                                        <small style="color: red">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            <div class="pull-right">
                                <a href="{{route('producto.index')}}" class="button">
                                    <input  type='button' class='btn btn-fill btn-rose btn-wd' value="CANCELAR"/>
                                </a>
                                <input type='button' class='btn btn-next btn-fill btn-rose btn-wd' name='next' value='Siguiente' />
                                <input type='submit' class='btn btn-finish btn-fill btn-rose btn-wd' value="Guardar"/>
                            </div>
                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Atras' />
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
