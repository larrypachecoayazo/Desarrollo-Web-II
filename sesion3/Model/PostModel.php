<?php

include 'Model/DAO.php';

class PostModel extends DAO
{


    protected $table = "posts";


    public function getAll()
    {
        $result = $this->selectAll();
        return $result;
    }

    
    public function getById($id) 
    {
        //
    }


    public function store($data) {
        // 
    }


    public function update($id, $data) {}


    public function delete($id) {}

    

    
    
}
