<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailBase extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $data;

    public function __construct($data)
    {
        //data must be associative array as : ['title'=>'', 'address'=>'', 'name'=>'', 'url'=>'url', 'due_date'=>'timestamp', 'mail_type'=>'int']
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        switch ($this->data['mail_type']) {
            case 1:
                XX:
                # code...
                return $this->view('view.name', ['data'=>$this->data]);

            default:
                # code...
                goto XX;

        }
    }
}
