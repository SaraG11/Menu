<?php
require_once './models/restaurante.php';
$restauranteModel = new Restaurante();
$restaurantes = $restauranteModel->getRestaurantes();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Selecciona un Restaurante</title>
</head>
<body class="bg-gray-800">
    <div>
        <nav class="flex flex-col justify-center text-white">
            <?php foreach ($restaurantes as $restaurante): ?>
                <a href="index.php?idRestaurante=<?= $restaurante['idRestaurante'] ?>">
                    <?= htmlspecialchars($restaurante['nombre']) ?>
                </a>
            <?php endforeach; ?>
        </nav>
    </div> 
</body>
</html>