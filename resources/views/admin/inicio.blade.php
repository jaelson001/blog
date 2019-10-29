@extends('tema.blog')

@section('conteudo')
<div class="row" style="padding:5% 0px;">
	<a href="{{route('criar')}}" class="btn btn-primary">Nova Postagem</a>
	<h1 style="margin: 20px; 0px;width: 100%;">Painel de controle</h1>
	<table class="table table-striped">
		<thead>
			<th scope="col">Id</th>
			<th scope="col">Slug</th>
			<th scope="col">Título</th>
			<th scope="col">Opções</th>
		</thead>
		<tbody>
			@foreach($postagens as $postagem)
			<tr>
				<th scope="row">{{$postagem->id}}</th>
				<td>{{$postagem->slug}}</td>
				<td>{{$postagem->title}}</td>
				<td style="max-width:150px;" class="">
					<a href="#" class="btn  btn-primary" style="width:150px;"><i class="far fa-edit"></i></a>
					<a href="{{route(excluir)}}" class="btn  btn-danger" style="width:150px;"><i class="far fa-trash-alt"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
</div>
	
@endsection