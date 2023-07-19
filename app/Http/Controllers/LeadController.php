<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LeadController extends Controller
{ public function formulario_cadastro()
    {
        return view('leads.cadastro');
    }
 
    public function listar()
    {
        $leads = Lead::get();
        return view('leads.listagem', compact('leads'));
    }

    public function cadastrar(Request $request)
    {

        $lead = [
            'nome' => $request->lead,
            'usuario_id' => Auth::user()->id,
        ];

        Lead::create($lead);

        Alert::toast('Lead registado com sucesso.', 'success');
        return redirect()->route('index');
    }
}
