@extends('layouts.Auth.login')

@section('login')
<div class="container">
    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="card card-login card-hidden">
                <div class="card-header text-center" data-background-color="blue">
                    <h4 class="card-title">Iniciar Sesión</h4>
                </div>
                <center>
                <img src="assets/landing/images/logo.png">
                </center>
                <div class="card-content">
                    <div class="input-group" {{ $errors->has('email') ? 'has-error' : ''}}>
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-group label-floating">
                            <label for="email" class="control-label">Correo*</label>
                            <input type="email" 
                             class="form-control"
                             name="email" 
                             id="email"
                             pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"
                             title="Ingresa un correo válido"
                             required
                             value="{{ old('email') }}">
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="input-group" {{ $errors->has('password') ? 'has-error' : ''}}>
                        <span class="input-group-addon">
                            <i class="material-icons">lock_outline</i>
                        </span>
                        <div class="form-group label-floating"> 
                            <label for="password" class="control-label">Contraseña*</label>
                            <input type="password"
                             class="form-control" 
                             name="password"
                             required
                             pattern="[A-Za-z0-9]{5,15}"
                             title="La contraseña debe ser mínimo 5 y máximo 15 caracteres"
                             id="password">
                            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                        </div>
                        <p id="mensajeError"></p>
                    </div>
                </div>
                <div class="footer text-center">
                    <br>
                    @if(session()->has('block'))

                        <div id="tmp" style="display: block">
                        <button type="submit" disabled class="btn btn-rose text-center">Espera: <p id="timer"></p> para volver a intentar</button>
                        </div>

                        <div id="log" style="display: none">
                            <p id="mensajeError"></p>
                            <button type="submit" id="login" class="btn btn-rose">Iniciar Sesión</button>
                        </div>

                        <script type="text/javascript">
                        window.onload = function empezar(){
                            $("#timer").timer({
                                countdown:true,
                                duration:"60",
                                callback:function(){
                                    //Cuándo llegue a cero
                                    document.getElementById('tmp').style.display = 'none';
                                    document.getElementById('log').style.display = 'block';

                                }, format:'%S'
                            });
                        }
                        </script>

                    @else
                        <p id="mensajeError"></p>
                        <button type="submit" id="login" class="btn btn-rose">Iniciar Sesión</button>

                    @endif
                                        
                    @if (Route::has('password.request'))
                <a class="btn btn-rose btn-simple btn-wd btn-lg" href="{{ route('password.request') }}">¿Olvidaste tú clave?</a>
                    @endif
            </div>
            </div>
        </form>
    </div>
</div>
@endsection
