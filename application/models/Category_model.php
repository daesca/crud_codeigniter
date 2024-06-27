<?php

class Category_model extends CI_Model
{

    private string $table = 'categories';

    public function __construct()
    {
        $this->load->database();
    }

    public function searchById(int $id)
    {
        $query = $this->db->get_where($this->table, ['id' => $id]);
        return $query->result();
    }

    public function getAll()
    {

        $query = $this->db->get($this->table);
        return $query->result();
    }

    /**
     * Esta funcion obtiene las categorias por nombres
     * 
     * @param string $name Nombre de la category
     * @return array Resultado de las categorias segun el nombre
     */
    public function getByName($name)
    {
        $query = $this->db->get_where($this->table, ['title' => $name]);
        return $query->result();
    }
    //hotfix
    public function store(array $data)
    {

        //TODO Metodo privado para el set del dataSed
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

        return $this->db->where('id', $id)->update($this->table, $dataSet);
    }

    public function deleteById(int $id)
    {

        return $this->db->delete($this->table, ['id' => $id]);
    }
}
