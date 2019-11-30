@extends('layouts.app')

@section('title')
GoFisco.com - Ajuste de MVA
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
@stop

@section('content')
	<form action="/dashboard/tools/ajuste" method="POST" role="search">
    {{ csrf_field() }}
	<label for="inputAJUSTE" class="sr-only">Ajuste MVA</label>  
    <div class="input-group">
		<div class="input-group-prepend">
			<div class="input-group-text">Valor da MVA%: </div>	
		</div>
		<input type="text" id="ajuste-mva" class="form-control form-control-lg mask" name="q">
		<div class="input-group-append">
			<button class="btn btn-success" type="button">Pesquisar</button>
		</div>
	</div>
	</form>
	
	<h3 class="ml-3 mt-5">
		<ul>
			<li><small>MVA Digitada: <b>{{ $mva18 ?? '' }}%</b></small></li>
			<li><small>MVA Alíquota 12%: <b>{{ $mva12 ?? '' }}%</b></small></li>
			<li><small>MVA Alíquota 7%: <b>{{ $mva07 ?? ''}}%</b></small></li>
			<li><small>MVA Alíquota 4%: <b>{{ $mva04 ?? '' }}%</b></small></li>
		</ul>		
	</h3>	
@stop
