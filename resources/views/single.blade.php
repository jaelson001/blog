@extends('tema.blog')

@section('conteudo')
<h1>{{$meuPost[0]->title}}</h1>
<p>
	{{$meuPost[0]->content}}
</p>
@endsection