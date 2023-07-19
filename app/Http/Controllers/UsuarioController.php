<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function formulario_cadastro (){
        return view('usuarios.formulario');
    }


    public function cadastrar (Request $request){

        $usuario1 = [
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'senha' => Hash::make($request->senha)
        ];

        User::create($usuario1);

        return redirect()->back();
    }

    public function formulario_login (){
        return view('usuarios.login');
    }

    public function logar (Request $request){

        $usuario1 = [
            'email' => $request->email,
            'password' => $request->senha
        ];

        if(Auth::attempt($usuario1)){
            $usuario = User::where('email',$request->email )->first();
            Auth::login($usuario);
            return redirect()->route('index');
        }else{
            dd('nao entrar');
        }

        return redirect()->back();
    }

    public function sair (){
        Auth::logout();
        return redirect()->route('login');
    }



}
