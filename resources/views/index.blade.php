@extends('tema.blog')

@section('header')
@parent
@stop

@section('conteudo')
<section>
	<h1 class="title">Blog Laravel</h1>
	<div class="row">
		@foreach($postagens as $post)
		<div class="col-sm-12 col-md-4">
			<div class="card" style="width: 100%;">
			  <div class="card-body">
			    <h5 class="card-title">{{$post->title}}</h5>
			    <p class="card-text">{{$post->content}}</p>
			    <a href="/post/{{$post->slug}}" class="btn btn-primary">Visitar</a>
			  </div>
			</div>
		</div>
		@endforeach
	</div>
</section>
@endsection