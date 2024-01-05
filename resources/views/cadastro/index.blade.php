@extends('layout')

@section('title', 'Cadastro de Pessoas')

@section('content')
    <div class="container mt-5">
        <h1> Cadastro de Pessoas</h1>
        <hr>
        <form action="{{ route('cadastro-store') }}" method="post">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite um nome" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Digite o email" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="cargo" class="form-label">Cargo:</label>
                    <input type="text" class="form-control" name="cargo" placeholder="Digite o cargo" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="setor" class="form-label">Setor:</label>
                    <input type="text" class="form-control" name="setor" placeholder="Digite o setor" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="vinculo" class="form-label">Vínculo:</label>
                    <select class="form-select" name="vinculo" required>
                        <option value="" disabled selected>Selecione o vínculo</option>
                        <option value="efetivo">Efetivo</option>
                        <option value="terceirizado">Terceirizado</option>
                        <option value="estagiario">Estagiário</option>
                        <option value="procurador">Procurador</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="matricula" class="form-label">Matrícula:</label>
                    <input type="text" class="form-control" name="matricula" placeholder="Digite a matrícula" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="sala" class="form-label">Sala:</label>
                    <input type="text" class="form-control" name="sala" placeholder="Digite a sala" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
        </div>
@endsection
