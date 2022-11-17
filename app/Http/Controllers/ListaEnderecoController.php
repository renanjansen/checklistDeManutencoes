<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Elevador;
use App\Models\Manutencao;
use PhpParser\Node\Expr\New_;

class ListaEnderecoController extends Controller
{
    public function listarEnderecos()
    {
        $elevadores = Elevador::all();
        $manutencoesFeitas = Manutencao::all();
        return view('welcome',
        [
            'elevadores' => $elevadores,
            'manutencoes' => $manutencoesFeitas
        ]
    
    );
    }

    public function cadastrarManutencoes(Request $request){

        $elevadores = Elevador::all();
        $manutencoesFeitas = Manutencao::all();

        // instância do objeto Elevador da base de dados
        $elevadorAdd = new Manutencao;

        $elevadorAdd->sigla = $request->sigla;
        $elevadorAdd->endereco = $request->endereco;
        $elevadorAdd->tipo = $request->tipo;
        $elevadorAdd->elevadores_id = $request->id;

        $elevadorAdd->save();

        return view('welcome',
        [
            'elevadores' => $elevadores,
            'manutencoes' => $manutencoesFeitas
        ]
        );

    }

    public function listarManutencoes(){

        $manutencoesFeitas = Manutencao::all();

        return view('manutencoes',
        [
            'manutencoes' => $manutencoesFeitas
        ]
        );

    }

    
}
