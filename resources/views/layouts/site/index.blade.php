<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('assets/buttons/css/buttons.css') }}">
	<link rel="stylesheet" href="{{ url('assets/font-awesome/css/font-awesome.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ url('assets/perfecticons/perfecticons.css') }}" type="text/css">

	<link rel="stylesheet" type="text/css" href="{{ url('assets/css/index.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('assets/css/paginas.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('assets/css/responsive.css') }}">

	<title>Rolim Net</title>

	<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body id="body" data-spy="scroll" data-target=".header">
	<header class="header navbar-fixed-top">
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="menu-container js_nav-item">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="toggle-icon"></span>
					</button>

					<div class="logo">
						<a class="logo-wrap" href="{{ url('/') }}">
							<img class="logo-img logo-img-main" src="{{ url('assets/img/logo.png') }}" alt="Rolim Net Logo">
							<img class="logo-img logo-img-active" src="{{ url('assets/img/logo-dark.png') }}" alt="Rolim Net Logo">
						</a>
					</div>
				</div>

				<div class="collapse navbar-collapse nav-collapse">
					<div class="menu-container">
						<ul class="nav navbar-nav navbar-nav-right">
							<li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ url('/') }}#body">Inicio</a></li>
							<li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ url('/') }}#empresa">Empresa</a></li>
							<li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ url('/') }}#internet">Internet</a></li>
							<li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ url('/') }}#suporte">Suporte</a></li>
							<li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ url('/') }}#contato">Contato</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</header>

	@yield('content')
	
	<div id="footer">
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 sm-margin-b-40">
						<h2>Rolim Net.</h2>
						<p>Rolim Net Tecnologia LTDA.</p>
						<br>
						<address class="margin-bottom-30px">
							<ul class="list-unstyled">
								<li>Av. Manaus, 5095, Rolim de Moura/RO</li>
								<li>Fone: (69) 3442-2779</li>
								<li>E-mail: geral@rolimnet.com.br</li>
							</ul>
						</address>
					</div>
					<div class="col-sm-4 sm-margin-b-40">
						<h3>Links</h3>
						<div class="row">
							<div class="col-md-6 col-xs-6 md-margin-b-40">
								<ul class="list-unstyled footer-nav">
									<li><a href="{{ url('empresa') }}">Empresa</a></li>
									<li><a href="#">Documentos Publicos</a></li>
									<li><a href="#">FanPage</a></li>
									<li><a href="#">Loja</a></li>
									<li><a href="#">Blog</a></li>
								</ul>
							</div>
							<div class="col-md-6 col-xs-6 md-margin-b-40">
								<ul class="list-unstyled footer-nav">
									<li><a href="#">Perguntas Frequentes</a></li>
									<li><a href="{{ url('produtos') }}">Produtos</a></li>
									<li><a href="{{ url('suporte') }}">Suporte</a></li>
									<li><a href="{{ url('ouvidoria') }}">Ouvidoria</a></li>
									<li><a href="{{ url('contato') }}">Contato</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-2 sm-margin-b-40">
						<div class="social-connect">
							<h3>Você Conectado</h3>
							<ul class="soc">
								<li><a class="soc-facebook" href="#"></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 text-center sm-text-center">
						<div class="copyright">
							<div class="copyright-breather text-center">
								<img src="{{ url('assets/img/logo-dark.png') }}">
								<p>
									Todos os direitos reservados &copy; 2016 NOC | Rolim Net.
								</p>
								<div class="margin-b-0">
									<a href="#"> godoi.xyz</a>, made with <i class="fa fa-heart heart" alt="love"></i> for a better web.
								</div>
							</div>
						</div>
					</div>
					<!--// end row -->
				</div>
			</div>
		</div>
	</div>

	<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

	<script src="{{ url('assets/js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ url('assets/js/jquery.parallax.min.js') }}" type="text/javascript"></script>

	<script src="{{ url('assets/js/index.js') }}" type="text/javascript"></script>

</body>
</html>