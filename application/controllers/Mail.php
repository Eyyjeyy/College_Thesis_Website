<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller{
   
    function  __construct(){
        parent::__construct();
    }
   
    function send(){
        /* Load PHPMailer library */
        $this->load->library('phpmailer_lib');
       
        /* PHPMailer object */
        $mail = $this->phpmailer_lib->load();
       
        /* SMTP configuration */
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'redrider0939@gmail.com';
        $mail->Password = 'ozpkuccjnevkmqtf';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
       
        $mail->setFrom('redrider0939@gmail.com', 'Mail');
        $mail->addReplyTo('redrider0939@gmail.com', 'Mail');
       
        /* Add a recipient */
        $mail->addAddress('mistyrious0939@gmail.com');
       
        /* Add cc or bcc */
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
       
        /* Email subject */
        $mail->Subject = 'Send Email via SMTP using PHPMailer in CodeIgniter';
       
        /* Set email format to HTML */
        $mail->isHTML(true);
       
        /* Email body content */
        $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
        <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $mailContent;
       
        /* Send email */
        if(!$mail->send()){
            echo 'Mail could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Mail has been sent';
        }
    }

    public function sendbest() {
        /* Load PHPMailer library */
        $this->load->library('phpmailer_lib');
       
        /* PHPMailer object */
        $mail = $this->phpmailer_lib->load();
       
        /* SMTP configuration */
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'redrider0939@gmail.com';
        $mail->Password = 'ozpkuccjnevkmqtf';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
       
        /* Set sender and recipient */
        $sender_name = $this->input->post('name');
        $sender_email = $this->input->post('email');
        $recipient_email = 'fixed@example.com';
    
        $mail->setFrom($sender_email, $sender_name);
        $mail->addReplyTo($sender_email, $sender_name);
        $mail->addAddress($recipient_email);
       
        /* Email subject */
        $subject = $this->input->post('subject');
        $mail->Subject = $subject;
       
        /* Set email format to HTML */
        $mail->isHTML(true);
       
        /* Email body content */
        $message = $this->input->post('message');
        $mailContent = "<h1>$subject</h1>
        <p>Name: $sender_name</p>
        <p>Email: $sender_email</p>
        <p>Message: $message</p>";
        $mail->Body = $mailContent;
       
        /* Send email */
        if(!$mail->send()) {
            echo 'Mail could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Mail has been sent';
        }
    }

    public function contact_form(){
        $this->load->view('contact/contact_form');
    }
    
   
}
