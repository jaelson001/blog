@extends('tema.single')

@section('conteudo')
<article>
	<div class="row">
		<div class="col-sm-12">
			<h1>{{$meuPost[0]->title}}</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">	
			<p>
				{{$meuPost[0]->content}}
			</p>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<a href="/" class="btn btn-primary">Voltar</a>
		</div>
	</div>	
</article>

@endsection