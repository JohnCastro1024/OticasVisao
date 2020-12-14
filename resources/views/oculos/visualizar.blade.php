@extends('templates\template')

@section('conteudo_principal')
<h2>Olá, {{session('usuario')}}</h2>
	<div class="jumbotron">

		<!-- DESCRICAO -->
		<div class="page-header">
			<h1>{{$oculos['descricao']}}</h1>
			<span class="label label-primary">{{$oculos['grife']}}</span>
			<span class="label label-default">Aviador</span>
		</div>

@endsection