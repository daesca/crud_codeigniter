<?php

class Delete extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('category_model');

    }

    public function delete($id){
       
        $this->category_model->deleteById($id);

        $result = [
            'status' => '200',
            'message' => 'Saved successfully',
            'data' => []
        ];
        $this->output
        // ->set_header('Access-Control-Allow-Origin: *')
        ->set_content_type('application/json')
        ->set_output(json_encode($result));

        // redirect('categories/index');

    }

}