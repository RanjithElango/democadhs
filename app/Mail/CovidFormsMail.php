<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CovidFormsMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $birthday;
    public $categories;
    public $physical_contact;
    public $isolate_detail;
    public $test_result;

    public function __construct($name,$birthday,$categories,$physical_contact,$isolate_detail,$test_result)
    {
        //
         $this->name=$name;
         $this->birthday=$birthday;
         $this->categories=$categories;
         $this->physical_contact=$physical_contact;
         $this->isolate_detail=$isolate_detail;
         $this->test_result=$test_result;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.newcovidform')
                    ->subject('New Covid-19 Screening Survey from CADHS')
                    ->with([
                        'name' => $this->name,
                        'birthday' => $this->birthday,
                        'categories' => $this->categories,
                        'physical_contact' => $this->physical_contact,
                        'isolate_detail' => $this->isolate_detail,
                        'test_result' => $this->test_result,
                    ])
                    ->bcc('selva@dselva.com');
    }
}
