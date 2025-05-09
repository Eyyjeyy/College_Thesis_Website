<?php


class Gamewebsite extends CI_Controller{

    public function index(){
        redirect("gamewebsite/home");
    }

    public function home(){
        $this->load->model('admin_model');
        $result = $this->admin_model->getHomepageContent();
        $newTableData = $this->admin_model->getHomepage2Content();
        $data = array(
            'title' => 'Welcome to Micro-Bloom',
            'AllItems' => $result,
            'NewTableData' => $newTableData
        );
        $this->load->view("gamewebsite/includes/header", $data);
        $this->load->view("gamewebsite/homepage");
        $this->load->view("gamewebsite/includes/footer");
    }

    public function contact(){
        $data = array(
            'title' => 'Welcome to Micro-Bloom',
        );
        $this->load->view("gamewebsite/includes/header", $data);
        $this->load->view("gamewebsite/contactpage");
        $this->load->view("gamewebsite/includes/footer");
    }

    public function about(){
        $this->load->model('admin_model');
        $result = $this->admin_model->getAboutpageContent();
        $data = array(
            'title' => 'Welcome to Micro-Bloom',
            'AllItems' => $result
        );
        $this->load->view("gamewebsite/includes/header", $data);
        $this->load->view("gamewebsite/aboutpage");
        $this->load->view("gamewebsite/includes/footer");
    }

    public function gallery(){

        $this->load->model('admin_model');
        $result = $this->admin_model->getAllItems();

        $data = array(
            'title' => 'Welcome to Micro-Bloom',
            'AllItems' => $result
        );
        $this->load->view("gamewebsite/includes/header", $data);
        $this->load->view("gamewebsite/gallerypage");
        $this->load->view("gamewebsite/includes/footer");
    }
}

