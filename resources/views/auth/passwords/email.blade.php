@extends('layouts.auth')

@section('title')
	GoFisco.com - Resetar Senha
@endsection

@section('content')
	<div class="text-center mb-4"><a href="/login"><img src="/img/logo_preto.png" alt="Logotipo"></a></div>
	<div class="card">
		<div class="card-header">
			<small class="h3 text-center mr-auto">Resetar Senha</small>
		</div>
		<div class="card-body">
			@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
			@endif

			<form method="POST" action="{{ route('password.email') }}">
				@csrf

				<div class="form-group row">
					<div class="col-md-12">
						<label for="email" class="h6 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>

				<div class="form-group row mt-4">
					<div class="col-md-12">
						<button type="submit" class="btn btn-success btn-lg btn-block">
							{{ __('Enviar Link para Resetar Senha') }}
						</button>
					</div>
				</div>
				
			</form>
		</div>
	</div>
	
	<div class="card mt-4 mb-4">
		<div class="card-header">
			<div class="row justify-content-center">
				<a href="/login"><small class="h6">Voltar para página de Login</small></a>
			</div>
		</div>
	</div>	
@endsection
