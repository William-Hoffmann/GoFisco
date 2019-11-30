@extends('layouts.app')

@section('title')
	GoFisco.com - Consulta de NCM
@stop

@section('content')
	<form action="/dashboard/search/ncm" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control form-control-lg" name="q" placeholder="Procurar NCM">
		<div class="input-group-append">
			<button class="btn btn-success" type="submit">Pesquisar</button>
		</div>
    </div>
	</form>
	
	<form action="/excel">
		<input type="submit" value="Download Excel">
	<form>
	
		@isset($details)
        <p class="mt-3 ml-1"><b> Resultados para  {{ $query }} </b></p>
		<div class="table-responsive">
			<table id="dtable" class="table table-hover display">
				<thead class="thead-dark">
					<tr>
						<th>NCM</th>
						<th>Descrição</th>
						<th>CEST</th>
						<th>MVA</th>
						<th>Grupo</th>
					</tr>
				</thead>
				<tbody>
					@foreach($details as $ncm)
					<tr>
						<td >{{$ncm->ncm}}</td>
						<td>{{$ncm->desc}}</td>
						<td>{{$ncm->cest}}</td>
						<td>{{$ncm->mva}}</td>
						<td>{{$ncm->grupo}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		@endisset
		
@stop
