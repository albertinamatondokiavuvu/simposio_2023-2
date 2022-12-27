<?php

namespace App\Http\Controllers;
use App\Models\Utente;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $utentes= Utente::get();
        $distancia = Utente::where('tipoParticpacao','=','Distância')->count();
        $presencial = Utente::where('tipoParticpacao','=','Presencial')->count();
        $total = Utente::count();
        return view('home',compact('utentes','total','distancia','presencial'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
