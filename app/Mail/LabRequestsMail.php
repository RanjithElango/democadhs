<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LabRequestsMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $test_result;
    public $birthday;
    public $lab_choice;
    public $email;
    public $phone;


    public function __construct($name,$test_result,$birthday,$lab_choice,$email,$phone)
    {
        //
        $this->name=$name;
        $this->test_result=$test_result;
         $this->birthday=$birthday;
         $this->lab_choice=$lab_choice;
         $this->email=$email;
         $this->phone=$phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.labrequestform')
        ->subject('New Lab Request from CADHS')
        ->with([
            'name' => $this->name,
            'test_result' => $this->test_result,
            'birthday' => $this->birthday,
            'lab_choice' => $this->lab_choice,
            'email' => $this->email,
            'phone' => $this->phone,
        ])
        // ->bcc('selva@dselva.com');
        ->bcc('ranjithkutty1012@gmail.com');
    }
}
