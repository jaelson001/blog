@extends('tema.blog')

@section('conteudo')
	<div class="card">
        <div class="card-header">Login | Blog Laravel</div>
        <div class="card-body">
	<form class="form" method="POST" action="{{route('login')}}">
		@csrf
		<div class="mb-3">
			<label class="form-label">Email</label>
			<input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email">
			@error('email')
			<div class="invalid-feedback" role="alert">
			  {{$message}}
			</div>
			@enderror
		</div>
		<div class="mb-3">
			<label class="form-label">Senha</label>
			<input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Senha">
			@error('password')
			<div class="invalid-feedback " role="alert">
			  {{$message}}
			</div>
			@enderror
		</div>
		<div class="mb-3">
			<input class="btn btn-primary" type="submit" name="Entrar">	
		</div>
	</form>
</div>
</div>
@endsection