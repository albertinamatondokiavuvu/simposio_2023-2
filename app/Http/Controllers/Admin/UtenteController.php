<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Utente;
use App\Http\Requests\UtenteRequest;

class UtenteController extends Controller
{
    public function index()
    {
        return view('utente.index');
    }

    
    public function cadastrar_utente(UtenteRequest $request){
        
        if(Utente::create($request->all())){
            $request->session()->flash('success','Utente Cadastrado com Sucesso');
        }

        return view('utente.index');
        //return redirect()->route('simposio');
    }

}
