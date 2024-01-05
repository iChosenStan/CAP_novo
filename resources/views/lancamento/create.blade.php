@extends('layout')

@section('title', 'Lançamento de Movimentação')

@section('content')
    <div class="container mt-5">
        <h1> Lancamento de Movimentação</h1>
        <hr>
        <form action="{{ route('lancamento-store') }}" method="post">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite um nome" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="tipo" class="form-label">Tipo de movimentação:</label>
                    <select class="form-select" name="tipo" required>
                        <option value="" disabled selected>Selecione..</option>
                        <option value="Entrada">Entrada</option>
                        <option value="Saída">Saída</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success">
                </div>
            </div>
        </form>
        </div>
@endsection
