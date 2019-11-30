@extends('layouts.app')

@section('content')
<div class=" ml-5 mt-5">
	@if (session('status'))
		<div class="alert alert-success" role="alert">
			{{ session('status') }}
		</div>
	@endif
	<h2>Seja Bem Vindo {{ Auth::user()->name }}!</h2>
	<p><h4>Utilize o menu para navegar.</h4></p>
</div>
@endsection
