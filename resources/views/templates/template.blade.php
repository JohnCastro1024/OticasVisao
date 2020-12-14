<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edição de Oculos</title>
	
	<!-- JQUERY -->
	<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>	
	
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<style>
	
	.barramain{
		background:#ed7267!important;

	}
	.botoesmain{
		color:black!important;
	}


	</style>
</head>
<body>

	<!-- BARRA DE NAVEGAÇÃO -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid barramain">
			<ul class="nav navbar-nav">
			
				<!-- SEÇÃO LIVROS -->
				<li class="dropdown active">
					<a class="dropdown-toggle barramain" data-toggle="dropdown" data-target="#" href="#"><span class="botoesmain">Oculos</span><span class="caret botoesmain"></span></a>
					
					<ul class="dropdown-menu">
						<li class="@yield('menu_listar')"><a href="{{route('oculos.listar')}}">Listar</a></li>
						<li class="@yield('menu_cadastrar')"><a href="{{route('oculos.novo')}}">Cadastrar</a></li>
						
					</ul>
					<li><a href="{{route('home')}}"><img src="{{asset('assets/img/home.png')}}"/><span class="botoesmain"><b> Home </b></span></a></li>
				</li> 
			</ul>
			<ul class="nav navbar-nav navbar-right">
				
				<li><a href="{{url('logout')}}"><span class="glyphicon glyphicon-log-in botoesmain"></span><span class="botoesmain"> Logout</span> </a></li>
				
				
			</ul>
		</div>
	</nav><br/><br/>
	<!-- FIM BARRA DE NAVEGAÇÃO -->
	
	<div class="container">
	<!-- CONTEUDO PRINCIPAL [INICIO] Chama a sessão nesse local do template -->
    @yield('conteudo_principal')
    <!-- CONTEUDO PRINCIPAL [FIM] -->
</div>
	
<br/>
</body>
</html>