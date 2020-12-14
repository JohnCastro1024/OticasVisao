<!DOCTYPE HTML>

<html>
	<head>
        
		<title>@yield('titulo')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		
		<!-- JQUERY -->
	<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>	

<!-- BOOTSTRAP -->
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	
		<style>
 
            
 
           .usuario{

				padding: 10px;
                position: absolute; 
                top: 1px; 
                text-align: center;
                display: inherit; 
                font-size: 20px;
                color: #ed7267;
                
                

		   }
 
        
		</style>
		</head>
	
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			
				<section id="header">
				<h2 class='usuario'>Olá, {{session('usuario')}}</h2>
				<a href="{{url('logout')}}" class="sair">Sair</a>
					<div class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="home">ÓTICA VISÃO</a></h1>
							<p>Visando o melhor para você</p>

						<!-- Nav -->
				
							<nav id="nav">
								<!-- Listar -->
								<ul> 
									<li><a href="produtos"><img src="{{asset('assets/img/feminino.png')}}"/><span>Feminino</span></a></li>
									<li><a href="produtos"><img src="{{asset('assets/img/masculino.png')}}"/><span>Masculino</span></a></li>
									<li><a href="produtos"><img src="{{asset('assets/img/gênero.png')}}"/><span>Unisex</span></a></li>
									<li><a href="{{route('oculos.listar')}}"><img src="{{asset('assets/img/lente.png')}}"/><span>Gerenciar</span></a></li>
									<li><a href="lojas"><img src="{{asset('assets/img/empresa.png')}}"/><span>Nossas Lojas</span></a></li>
								</ul>
							</nav>
						

					</div>
                </section>
                
                @yield('conteudo_principal')

                <!-- Footer -->
				<section id="footer">
					<div class="container">
						<header>
							<h2>Sugestões ou comentários? <strong>Entre em Contato:</strong></h2>
						</header>
						<div class="row">
							<div class="col-6 col-12-medium">
								<section>
									<form method="post" action="#">
										<div class="row gtr-50">
											<div class="col-6 col-12-small">
												<input name="nome" placeholder="Seu nome" type="text" />
											</div>
											<div class="col-6 col-12-small">
												<input name="email" placeholder="Email" type="text" />
											</div>
											<div class="col-12">
												<textarea name="mensagem" placeholder="Mensagem"></textarea>
											</div>
											<div class="col-12">
												<a href="#" class="form-button-submit button icon fa-envelope">Enviar Mensagem</a>
											</div>
										</div>
									</form>
								</section>
							</div>
							<div class="col-6 col-12-medium">
								<section>
									<p>Ótica Visão 2019. Todos os direitos reservados
Os preços e promoções são válidas apenas para produtos vendidos pela oticavisao.com.br. Os preços de lojas físicas podem variar. Não fazemos trocas em lojas físicas, apenas pelo atendimento.</p>
									<div class="row">
										<div class="col-6 col-12-small">
											<ul class="icons">
												
												<li class="icon fa-phone">
													(099) 9999-9999
												</li>
												<li class="icon fa-envelope">
													<a href="#">contato@oticavisao.com.br</a>
												</li>
											</ul>
										</div>
										<div class="col-6 col-12-small">
											<ul class="icons">
												
												<li class="icon fa-instagram">
													<a href="#">instagram.com/oticavisao</a>
												</li>
												
												<li class="icon fa-facebook">
													<a href="#">facebook.com/oticavisao</a>
												</li>
											</ul>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="links">
							<li>&copy; Todos os direitos reservados</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</section>
                
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>