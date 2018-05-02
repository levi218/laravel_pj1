<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ config('app.name', 'OpenSurvey') }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/index.js') }}"></script>
</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><img  class="d-inline-block" width="40" height="40" src="{{ asset('img/icon.png') }}"></a>
        </div>
        <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 ">
            <div class="collapse navbar-collapse" id="myNavbar">
                <form class="nav navbar-nav navbar-left" action="{{ route('search') }}">
                    <div class="form-group">
                    <input type="text" class="form-control" style="margin: 20px auto" id='keyword' name="keyword" placeholder="Tìm câu hỏi..">
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="navbar-item">
                        <a href="{{ route('aboutus') }}">
                            <img class="nav-icon" src="{{ asset('img/ABOUT.png') }}">
                            <h6>About us</h6>
                        </a>
                    </li>
                    @if(Auth::check())
                    <li class="navbar-item">
                        <a href="{{ route('profile') }}">
                            <img class="nav-icon" src="{{ asset('img/PERSON.png')}}">
                            <h6>Profile</h6>
                        </a>
                    </li>
                    <li class="navbar-item">
                        <a href="{{ route('shop') }}">
                            <img class="nav-icon" src="{{ asset('img/SHOP.png')}}">
                            <h6>Shop</h6>
                        </a>
                    </li>
                    @else
                    <li class="navbar-item">
                        <a class="sign-in" role="button" onclick="document.getElementById('id01').style.display='block'">
                            <img class="nav-icon" src="{{ asset('img/SIGNIN.png')}}">
                            <h6>Sign in</h6>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    
    <div class="container-fluid bc-dark">
        <div class="row margin-15">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 h-100">
            <p>Facebook:</p>
            <p>Phone:</p>
            <p>Address:</p>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 border-white h-100">
            <p>Corporation all right reverse</p>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 h-100">
            <p>Quản lý nội dung: </p>
            <p>Hợp tác truyền thông: </p>
            <p>Liên hệ quảng cáo: </p>
        </div>
        </div>
    </div>

</div>
<div id="id01" class="modal">
      <div class="modal-content animate">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <ul class="nav nav-tabs" role="tablist">
                <li><a class="tab_link" data-toggle="tab" href="#tab_signin" role="tab" aria-selected="false">Sign in</a></li>
                <li><a class="tab_link active" data-toggle="tab" href="#tab_signup" role="tab" aria-selected="true">Sign up</a></li>
            </ul>
        </div>
        <div class="tab-content">
        <div id="tab_signin" class="signin-tab tab-pane active">
          <form id='loginform' method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group mt-3">
              <label for="m-signin-email">Email</label>
              <input type='text' name='email' id='m-signin-email' class="form-control" maxlength="50" />
            </div>
            <div class="form-group">
              <label for="m-signin-password">Password</label>
              <input type='password' name='password' id='m-signin-password' class="form-control" maxlength="50" />
            </div>
            <div class="form-check">
              <input type="checkbox" id="m-signin-remember" class="form-check-input" name="remember">
              <label class="form-check-label" for="m-signin-remember">
                Remember me
              </label>
            </div>
            <input type='submit' name='Submit' class="btn btn-primary" value='Đăng nhập'/>
          </form><br>
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>

        </div>
        <div id="tab_signup" class="signin-tab tab-pane">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <form id='registerform' method="POST" action="{{ route('register') }}" role="form" data-toggle="validator">
              {{ csrf_field() }}
              <div class="form-group mt-3">
                <label for="m-reg-name">Name</label>
                <input type='text' name='name' id='m-reg-name' class="form-control" maxlength="50" data-error="This field is required" required/>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group mt-3">
                <label for="m-reg-email">Email</label>
                <input type='email' name='email' id='m-reg-email' class="form-control" maxlength="50" data-error="This field is required" required/>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label for="m-reg-password">Password</label>
                <input type='password' name='password' id='m-reg-password' class="form-control" maxlength="50" data-error="This field is required" required/>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label for="m-reg-password-confirm">Confirm password</label>
                <input type='password' name='m-reg-password-confirm' id='password-confirm' class="form-control" maxlength="50" data-error="This field is required" data-match="#m-reg-password" data-match-error="Password not match" required/>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" id="m-reg-agree" name="agree" data-error="This field is required" required>
                    I agreed with your terms and conditions
                  </label>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <input type='submit' name='Submit' class="btn btn-primary" value='Đăng kí'/>
              </div>
            </form>

            <div class="clearfix">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
    </div>
  </div>


</div>




</body>
</html>
