<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    public function __construct($data)
    {
        $this->contact = $data;
    }

    public function build()
    {
        return $this->subject($this->contact['subject'])
                    ->view('emails.contact');
    }
}
