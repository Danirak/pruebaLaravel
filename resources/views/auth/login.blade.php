@extends('plantillaGeneral')

@section('tittle')
    <title>Login</title>

    @endsection

    @section('contenido')
    </br>
    <div class="container col-md-3">

        <div class="card">
            <h4 class="card-header">Ingresar</h4>
            <div class="card-body">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-12 control-label">Correo Electrónico</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-12 control-label">Contraseña</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Ingresar
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            ¿Olvidó la contraseña?
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection