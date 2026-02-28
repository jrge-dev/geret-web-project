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
  public function getAntenaById($id){
    $data = $this->db->query("SELECT * FROM antenas WHERE id='$id'");
    return $data->fetch_assoc();
  } 


    public function updateAntena($id, $estado){
        return $this->db->query("UPDATE antenas SET estado='$estado' WHERE id='$id'");
        

    }
}

?>
