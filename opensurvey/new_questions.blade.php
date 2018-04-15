@extends('layouts.app')

@section('content')
<div class="container-fluid hotquestion-extend">
        <div class="row d-flex">
            <div class="panel panel-success" style="width: 50%">
                <div class="panel-heading">
                    <h3 class="panel-title">Các câu hỏi mới</h3>
                </div>
                <div class="panel-body">
                    <ul id="myList">
                        @foreach($new_questions as $quest)
                        @include('question_display',array('quest'=>$quest))
                        @endforeach

                    </ul>
                    <div id="overlay">
                            <div class="comments">
                              <div class="panel panel-info">
                                <span onclick="document.getElementById('overlay').style.display='none'" class="close" title="Close Overlay">&times;</span>
                                <div class="panel-heading">
                                  <h3 class="panel-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
                                  <div class="star-rating"> 
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                  </div>
                                </div>
                                <div class="panel-body">
                                  <h5>Top Answers</h5>
                                  <ul class="answer-list">
                                    <li>
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                      <p class="source">Answered by <a>Thành</a> on April 14th, 2018</p>
                                    </li>
                                    <li>
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                      <p class="source">Answered by <a>Thành</a> on April 14th, 2018</p>
                                    </li>
                                  </ul>
                                  <form id="answerform" >
                                    <label>Write your answer here: </label>
                                    <textarea id="input" class="form-control" rows="3" required="required" ></textarea>
                                    <button type="button" class="btn btn-primary">Submit</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
