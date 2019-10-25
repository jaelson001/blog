@extends('tema.single')

@section('conteudo')
<div class="row">
	<h1>{{$meuPost[0]->title}}</h1>
</div>
<div class="row">
	<p>
		{{$meuPost[0]->content}}
	</p>
</div>
@endsection