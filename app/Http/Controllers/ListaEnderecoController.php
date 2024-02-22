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


        // query que busca dados da coluna elevadores_id
        $manutencoesFeitas = Manutencao::all()->pluck('elevadores_id');

         // variavel que acessa a propiedade do request
         $busca = request('buscar');
         //dd($busca);
         if ($busca) {
            $resultados = Elevador::where('endereco', 'like', '%' . $busca . '%')->get();
            $totalResultados = count($resultados);

            $elevadores = Elevador::where([

                 // busca por palavras
                 ['endereco', 'like', '%' . $busca . '%']

             ]

             )->orWhere('sigla', 'like', '%' . $busca . '%')->paginate($totalResultados);

         } else{
            // nessa query a lista de elvadores será atualizada através da busca por manuntenções feitas
            $elevadores = Elevador::whereNotIn('id',$manutencoesFeitas)->paginate(6);
         }




        return view('welcome',
        [
            'elevadores' => $elevadores,
            'manutencoes' => $manutencoesFeitas
        ]

    );
    }

    public function cadastrarManutencoes(Request $request){


        $manutencoesFeitas = Manutencao::all()->pluck('elevadores_id');
        $elevadores = Elevador::all()->whereNotIn('id',$manutencoesFeitas);

        // instância do objeto Elevador da base de dados
        $elevadorAdd = new Manutencao;

        $elevadorAdd->sigla = $request->sigla;
        $elevadorAdd->endereco = $request->endereco;
        $elevadorAdd->tipo = $request->tipo;
        $elevadorAdd->elevadores_id = $request->id;

        $elevadorAdd->save();

        return redirect('/');

    }

    public function listarManutencoes(){

        $manutencoesFeitas = Manutencao::all();

        $anosManutencoes = $manutencoesFeitas->pluck('created_at')->map(function ($data) {
            return $data->format('Y');
        })->toArray();


        $mesesDoAno = [
            'Janeiro',
            'Fevereiro',
            'Março',
            'Abril',
            'Maio',
            'Junho',
            'Julho',
            'Agosto',
            'Setembro',
            'Outubro',
            'Novembro' ,
            'Dezembro'
        ];

        $temManutencao = '';

        return view('manutencoes',
        [
            'manutencoes' => $manutencoesFeitas,
            'mesesDoAno' =>  $mesesDoAno,
            'temManutencao' => $temManutencao,
            'anosManutencoes' => $anosManutencoes

        ]
        );

    }


}
