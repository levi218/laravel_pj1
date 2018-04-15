@extends('layouts.app')

@section('content')
<div class='grid'>
    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">
        <div class='row '>
            <div class='cell align-center'>
                <h1>Reset Password</h1>
            </div>
        </div>

        <div class='row cells7'>
            <div class='cell colspan3 offset2'>
                <div class="input-control text full-size {{ $errors->has('email') ? ' error' : '' }}">
                    <label for='email' >Email </label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

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
                <div class="input-control text full-size {{ $errors->has('password') ? ' error' : '' }}">
                    <label for='password' >Password</label>
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
                <div class="input-control text full-size {{ $errors->has('password_confirmation') ? ' error' : '' }}">
                    <label for='password-confirm' >Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                    @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <div class='row cells7'>
            <div class='cell colspan1 offset4'>
                <input class="full-size" type='submit' name='Submit' value='Register' />
            </div>
        </div>
    </form>
</div>
@endsection
