<!DOCTYPE HTML>

<html>
	<head>
<meta charset="utf-8" />
		<title>Oticas Visao</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>	

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  

    <style>     
            #formulario {
                border: black 3px solid;
                border-radius: 20px;
                padding: 100px;
                color: black;
                

            }

            
            h2 {
              font-size: 35px;
              text-align: center;
            }

            
            .imagem {
                
                float: left;
                width: 100%;
                height: 145px;
                margin-right: 30px;
                margin-bottom: 20px;
            }
            </style>
            </head>
	
<body>

  <img class="imagem" src="https://rictvibope.files.wordpress.com/2012/07/crbst_cabecalho_20vermelho1.jpg"/>

  <img style="position: absolute; top: 20px; left: 20px;" src="http://expressaoararas.com.br/imagens/produtos/779/Otica%20Vis%C3%A3o%20-%20logo.jpg"/ width="200px" height="100px">
      <br>
      <h2>Visando o melhor para você</h2>
      <br>
      @if (session('erro'))
			<!-- LOGIN ou SENHA INCORRETA -->
			<div class="alert alert-danger">
				<strong>Erro!</strong> {{session('erro')}}
			</div>
			<!-- FIM [LOGIN OU SENHA INCORRETA] -->
			@endif

      <form action="{{url('logar')}}" method="post">
      {{ csrf_field() }}

      <fieldset id="formulario">
      <legend>LOGIN:</legend>

<label>Nome:</label><input type="email" name="email"/>
<label>Senha:</label><input type="password" name="senha">
<br>
<input type="submit" value="Enviar"/>
</fieldset>
</form>


 <!-- CONTEUDO -->
<table width="100%" bgcolor="#D3D3D3">

   <tr>
     <td width="8%"></td>
     <td> 
      
        <p></p>
        <ul> 
          <h1> <b>COMPRE ONLINE:</b></h1>
            <li>ÓCULOS DE SOL</li>
            <li>ÓCULOS DE GRAU </li>
            <li>OUTLET</li>
            <li>MEUS PEDIDOS</li>
            
       </ul>
     </td>
     
     <td> 
      
        
        <ul> 
          <h1> <b>INSTITUCIONAL:</b></h1>
            <li>SOBRE A ÓTICA VISÃOL</li>
            <li>MAPA DO SITE </li>
            <li>PERGUNTAS FREQUENTES</li>
            
            
       </ul>
     </td>

     <td> 
      
        
        <ul> 
          <h1> <b>INFORMAÇÕES:</b></h1>
            <li>TERMOS DE USO</li>
            <li>SEGURANÇA E PRIVACIDADE</li>
            <li>FORMAS DE PAGAMENTO</li>
            <li>COMPRA E ENTREGA</li>
            
       </ul>
     </td>

   </tr>

</table>
</body>


</html>