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
    public function __construct()
    {
        //





    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        //Os::all()->where('manutencao_id', );
        $to = 'renanjansen@gmail.com';
        //Mail::to($to)->send(new SendMailRegistroOs());
        $this->subject('Os de Manutenção');
       // $this->attachData($this->geraPdf(15) ,'registro_de_os.pdf');
        $this->to($to);
        return $this->markdown('mail.SendMailRegistroOs');

    }
}
