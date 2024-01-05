@extends('layout')

@section('title', 'Lançamento de Movimentações')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h1>Lançamento de movimentações</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{ route('lancamento-create')}}" class="btn btn-success">Nova movimentação</a>
            </div>
        </div>
        <table class="table mt-3">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Data</th>
                <th scope="col">Horário</th>
                <th scope="col">Tipo</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($lancamentos as $lancamento)
            <tr>
                <th>{{$lancamento->nome}}</th>
                <td>{{$lancamento->data}}</td>
                <td>{{$lancamento->hora}}</td>
                <td>{{$lancamento->tipo}}</td>
            </tr>
            @endforeach
            </tbody>
          </table>
    </div>
@endsection
