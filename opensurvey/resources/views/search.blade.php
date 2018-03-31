@extends('layouts.app')

@section('content')

<div class="container-fluid results">
	<div class="related-words col">
		<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 relate">
			Các câu hỏi có cụm từ liên quan
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 search-icon">
			<img src="./img/search1.png"  width="300" height="250">
			<h3>Search</h3>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="question-list">
		<ul>
			<li>
				<div class="panel-body">
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 question">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<ul id="answers">
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
						</ul>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<button type="button" class="btn btn-primary" onclick="showAnswer()">Answer</button>
					</div>
				</div>
			</li>
			<li>
				<div class="panel-body">
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 question">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<ul id="answers">
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
						</ul>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<button type="button" class="btn btn-primary" onclick="showAnswer()">Answer</button>
					</div>
				</div>
			</li>
			<li>
				<div class="panel-body">
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 question">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<ul id="answers">
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
						</ul>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<button type="button" class="btn btn-primary" onclick="showAnswer()">Answer</button>
					</div>
				</div>
			</li>
			<li>
				<div class="panel-body">
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 question">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<ul id="answers">
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
							<li> It was popularised in the 1960s with the release of Letraset sheets</li>
						</ul>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<button type="button" class="btn btn-primary" onclick="showAnswer()">Answer</button>
					</div>
				</div>
			</li>
		</ul>
		<div class="clearfix"></div>
		<div class="page-number">
			<div class="pagination">
				<a href="#"><i class="fa fa-angle-left"></i></a>
				<a class="active" href="#">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#">6</a>
				<a href="#"><i class="fa fa-angle-right"></i></a>
			</div>
		</div>
	</div>
</div>
@endsection