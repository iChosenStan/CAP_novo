<?php

namespace App\Http\Controllers;

use App\Models\Lancamento;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LancamentosController extends Controller
{
    public function index()
    {
        $lancamentos = Lancamento::all();
        return view('lancamento.index', ['lancamentos' => $lancamentos ]);
    }
    public function create()
    {
        return view('lancamento.create');
    }
    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => 'required|string',
            'tipo' => 'required|string',
        ]);

        $registro = new Lancamento();
        $registro->nome = $dados['nome'];
        $registro->data = Carbon::now()->toDateString();
        $registro->hora = Carbon::now()->toTimeString();
        $registro->tipo = $dados['tipo'];
        $registro->save();
        return redirect()->route('lancamento-index');
    }
}
