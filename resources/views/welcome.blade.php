@extends('layout')

@section('title', 'Página Inicial')

@section('content')
    <div class="content">
        <!-- Conteúdo do primeiro retângulo -->
        <a href="{{ route('lancamento-index')}}"><img src="/assets/procurar.png" /></a>
    </div>

    <div class="content-rectangle2">
        <!-- Conteúdo do segundo retângulo -->
        <center><h2>Controle de Acesso Predial</h2><br /></center>
        <a href="{{ route('lancamento-index')}}"><img src="/assets/bt_lancamento.png" /></a><br />
        <a href="{{ route('cadastro-index')}}"><img src="/assets/bt_cadastro.png" /></a>
    </div>
@endsection
