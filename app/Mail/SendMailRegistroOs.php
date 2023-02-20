<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Models\Os;

class SendMailRegistroOs extends Mailable
{
    use Queueable, SerializesModels;

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
        $to = 'freirevan41.vf@gmail.com';
        //Mail::to($to)->send(new SendMailRegistroOs());
        $this->subject('Os de Manutenção');
        $this->to($to);
        return $this->view('mail.SendMailRegistroOs');
    }
}
