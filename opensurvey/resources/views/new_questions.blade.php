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
                </div>
            </div>
        </div>
    </div>
@endsection
