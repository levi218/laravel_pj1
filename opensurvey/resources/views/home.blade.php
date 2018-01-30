@extends('layouts.app')

@section('content')

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
        <div class="container h-100">
          <div class="row h-50">
            <div class="col-7 py-2 btn_show_overlay question btn-complex"  style="border-right: 3px solid #92cdcf;">
                <div class="bg-hover-opacity" style="background: #000"></div>
                <span class="question-id d-none">{{$hot_questions[0]->id}}</span>
                <p class="h4 text text-uppercase font-weight-normal">{{$hot_questions[0]->question}}</p>
            </div>
            <div class="col py-2 btn_show_overlay question btn-complex">
                <div class="bg-hover-opacity" style="background: #000"></div>
                <span class="question-id d-none">{{$hot_questions[1]->id}}</span>
                <p class="h6 text font-weight-normal">{{$hot_questions[1]->question}}</p>
            </div>
          </div>
          <div class="row border border-dark" style="height: 0"></div>
          <div class="row h-50">
            <div class="col-7 py-2 btn_show_overlay question btn-complex" style="border-right: 3px solid #92cdcf;">
                <div class="bg-hover-opacity" style="background: #000"></div>
                <span class="question-id d-none">{{$hot_questions[2]->id}}</span>
                <span class="h4 text text-uppercase font-weight-light">{{$hot_questions[2]->question}}</span>
            </div>
            <div class="col py-2 btn_show_overlay question btn-complex">
                <div class="bg-hover-opacity" style="background: #000"></div>
                <span class="question-id d-none">{{$hot_questions[3]->id}}</span>
                <p class="h6 text font-weight-bold">{{$hot_questions[3]->question}}</p>
            </div>
          </div>
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
        <div class="col">
            <p class="h4 text-uppercase font-weight-bold">... có thể bạn quan tâm</p>
        </div>
    </div>
    @foreach($rand_questions as $quest)
    <div class="row p-2 border border-secondary">
        <div class="col">
            <div class="btn_show_overlay question btn-complex">
                <div class="bg-hover-opacity" style="background: #000"></div>
                <span class="question-id d-none">{{$quest->id}}</span>
                <p class="text">{{$quest->question}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
@section('script')
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


<!--
<script>

    $form_expanded = false;
    function addAnswer() {

    $('#grid_new_question').children().last().before("<div class='row'><div class='cell'><label>Answer</label><div class='input-control text full-size'><input type='text' name='answers[]'/></div></div></div>");
    $("#form_new_question").css({height: 'auto'});
    }
    ;
    $(document).ready(function () {
    $height = $("#form_new_question").height() - 80;
    $("#form_new_question").css({height: '-=' + $height + 'px'});
    $("#expand_form_new_question").css({top: '-=' + ($height - 9) + 'px'});
    $('#expand_form_new_question').click(function () {
    $form_expanded = !$form_expanded;
    if ($form_expanded) {

    $("#form_new_question").animate({height: '+=' + $height + 'px'}, 500);
    $("#expand_form_new_question").animate({top: '+=' + ($height - 9) + 'px'}, 500);
    $("#form_new_question_trigger_icon").toggleClass('mif-expand-less');
    $("#form_new_question_trigger_icon").toggleClass('mif-expand-more');
    } else {
    $height = $("#form_new_question").height() - 80;
    $("#form_new_question").animate({height: '-=' + $height + 'px'}, 500);
    $("#expand_form_new_question").animate({top: '-=' + ($height - 9) + 'px'}, 500);
    $("#form_new_question_trigger_icon").toggleClass('mif-expand-less');
    $("#form_new_question_trigger_icon").toggleClass('mif-expand-more');
    }
    });
    });</script>
<div id="form_new_question" class="fixed-top" style="overflow: hidden; z-index: 22">
    <div class="grid bg-white">
        <div class="row">
            <div class="cell padding20"></div>
        </div>
        <div class="row cells9">
            <div class="cell colspan5 offset2">
                <form action="{{ route('questions.store')}}" method="post">
                    {{ csrf_field() }}
                    <div class="grid" id="grid_new_question">
                        <div class="row">
                            <div class="cell">
                                <label>Question</label>
                                <div class="input-control text full-size">
                                    <input type="text" name="question" placeholder="Which game do you prefer?"/>
                                </div>
                            </div>
                        </div>
                        <div class="row cells5">
                            <div class="cell offset4">
                                <input class="full-size" type="button" value="Add Answer" onclick="addAnswer()">
                            </div>
                        </div>
                        <div class="row">
                            <div class="cell">
                                <label>Answer</label>
                                <div class="input-control text full-size">
                                    <input type="text" name='answers[]'/>
                                </div>
                            </div>
                        </div>
                        <div class="row cells5">
                            <div class="cell offset4">
                                <input class="full-size" type="submit" value="Ask the world!">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row" id="expand_form_new_question" style="position: relative;">
            <a class="full-size" >
                <div class="cell bg-red align-center fg-white">
                    <span id="form_new_question_trigger_icon" class="mif-expand-more mif-2x"></span>
                </div>
            </a>

        </div>
    </div>
</div>
-->
@endsection
