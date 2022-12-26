<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Utente;
use Illuminate\Support\Facades\Mail;
class UtenteController extends Controller
{
    public function index()
    {
        return view('utente.index');
    }
    public function store(Request $request)
    {

        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
            'unique:utentes' => 'O :attribute já está sendo utilizado',
            'nome.min' => 'É necessário no mínimo 9 caracteres no nome!',
            'nome.max' => 'É necessário no máximo 9 caracteres no nome!',
            'telefone.min' => 'É necessário no mínimo 9 caracteres no telefone!',
            'telefone.max' => 'É necessário no máximo 9 caracteres no telefone!',
            'email.email' => 'Digite um email válido!',

        ];
        $request->validate(
            [
            'nome'=>'required|max:255|min:4',
            'email'=>'required|email|unique:utentes',
            'PartipacaoExame'=>'required',
            'InfoExame'=>'required',
            'tipoParticpacao'=>'required',
            'provincia'=>'required',
            'municipio'=>'required',
            'pais'=>'required',
            'Instituicao'=>'required',
             'telefone'=>'required|min:9|max:9',

            ],
            $mensagens
        );
            $t = Utente::create([
               'nome'=>$request->nome,
               'email'=>$request->email,
               'PartipacaoExame'=>$request->PartipacaoExame,
               'InfoExame'=>$request->InfoExame,
               'tipoParticpacao'=>$request->tipoParticpacao,
               'provincia'=>$request->provincia,
               'municipio'=>$request->municipio,
               'pais'=>$request->pais,
               'Instituicao'=>$request->Instituicao,
                'telefone'=>$request->telefone,
            ]);
            return redirect()->back();

    }

}
