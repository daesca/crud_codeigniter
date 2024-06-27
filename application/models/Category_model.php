<?php

class Category_model extends CI_Model{

    private string $table = 'categories';

    public function __construct()
    {
        $this->load->database();
    }

    public function searchById(int $id){
        $query = $this->db->get_where($this->table, ['id' => $id]);
        return $query->result();
    }

    public function getAll(){

        $query = $this->db->get($this->table);
        return $query->result();

    }

    public function store(array $data){

        $dataSet = [
            'title' =>       $data['title'],
            'description' => $data['description']
        ];

        return $this->db->insert($this->table, $dataSet);
    }

    public function updateById(int $id, array $data)
    {
        $dataSet = [
            'title' =>       $data['title'],
            'description' => $data['description']
        ];

        return $this->db->where('id', $id)->update('categories', $dataSet);
    }

    public function deleteById(int $id){

       return $this->db->delete($this->table, ['id' => $id]);
        
    }

}