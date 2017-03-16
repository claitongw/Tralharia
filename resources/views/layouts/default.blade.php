<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tralharia - @yield('title')</title>
        <link rel="shortcut icon" href="/img/t.jpg" >
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
       


        <!-- Styles -->
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
        </style>
    </head>
<body style="background-color:#ffffff;">
    <div class="jumbotron texto_grande">
    	<a href="../" class="link-title">Tralharia
    	<h4>--suaBagunçaOrganizada--</h4>
    	</a>
    </div>


    <div class="breadcrumb">
    	<h7>Versão 1.0</h7>
    </div>
    <div class="container">
	    <div class="row">
	    	<div class="div_left col-xs-3">
                <li><b>Cadastrar/Excluir</b>
                    <ul>
                        <li>Marca</li>
                        <li>Categoria</li>
                        <li>Promoção</li>
                        <li>Objeto</li>
                    </ul>
                </li>
                <li><b>Pesquisar</b>
                    <ul>
                        <li>Marca</li>
                        <li>Categoria</li>
                        <li>Promoção</li>
                        <li>Objeto</li>
                    </ul>
                </li>
                <li><b>Listar Cadastrados</b>
                    <ul>
                        <li><a href="/marca">Marca</a></li>
                        <li><a href="/categoria">Categoria</a></li>
                        <li><a href="/promocao">Promoção</a></li>
                        <li>Objeto</li>
                    </ul>
                </li>
        	</div><!--fim div left-->
        	<div class="div_center col-xs-7">
        		@yield('content')
        	</div><!--fim div center-->


	    </div><!-- fim row-->
        
    </div><!--fim container -->
    <div class=footer>
    	Developed by Claiton Watthier	
    </div>

</body>
</html>
