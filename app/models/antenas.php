<?php
require_once __DIR__ . "/connect.php";

class Antenas{
    private $db;
    public function __construct()
    {
        global $connectDb;
        $this->db = $connectDb;
    }
    public function getAntenas(){
        return $this->db->query("SELECT *FROM antenas");
    }

    public function updateAntena($id){
        return $this->db->query("UPDATE antenas SET estado='desactivo' WHERE id='$id'");
        

    }
}

?>