<?php

class Login extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->has_userdata('logged_in') == TRUE){
            redirect("admin/galleryadmin");
        }
    }

    public function index(){
        redirect('login/displayform');
    }

    public function displayform(){
        $data = array(
            'title' => 'Welcome to Micro-Bloom',
        );
        $this->load->view("admin/includes/loginheader", $data);
        $this->load->view("admin/index");
        $this->load->view("admin/includes/adminfooter");
    }

    public function loginsubmit(){
        $username = $this->input->post('luname');
        $password = $this->input->post('lpass');

        $this->load->model('login_model');

        if($this->login_model->getUserDetails($username, $password) == FALSE){
            redirect("login/displayform");
        }else{
            
            $this->session->logged_in = TRUE;
            redirect("admin/galleryadmin");
        }
    }




}




