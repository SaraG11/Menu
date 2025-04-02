<?php

class Seccion {
    private $db;
    private $idRestaurante;

    public function __construct($idRestaurante) {
        $this->db = Database::connect();
        $this->idRestaurante = $idRestaurante;
    }

    public function getSecciones() {
        $sql = "SELECT idSeccion, nombre_seccion, icono, imagen_header 
                FROM secciones 
                WHERE idRestaurante = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $this->idRestaurante);
        $stmt->execute();
        $result = $stmt->get_result();

        $secciones = [];
        while ($row = $result->fetch_assoc()) {
            $secciones[] = $row;
        }

        return $secciones;
    }
}
