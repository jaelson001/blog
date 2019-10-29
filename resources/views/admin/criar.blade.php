@extends('tema.blog')


@section('conteudo')
<h1 class="title">Nova Postagem</h1>
<form method="post" action="{{route('salvarpost')}}">
	<div class="form-group" style="padding: 10px;">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input class="form-control" type="text" name="title" title="Título"  placeholder="Título" style=" margin-bottom: 10px;">
		<textarea class="form-control" name="content" title="Conteudo" placeholder="Conteúdo" style=" margin-bottom: 10px; min-height: 60vh;"></textarea>
		<input type="submit" name="cadastrar" class="btn btn-success" value="Publicar">
		<a class="btn btn-danger" href="{{route('admin')}}">Cancelar</a>
	</div>
</form>
@endsection