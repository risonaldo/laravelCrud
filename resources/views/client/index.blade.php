@extends('site/app')

@section('titulo', 'Lista de Clientes')

@section('conteudo')
<h1>Lista de Clientes</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
        <tr>
            <th scope="row">{{$client->id}}</th>
            <td><a href="{{route('clients.show',$client)}}">{{$client->nome}}</a></td>
            <td>{{$client->endereco}}</td>
            <td>
                <a href="{{route('clients.editar', $client)}}" class="btn btn-primary">Atualizar</a>
                <form action="{{route('clients.delete', $client)}}"  method="POST" style="display: inline;">
                    @method('DELETE')
                    @csrf

                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja apagar???')">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{route('clients.cadastrar')}}" class="btn btn-success">Novo Cliente</a>
@endsection