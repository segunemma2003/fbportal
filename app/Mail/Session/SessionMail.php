<?php

namespace App\Mail\Session;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SessionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $report;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($report)
    {
        $this->report=$report;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
         return $this->view('emails.sessionReport');
    }
}
