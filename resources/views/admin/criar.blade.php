@extends('tema.blog')


@section('conteudo')
<h1 class="title">Nova Postagem</h1>
@if(isset($postagem))
<form method="post" action="{{route('atualisar')}}">
@else
<form method="post" action="{{route('salvarpost')}}">
@endif
	<div class="form-group" style="padding: 10px;">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		@if(isset($postagem))
			<input type="hidden" name="id" value="{{$postagem->id}}">
		@endif
		<input class="form-control" type="text" name="title" title="Título"  placeholder="Título" style=" margin-bottom: 10px;" max="50" pattern=".{6,}" required="true" value="@if(isset($postagem)){{$postagem->title}}@endif">
		<textarea class="form-control" name="content" title="Conteudo" placeholder="Conteúdo" style=" margin-bottom: 10px; min-height: 60vh;" required="true">@if(isset($postagem)){{$postagem->content}}@endif</textarea>
		<input type="submit" name="cadastrar" class="btn btn-success" value="Publicar">
		<a class="btn btn-danger" href="{{route('admin')}}">Cancelar</a>
	</div>
</form>
@endsection