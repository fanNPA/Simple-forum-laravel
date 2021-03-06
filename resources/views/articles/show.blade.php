@extends('layout.master')
@section('title')
{{ $article->title }}
@stop
@section('content')
	<div style="word-wrap: break-word">
		<div class="row">
			<ul class="list-inline">
				<li>
					<span class="glyphicon glyphicon-chevron-left"></span>
					<a href="{{ route('home') }}">Back to home</a>	
				</li>
				@if (Auth::check())
			  	<li>
			  		<a href="{{ route('articles.edit', $article->id) }}" class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect" role="button">Edit</a>
			  	</li>
			  	<li>
			  		{!! Form::open([
			  			'route' => ['articles.destroy', $article->id],
			  			'method' => 'DELETE',
			  		]) !!}
						<button type="submit" class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect">Delete</button>  		
			  		{!! Form::close() !!}
			  	</li>
			  	@endif
			</ul>
		</div>
		<div class="row">
			<h2>{{ $article->title }}</h2>
			<div id="infoPost">
				<ul class="list-inline">
	  				<li>
	  					<span class="glyphicon glyphicon-calendar"></span>
						<a href="">{{ $article->updated_at }}</a>
	  				</li>
	  				<li>|</li>
  					@foreach($article->tag as $b)
	  				<li>
	  					<a href="">{{ $b->tag }}</a>
	  				</li>
	  				@endforeach
				</ul>			
			</div>
			<br>
			<p>{{ $article->content }}</p>
		</div>
	</div>
	<div class="row">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	</div>
@stop