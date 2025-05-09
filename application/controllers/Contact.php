<?php

class Contact extends CI_Controller{
    public function index()
    {
        $this->load->view("contact/index");

    }

    public function sendmail(){
        $this->load->library("email");

        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_timeout' => 30,
            'smtp_port' => 465,
            'smtp_user' =>'redrider0939@gmail.com', 
            'smtp_pass'=>'ymgrajadkleqkhki',
            'charset'=>'utf-8',
            'mailtype' => 'html',
            'newline'=>'\r\n'
        );

        $this->email->initialize($config);

        
        $this->email->set_newline("\r\n");
        $this->email->set_crlf("\r\n");
        $this->email->to("redrider0939@gmail.com");
        $this->email->from("info@gophp.in");
        $this->email->subject("Test Email Library");
        $this->email->message("Hello this is test mail function");
        if($this->email->send()){
            echo "Mail Successful";
        }
        else{
            echo "Sorry Lol";
        }
    }
}