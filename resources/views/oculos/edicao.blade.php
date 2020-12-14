@extends('templates\template')
		
@section('conteudo_principal')
		<h1>Edição de Livros</h1>

		@if ($errors->any())
		<!-- ERRO NO CADASTRO -->
		<div class="alert alert-danger">
			<strong>Erro!</strong>
			@foreach($errors->all() as $erro)
			<p> {{$erro}}</p>
			@endforeach
		</div>
		<!-- [FIM] ERRO -->
		@endif


		<form action="{{route('oculos.atualizar', ['id' => $oculos['id']])}}" method="post">
			@csrf
			<!-- COD -->
			<div class="form-group">
				<label for="campo-cod">COD:</label>
			<input type="number" class="form-control" name="cod" id="campo-cod" value="{{old('cod', $oculos['cod'])}}">
			</div>
			
			<!-- DESCRICAO -->
			<div class="form-group">
				<label for="campo-descricao">Descricao:</label>
				<input type="text" class="form-control" name="descricao" id="campo-descricao" value="{{old('descricao', $oculos['descricao'])}}">
			</div>
				
			<!-- GRIFE -->
			<div class="form-group">
				<label for="campo-grife">Grife:</label>
				<input type="text" class="form-control" name="grife" id="campo-grife" value="{{old('grife', $oculos['grife'])}}">
			</div>

			<!-- ESTILO -->
			<div class="form-group">
				<label for="campo-estilo">Estilo:</label>
				<select class="form-control" name="estilo" id="campo-estilo">
					<!-- Salva informações fornecidas pelo usuario após ser redirecionado para outra rota/pagina-->
					<option value="1" @if(old('estilo', $oculos['estilo']) == 1) selected="selected" @endif>Quadrado</option>
					<option value="2" @if(old('estilo', $oculos['estilo']) == 2) selected="selected" @endif>Gatinho</option>
					<option value="3" @if(old('estilo', $oculos['estilo']) == 3) selected="selected" @endif>Aviador</option>
					<option value="4" @if(old('estilo', $oculos['estilo']) == 4) selected="selected" @endif>Borboleta</option>
				
				</select>
			</div>
				
	
				
			<button type="submit" class="btn btn-default">Editar</button>				
		</form>
@endsection