@extends('layouts.app')

@section('title')
	GoFisco.com - Consulta por Grupo
@stop

@section('content')
	
	<form action="/dashboard/search/grupo" method="POST" role="search" id="form-grupo">
	{{ csrf_field() }}
	<div class="card">
		<div class="card-header h4">Pesquisar por grupo de produtos:</div>
		<div class="row px-3 py-3">
			<ul class="col card-text">
				<li><input type="submit" value="Alimentícios" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Autopeças" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Bebidas Alcoólicas, exceto Cerveja e Chope" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Cervejas, Chopes, Refrigerantes, Águas e Outras Bebidas" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Cigarros e Outros Produtos Derivados do Fumo" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Cimentos" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Combustíveis e Lubrificantes" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Energia Elétrica" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Ferramentas" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Lâmpadas, Reatores e Starter" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Medicamentos de Uso Humano e Outros Produtos Farmacêuticos" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Materiais de Construção e Congêneres" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Materiais Elétricos" name="q" class="h6 input-link text-primary"></li>
			</ul>
			<ul class="col card-text">
				<li><input type="submit" value="Materiais de Limpeza" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Papéis" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Pneumáticos, Câmaras de Ar e Protetores de Borracha" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Produtos de Perfumaria e de Higiene Pessoal e Cosméticos" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Produtos Cerâmicos" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Produtos de Papelaria" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Produtos Eletrônicos, Eletroeletrônicos e Eletrodomésticos" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Rações para Animais Domésticos" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Sorvetes e Preparados para Fabricação de Sorvetes em Máquinas" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Tintas e Vernizes" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Veículos de Duas e Três Rodas Motorizados" name="q" class="h6 input-link text-primary"></li>
				<li><input type="submit" value="Vidros" name="q" class="h6 input-link text-primary"></li>
			</ul>
		</div>
	</div>
	</form>
	
	<script type="text/javascript">
	var form = document.getElementById("form-grupo");
	document.getElementByClass("input-link").addEventListener("click", function () {
		form.submit();
	});
	</script>
	
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
