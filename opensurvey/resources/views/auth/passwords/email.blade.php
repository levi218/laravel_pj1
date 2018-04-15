@extends('layouts.app')

@section('content')
<div class='grid'>
    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        <div class='row '>
            <div class='cell align-center'>
                <h1>Reset Password</h1>
                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
            </div>
        </div>

        <div class='row cells7'>
            <div class='cell colspan3 offset2'>
                <div class="input-control text full-size {{ $errors->has('email') ? ' error' : '' }}">
                    <label for='email' >Email </label>
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
            <div class='cell colspan1 offset4'>
                <input class="full-size" type='submit' name='Submit' value='Send Password Reset Link' />
            </div>
        </div>
    </form>
</div>

@endsection
