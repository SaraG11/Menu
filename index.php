<?php

require_once './config/db.php';
require_once './views/layout/header.php';
require_once './controllers/seccionController.php';
require_once './controllers/menuController.php';

// ID del restaurante
// $idRestaurante = 1;

// Verificar si hay un restaurante seleccionado
$idRestaurante = isset($_GET['idRestaurante']) ? intval($_GET['idRestaurante']) : null;

if($idRestaurante){
    $seccionController = new seccionController();
    $secciones = $seccionController->viewSection($idRestaurante); 
    $menuController = new MenuController();

} else {
    // Si no se ha seleccionado un restaurante, mostrar la lista de restaurantes
    require_once './verMenus.php';
}

?>