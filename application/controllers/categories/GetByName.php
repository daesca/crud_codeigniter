<?php

class GetByName extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
    }

    /**
     * Esta funcion obtiene las categorias por nombres
     * 
     * @param string $name Nombre de la category
     * @return json_encode Resultado de las categorias segun el nombre
     */
    public function run($name){

        $categories = $this->category_model->getByName($name);

        $this->output
        // ->set_header('Access-Control-Allow-Origin: *')
        ->set_content_type('application/json')
        ->set_output(json_encode([
            'status' => '200',
            'data' => $categories
        ]));

        

    }

}