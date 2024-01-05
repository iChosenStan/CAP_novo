@extends('layout')

@section('title', 'Cadastro de Pessoas')

@section('content')
    <div class="container">
        <h1> Cadastro de Pessoas</h1>
        <hr>
        <form action="{{ route('cadastro-store') }}" method="post">
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite um nome" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Digite o email" required>
                </div>
                <div class="form-group">
                    <label for="cargo" class="form-label">Cargo:</label>
                    <input type="text" class="form-control" id="cargo" placeholder="Digite o cargo" required>
                </div>
                <div class="form-group">
                    <label for="setor" class="form-label">Setor:</label>
                    <input type="text" class="form-control" id="setor" placeholder="Digite o setor" required>
                </div>
                <div class="form-group">
                    <label for="vinculo" class="form-label">Vínculo:</label>
                    <select class="form-select" id="vinculo" required>
                        <option value="" disabled selected>Selecione o vínculo</option>
                        <option value="efetivo">Efetivo</option>
                        <option value="terceirizado">Terceirizado</option>
                        <option value="estagiario">Estagiário</option>
                        <option value="procurador">Procurador</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="matricula" class="form-label">Matrícula:</label>
                    <input type="text" class="form-control" id="matricula" placeholder="Digite a matrícula" required>
                </div>
                <div class="form-group">
                    <label for="sala" class="form-label">Sala:</label>
                    <input type="text" class="form-control" id="sala" placeholder="Digite a sala" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
