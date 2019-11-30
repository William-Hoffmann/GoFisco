@extends('layouts.app')

@section('title')
	GoFisco.com - Consulta de CEST
@stop

@section('content')
	<form action="/dashboard/search/cest" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control form-control-lg" name="q" placeholder="Procurar CEST">
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
						<th>CEST</th>
						<th>Descrição</th>
						<th>NCM</th>
						<th>MVA</th>
						<th>Grupo</th>
					</tr>
				</thead>
				<tbody>
					@foreach($details as $ncm)
					<tr>
						<td>{{$ncm->cest}}</td>
						<td>{{$ncm->desc}}</td>
						<td >{{$ncm->ncm}}</td>
						<td>{{$ncm->mva}}</td>
						<td>{{$ncm->grupo}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		@endisset
		
@stop
