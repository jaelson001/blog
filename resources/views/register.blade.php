@extends('tema.blog')

@section('conteudo')
	<div class="card">
        <div class="card-header">Login | Blog Laravel</div>
        <div class="card-body">
	<form class="form" method="POST" action="{{route('register')}}">
		@csrf
		<div class="mb-3">
			<label class="form-label">Nome</label>
			<input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Nome" required>
			@error('name')
			<div class="invalid-feedback" role="alert">
			  {{$message}}
			</div>
			@enderror
		</div>
		<div class="mb-3">
			<label class="form-label">Email</label>
			<input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" required>
			@error('email')
			<div class="invalid-feedback" role="alert">
			  {{$message}}
			</div>
			@enderror
		</div>
		<div class="mb-3">
			<label class="form-label">Senha</label>
			<input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Senha" required>
			@error('password')
			<div class="invalid-feedback " role="alert">
			  {{$message}}
			</div>
			@enderror
		</div>
		<div class="mb-3">
			<label class="form-label">Senha</label>
			<input class="form-control @error('password') is-invalid @enderror" type="password" name="confirm_password" placeholder="Confirmar senha" required>
		</div>
		<div class="mb-3">
			<input class="btn btn-primary" type="submit" name="Entrar" value="Registrar">	
		</div>
	</form>
</div>
</div>
@endsection