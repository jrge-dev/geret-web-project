<?php
require_once __DIR__ . "/connect.php";
class Autenticar {
    private $db;

    public function __construct() {
        global $connectDb;
        $this->db = $connectDb;
    }

    public function getUser($usuario, $password) {

        $result = $this->db->query("SELECT * FROM usuarios WHERE username='$usuario' AND password='$password'");


        if ($result && $result->num_rows > 0) {
            return $result->fetch_assoc();
        }
        
        return false;
    }
}