<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormsMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $email;
    public $messages;


    public function __construct($name, $email,$messages)
    {
        //
         $this->name=$name;
         $this->email= $email;
         $this->messages=$messages;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.newcontactform')
                    ->subject('New contact message from CADHS')
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'message' => $this->messages,
                    ])
                    // ->bcc('selva@dselva.com');
                    ->bcc('ranjithkutty1012@gmail.com');
    }
}
