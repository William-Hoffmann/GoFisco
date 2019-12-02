@extends('layouts.auth')

@section('title')
	GoFisco.com - Login
@endsection
		
@section('content')
	<div class="text-center mb-4"><a href="/"><img src="/img/logo_preto.png" alt="Logotipo"></a></div>
	<div class="card">
		<div class="card-header">
			<small class="h3 text-center mr-auto">Fazer Login</small>
		</div>
		<div class="card-body">
			<form method="POST" action="{{ route('login') }}">
				@csrf

				<div class="form-group row">
					<div class="col-md-12">
						<label for="email" class="h6 col-form-label text-md-right">{{ __('E-Mail') }}</label>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>

				<div class="form-group row">                          
					<div class="col-md-12">
						<div class="d-flex">
						<label for="password" class="h6 col-form-label text-md-right">{{ __('Senha') }}</label>
						@if (Route::has('password.request'))
						<a class="btn-link ml-auto" href="{{ route('password.request') }}">
							{{ __('Esqueceu a Senha?') }}
						</a>
						@endif
						</div>
						<input id="password" type="password" class="form-control input-block @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" data-toggle="password">
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>

				<div class="form-group row mt-4">
					<div class="col-md-12">
						<button type="submit" class="btn btn-success btn-lg btn-block">
							{{ __('Entrar') }}
						</button>
					</div>
				</div>
				
			</form>
		</div>	
	</div>
	
	<div class="card mt-4 mb-4">
		<div class="card-header">
			<div class="row justify-content-center">
				<small class="h6 text-muted mr-2">Não possui uma conta?</small>
				<a href="/register" class="h6">Criar Conta</a>
			</div>
		</div>
	</div>	
@endsection