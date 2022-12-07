@extends('site/app')

@section('titulo', 'Novo Clientes')

@section('conteudo')
<h1>Editar Cliente</h1>



<form action="{{route('clients.update', $clients)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" value="{{$clients->nome}}" name="nome" placeholder="Digite Nome completo" required>
    </div>
    <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="endereco" value="{{$clients->endereco}}" name="endereco" placeholder="Digite o Endereço" required></input>
    </div>
    <div class="mb-3">
        <label for="observacao" class="form-label">Observação</label>
        <textarea class="form-control" id="observacao"  name="observacao" rows="3" placeholder="Digite a Observcação" required>{{$clients->observacao}}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
</form>

@endsection