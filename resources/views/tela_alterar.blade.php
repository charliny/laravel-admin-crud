@extends('template')

@section('page')
		<div class="row">
			<div class="col-12 text-center"><h1>Cadastro de Usuário</h1></div>
		</div>
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<form method="POST" action="{{ route('usuario_alterar', ['id' => $i->id]) }}">
				@csrf
					<div class="form-group">
					    <input type="text" class="form-control" name="nome" id="inputNome" placeholder="Nome" aria-describedby="nomeHelp" value="{{$i->nome}}">
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" name="endereco" id="inputEndereco" placeholder="Endereço" aria-describedby="enderecoHelp"value="{{$i->endereco}}">
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" name="cep" id="inputCEP" placeholder="CEP" aria-describedby="CEPHelp" value="{{$i->cep}}">
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" name="cidade" id="inputCidade" placeholder="Cidade" aria-describedby="cidadeHelp" value="{{$i->cidade}}">
					</div>
					<div class="form-group">
					   <select class="form-control" id="estadoSelect" name="estado">
					   	 <option value="" selected disabled hidden>Selecione um Estado</option>
					     <option>Acre</option>
					     <option>Alagoas</option>
					     <option>Amapá</option>
					     <option>Amazonas</option>
					     <option>Bahia</option>
					     <option>Ceará</option>
					     <option>Espírito Santo</option>
					     <option>Goiás</option>
					     <option>Maranhão</option>
					     <option>Mato Grosso</option>
					     <option>Mato Grosso do Sul</option>
					     <option>Minas Gerais</option>
					     <option>Pará</option>
					     <option>Paraíba</option>
					     <option>Paraná</option>
					     <option>Pernambuco</option>
					     <option>Piauí</option>
					     <option>Rio de Janeiro</option>
					     <option>Rio Grande do Norte</option>
					     <option>Rio Grande do Sul</option>
					     <option>Rondônia</option>
					     <option>Roraima</option>
					     <option>Santa Catarina</option>
					     <option>São Paulo</option>
					     <option>Sergipe</option>
					     <option>Tocantins</option>
					   </select>
					 </div>
					<button type="submit" class="btn btn-info btn-lg btn-block mt-4">Enviar</button>
				</form>
			</div>
			<div class="col-2"></div>
		</div>
	</div>
@endsection