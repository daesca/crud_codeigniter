<?php

class GetById extends CI_Controller{


    public function __construct(){
        parent::__construct();
        $this->load->model('category_model');
    }


    public function run(int $id){

        $result = [
            'status' => '200',
            'data' =>$this->category_model->searchById($id)
        ];
        $this->output
        ->set_header('Access-Control-Allow-Origin: *')
        ->set_status_header('200')
        ->set_content_type('application/json')
        ->set_output(json_encode($result));

    }


}