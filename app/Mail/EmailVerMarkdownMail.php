<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class EmailVerMarkdownMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $url;
    protected $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $rememberToken)
    {
        $this->name= $name;
        // $bytes= random_bytes(20);
        // $token= bin2hex($bytes);
        $this->url= env('APP_URL').'/emails/verify/'.$name.'/'.$rememberToken;
        // dd($this->url);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))->markdown('emails.VerMarkdown')->with([
            'name' => $this->name,
            'url' => $this->url,
        ]);
    }
}
