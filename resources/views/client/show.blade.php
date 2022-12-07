@extends('site/app')

@section('titulo', 'Detalhes do Cliente')

@section('conteudo')
        <div class="card" style="width: 18rem;">
            <h5 class="card-header">Detalhe do Cliente {{$clients->nome}}</h5>
            <div class="card-body">
                <p class="card-text"><strong>ID: </strong> {{$clients->id}} </p>
                <p class="card-text"><strong>Nome: </strong> {{$clients->nome}} </p>
                <p class="card-text"><strong>Endereço: </strong> {{$clients->endereco}} </p>
                <p class="card-text"><strong>Observação: </strong> {{$clients->observacao}} </p>
                <br>
                <a href="{{route('clients.index')}}" class="btn btn-success">Voltar</a>
            </div>
        </div>
@endsection