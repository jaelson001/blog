
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
	<div class="header">
		<nav class="navbar navbar-light bg-light">
			<a class="navbar-brand" href="#">
			    <img src="https://getbootstrap.com.br/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="Logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item"><a href="/" class="nav-link">Início</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Contato</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Trabalhe conosco</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="container">
		@yield('sidebar')
		@yield('conteudo')
	</div>

</body>
<footer class="footer" style="position: absolute;bottom:0;padding:10px;">
	<center>
		<h6>Blog Laravel | Todos os direitos reservados</h6>
	</center>
</footer>
</html>