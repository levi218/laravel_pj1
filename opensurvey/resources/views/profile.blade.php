@extends('layouts.app')

@section('content')
<div class="container-fluid profile-content">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="avatar">
                <img src="./img/avatar.png" width="160" height="160">
            </div>
            <div class="point-profile">
                <h3>Điểm hiện có </h3>
                <p>{{$user->point}}<p>
            </div>
            <div class="extra-info">
                <ul>
                    <li><a>Thông tin khác</a></li>
                    <li><a>Thông tin khác</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
           <div class="user">
                <h2>Profile</h2>
                <a>{{$user->name}}</a>
           </div> 
           <div class="panel panel-info asked">
               <div class="panel-heading">
                   <h3 class="panel-title">Các câu hỏi đã hỏi</h3>
               </div>
               <div class="panel-body">
                   <ul>
                   	@foreach($asked as $quest)
				    @include('question_display',array('quest'=>$quest))
				    @endforeach
                        
                    </ul>
                    <button type="button" class="show-more btn btn-primary">Show more</button>
                    
               </div>
           </div>
        </div>
    </div>
    

</div>

<!--div class="container pb-5" style="background: #d1d1d2;">
	<div class="row py-4">
		<div class="col-3 offset-1 d-flex flex-column" style="z-index: 1;">
			<div class="py-5">
				<div class="image" style="box-shadow: -10px 10px grey; background: #FFFFFF; border: 10px solid #92cdcf;">
					<img src="images/20170709_184439.jpg"/>
				</div>
			</div>
			<div class="text-center py-4 mt-4" style="border: 1px solid black;">
				<h3>Điểm hiện có</h3>
				<h3>{{$user->point}}</h3>
			</div>
		</div>
		<div class="col-7 d-flex flex-column">
			<div class="pt-5 pb-3">
				<h2 class="display-4 text-uppercase">PROFILE</h2>
				<h1 class="font-weight-light">{{$user->name}}</h1>
			</div>
			<div style="border: 2px solid #92cdcf; position: relative; left: -20%; top:4px;"></div>
			<div class="d-flex justify-content-center flex-column p-3 h-100 ml-5 nav nav-tabs" style="border: 4px solid #92cdcf;" role="tablist">
				<a class="p-3 text-dark btn-complex my-1 tab_link" style="background: #AAAAAA;" data-toggle="tab" href="#tab_asked"  role="tab">&nbsp;
					<div class="bg-hover-move-in p-2" style="border-top: 100px solid #d1d1d2; border-left: 160px solid transparent;">
					</div>
					<div class="text p-2 ml-2 font-weight-light" style="position: absolute; top:0; left: 0; font-size: 25px;">
						Các câu hỏi đã hỏi
					</div>
					<small class="float-right">Xem thêm</small>
				</a>
				<h2 style="background: #92cdcf;" class="text-center font-weight-light">{{count($asked)}} câu</h2>
				<a class="p-3 text-dark btn-complex my-1 tab_link" style="background: #AAAAAA;" data-toggle="tab" href="#tab_answered"  role="tab">&nbsp;
					<div class="bg-hover-move-in p-2" style="border-top: 100px solid #d1d1d2; border-left: 160px solid transparent;">
					</div>
					<div class="text p-2 ml-2 font-weight-light" style="position: absolute; top:0; left: 0; font-size: 25px;">
						Các câu hỏi đã trả lời 
					</div>
					<small class="float-right">Xem thêm</small>
				</a>
				<h2 style="background: #92cdcf;" class="text-center font-weight-light">{{count($answered)}} câu</h2>
			</div>
		</div>
	</div>
	<div class="row py-4">
		<div class="tab-content col">
			<div id="tab_asked" class="tab-pane fade" role="tabpanel">
				<div class="container" style="background: #d1d1d2;">
				    <div class="row p-2">
				        <div class="col">
				            <p class="h4 text-uppercase font-weight-bold">Những câu hỏi đã hỏi</p>
				        </div>
				    </div>
				    @foreach($asked as $quest)
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
			</div>
			<div id="tab_answered" class="tab-pane fade" role="tabpanel">
				<div class="container" style="background: #d1d1d2;">
				    <div class="row p-2">
				        <div class="col">
				            <p class="h4 text-uppercase font-weight-bold">Những câu hỏi đã trả lời</p>
				        </div>
				    </div>
				    @foreach($answered as $quest)
				    <div class="row p-2 border border-secondary">
				        <div class="col">
				            <div class="btn_show_overlay question btn-complex">
				                <div class="bg-hover-opacity" style="background: #000"></div>
				                <span class="question-id d-none">{{$quest->id}}</span>
				                <div class="clearfix text">
					                <div style="overflow-wrap: break-word;" class="float:left w-75 pr-2 d-inline-block">{{$quest->question}}</div>
					                <div class="float-right w-25 pl-2 d-inline-block">Trả lời: {{$quest->answer}}</div>
					            </div>
				            </div>
				        </div>
				    </div>
				    @endforeach
				</div>
			</div>
		</div>
	</div>
</div-->

@endsection