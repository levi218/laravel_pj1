@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="main-function">
            <img alt="image" src="./img/ocean.jpg" class="bg-image opacity-40">
            <div class="question-form">
                    <form action="" method="" role="form">
                        <div class="input-question">
                            <label style="font-size: 28px">Câu hỏi hôm nay của bạn là gì?</label>
                            <input type="text" class="form-control" id="" placeholder="Question?">
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                    </form>
            </div>
        </div>
    </div>

    <div class="container-fluid bc-grey">
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 hot-question">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Các câu hỏi hot</h3>
                </div>
                <div class="panel-body">
                    <ul id="myList">
                        @foreach($new_questions as $quest)
                        @include('question_display',array('quest'=>$quest))
                        @endforeach 
                    </ul>
                        <div id="overlay" onclick="off()">
                            <div id="rating">
                                <span class="heading">User Rating</span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <p>4.1 average based on 254 reviews.</p>
                                <hr style="border:3px solid #f1f1f1">

                                <div class="row">
                                  <div class="side">
                                    <div class="number">5 star</div>
                                  </div>
                                  <div class="middle">
                                    <div class="bar-container">
                                      <div class="bar-5"></div>
                                    </div>
                                  </div>
                                  <div class="side right">
                                    <div class="number">150</div>
                                  </div>
                                  <div class="side">
                                    <div class="number">4 star</div>
                                  </div>
                                  <div class="middle">
                                    <div class="bar-container">
                                      <div class="bar-4"></div>
                                    </div>
                                  </div>
                                  <div class="side right">
                                    <div class="number">63</div>
                                  </div>
                                  <div class="side">
                                    <div class="number">3 star</div>
                                  </div>
                                  <div class="middle">
                                    <div class="bar-container">
                                      <div class="bar-3"></div>
                                    </div>
                                  </div>
                                  <div class="side right">
                                    <div class="number">15</div>
                                  </div>
                                  <div class="side">
                                    <div class="number">2 star</div>
                                  </div>
                                  <div class="middle">
                                    <div class="bar-container">
                                      <div class="bar-2"></div>
                                    </div>
                                  </div>
                                  <div class="side right">
                                    <div class="number">6</div>
                                  </div>
                                  <div class="side">
                                    <div class="number">1 star</div>
                                  </div>
                                  <div class="middle">
                                    <div class="bar-container">
                                      <div class="bar-1"></div>
                                    </div>
                                  </div>
                                  <div class="side right">
                                    <div class="number">20</div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    <button type="button" class="show-more btn btn-primary"><a href="hotquestion.html">Show more</a></button>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 new-question">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Các câu hỏi mới</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        @foreach($hot_questions as $quest)
                        @include('question_display',array('quest'=>$quest))
                        @endforeach 
                    </ul>
                    <!-- TODO: add routes newquestion and hotquestion -->
                    <button type="button" class="show-more btn btn-primary"><a href="newquestion.html">Show more</a></button>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 advertise">
            
        </div>
    </div>
<!--
<div>
  <div class="container" style="background: #435878">
    <div class="row align-items-center">
      <div class="col-sm-2 align-middle"> <a class="d-inline-block my-2 ml-5"><img src="images/HAJIME.png"/></a>
        <div class="clearfix"></div>
        <a class="d-inline-block my-2 ml-5"><img src="images/search.png"/></a>
        <div class="clearfix"></div>
        <a class="d-inline-block my-2 ml-5"><img src="images/ìnor.png"/></a> </div>
      <div class="col-md-10">
        <div id="myCarousel" class="carousel slide bg-inverse w-100 ml-auto mr-auto" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"> <img class="d-block w-100" src="images/1.jpg" alt="First slide"/> </div>
            <div class="carousel-item"> <img class="d-block w-100" src="images/2.jpg" alt="Second slide"/> </div>
            <div class="carousel-item"> <img class="d-block w-100" src="images/3.jpg" alt="Third slide"/> </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
      </div>
    </div>
  </div>
</div>
<div>
  <div class="container pb-5" style="background: #d1d1d2;">
    <div class="row py-4">
      <div class="col p-5">
        <p class="h3 text-uppercase font-weight-bold">CÁC CÂU HỎI HOT</p>
        <div class="d-flex flex-column">
            foreach($hot_questions as $quest)
            include('question_display',array('quest'=>$quest))
            endforeach 
        </div>
      </div>
      <div class="col p-4 mt-4 mr-5 pb-5 text-white" style="background: #92cdcf">
        <p class="h4 text-uppercase font-weight-bold">Các câu hỏi mới</p>
        <div class="py-1 btn_show_overlay question btn-complex">
            <div class="bg-hover-opacity" style="background: #000"></div>
            <span class="question-id d-none">{{$new_questions[0]->id}}</span>
            <p class="px-2 lead text">{{$new_questions[0]->question}}</p>
        </div>
        <div class="py-1 btn_show_overlay question btn-complex">
            <div class="bg-hover-opacity" style="background: #000"></div>
            <span class="question-id d-none">{{$new_questions[1]->id}}</span>
            <p class="px-2 lead text">{{$new_questions[1]->question}}</p>
        </div>
        <div class="py-1 btn_show_overlay question btn-complex">
            <div class="bg-hover-opacity" style="background: #000"></div>
            <span class="question-id d-none">{{$new_questions[2]->id}}</span>
            <p class="px-2 lead text">{{$new_questions[2]->question}}</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container" style="background: #d1d1d2;">
    <div class="row p-2">
        <div class="col-7" style="border-right: 2px dashed grey;">

            <p class="h4 text-uppercase font-weight-bold">... có thể bạn quan tâm</p>
            <div class="d-flex flex-column">
                foreach($rand_questions as $quest)
                
                include('question_display',array('quest'=>$quest))
                endforeach
            </div>
        </div>
        <div class="col">
            
            <p class="h4 text-uppercase font-weight-bold">Tin tức</p>
            <div class="d-flex flex-column align-items-stretch">
                <div class="btn_show_overlay news btn-complex p-2 border border-secondary">
                    <div class="bg-hover-opacity" style="background: #000"></div>
                    <span class="news-id d-none"></span>
                    <p class="text">a</p>
                </div>    
                <div class="btn_show_overlay news btn-complex p-2 border border-secondary">
                    <div class="bg-hover-opacity" style="background: #000"></div>
                    <span class="news-id d-none"></span>
                    <p class="text">a</p>
                </div>   
            </div>
        </div>
    </div>
</div>
endsection
section('script')
<script type="text/javascript">
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
        return false;
    };
    $(document).ready(function() {
        var quest_id = getUrlParameter('question_id');
        if(quest_id>0){
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
        }
    });
</script>

-->
@endsection
