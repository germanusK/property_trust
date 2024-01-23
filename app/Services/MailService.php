<?php

namespace App\Services;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Http;

class MailService {

    use Queueable;

    protected $apiKey;
    protected $headers;
    protected $api_mail_url = "https://api.brevo.com/v3/smtp/email";
    public function __construct(string $apiKey)
    {
        # code...
        $this->apiKey = $apiKey;
        $this->headers = [
            'api-key'=>$apiKey,
            'content-type'=>'application/json',
            'accept'=>'application/json'
        ];
    }


    public function sendServiceEnquiryEmail($service, $url, $customer_name, $customer_email, $customer_message)
    {
        # code...
        
        // PREPARE MAIL DATA;
        $data['sender'] = [
            'name'=>$customer_name,
            'email'=>$customer_email
        ];
        $data['to'] = [
            ['name' => "PROPERTY TRUST GROUP GMAIL",'email' => "bpropertytrust@gmail.com"],
            ['name'=>'PROPERTY TRUST GROUP COMPANY EMAIL', 'email'=>'superadmin@propertytrust.group']
        ];
        $data['subject'] = "Service Enquiry From Propertytrust.group";
        
        // BUILD VIEW (mail htmlContent)
        $viewData = ['service'=>$service, 'resource_url'=>$url, 'customer_name'=>$customer_name, 'customer_message' => $customer_message];
        $data['htmlContent'] = view('mails.service_mail', $viewData);

        $response = Http::withHeaders($this->headers)->post($this->api_mail_url, $data);
        if($response->successful())
            return true;
        else 
            throw new \Exception($response->body());

    }

    public function sendProductEnquiryEmail($asset, $url, $customer_name, $customer_email, $customer_message)
    {
        # code...
        // PREPARE MAIL DATA;
        $data['sender'] = [
            'name'=>$customer_name,
            'email'=>$customer_email
        ];
        $data['to'] = [
            ['name' => "PROPERTY TRUST GROUP GMAIL",'email' => "bpropertytrust@gmail.com"],
            ['name'=>'PROPERTY TRUST GROUP COMPANY EMAIL', 'email'=>'superadmin@propertytrust.group']
        ];
        $data['subject'] = "Asset Enquiry From Propertytrust.group";
        
        // BUILD VIEW (mail htmlContent)
        $viewData = ['asset'=>$asset, 'resource_url'=>$url, 'customer_name'=>$customer_name, 'customer_message' => $customer_message];
        $data['htmlContent'] = view('mails.product_enquiry', $viewData);

        $response = Http::withHeaders($this->headers)->post($this->api_mail_url, $data);
        if($response->successful())
            return true;
        else 
            throw new \Exception($response->body());
    }

    public function sendNotificationEmail()
    {
        # code...
    }

}