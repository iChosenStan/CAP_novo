<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use App\Models\Pessoa;
use CreatePessoasTable;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index()
    {
        return view('cadastro.index');
    }
    public function create()
    {
        return view('cadastro.create');
    }
    public function store(Request $request){
        Pessoa::create($request->all());
        return redirect()->route('cadastro-index');
    }

}
