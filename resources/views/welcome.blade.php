<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/buttons/css/buttons.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/perfecticons/perfecticons.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

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
                        <a class="logo-wrap" href="#body">
                            <img class="logo-img logo-img-main" src="assets/img/logo.png" alt="Rolim Net Logo">
                            <img class="logo-img logo-img-active" src="assets/img/logo-dark.png" alt="Rolim Net Logo">
                        </a>
                    </div>
                </div>

                <div class="collapse navbar-collapse nav-collapse">
                    <div class="menu-container">
                        <ul class="nav navbar-nav navbar-nav-right">
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="#body">Inicio</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="#empresa">Empresa</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('produtos.index') }}">Produtos</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="#internet">Internet</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="#suporte">Suporte</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="#contato">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="banner-index" data-parallax="scroll" data-image-src="assets/img/1920x1080/04.jpg">
        <div class="container content-sm">
            <div class="row">
                <div class="col-sm-6">
                <div class="logo-rolimnet-fibra pull-right">
                        <img class="img-responsive" src="assets/img/logo-rolimnet-fibra.png">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#bs-carousel" data-slide-to="1"></li>
                            <li data-target="#bs-carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item slides active">
                                <div class="slide-1"></div>
                                <div class="planos">
                                    <h2 class="banner-index-planos">3mega DE INTERNET</h2>
                                    <h2 class="banner-index-velocidade">3072k/1024k</h2>
                                    <p class="banner-index-down-up">down/up</p>

                                    <ul class="text">
                                        <li class="color-white" >Sem limite de navegação</li>
                                        <li class="color-white" >Cobertura fibra óptica</li>
                                    </ul>
                                    <hr>
                                    <h1><span>R$</span> 99,00</h1>
                                    <button type="button" class="btn btn-lg btn-warning raised">Assine já</button>
                                    <p><a href="#">Conheça outros planos</a></p>
                                </div>
                            </div>
                            <div class="item slides">
                                <div class="slide-2"></div>
                                <div class="planos">
                                    <h2 class="banner-index-planos">3mega DE INTERNET</h2>
                                    <h2 class="banner-index-velocidade">3072k/1024k</h2>
                                    <p class="banner-index-down-up">down/up</p>

                                    <ul class="text">
                                        <li class="color-white" >Sem limite de navegação</li>
                                        <li class="color-white" >Cobertura fibra óptica</li>
                                    </ul>
                                    <hr>
                                    <h1><span>R$</span> 99,00</h1>
                                    <button type="button" class="btn btn-lg btn-warning raised">Assine já</button>
                                    <p><a href="#">Conheça outros planos</a></p>
                                </div>
                            </div>
                            <div class="item slides">
                                <div class="slide-3"></div>
                                <div class="planos">
                                    <h2 class="banner-index-planos">3mega DE INTERNET</h2>
                                    <h2 class="banner-index-velocidade">3072k/1024k</h2>
                                    <p class="banner-index-down-up">down/up</p>

                                    <ul class="text">
                                        <li class="color-white" >Sem limite de navegação</li>
                                        <li class="color-white" >Cobertura fibra óptica</li>
                                    </ul>
                                    <hr>
                                    <h1><span>R$</span> 99,00</h1>
                                    <button type="button" class="btn btn-lg btn-warning raised">Assine já</button>
                                    <p><a href="#">Conheça outros planos</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>

    <div id="empresa">
        <div class="container content-sm">
            <div class="row">
                <div class="col-sm-4 col-lg-offset-1">
                    <div class="text-center sm-text-left">
                        <h1 class="color-blue margin-b-0">Bem-Vindo!</h1>
                        <p>A Rolim Net surgiu no ano de 2008, hoje tem presença em mais de 10 cidades e várias Linhas na Zona da Mata. A Rolim Net é ganhadora do Troféu ACIRM dos anos de 2010, 2012, 2013, 2014 e 2015.</p>
                        <p class="text-right"><a href="{{ route('empresa.index') }}" class="color-blue">...mais sobre a empresa</a></p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="empresa-img text-right">
                        <img class="full-width img-responsive familia-img" src="assets/img/bg-familia-rolimnet-2016.jpg">
                    </div>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>

    <div id="centraldocliente">
        <div class="bg-color-blue" data-auto-height="true">
            <div class="container content">
                <div class="row">
                    <div class="col-sm-8">
                        <a href="#" class="btn btn-default sharp">Acessar o FAQ</a>
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="color-white">Perguntas Frequentes</h4>
                                <ul class="centraldocliente">
                                    <li><a class="color-white" href="#">Solicitar a 2º via da Fatura.</a></li>
                                    <li><a class="color-white"href="#">Não recebi a fatura/carne para pagamento. O que devo fazer?</a></li>
                                    <li><a class="color-white" href="#">Como cancelar minha assinatura.</a></li>
                                </ul>
                            </div>
                            <!--// end row -->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-right sm-text-left">
                            <h2 class="content-heading color-white">Central do Cliente <span class="border text-right"></span></h2>
                            
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="#" class="btn btn-lg btn-default raised">Acessar Central</a>
                                </div>
                                <!--// end row -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
    </div>

    <div id="internet">
        <div class="container content-sm">
            <div class="row">
                <div class="col-sm-4">
                    <h2 class="content-heading">Internet <span class="border-black"></span></h2>
                </div>
                <div class="col-sm-12">
                    <p>A Rolim Net tem os melhores planos para você aproveitar e se divertir navegando na internet, a qualquer momento, com a melhor conexão possível.</p>
                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li class="active"><a href="#red" data-toggle="tab">Urbano</a></li>
                        <li><a href="#orange" data-toggle="tab">Rural</a></li>
                        <li><a href="#yellow" data-toggle="tab">Fibra</a></li>
                    </ul>
                    <div id="my-tab-content" class="tab-content">
                        <div class="tab-pane active" id="red">
                            <div class="row">
                                <div class="internet">
                                    <div class="col-sm-4">
                                        <h2>Escolha o plano ideal para o seu você.</h2>
                                        <p>Acesso à Internet 24 horas por dia.</p>
                                        <p>Navegue e baixe todos os arquivos dos quais você necessitar: sem franquia e sem tarifas adicionais por tráfego.</p>
                                        <ul class="nota">
                                            <li>Consulte a disponibilidade dos planos na sua região</li>
                                            <li>Valores sujeitos a alterações sem aviso prévio</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-8">
                                    <script type="text/javascript"></script>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="col-sm-12 cidades-uf">
                                                    <label  class="col-sm-2">Estado</label>
                                                    <div class="col-sm-4">
                                                        <div class="iconic-input">
                                                            <select class="form-control m-bot15" name="planos_uf" id="planos_uf">
                                                                <option value="0">Selecione o Estado</option>
                                                                <option value='23' >RO</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <label  class="col-sm-2">Cidade</label>
                                                    <div class="col-sm-4">
                                                        <div class="iconic-input">
                                                            <select class="form-control m-bot15" name="planos_cidade" id="planos_cidade">
                                                                <option value='0'>Selecione a Cidade</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                                <div class="row">
                                                    <div id='planos' class="col-md-4 md-margin-b-30">
                                                        <!-- Pricing List v4 -->
                                                        <div class="pricing-list-v4 radius-10">
                                                            <div class="pricing-list-v4-header">
                                                            <h4 class="pricing-list-v4-title">3mega</h4>
                                                                <span class="pricing-list-v4-subtitle">Urbano</span>
                                                            </div>
                                                            <div class="pricing-list-v4-content">
                                                                <div class="margin-b-40">
                                                                    <span class="pricing-list-v4-price-sign">R$</span>
                                                                    <span class="pricing-list-v4-price">99,</span>
                                                                    <span class="pricing-list-v4-subprice">00</span>
                                                                    <span class="pricing-list-v4-price-info">mês</span>
                                                                </div>
                                                                <div class="">
                                                                    <button type="button" class="btn btn-primary raised">Assinar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Pricing List v4 -->
                                                    </div>
                                                    <div class="col-md-4 md-margin-b-30">
                                                        <!-- Pricing List v4 -->
                                                        <div class="pricing-list-v4 radius-10">
                                                            <div class="pricing-list-v4-header">
                                                                <h4 class="pricing-list-v4-title">5mega</h4>
                                                                <span class="pricing-list-v4-subtitle">Urbano</span>
                                                            </div>
                                                            <div class="pricing-list-v4-content">
                                                                <div class="margin-b-40">
                                                                    <span class="pricing-list-v4-price-sign">R$</span>
                                                                    <span class="pricing-list-v4-price">149,</span>
                                                                    <span class="pricing-list-v4-subprice">00</span>
                                                                    <span class="pricing-list-v4-price-info">mês</span>
                                                                </div>
                                                                <div class="center-block">
                                                                    <button type="button" class="btn btn-primary raised">Assinar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Pricing List v4 -->
                                                    </div>
                                                    <div class="col-md-4 md-margin-b-30">
                                                        <!-- Pricing List v4 -->
                                                        <div class="pricing-list-v4 radius-10">
                                                            <div class="pricing-list-v4-header">
                                                                <h4 class="pricing-list-v4-title">10mega</h4>
                                                                <span class="pricing-list-v4-subtitle">Urbano</span>
                                                            </div>
                                                            <div class="pricing-list-v4-content">
                                                                <div class="margin-b-40">
                                                                    <span class="pricing-list-v4-price-sign">R$</span>
                                                                    <span class="pricing-list-v4-price">199,</span>
                                                                    <span class="pricing-list-v4-subprice">00</span>
                                                                    <span class="pricing-list-v4-price-info">mês</span>
                                                                </div>
                                                                <div class="center-block">
                                                                    <button type="button" class="btn btn-primary raised">Assinar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Pricing List v4 -->
                                                    </div>
                                                </div>
                                                <!--// end row -->
                                        </div>
                                        <!-- End Pricing List v4 -->
                                    </div>
                                    <!--// end row -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="orange">
                            <h1>Orange</h1>
                            <p>orange orange orange orange orange</p>
                        </div>
                        <div class="tab-pane" id="yellow">
                            <h1>Yellow</h1>
                            <p>yellow yellow yellow yellow yellow</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>

    <div class="test" data-parallax="scroll" data-image-src="assets/img/img-bg-2.jpg">
    <!-- http://www.flaticon.com/packs/web-navigation-line-craft -->
        <div class="container content-sm">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-4">
                        <div class="text-center">
                            <img src="assets/img/favorites-button.png">
                            <h3 class="color-white">16,000+</h3>
                            <span class="margin-b-30">
                                Customers strong
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center">
                            <img src="assets/img/settings.png">
                            <h3 class="color-white">24/7/365</h3>
                            <span class="margin-b-30">
                                Customers strong
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center">
                            <img src="assets/img/chrome-logo.png">
                            <h3 class="color-white">Internet com mais velocidade.</h3>
                            <span class="margin-b-0">
                                E muito mais vantagens.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>

    <div id="suporte">
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="container content-sm">
                <div class="row">
                    <div class="col-sm-4">
                        <h2 class="content-heading">Suporte <span class="border-black"></span></h2>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <p>Deixe seu numero de telefone/<i class="fa fa-whatsapp" aria-hidden="true"></i> que entraremos em contato o mais rapido possível.</p>
                        {!! Form::open(['route'=>'suporte.sendWelcome', 'class'=>'form-group get-in-grid-right text-center']) !!}
                            @if(Session::has('success-support'))
                            <div class="alert alert-success">
                                {{ Session::get('success-support') }}
                            </div>
                            @endif
                            <div class="row">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <div class="col-sm-5">
                                    <div class="input-with-icon">
                                        <input id="" name="nome" type="text" placeholder="Seu Nome" />
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="input-with-icon">
                                        <input id="" name="telefone" type="text" placeholder="Seu Telefone" />
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <input type="submit" class="btn btn-success raised" value="Enviar" >
                                </div>
                                </form>
                            </div>
                        </form>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="row">
                                <div class="panel-group" id="accordion1">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">Quero contratar internet Rolim Net Rádio</a>
                                            </h5>
                                        </div>
                                        <div id="accordion1_1" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Consulte em nosso site a área de cobertura de internet via rádio. Caso seu município/localidade tenha cobertura de sinal, você pode contatar conosco diretamente pelo site, ou se preferir, ligue para a Rolim Net.</p>
                                                <p>A contratação dos planos é feita mediante teste de sinal.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">Quero contratar internet Rolim Net Fibra</a>
                                            </h5>
                                        </div>
                                        <div id="accordion1_2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Consulte em nosso site a área de cobertura de internet via fibra. Caso esteja dentro da área com internet, você pode contatar conosco diretamente pelo site, ou se preferir, ligue para a Rolim Net. Os consultores de vendas da Rolim Net entrarão em contato para lhe auxiliar na escolha do melhor plano.</p>
                                                <p>Antes da instalação, serão feitos testes técnicos para confirmar a disponibilidade do serviço.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">Meu município não está na área de cobertura Rolim Net. O que posso fazer?</a>
                                            </h5>
                                        </div>
                                        <div id="accordion1_3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Você pode informar seu interesse em ter internet Rolim Net diretamente pelo site. Nossa área de cobertura, tanto de internet via fibra como internet via rádio, será ampliada conforme demanda, garantindo a viabilidade do sistema sem redução de qualidade.</p>
                                                <p>Existe também a possibilidade de instalação de torres para internet via rádio sob demanda.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">Não recebi a fatura/carne para pagamento. O que devo fazer?</a>
                                            </h5>
                                        </div>
                                        <div id="accordion1_4" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Você pode ligar para o Rolim Net, pelo telefone 69 3442-2779, e solicitar o carne para pagamento ou uma segunda via da fatura, que poderá ser enviada para seu e-mail.</p>
                                                <p>Se preferir, acesse a nossa central de atendimento no site.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">Testei minha velocidade e ela está abaixo do contratado, como medidir minha velocidade corretamente?</a>
                                            </h5>
                                        </div>
                                        <div id="accordion1_5" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Grande parte dos medidores de velocidade disponíveis na internet faz o teste da conexão do usuário através da média da velocidade de download de um arquivo. Porém, esse resultado pode ser afetado por vários fatores como a velocidade disponível no servidor do site e a quantidade de acessos simultâneos no momento do teste. Além disso, muitos destes medidores limitam a velocidade máxima de download ou simplesmente possuem conexão com a internet em velocidade inferior a que você tem com a Rolim Net.</p>
                                                <p>Por isso, disponibilizamos em nosso site um medidor de velocidade.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">Qual o prazo para o atendimento de uma chamado técnico?</a>
                                            </h5>
                                        </div>
                                        <div id="accordion1_6" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Quando o assinante entra em contato com a Rolim Net relatando problemas em sua conexão é transferido para um atendente técnico que vai orientá-lo a fim de detectar a causa. Não sendo possível a solução por telefone, a Rolim Net tem até 72h, contando apenas dias úteis, para realizar o atendimento técnico presencial.</p>
                                                <p>Seu problema não foi solucionado? Entre em contato com a ouvidoria aqui.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="row">
                            <div class="atendimento">
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <h2 class="">Atendimento</h2>
                                </div>
                                <div class="col-xs-12 col-sm-8 col-md-8">
                                    <select class="atendimento-cidade-div" data-target=".atendimento-cidade-dados">
                                        <option selected data-show=".defalt">Selecione a Cidade </option>
                                        <option value="orange" data-show=".cao">Cacoal</option>
                                        <option value="orange" data-show=".cas">Castanheiras</option>
                                        <option value="orange" data-show=".mdc">Presidente Medíci</option>
                                        <option value="lemon" data-show=".nho">Novo Horizonte d' Oeste</option>
                                        <option value="apple" data-show=".rlm">Rolim de Moura</option>
                                        <option value="pear" data-show=".stl">Santa Luzia d' Oeste</option>
                                        <option value="pear" data-show=".ser">Seringueiras</option>
                                  </select>
                              </div>
                          </div>
                      </div>

                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="margin-t-0 sm-margin-t-0 atendimento-cidade">
                            <div class="atendimento-cidade-dados">
                                <div class="defalt hide">
                                    <h3 class="margin-b-0">Selecione a Cidade</h3>
                                </div>
                                <div class="cao hide">
                                    <h3 class="margin-b-0">Rolim Net</h3>
                                    <p class="margin-b-0">Telefones: 69 3442-2779</p>
                                    <p class="margin-b-0">Endereço: Av. Manaus, 5095, Centro</p>
                                    <p>* As cidades de Cacoal e Presidente Médici contem apenas atendimento na zona rural.</p>
                                </div>
                                <div class="cas hide">
                                    <h3 class="margin-b-0">InfoCast</h3>
                                    <p class="margin-b-0">Telefones: 69 3442-2779</p>
                                </div>
                                <div class="mdc hide">
                                    <h3 class="margin-b-0">Rolim Net</h3>
                                    <p class="margin-b-0">Telefones: 69 3442-2779</p>
                                    <p class="margin-b-0">Endereço: Av. Manaus, 5095, Centro</p>
                                    <p>* As cidades de Cacoal e Presidente Médici contem apenas atendimento na zona rural.</p>
                                </div>
                                <div class="nho hide">
                                    <h3 class="margin-b-0">Rolim Net</h3>
                                    <p class="margin-b-0">Telefones: 69 3442-2779</p>
                                    <p class="margin-b-0">Endereço: Av. Manaus, 5095, Centro</p>
                                    <hr>
                                    <h3 class="margin-b-0">João</h3>
                                    <p class="margin-b-0">Telefones: 69 3442-2779</p>
                                </div>
                                <div class="rlm hide">
                                    <h3 class="margin-b-0">Rolim Net</h3>
                                    <p class="margin-b-0">Telefones: 69 3442-2779</p>
                                    <p class="margin-b-0">Endereço: Av. Manaus, 5095, Centro</p>
                                </div>
                                <div class="stl hide">
                                    <h3 class="margin-b-0">Marcos André</h3>
                                    <p class="margin-b-0">Telefones: 69 3442-2779</p>
                                </div>
                                <div class="ser hide">
                                    <h3 class="margin-b-0">Laercio Degasperi</h3>
                                    <p class="margin-b-0">Telefones: 69 3442-2779</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
    </div>
    
    <div id="fibra-up">
        <div class="bg-color-orange">
            <div class="container content-sm">
                <div class="col-sm-9 sm-margin-b-90">
                    <h2 class="color-white">Está precisando de velocidade? Rolim Net Fibra!...</h2>
                    <p class="color-white">Acesso a Internet de alta velocidade com toda qualidade de rede em 100% via fibra ótica.
                        Planos de acordo com a velocidade que você deseja.</p>
                    </div>

                    <div class="col-sm-3 sm-margin-b-30">
                        <p>
                            <a href="{{ route('fibra.index') }}" class="btn btn-default btn-lg sharp pull-right">
                                <span data-icon="&#xe008;" class="icon icon-lg"></span>  Assine já!</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="contato" class="text-center">
                <div class="bg-color-sky-light">
                    <div class="container content-sm">
                        <div class="row">
                            <div class="col-lg-8 col-md-offset-2">
                                <h2>Fale Conosco</h2>
                                <p>Entre em contato com a nossa equipe</p>
                            </div>
                            <!--// end row -->
                        </div>
                        <div class="col-sm-8 col-md-offset-2">
                            <div class="form-wrapper marginbot-50">
                                @if(Session::has('success-contacts'))
                                <div class="alert alert-success">
                                    {{ Session::get('success-contacts') }}
                                </div>
                                @endif
                                {!! Form::open(['route'=>'contato.sendWelcome']) !!}
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <div class="form-group">
                                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Seu Nome" data-rule="minlen:4" data-msg="Digite pelo menos 4 caracteres." />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Seu E-mail" data-rule="email" data-msg="Por favor digite um e-mail válido." />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" data-rule="minlen:4" data-msg="Por favor digite um telefone." />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Assunto" data-rule="minlen:4" data-msg="Digite pelo menos 8 caracteres do assunto." />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="mensagem" rows="5" data-rule="required" placeholder="Mensagem" data-msg="Por favor, escreva algo."></textarea>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-block btn-success raised">Enviar Mensagem</button>
                                    </div>
                                </form>
                            </div>
                            <div class="text-center">
                                <p class="margin-t-10"><i class="fa fa-phone"></i> Central de Atendimento (69) 3442-2779</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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
                                        <li><a class="soc-facebook" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 text-center sm-text-center">
                                <div class="copyright">
                                    <div class="copyright-breather text-center">
                                        <img src="assets/img/logo-dark.png">
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

            <script src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="assets/js/jquery.parallax.min.js" type="text/javascript"></script>

            <script src="assets/js/index.js" type="text/javascript"></script>

            <script type='text/javascript'>//<![CDATA[
                $(window).load(function(){
                    $(document).on('change', '.atendimento-cidade-div', function() {
                      var target = $(this).data('target');
                      var show = $("option:selected", this).data('show');
                      $(target).children().addClass('hide');
                      $(show).removeClass('hide');
                  });
                    $(document).ready(function(){
                        $('.atendimento-cidade-div').trigger('change');
                    });
                });//]]> 
            </script>
        </body>
        </html>