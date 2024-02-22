<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Os;
use App\Models\Elevador;
use App\Models\Manutencao;
use App\Mail\SendMailRegistroOs;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\GeradorDePdfController;
class ConstrutorDeEmailController extends Controller
{
    public function exibePdf() {
        $pdfFilePath = storage_path('temp/registro_de_os.pdf');

        // Verifica se o arquivo PDF existe
        if (!file_exists($pdfFilePath)) {
            abort(404, 'O arquivo PDF não foi encontrado.');
        }

        // Define o tipo de resposta como PDF
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        // Retorna a resposta HTTP com o conteúdo do PDF
        return response()->file($pdfFilePath, $headers);
    }
    public function enviarEmail()
    {
        $dados = ['chave' => 'valor']; // Substitua com os dados que deseja enviar no e-mail
        $to = 'renanjansen@gmail.com';
        Mail::to($to)->send(new SendMailRegistroOs($dados));

        // Verificar se houve falhas no envio
    if (count(Mail::failures()) > 0) {
        // Houve falha no envio do e-mail
        return redirect()->back()->with('msg', 'Falha ao enviar o e-mail.');
    } else {
        // E-mail enviado com sucesso
        return redirect()->back()->with('msg', 'E-mail enviado com sucesso !');
    }

    }
}
