@extends('auth.templates.template')

@section('content-form')

<form class="login form" role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label>Nome:</label>
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

        @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label>E-Mail:</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label>Senha:</label>
        <input id="password" type="password" class="form-control" name="password">

        @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label>Confirmar Senha:</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

        @if ($errors->has('password_confirmation'))
        <span class="help-block">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-login">
            <i class="fa fa-btn fa-user"></i> Register
        </button>
    </div>
</form>

@endsection
