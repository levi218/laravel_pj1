@extends('layouts.app')

@section('content')
<div class='grid'>
    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class='row '>
            <div class='cell align-center'>
                <h1>Login</h1>
            </div>
        </div>

        <div class='row cells7'>
            <div class='cell colspan3 offset2'>
                <div class="input-control text full-size">
                    <label for='email' >Username/Email </label>
                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <div class='row cells7'>
            <div class='cell colspan3 offset2'>
                <div class="input-control text full-size">
                    <label for='password' >Password </label>
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <div class='row cells7'>
            <div class='cell colspan3 offset2'>
                <div class="input-control full-size">
                    <label class="input-control checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} /> 
                               <span class="check"></span>
                        <span class="caption">Remember Me</span>
                    </label>
                </div>
            </div>
        </div>
        
        <div class='row cells7'>
            <div class='cell colspan1 offset4'>
                <input class="full-size" type='submit' name='Submit' value='Login' />
            </div>
        </div>
        <div class='row cells7'>
            <div class='cell colspan1 offset4'>
                <a href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            </div>
        </div>
    </form>
</div>

@endsection
