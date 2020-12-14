@extends('templates\template')

@section('menu_listar', 'active')

@section('conteudo_principal')
	<h1>Oculos</h1>
	<h2>Olá, {{session('usuario')}}</h2>
		@if(session('acao'))
			<p class="alert alert-success">{{session('acao')}}</p>
		@endif
			<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>COD</th>
			        <th>Descricao</th>
			        <th>Grife</th>
			        <th width="10%">Opções</th>
			      </tr>
			    </thead>
			    <!-- DADOS -->
			    <tbody>
					@foreach ($oculos as $oculos)
					<tr>
						<!-- Cria uma tabela que busca dados dos controllers e imprime -->
						<td>{{$oculos['cod']}}</td>
						<td>{{$oculos['descricao']}}</td>
						<td>{{$oculos['grife']}}</td>
						<td>
							<a href="{{route('oculos.visualizar', ['id' => $oculos['id']])}}">Visualizar</a>
							<a href="{{route('oculos.editar', ['id' => $oculos['id']])}}">Editar</a>
							<a href="{{route('oculos.excluir', ['id' => $oculos['id']])}}">Excluir</a>
						</td>
					</tr>	
					@endforeach	 
			    </tbody>
			    <!-- DADOS [FIM] -->
			</table>
	</div>
</body>
</html>
@endsection