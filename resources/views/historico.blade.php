@extends('template')

@section('page')
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">Histórico de Vendas</h1>
				<table class="table table-striped table-bordered mt-5">
					<thead class="thead">
						<tr>
							<th>#</th>
							<th>ID do Cliente</th>
							<th>ID da Venda</th>
							<th>Descricao da Venda</th>
							<th>Valor Final</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1; ?>
						@foreach ($listaDeVendas as $elemento)
							<tr>
								<td>{{$i}}</td>
								<td>{{$elemento->id_cliente}}</td>
								<td>{{$elemento->id}}</td>
								<td>{{$elemento->descricao}}</td>
								<td>{{$elemento->valor}}</td>
							</tr>
							<?php $i++; ?>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
<script>
	function temCerteza(id){
		if(confirm("Deseja excluir o cliente de ID" + id + "?")){
			location.href = "/individuo/excluir/" + id;
		}
	}
</script>
@endsection