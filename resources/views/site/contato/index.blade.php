@extends('layouts.site.index')

@section('content')
	<div class="banner-index" data-parallax="scroll" data-image-src="{{ url('assets/img/1920x1080/04.jpg') }}">
		<div class="container content-sm">
			<h1>Contato</h1>
			<p class="margin-t-20">A equipe de atendimento Rolim Net está à disposição para ajudar você.</p>
		</div>
	</div>

	<div class="section-seperator">
		<div class="container content">
			<div class="row">
				<div class="col-sm-12">
					<h2>Canais de comunicação</h2>
					<div class="col-sm-4">
						<div class="text-center">
							<img src="{{ url('assets/img/mouse.png') }}">
							<h3>DÚVIDA POR E-MAIL</h3>
							<p class="margin-b-30">
								Entre em contato que teremos maior prazer em respondê-lo.
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="text-center">
							<img src="{{ url('assets/img/history-button.png') }}">
							<h3>HORARIO DE ATENDIMENTO</h3>
							<p class="margin-b-30">
								Segunda a Sexta 08h as 18h<br>
								Sábado 08 as 13h
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="text-center">
							<img src="{{ url('assets/img/user.png') }}">
							<h3>CHAT ONLINE</h3>
							<p class="margin-b-0">
								Converse com um de nossos atendentes agora!
							</p>
							<button class="btn btn-default">Iniciar chat</button>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
				<h2>Quer entrar em contato com a gente?</h2>
				<p>Para tirar dúvidas, nos dar sugestões, ou fazer algum tipo de reclamação, basta preencher os campos abaixo. Teremos o prazer em responder.</p>
					<div class="row">
						<div class="col-sm-7">

							@if(Session::has('success'))
							<div class="alert alert-success">
								{{ Session::get('success') }}
							</div>
							@endif                  
								{!! Form::open(['route'=>'contato.send']) !!}
								<ul>
									@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
								<div class="messages" id="form-messages"></div>
								<div class="controls">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="nome">Nome *</label>
												<input id="nome" type="text" name="nome" class="form-control" placeholder="Seu nome *" required="required" data-rule="minlen:4" data-msg="Digite pelo menos 4 caracteres.">
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="email">E-mail *</label>
												<input id="email" type="email" name="email" class="form-control" placeholder="Seu e-mail *" required="required" data-rule="email" data-msg="Por favor digite um e-mail válido.">
												<div class="help-block with-errors"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="telefone">Telefone *</label>
												<input id="telefone" type="tel" name="telefone"  class="form-control" placeholder="Telefone *" required="required" data-rule="minlen:9" data-msg="Por favor digite um telefone.">

											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="assunto">Assunto *</label>
												<input id="assunto" type="text" name="assunto" class="form-control" placeholder="Assunto *" required="required" data-rule="minlen:8" data-msg="Digite pelo menos 8 caracteres do assunto.">
												<div class="help-block with-errors"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="mensagem">Mensagem *</label>
												<textarea id="mensagem" name="mensagem" class="form-control" placeholder="Mensagem *" rows="4" required="required" data-msg="Por favor, escreva algo."></textarea>
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="col-md-12">
											<input type="submit" class="btn btn-block btn-success raised" value="Enviar Mensagem">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<br>
											<small class="text-muted"><strong>*</strong> Estes campos são obrigatórios.</small>
										</div>
									</div>
								</div>

							</form>

						</div>
						<div class="col-sm-5">
							<div class="row col1">
								<div class="col-xs-3">
									<i class="fa fa-map-marker" style="font-size:16px;"></i> Endereço
								</div>
								<div class="col-xs-9">
									Av. Manaus, 5095, Centro, Rolim de Moura/RO
								</div>
							</div>

							<div class="row col1">
								<div class="col-sm-3">
									<i class="fa fa-phone"></i> Telefone
								</div>
								<div class="col-sm-9">
									(69) 3442-2779
								</div>
							</div>
							<div class="row col1">
								<div class="col-sm-3">
									<i class="fa fa-envelope"></i> E-mail
								</div>
								<div class="col-sm-9">
									<a href="#">geral@rolimnet.com.br</a> <br> <a href="#">suporte@rolimnet.com.br</a>
								</div>
							</div><br>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1954.3850105893791!2d-61.778981206544195!3d-11.732684828113818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93c86bf73f54805d%3A0xf073da2a98c27a5a!2sRolim+Net!5e0!3m2!1spt-BR!2sus!4v1489105726156" width="100%" height="270" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="col-sm-7">
							<h2>WhatsApp</h2>
							<div class="col-sm-4">
								<div class="text-center">
									<i class="fa fa-whatsapp fa-5x" aria-hidden="true"></i>
									<h3>Financeiro</h3>
									<p>69 8494-5271</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="text-center">
									<i class="fa fa-whatsapp fa-5x" aria-hidden="true"></i>
									<h3>Suporte</h3>
									<p>69 8451-8073</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="text-center">
									<i class="fa fa-whatsapp fa-5x" aria-hidden="true"></i>
									<h3>Vendas</h3>
									<p>69 8475-3479</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

@endsection