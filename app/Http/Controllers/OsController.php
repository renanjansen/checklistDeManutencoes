<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Os;
use App\Models\Elevador;
use App\Models\Manutencao;

class OsController extends Controller
{
   //
        public function carregaOS($id){

        $elevadores = Elevador::all()->where('id', $id);

        return view('registroDeOs',
        [
            'elevadores' => $elevadores,
            'id' => $id
        ]
        );


    }
    public function cadastrarOs(Request $request){


         // instância do objeto Elevador da base de dados
            $elevadorAdd = new Manutencao;
         // instância do objeto Os da base de dados
            $os = new Os;

            $elevadorAdd->sigla = $request->sigla;
            $elevadorAdd->endereco = $request->endereco;
            $elevadorAdd->tipo = $request->tipo;
            $elevadorAdd->elevadores_id = $request->id;








         // por final os dados do objeto intanciado é salvo
            if ( $elevadorAdd->save()) {

            $os->atendimento = $request->atendimento;
            $os->cliente = $request->cliente;
            $os->mecanico = $request->mecanico;
            $os->defeito = $request->defeito;
            $os->solucao = $request->solucao;
            $os->material = $request->material;
            $os->manutencao_id = $elevadorAdd->id;



            // Image Upload

            // Primeiro cria-se uma condicional para caso o arquivo exista
            if($request->hasfile('imagens') && $request->file('imagens')->isValid()){

                // pega a extensão da imagem
                $requestImage = $request->imagens;

                $extension = $requestImage->extension();

                // gera uma string única baseada no tempo de upload através da hash conctenada com extensão do arquivo
                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . $extension);


                // salvando imagem no servidor
                $requestImage->move(public_path('img/imagens'), $imageName);

                $os->imagens = $imageName;


                $os->save();
            }
    }



            return redirect('/')->with('msg', 'Os Cadastrada com sucesso!');
    }
}

