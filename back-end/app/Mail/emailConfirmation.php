<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class emailConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
 
    public function __construct($data)
    {
        //
        $this->email_data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        return $this->from(env(key:'MAIL_USERNAME'), name:'pasaBUY.com')->subject(subject: 'Welcome to pasabUY')->view('view.emailConfirmation', ['email_data' => $this->email_data]);
    }
}
