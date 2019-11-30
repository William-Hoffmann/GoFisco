@extends('layouts.app')

@section('title')
	GoFisco.com - Consulta de MVA
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
@stop

@section('content')
	<form action="/dashboard/search/mva" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" id="busca-mva" class="form-control form-control-lg mask" name="q" placeholder="Procurar MVA">
		<div class="input-group-append">
			<button class="btn btn-success" type="submit">Pesquisar</button>
		</div>
    </div>
	</form>
	
		@isset($details)
        <p class="mt-3 ml-1"><b> Resultados para  {{ $query }} </b></p>
		<div class="table-responsive">
			<table id="dtable" class="table table-hover display">
				<thead class="thead-dark">
					<tr>
						<th>MVA</th>
						<th>Descrição</th>
						<th>NCM</th>
						<th>CEST</th>
						<th>Grupo</th>
					</tr>
				</thead>
				<tbody>
					@foreach($details as $ncm)
					<tr>
						<td>{{$ncm->mva}}</td>
						<td>{{$ncm->desc}}</td>
						<td >{{$ncm->ncm}}</td>
						<td>{{$ncm->cest}}</td>
						<td>{{$ncm->grupo}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		@else
			<p class="mt-3 ml-1"><b> Não foram achados resultados </b></p>
		@endisset
		
@stop
