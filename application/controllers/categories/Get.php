<?php

class Get extends CI_Controller{


    public function __construct(){
        parent::__construct();
        $this->load->model('category_model');
    }


    public function getById(int $id){

        $this->category_model->searchById($id);

    }

    public function getAll(){
//         header("Content-Type: application/json; charset=UTF-8");

// header("Access-Control-Allow-Origin: *");

// header("Access-Control-Allow-Methods: GET");
        $result = [
            'status' => '200',
            'data' => $this->category_model->getAll()
        ];
        $this->output
        // ->set_header('Access-Control-Allow-Origin: *')
        ->set_content_type('application/json')
        ->set_output(json_encode($result));

    }

}