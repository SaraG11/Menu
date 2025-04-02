<?php
require_once './config/db.php'; // Asegúrate de que la ruta sea correcta

class Menu {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getMenuBySeccion($idSeccion) {
        $sql = "SELECT ca.idSeccion, cm.idCat, ca.nombre_cat, cm.platillo, cm.descripcion, cm.precio, cm.cantidad
            FROM carta_menu cm
            INNER JOIN categoria ca ON cm.idCat = ca.idCat
            WHERE ca.idSeccion = $idSeccion";

        $result = $this->db->query($sql);

        if (!$result) {
            die("Error en la consulta: " . $this->db->error);
        }

        $menu = [];

        while ($row = $result->fetch_assoc()) {
            $menu[$row['nombre_cat']][] = $row;
        }

        // print_r($menu); // Agrega esto para depurar

        return $menu;
    }
    
}
?>
