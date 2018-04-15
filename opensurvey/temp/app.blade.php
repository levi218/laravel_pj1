<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
        <!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'OpenSurvey') }}</title>
		
        <link href="{{ asset(css/metro.css) }}" rel="stylesheet">
        <script src="{{ asset(js/jquery.js) }}"></script>
        <script src="{{ asset(js/metro.js) }}"></script>
        <link href="{{ asset(css/metro-schemes.css) }}" rel="stylesheet">
        <link href="{{ asset(css/metro-icons.css) }}" rel="stylesheet">
        <script type='text/javascript' src="{{ asset('js/gen_validatorv31.js') }}"></script>
        <script type='text/javascript' src="{{ asset(js/Chart.bundle.min.js') }}"></script>


    </head>
    <body>
        <div class="app-bar red fixed-top">
            <a class="app-bar-element branding" href="index.php"><img src="img\icon.png" height='30px' width='30px'/>&nbsp&nbsp{{ config('app.name', 'OpenSurvey') }}</a>
            <span class="app-bar-divider"></span>
            
            <div class="app-bar-element" style="width:30%">
                <div class="input-control text full-size">
                    <input type="text" placeholder="Search...">
                </div>
            </div>
            <ul class="app-bar-menu place-right">

                <li>
                    <a class="dropdown-toggle fg-white"><span class="mif-enter"></span> Enter</a>
                    <div class="app-bar-drop-container bg-white fg-dark place-right"
                         data-role="dropdown" data-no-close="true"
                         id='appbar_form_user'
                         >
                        <div class="padding20">
                            @if(Auth::guest())
                                <form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
									<h4 class="text-light">Login</h4>
									<input type='hidden' name='submitted' id='submitted' value='1'/>
									<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
									<div class="input-control text">
										<span class="mif-user prepend-icon"></span>
										<input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" />
									</div>
									<div class="input-control text">
										<span class="mif-lock prepend-icon"></span>
										<input type='password' name='password' id='password' maxlength="50" />
									</div>
									<label class="input-control checkbox small-check">
										<input type="checkbox">
										<span class="check"></span>
										<span class="caption">Remember me</span>
									</label>
									<div class="form-actions">
										<input type='submit' name='Submit' class="button" value='Login' />
										<a href="./user-register.php">Register</a>
										<a href='./user-reset-pwd-req.php'>Forgot Password?</a>
									</div>
								</form>
							@else
                                <h5 class="text-light">Hello, {{ Auth::user()->name }}!</h5>
								<div class="form-actions" style="width: 200px;">
									<a href="#">Personal</a>
									<a href="{{ route('logout') }}"
										onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
										Logout
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</div>
                            @endif
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="app-bar-menu place-right">
                <?php
                if ($fgmembersite->CheckLogin()) {
                    ?>
                    <li>
                        <a href="my_questions.php">Questions</a>
                    </li>
                    <?php
                }
                ?>
                <li>
                    <a href="about.php">About Us</a>
                </li>
            </ul>
        </div>
        <div class='padding60'></div>
		
		@yield('content')
		
		<div class="grid" style="margin-top: 60px;">
			<div class="row">
				<div class="cell colspan12 bg-red align-center fg-white padding20">
					Copyright Levi
				</div>
			</div>
		</div>
		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}"></script>
	</body>
</html>