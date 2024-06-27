<?php

class Main extends CI_Controller{

    
    public function __construct()
    {
            parent::__construct();
            $this->load->model('category_model');
            $this->load->helper('url_helper');
    }

    public function index(){

        $data = $this->category_model->getAll();
        // echo "<pre>";
        // print_r($data);
        $this->load->view('layouts/standar/header');
        $this->load->view('categories/main', ["categories" => $data]);
        $this->load->view('layouts/standar/footer');

    }

}