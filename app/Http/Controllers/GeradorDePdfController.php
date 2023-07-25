<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Os;
use App\Models\Elevador;
use App\Models\Manutencao;
use App\Mail\SendMailRegistroOs;
use Illuminate\Support\Facades\Mail;



class GeradorDePdfController extends Controller
{
    //
    public function geraPdf($id){


        $oss = Os::all()->where('manutencao_id', $id);


        $pdf = \PDF::loadView('imprimePdfDeOs', [
            'Oss' => $oss,
        ])->setPaper('a4', 'portrait');

        $this->salvarPdfDeOs($pdf);

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

    public function salvarPdfDeOs($pdf)
{
    // Defina o caminho do diretório de armazenamento
    $storagePath = storage_path('temp');

    // Verifique se o diretório de armazenamento existe; caso contrário, crie-o recursivamente
    if (!file_exists($storagePath)) {
        mkdir($storagePath, 0777, true);
    }

    // Defina o nome do arquivo PDF que será usado para sobrescrever o anterior
    $pdfFileName = 'registro_de_os.pdf';

    // Caminho completo do arquivo PDF no diretório de armazenamento
    $pdfFilePath = $storagePath . DIRECTORY_SEPARATOR . $pdfFileName;

    // Salve o PDF no caminho específico
    file_put_contents($pdfFilePath, $pdf->output());
}

public function enviarEmail()
{
    $dados = ['chave' => 'valor']; // Substitua com os dados que deseja enviar no e-mail
    $to = 'renanjansen@gmail.com';
    Mail::to($to)->send(new SendMailRegistroOs($dados));
}
}
