@extends('site/app')

@section('titulo', 'Novo Clientes')

@section('conteudo')
<h1>Novo Cliente</h1>
<form action="{{route('clients.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite Nome completo" required >
    </div>
    <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o Endereço" required></input>
    </div>
    <div class="mb-3">
        <label for="observacao" class="form-label">Observação</label>
        <textarea class="form-control" id="observacao" name="observacao" rows="3" placeholder="Digite a Observcação" required></textarea>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
</form>

@endsection