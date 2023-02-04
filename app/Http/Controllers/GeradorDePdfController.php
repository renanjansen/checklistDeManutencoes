<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Os;
use App\Models\Elevador;
use App\Models\Manutencao;


class GeradorDePdfController extends Controller
{
    //
    public function geraPdf($id){


        $oss = Os::all()->where('manutencao_id', $id);



        return \PDF::loadView('imprimePdfDeOs',
        [
            'Oss' => $oss,

        ],
        compact('oss'))->setPaper('a4', 'portrait')->stream('registro_de_os.pdf');


    }

    public function montaPdf($id){

        $oss = Os::all()->where('manutencao_id', $id);



        return view('pdfDeOs',
            [
                'Oss' => $oss
            ]
        );
    }
}
