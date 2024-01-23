<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ServiceBookingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected 
        $service, 
        $service_url,
        $customer_name,
        $customer_email,
        $customer_message;
    public function __construct($service, $url, $customer_name, $customer_email, $customer_message)
    {
        //
        $this->service = $service;
        $this->service_url = $url;
        $this->customer_name = $customer_name;
        $this->customer_email = $customer_email;
        $this->customer_message = $customer_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = [
            'title'=>'',
            'service'=>$this->service, 
            'url'=>$this->service_url,
            'customer_name'=>$this->customer_name,
            'customer_email'=>$this->customer_email,
            'customer_message'=>$this->customer_message
        ];
        return $this->view('mails.service_mail', $data);
    }
}
