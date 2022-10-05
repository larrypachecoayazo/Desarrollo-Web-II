<?php

require_once ('DB.php');

class DAO {

    private $connection;

    public function __construct()
    {
        $this->connection = DB::getInstance();
    }

    
    public function query($sql)
    {        
        $stm = $this->connection->prepare($sql);
        $stm->execute();        
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function selectAll()
    {
        $sql = "SELECT * FROM {$this->table}";
        $stm = $this->connection->prepare($sql);
        $stm->execute();        
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function selectById($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $id);
        $stm->execute();
        $res = $stm->fetch();
        if ($res == false) {
            return null;
        }
        return $res;
    }

    public function store($data){}

    public function delete($id){}
    
    public function update($id, $data){}
    
}