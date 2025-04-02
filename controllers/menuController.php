<?php
require_once './models/menu.php';

class MenuController {
    public function obtenerMenu($idSeccion) {
        $menuModel = new Menu();
        return $menuModel->getMenuBySeccion($idSeccion);
        
    }    
}

?>
