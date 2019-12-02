@extends('layouts.auth')

@section('title')
	GoFisco.com - Criar Conta
@endsection
		
@section('content')
	<div class="text-center mb-4"><a href="/"><img src="/img/logo_preto.png" alt="Logotipo"></a></div>
	<div class="card">
		<div class="card-header">
			<small class="h3 text-center mr-auto">Criar Conta</small>
		</div>
		<div class="card-body">
			<form method="POST" action="{{ route('register') }}">
				@csrf						

				<div class="form-group row">
					<div class="col-md-12">
						<label for="name" class="h6 col-form-label text-md-right">{{ __('Nome') }}</label>                            
						<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
						@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>

				<div class="form-group row">
					<div class="col-md-12">
						<label for="email" class="h6 col-form-label text-md-right">{{ __('E-Mail') }}</label>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>

				<div class="form-group row">
					<div class="col-md-12">
						<label for="password" class="h6 col-form-label text-md-right">{{ __('Senha') }}</label>
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>

				<div class="form-group row">
					<div class="col-md-12">
						<label for="password-confirm" class="h6 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
					</div>
				</div>
				
				<div class="form-group row mt-4">
					<div class="col-md-12">
						<button type="submit" class="btn btn-success btn-lg btn-block">
							{{ __('Criar Conta') }}
						</button>
					</div>
				</div>

			</form>
		</div>
	</div>
	
	<div class="card mt-4 mb-4">
		<div class="card-header">
			<div class="row justify-content-center">
				<small class="h6 text-muted mr-2">Já possui uma conta?</small>
				<a href="/login" class="h6">Fazer Login</a>
			</div>
		</div>
	</div>
@endsection