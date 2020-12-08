<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
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
     */
    public function build()
    {
        return $this->view('emails.contact')
            ->from(env("MAIL_FROM_ADDRESS"), env("MAIL_FROM_NAME"))
            ->replyTo(env("MAIL_FROM_ADDRESS"), env("MAIL_FROM_NAME"))
            ->subject($this->data['subject'])
            ->with([ 'data' => $this->data ]);

    }
}
