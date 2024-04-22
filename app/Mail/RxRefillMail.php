<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RxRefillMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $birthday;
    public $pharmacy_name;
    public $country;
    public $address_first;
    public $address_second;
    public $city;
    public $state;
    public $zip;
    public $medication;
    public $supplies;

    public function __construct($name,$birthday,$pharmacy_name ,$country ,$address_first,$address_second,$city,$state,$zip,$medication,$supplies)
    {
        //
        $this->name=$name;
        $this->birthday=$birthday;
        $this->pharmacy_name=$pharmacy_name;
        $this->country=$country;
        $this->address_first=$address_first;
        $this->address_second=$address_second;
        $this->city=$city;
        $this->state=$state;
        $this->zip=$zip;
        $this->medication=$medication;
        $this->supplies=$supplies;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.rxrefillform')
        ->subject('New Prescription Refill Request from CADHS')
        ->with([
            'name' => $this->name,
            'birthday' => $this->birthday,
            'pharmacy_name' => $this->pharmacy_name,
            'country' => $this->country,
            'address_first' => $this->address_first,
            'address_second' => $this->address_second,
            'city' => $this->city,
            'state' => $this->state,
            'zip' => $this->zip,
            'medication' => $this->medication,
            'supplies' => $this->supplies,
        ])
        ->bcc('selva@dselva.com');
    }
}
