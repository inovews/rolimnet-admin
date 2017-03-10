@extends('layouts.site.index')

@section('content')

	<div class="banner-index" data-parallax="scroll" data-image-src="{{ url('assets/img/1920x1080/04.jpg') }}">
		<div class="container content-sm">
			<h1>Ouvidoria</h1>
			<p class="margin-t-20">Rolim Net Tecnologia LTDA.</p>
		</div>
	</div>

	<div class="section-seperator">
		<div class="container content">
			<div class="row">
				<div class="col-sm-12">
					<h3>Canal de comunicação</h3>
					<h2>Ouvidoria</h2>
					<p class="tt16">Caso tenha algum problema não resolvido pelo serviço de atendimento normal da Rolim net, enviando mensagem à Ouvidoria, você estará relatando o seu problema diretamente à diretoria da Rolim Net.</p>
					<p class="tt16">A Rolim Net sempre trabalha para oferecer para nossos Assinantes um serviço de qualidade e de excelência! Durante nossa história recebemos várias mensagens com elogios, sugestões e críticas, pois somente assim, com a sua participação podemos crescer e oferecer serviços e atendimento com a qualidade que você merece. Por esse motivo a OUVIDORIA é um canal de comunicação para que você possa relatar algum problema (técnico, financeiro, comercial) não resolvido pelo atendimento normal diretamente para um Gestor ou Diretor da empresa.</p>
				</div>
				<div class="col-sm-12">
				<h2>Quer entrar em contato com a gente?</h2>
				<p>Para tirar dúvidas, nos dar sugestões, ou fazer algum tipo de reclamação, basta preencher os campos abaixo. Teremos o prazer em responder.</p>
					<div class="row">
					
						<div class="col-sm-7">                  
							<form id="ajax-contact"  method="post" action="#" role="form">
								<div class="messages" id="form-messages"></div>
								<div class="controls">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="form_name">Nome *</label>
												<input id="form_name" type="text" name="name" class="form-control" placeholder="Seu nome *" required="required" data-rule="minlen:4" data-msg="Digite pelo menos 4 caracteres.">
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="form_email">E-mail *</label>
												<input id="form_email" type="email" name="email" class="form-control" placeholder="Seu e-mail *" required="required" data-rule="email" data-msg="Por favor digite um e-mail válido.">
												<div class="help-block with-errors"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="form_phone">Telefone *</label>
												<input id="form_phone" type="tel" name="phone"  class="form-control" placeholder="Telefone *" required oninvalid="setCustomValidity('Por favor digite um telefone.')"
												onchange="try{setCustomValidity('')}catch(e){}">

											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="form_lastname">Assunto *</label>
												<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Assunto *" required="required" data-rule="minlen:4" data-msg="Digite pelo menos 8 caracteres do assunto.">
												<div class="help-block with-errors"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="form_message">Mensagem *</label>
												<textarea id="form_message" name="message" class="form-control" placeholder="Mensagem *" rows="4" required="required" data-msg="Por favor, escreva algo."></textarea>
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
							<div class="row text-center">
								<img src="assets/img/banner-rolimnet-fibra.jpg" width="368" height="100%">
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>

@endsection