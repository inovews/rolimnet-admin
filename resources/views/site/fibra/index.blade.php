@extends('layouts.site.index')

@section('title', 'Fibra Óptica')

@section('content')

	<div class="banner-index" data-parallax="scroll" data-image-src="{{ url('assets/img/1920x1080/04.jpg') }}">
		<div class="container content-sm">
			<h1>Fibra</h1>
			<p class="margin-t-20">O futuro CHEGOU! O mundo na Velocidade da Luz!</p>
		</div>
	</div>

	<div class="section-seperator">
		<div class="container content">
			<div class="row">
				<div class="col-sm-7">
				<h2>Registre aqui sem compromisso o interesse pela fibra.</h2>

				<p>Como não poderíamos ficar de fora a nossa empresa se empenhou em um novo empreendimento trazendo pra Rolim de Moura o advento de maior tecnologia existente nos grandes centros, a fibra ótica. Prepare-se para acessar a internet sem interferências, interrupções e, principalmente, em alta velocidade. Preencha sem compromisso o formulário abaixo e ajude sua Rua ou Avenida ser contemplada com essa Tecnologia.</p>

				@if(Session::has('success'))
				<div class="alert alert-success">
					{{ Session::get('success') }}
				</div>
				@endif                  
				{!! Form::open(['route'=>'fibra.send']) !!}
					<ul>
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
					<div class="controls">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="nome">Nome *</label>
									<input id="nome" type="text" name="nome" class="form-control" placeholder="Seu nome *" required="required" data-rule="minlen:4" data-msg="Digite pelo menos 4 caracteres.">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="nome">Endereço *</label>
									<input class="form-control" id="fibra_endereco" name="fibra_endereco" placeholder="Endereço" type="text" required />
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="nome">Numero *</label>
									<input class="form-control" id="fibra_numero" name="fibra_numero" placeholder="Número" type="text" required />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="nome">Bairro *</label>
									<input class="form-control" id="fibra_bairro" name="fibra_bairro" placeholder="Bairro" type="text" required />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="nome">Telefone *</label>
									<input class="form-control" id="fibra_telefone" name="fibra_telefone" placeholder="Telefone" type="text" required />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="nome">E-mail *</label>
									<input class="form-control" id="fibra_email" name="fibra_email" placeholder="E-mail" type="email" required />
								</div>
							</div>
							<div class="col-md-12">
							<input type="submit" class="btn btn-block btn-success raised" value="Registrar">
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

@endsection