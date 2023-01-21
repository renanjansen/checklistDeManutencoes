<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Os;
use App\Models\Elevador;
use App\Models\Manutencao;


class GeradorDePdfController extends Controller
{
    //
    public function geraPdf(){

        $id = 1;
        $oss = Os::all()->where('id',$id);

        return \PDF::loadView('pdfDeOs',
        [
            'Oss' => $oss,

        ],
        compact('oss')

        )->setPaper('a4', 'landscape')->download('registro_de_os.pdf');

    }
    public function montaPdf(){

        $oss = Os::all()->where('id',1);

        return view('pdfDeOs',
        [
            'Oss' => $oss,

        ]
        );

    }
}
