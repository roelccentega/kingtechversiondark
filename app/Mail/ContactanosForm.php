<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactanosForm extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
//            ->subject($this->data['subject'])
            ->replyTo($this->data['email'])
            ->view('emails.form-contact.contact')
            ->attach($this->data['archivo']->getRealPath(),[
                'as'=>$this->data['archivo']->getClientOriginalName()
            ]);
    }
}
