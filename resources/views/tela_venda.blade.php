@extends('template')

@section('page')
	<div class="row">
		<div class="col-12 text-center"><h1>Vender</h1></div>
	</div>
	<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<form method="POST" action="{{ route('realizar_venda') }}">
				@csrf
					<div class="form-group">
					   <select class="form-control" id="clienteSelect" name="cliente">
					   	 <option value="" selected disabled hidden>Selecione Cliente</option>
					   	 @foreach ($lista as $cliente)
					     	<option>{{$cliente->nome}}</option>
					     @endforeach
					   </select>
					</div>
					<div class="form-group">
					    <textarea class="form-control" id="textDescricao" name="descricao" rows="3" placeholder="Descrição"></textarea>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" name="valor" id="inputValor" placeholder="Total" aria-describedby="ValorHelp">
					</div>
					
					<button type="submit" class="btn btn-primary btn-lg btn-block mt-4">Enviar</button>
				</form>
			</div>
			<div class="col-2"></div>
		</div>
@endsection