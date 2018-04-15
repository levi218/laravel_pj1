@extends('layouts.app')

@section('content')
<div class='grid'>
    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class='row '>
            <div class='cell align-center'>
                <h1>Register</h1>
            </div>
        </div>

        <div class='row cells7'>
            <div class='cell colspan3 offset2'>
                <div class="input-control text full-size">
                    <label for='name' >Your Full Name: </label>
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <div class='row cells7'>
            <div class='cell colspan3 offset2'>
                <div class="input-control text full-size">
                    <label for='email' >Email Address:</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                    <label for='phone' >Phone:</label>
                    <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">

                    @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <div class='row cells7'>
            <div class='cell colspan3 offset2'>
                <div class="input-control text full-size">
                    <label for='username' >Username:</label>
                    <input id="name" type="text" class="form-control" name="username" value="{{ old('username') }}" autofocus>

                    @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <div class='row cells7'>
            <div class='cell colspan3 offset2'>
                <div class="input-control text full-size">
                    <label for='password' >Password:</label>
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
                <div class="input-control text full-size">
                    <label for='password-confirm' >Confirm Password: </label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
