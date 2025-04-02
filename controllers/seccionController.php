<?php

require_once './models/seccion.php';
require_once './controllers/menuController.php'; // Agregar esta línea

class seccionController {

    public function viewSection($idRestaurante) {
        if (!$idRestaurante) {
            return []; // Si no hay restaurante, retornar array vacío
        }

        $seccionModel = new Seccion($idRestaurante);
        $secciones = $seccionModel->getSecciones();
        

        // Instancia de MenuController
        $menuController = new MenuController();
        
        require_once './views/menuNav.php';
    }
}