<?php
require_once './config/db.php';

class Restaurante {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getRestaurantes() {
        $sql = "SELECT idRestaurante, nombre FROM restaurantes";
        $result = $this->db->query($sql);

        $restaurantes = [];
        while ($row = $result->fetch_assoc()) {
            $restaurantes[] = $row;
        }

        return $restaurantes;
    }
}
?>
