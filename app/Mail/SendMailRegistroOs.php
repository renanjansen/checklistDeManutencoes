<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Models\Os;
use App\Http\Controllers\GeradorDePdfController;

class SendMailRegistroOs extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * The order instance.
     *
     * @var Pdf
     */

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $dados;

    public function __construct($dados)
    {
        //
        $this->dados = $dados;
    }



    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $pdfFilePath = storage_path('/temp/registro_de_os.pdf');

        return $this->subject('Assunto do E-mail')
                    ->markdown('mail.SendMailRegistroOs') // Substitua "minhaView" pelo nome da sua view Blade do e-mail
                    ->attach($pdfFilePath, [
                        'as' => 'registro_de_os.pdf', // Nome do arquivo anexado ao e-mail
                        'mime' => 'application/pdf', // Tipo MIME do arquivo (PDF)
                    ]);

    }

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

}
