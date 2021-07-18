<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){

        //todos os resultados
        //$series = Serie::all();

        //todos resultados em ordem alfabetica por nome
        $series = Serie::query()
            ->orderBy('nome')
            ->get();

        $mensagem = $request->session()->get('mensagem');

        /*$series = [
            'Lost',
            'Mad Men',
            'The Simpsons',
            'The Leftovers',
            'Breaking Bad',
            'Love',
            'Bojack',
            'Ricky and Morty'
        ];*/

        return view('series.index', compact('series', 'mensagem'));

    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $serie = Serie::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Série {$serie->id} - {$serie->nome} criada com sucesso!"
            );

        //echo "Série com id {$serie->id} criada: {$serie->nome}";

        return redirect()->route('listar_series');
    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->id);

        $request->session()
            ->flash(
                'mensagem',
                "A série foi removida com sucesso!"
            );
        return redirect()->route('listar_series');
    }
}
