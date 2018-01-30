<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'OpenSurvey') }}</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link href="{{ asset('css/site.css') }}" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body class="hide-overlay">
    <div class='background-content'>
      <div class="container">

        <div class="row">
          <div class="col-12" style="background: #435878">
            <nav class="navbar navbar-expand-lg"> 
              <!-- Brand and toggle get grouped for better mobile display --> 
              <a class="navbar-brand" href="{{ route('home') }}"> <img class="img-fluid h-100 px-3" src="img/icon.png" /> </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
                <form class="navbar-form navbar-left" style="margin-left: 10px;">
                  <div class="form-group"> <p class="text-white font-weight-light font-italic lead mb-1">Câu hỏi của bạn là gì? </p>
                    <input id="nav_new_question" type="text" class="form-control" style="min-width: 300px;" placeholder="Tôi là ai?">
                  </div>
                </form>
                <ul class="navbar-nav">

                  <li class="nav-item">
                    <a id="dropdownMenuButton" class="nav-link btn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                      @if(Auth::check())
                      <img src="images/PERSON.png" /><br />
                      <img src="images/PROFILE.png" />
                      @else
                      <img src="images/SIGNIN.png" /><br />
                      <img src="images/SIGN IN.png" />
                      @endif
                    </a>
                    <div class="dropdown"> 
                      <div class="dropdown-menu p-4" aria-labelledby="dropdownMenuButton" style="width: 300%">
                        @if(Auth::check())
                        <h5 class="text-light">Your point: {{ Auth::user()->point }}</h5>
                        <div class="form-actions" style="width: 100px;">
                          <a href="{{ route('profile') }}">Personal</a>
                          <br />
                          <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                          Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                        </form>
                        {{ Auth::user()->name }}
                        @else
                        <ul class="nav nav-tabs" role="tablist">
                          <li><a class="tab_link active" data-toggle="tab" href="#tab_signin"  role="tab" aria-selected="true">Sign in</a></li>
                          <li><a class="tab_link" data-toggle="tab" href="#tab_signup" role="tab">Sign up</a></li>
                        </ul>
                        <div class="tab-content">
                          <div id="tab_signin" class="tab-pane fade active show" role="tabpanel">
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
                            </form>
                          </div>
                          <div id="tab_signup" class="tab-pane fade" role="tabpanel">
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
                          </div>
                        </div>
                        @endif
                      </div>

                    </div>
                  </li>
                  
                  <li class="nav-item"><a class="nav-link" href="#"><img src="images/SHOP.png" /><br />
                    <img src="images/SHOP_txt.png" /></a> </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('aboutus') }}"><img src="images/ABOUT.png" /><br />
                      <img src="images/ABT US.png" /></a> </li>
                    </ul>
                    <!-- /.navbar-collapse --> 
                  </div>
                  <!-- /.container-fluid --> 
                </nav>
              </div>
            </div>
          </div>
          @yield('content')

          <div class="container p-4 text-white font-weight-light font-italic" style="background: #252525; min-height: 100px; max-height: 200px;">
            <div class="row">
              <div class="col pl-5">
                <p>Facebook:<br/>
                  Phone:<br/>
                Address:</p>
              </div>
              <div class="col pl-5 border border-top-0 border-bottom-0">
                <p></p>
              </div>
              <div class="col pl-5">
                <p>Quản lý nội dung:<br/>
                Liên hệ quảng cáo:</p>
              </div>
            </div>
          </div>
          <div class="overlay"> <a href="javascript:void(0)" class="closebtn">&times;</a> 
            <!-- Overlay new question -->
            <div id="form_new_question" class="d-none overlay-content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-6 offset-3 py-4" style="background: #92cdcf">

                    <form action="{{ route('questions.store')}}" method="post">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="question">Câu hỏi của bạn</label>
                        <input type="text" id="question" name="question" class="form-control" placeholder="Tôi là ai?"/>
                      </div>
                      <div class="clearfix">
                        <input class="btn btn-primary float-right" type="button" value="Add Answer" onclick="addAnswer()"/>
                        <small class="description float-left">Người dùng có thể viết câu trả lời của mình</small>
                      </div>
                      <div id="answers" class="my-4">
                      </div>
                      <input class="btn btn-primary w-100 my-4" type="submit" value="Ask the world!"/>                      
                    </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Overlay question detail -->
          <div id="question_detail" class="d-none overlay-content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-6 offset-3" style="background: #92cdcf">
                  <form action="{{ route('questions.answer') }}" method="post">
                      {{ csrf_field() }}
                          <p class="question">Câu hỏi</p>
                          <input type="hidden" name="qId" id="qId" value=""/>
                          <p class="answers">Câu trả lời</p>
                          <input class="btn btn-primary" type="submit" onclick="$('body').toggleClass('hide-overlay',true);" value="Send Answer"/>
                          
                  </form>

                  
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>  
    <script type='text/javascript' src="{{ asset('js/Chart.bundle.min.js') }}"></script>
    <script>
      function number_of_answer(){
        return $('#form_new_question #answers').children().length;
      }
      function changeDescription(){
        if(number_of_answer()===0) {
          $('#form_new_question small.description').html('Người dùng có thể viết câu trả lời của mình');
        }else
        {
          $('#form_new_question small.description').html('Người dùng có thể chọn câu trả lời từ danh sách các câu trả lời có sẵn');
        }
      }
      function addAnswer() {

        $('#form_new_question #answers').append("<div class='form-group'><label>Answer</label><div class='input-group mb-3'><input type='text' name='answers[]' class='form-control' aria-describedby='basic-addon2'/><div class='input-group-append'><button class='btn btn-outline-secondary' type='button' onclick='$(this).parent().parent().parent().remove();changeDescription();'>X</button></div></div></div>");
        changeDescription();
        //$("#form_new_question").css({height: 'auto'});
      };

      $(document).ready(function() {
        /* Open */
        $('.closebtn').click(function(){
          $('body').toggleClass('hide-overlay');
        });
        $('.btn_show_overlay.question').click(function(){
                //e.preventDefault();
                var quest_id = $(this).children("span.question-id").text();
                
                $.ajax({
                  type: "GET",
                  url: 'questions/display_detail',
                  data: {'quest_id' : quest_id},
                  success: function( data ) {
                    console.log(data);
                    $("#question_detail.overlay-content .container-fluid .row div").html("");
                    $("#question_detail.overlay-content .container-fluid .row div").append(data);
                    
                    $('body').toggleClass('hide-overlay');
                    $(".overlay #question_detail").toggleClass("d-none",false);
                    $(".overlay >div:not(#question_detail)").toggleClass("d-none",true);
                    
                  },
                    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                      console.log(JSON.stringify(jqXHR));
                      console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                    }
                  });
                
              });
        $( "#nav_new_question" ).keypress(function( event ) {
          if ( event.which == 13 ) {
           event.preventDefault();
           $('#form_new_question #question').val($('#nav_new_question').val());
           $('#nav_new_question').val('');
           $('body').toggleClass('hide-overlay');
           $(".overlay #form_new_question").toggleClass("d-none",false);
           $(".overlay >div:not(#form_new_question)").toggleClass("d-none",true);
         }
       });
      });
      $(document).on(
        'click.bs.dropdown.data-api', 
        '[data-toggle="tab"]', 
        function (e) { e.stopPropagation() }
        );
  </script>
  @yield('script')
</body>
</html>
