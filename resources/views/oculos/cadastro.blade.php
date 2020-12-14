@extends('templates\template') <!-- herda o template da pagina -->

@section('menu_cadastrar', 'active') <!-- cria uma sessão do menu cadastrar-->




@section('conteudo_principal') <!-- Cria uma sessão do conteudo princial que será chamado no template-->
		<h1>Cadastro de Oculos</h1>
		<h2>Olá, {{session('usuario')}}</h2>

		@if ($errors->any())
	
		<!-- ERRO NO CADASTRO (caso encontrar algum tipo de erro, exibir mensagem)-->
		<div class="alert alert-danger">
			<strong>Erro!</strong>
			@foreach($errors->all() as $erro)
			<p> {{$erro}}</p>
			@endforeach
		</div>
		<!-- [FIM] ERRO -->
		@endif
			<!--envia dados para a rota via post -->
		<form action="{{route('oculos.salvar')}}" method="post">
			@csrf

			<!-- COD -->
			<div class="form-group">
				<!-- input name recebe a variavel a qual vai ser validada no controller -->
				<label for="campo-cod">COD:</label>
				<input type="number" class="form-control" name="cod" id="campo-cod">
			</div>
			
			<!-- DESCRICAO -->
			<div class="form-group">
				<label for="campo-descricao">Descricao:</label>
				<input type="text" class="form-control" name="descricao" id="campo-descricao">
			</div>
				
			<!-- GRIFE -->
			<div class="form-group">
				<label for="campo-grife">Grife:</label>
				<input type="text" class="form-control" name="grife" id="campo-grife">
			</div>

			<!-- ESTILO -->
			<div class="form-group">
				<label for="campo-estilo">Estilo:</label>
				<select class="form-control" name="estilo" id="campo-estilo">
					<option value="1">Quadrado</option>
					<option value="2">Gatinho</option>
					<option value="3">Aviador</option>
					<option value="4">Borboleta</option>
				
				</select>
			</div>
				
	
				
			<button type="submit" class="btn btn-default">Cadastrar</button>				
		</form>
@endsection