@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <center>
                    <div class="panel-heading"><h2>Login</h2></div>
                </center>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="user@mail.pt" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-5 col-md-offset-4">
                                <center>
                                <div class="checkbox">
                                    <label >
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Guardar dados do Login
                                    </label>
                                </div>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Esqueci-me da minha password...
                                </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-9">
                                <button type="submit" class="btn btn-primary">
                                    Iniciar Sessão
                                </button>
                            </div>
                        </div>
                        <div class="text-center center-block">
                            <img src="{!! asset('img/ipl.png') !!}" height= 15% width= 15%>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
               
@endsection
