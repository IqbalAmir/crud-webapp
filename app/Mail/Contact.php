<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $query;

    public function __construct($query)
    {
        $this->query=$query;
    }

    public function build()
    {
        return $this->markdown('emails.contact');
    }
}
