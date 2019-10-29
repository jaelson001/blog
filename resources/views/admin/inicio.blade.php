@extends('tema.blog')

@section('conteudo')
<div class="row" style="padding:5% 0px;">
	<a href="{{route('criar')}}" class="btn btn-primary">Nova Postagem</a>
	<h1 style="margin: 20px; 0px;width: 100%;">Painel de controle</h1>
	<table class="table table-striped">
		<thead>
			<th scope="col">Id</th>
			<th scope="col">Título</th>
			<th scope="col">Slug</th>
			<th scope="col">Opções</th>
		</thead>
		<tbody>
			@foreach($postagens as $postagem)
			<tr>
				<th scope="row">{{$postagem->id}}</th>
				<td>{{$postagem->title}}</td>
				<td>{{$postagem->slug}}</td>
				<td style="max-width:150px;" class="">
					<a href="{{route('editar', $postagem->slug)}}" class="btn  btn-primary" style="width:150px;"><i class="far fa-edit"></i></a>
					
					<form action="{{route('destroy')}}"  style="width:150px;float:right;" method="post">
						@csrf
						<input type="hidden" name="slug" value="{{$postagem->slug}}">
						<button type="submit" name="deletar" class="btn  btn-danger" style="width:150px;"><i class="far fa-trash-alt"></i></button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
</div>
	
@endsection