<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/buttons/css/buttons.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/perfecticons/perfecticons.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="assets/css/admin.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
        <div class="col-sm-12">
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
                                    <li><a href="{{ route('empresa.index') }}">Empresa</a></li>
                                    <li><a href="#">Documentos Publicos</a></li>
                                    <li><a href="#">FanPage</a></li>
                                    <li><a href="#">Loja</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-xs-6 md-margin-b-40">
                                <ul class="list-unstyled footer-nav">
                                    <li><a href="#">Perguntas Frequentes</a></li>
                                    <li><a href="{{ route('produtos.index') }}">Produtos</a></li>
                                    <li><a href="{{ route('suporte.index') }}">Suporte</a></li>
                                    <li><a href="{{ route('ouvidoria.index') }}">Ouvidoria</a></li>
                                    <li><a href="{{ route('contato.index') }}">Contato</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-40">
                        <div class="social-connect">
                            <h3>Você Conectado</h3>
                            <ul class="soc">
                                <li><a class="soc-facebook" href="http://www.facebook.com/rolimnet"></a></li>
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
        </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
