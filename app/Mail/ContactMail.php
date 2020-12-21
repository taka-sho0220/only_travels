<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $contacts;

    public function __construct($contacts)
    {
        $this->contacts = $contacts;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('お問い合わせ内容について')
                ->from('tktks0529@gmail.com','ひとりでいけるモン管理人')
                ->text('contact.mail')
                ->to('tktks0529@gmail.com')
                ->with(['contacts' => $this->contacts]);
    }
}
