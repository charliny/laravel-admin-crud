<!DOCTYPE html>
<html>
<head>
	<title>Painel de Vendas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="row">	
			
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  		<a class="navbar-brand" href="{{route('home')}}">Painel de Vendas</a>
		  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    		<span class="navbar-toggler-icon"></span>
		  		</button>

			  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  		<ul class="navbar-nav mr-auto">
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{route('cadastramento')}}">Cadastro</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{route('listar_usuarios')}}">Lista</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{route('vender')}}">Vender</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{route('historico')}}">Histórico</a>
			      		</li>
			    	</ul>
			 	</div>
			</nav>
		</div>

		<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8 mt-3">@yield('page')</div>
				<div class="col-md-2"></div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>