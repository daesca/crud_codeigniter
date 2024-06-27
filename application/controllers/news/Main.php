<?php

class Main extends CI_Controller{

    // // public function __invoke()
    // // {
    //     $this->load->view('news/main');
    // // }

    public function index(){
        $this->load->view('news/main');
    }

}