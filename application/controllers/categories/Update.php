<?php

class Update extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('category_model');
    }

    public function update(int $id){

            $data = [
                'title'       => $this->input->post('title'),
                'description' => $this->input->post('description')
            ];
            $this->category_model->updateById($id, $data);
            //redirect('/categories/main/index');

            $result = [
                'status' => '200',
                'message' => 'Updated successfully',
                'data' => []
            ];
            $this->output
            // ->set_header('Access-Control-Allow-Origin: *')
            ->set_content_type('application/json')
            ->set_output(json_encode($result));

    }

}