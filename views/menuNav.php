<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../src/output.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=GFS+Didot&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <!-- Iconos -->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <title>Pacifica Resort - Menu </title>
</head>
  <!-- <body class="bg-gray-50"> -->

  <?php if (!empty($secciones)) : ?>
    <?php $firstSeccion = reset($secciones); ?>
    <div class="flex flex-end w-full h-[250px] web-only md:h-[150px] sm:h-[100px] bg-cover bg-center">
        <img id="header-image" src="./img/<?= $firstSeccion['imagen_header'] ?>" alt="Imagen Header" class="w-full h-full object-cover sm:object-contain">
    </div> 

    <div class="sticky top-0 w-full shadow-lg z-50">
      <nav id="menuNav" class="flex justify-evenly h-20 text-center bg-gray-50 relative text-[#568cb0]">
        <?php foreach ($secciones as $seccion) : ?>
          <a href="#" 
            class="menu-item flex flex-col px-6 py-2 md:px-20 items-center" 
            data-section="<?= strtolower($seccion['nombre_seccion']) ?>"
            data-image="./img/<?= $seccion['imagen_header'] ?>">
            <img src="./img/<?= $seccion['icono'] ?>" width="40" height="40" alt="icon-<?= strtolower($seccion['nombre_seccion']) ?>">
            <span class="text-xs uppercase mt-2 text-gray-500"><?= $seccion['nombre_seccion'] ?></span>
          </a>
        <?php endforeach; ?>
        <div id="indicator" class="indicator absolute bottom-0 left-0 h-1 bg-[#568cb0] rounded-full sm:w-full"></div>
      </nav>
    </div>

    <?php foreach ($secciones as $seccion) : ?>
    <?php $menu = $menuController->obtenerMenu($seccion['idSeccion']); ?>
    <div class="content-section w-full max-w-full mx-auto xl-px lg-px md-px sm-px pb-20 hidden" id="<?= strtolower($seccion['nombre_seccion']) ?>">
    <div class="py-11">
        <h2 class="categoria text-3xl text-center uppercase tracking-widest"><?= $seccion['nombre_seccion']?></h2>
        <hr class="w-11/12 h-0.5 mt-4 mx-auto bg-[#568cb0] border-0 rounded-sm md:my-5">
    </div>

    <?php if (!empty($menu)) : ?>
        <div class="w-full max-w-lg md:max-w-md lg:max-w-sm mx-auto space-y-6 mt-5 pt-9">
            <?php foreach ($menu as $nombreCategoria => $platillos) : ?>
                <span class="font-bold text-2xl md:text-3xl italic categoria mb-5"><?= $nombreCategoria  ?></span>
                <?php foreach ($platillos as $item) : ?>
                    <div class="pb-2">
                        <div class="flex justify-between border-b border-[#568cb0] pb-2 mt-6 text-gray-500">
                            <div class="flex flex-col">
                                <p class="font-bold text-lg contenido"><?= $item['platillo'] ?> <span class="text-xs"><?= $item['cantidad']?></span></p>
                                <span class="text-sm text-gray-600 p-2"><?= $item['descripcion'] ?></span>
                            </div>
                            <span class="font-bold precio">$<?= $item['precio'] ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    <?php else : ?>
        <p class="text-center text-gray-500">No hay platillos disponibles en esta sección.</p>
    <?php endif; ?>
</div>

    <?php endforeach; ?>
  <?php endif; ?>
<script src="../js/app.js"></script>