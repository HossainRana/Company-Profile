<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    private $messageQuery;
    // private $email;
    // private $phone;
    // private $name;
    // public $subject;

    public function __construct($messageQuery,$email,$phone,$name,$subject)
    {
        
        $this->messageQuery = $messageQuery;
        $this->email = $email;
        $this->phone = $phone;
        $this->name = $name;
        $this->subject = $subject;
    }

    public function build()
    {
        return $this->view('email.client')->subject($this->subject)->with([
            'clientQuery' => $this->messageQuery,
            'clientEmail' => $this->email,
            'clientPhone' => $this->phone,
            'clientName' => $this->name,
            
        ]);
    }
}