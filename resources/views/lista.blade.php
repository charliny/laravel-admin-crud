@extends('template')

@section('page')
		<div class="row">
			<div class="col-12">
				<h1 class="text-center">Clientes</h1>
				<table class="table  table-bordered mt-5">
					<thead class="thead">
						<tr>
							<th>#</th>
							<th>Nome</th>
							<th>Endereço</th>
							<th>CEP</th>
							<th>Cidade</th>
							<th>Estado</th>
							<th>Operações</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1; ?>
						@foreach ($listona as $elemento)
						<tr>
							<td>{{$i}}</td>
							<td>{{$elemento->nome}}</td>
							<td>{{$elemento->endereco}}</td>
							<td>{{$elemento->cep}}</td>
							<td>{{$elemento->cidade}}</td>
							<td>{{$elemento->estado}}</td>
							<td>
								<a class="btn btn-primary" href="{{route('usuario_update', ['id' => $elemento->id])}}">Alterar</a>
								<a class="btn btn-danger" onclick="temCerteza({{$elemento->id}})" href="#">Excluir</a>
							</td>
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