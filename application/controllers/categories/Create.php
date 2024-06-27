<?php

class Create extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');

    }

    public function index(){
        
        $this->load->view('layouts/standar/header');
        $this->load->view('categories/create');
        $this->load->view('layouts/standar/footer');

    }

    public function store(){

        // redirect('/categories/main/index');

        // $this->load->library('form_validation');

        // $this->form_validation->set_rules('title', 'Titulo', 'required');

        // if($this->form_validation->run() === FALSE){

        //     $this->load->view('categories/create');

        // }else{
            $data = [
                'title'       => $this->input->post('title'),
                'description' => $this->input->post('description')
            ];
            $this->category_model->store($data);
            //redirect('/categories/main/index');

            $result = [
                'status' => '200',
                'message' => 'Saved successfully',
                'data' => []
            ];
            $this->output
            // ->set_header('Access-Control-Allow-Origin: *')
            ->set_content_type('application/json')
            ->set_output(json_encode($result));

        // }

    }

}