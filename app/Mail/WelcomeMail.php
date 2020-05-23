<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from( 'email@example.com' ) // who the mail is from
            ->subject( 'Welcome to my Website!' ) // mails subject line
            ->view('emails.welcome') // which html/rich output we should send
            ->text( 'emails..welcome_plain' ); // fallback, in case we were sending a simple text mail
    }
}
