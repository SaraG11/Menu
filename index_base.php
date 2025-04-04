<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./src/output.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=GFS+Didot&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <!-- Iconos -->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <title>Pacifica Resort - Menu </title>
</head>
  <body class="bg-gray-50">
    <!-- Header -->
    <div class="w-full h-[70px] web-only bg-cover bg-center bg-header">
      <div class="flex justify-between px-5 py-3">
          <button id="menu-btn" class="text-white w-12 h-12 text-2xl hover:bg-gray-50 hover:text-white">
            <ion-icon name="menu"></ion-icon>
          </button>
          <!-- Imagen de header -->
          <img src="./img/pacifica_logo_footer.png" alt="header" width="75">
          <button class="border-2 border-[#0069af] w-12 h-12 text-base rounded-full hover:bg-[#8bcaf4] hover:text-white">
            <span class="text-white">ES</span>
          </button>        
      </div>
    </div>

    <!-- Sidebar -->
    <div id="sidebar" class="fixed top-0 left-0 h-full w-3/4 sm:w-1/2 md:w-1/3 lg:w-1/4 bg-black transform -translate-x-full transition-transform duration-300 ease-in-out z-50">
        <div class="flex justify-start p-4">
            <button id="close-btn" class="text-gray-400 text-2xl hover:text-white">
                <ion-icon name="close"></ion-icon>
            </button>
        </div>
        
        <div class="px-6">
          <h2 class="">Restaurantes</h2>
            <ul class="space-y-3">
                <li class="border-t border-[#0069af] pt-3">
                    <a href="#" class="block text-white">Reservar Cena</a>
                </li>
                <li class="border-t border-[#0069af] pt-3">
                    <a href="#" class="block text-white">Encuesta</a>
                </li>
                <li class="border-t border-[#0069af] pt-3">
                
              </li>
            </ul>
        </div>
    </div>

    <!-- Imagen header-->
    <div class="flex flex-end w-full h-[250px] web-only md:h-[150px] sm:h-[100px] bg-cover bg-center">
      <img id="header-image" alt="Imagen cena" class="w-full h-full object-cover sm:object-contain">
    </div> 

    <!-- Nav principal -->
    <div class="sticky top-0 w-full shadow-lg z-50">   
      
      <nav id="menuNav" class="flex justify-evenly h-20 text-center bg-gray-50 relative text-[#568cb0] ">
          <a href="#" class="menu-item flex flex-col px-6 py-2 md:px-20 items-center active" data-section="cocteles">
            <img src="./img/vinos-icon.jpg" width="40" height="40" alt="icon-vinos">
            <span class="text-xs uppercase mt-2 text-gray-500">Cocteles</span>
          </a>
      
          <a href="#" class="menu-item flex flex-col px-6 py-2 md:px-20 lg:px-20 items-center" data-section="desayuno">
            <img src="./img/desayuno-icon.jpg" width="40" height="40" alt="icon-vinos">
            <span class="text-xs sm:text-sm uppercase mt-2 text-gray-500">Desayuno</span>
          </a>

          <a href="#" class="menu-item flex flex-col px-6 py-2 md:px-20 items-center" data-section="cena">
            <img src="./img/cena-icon.jpg" width="40" height="40" alt="icon-vinos">
            <span class="text-xs uppercase mt-2 text-gray-500">Cena</span>
          </a>   
          
          <a href="#" class="menu-item flex flex-col px-6 py-2 md:px-20 items-center" data-section="postres">
            <img src="./img/postreicon.jpg" width="40" height="40" alt="icon-vinos">
            <span class="text-xs uppercase mt-2 text-gray-500">Postres</span>
          </a> 
        <div id="indicator" class="indicator absolute bottom-0 left-0 h-1 bg-[#568cb0] rounded-full sm:w-full"></div>
      </nav> 
    </div>
  
  
    <!-- Secciones de cada elemento del menu (COCTELES) -->
    <div class="content-section max-w-full mx-auto px-5 pb-20 sm:px-10 md:px-28" id="cocteles">
      <header>
        <div class="py-11">
          <h2 class="categoria text-3xl text-center uppercase tracking-widest">Cocteles</h2>
          <hr class="w-11/12 h-0.5 mt-4 mx-auto bg-[#568cb0] border-0 rounded-sm md:my-5 ">
        </div>
      </header>
  
  
      <!-- Vinos espumosos -->
      <div class="w-full mx-auto space-y-6">
          <span class="font-bold text-3xl md:text-3xl italic categoria mb-4">Vinos</span>
          <div class="space-y-5 mb-5 mt-4">
              <span id="cocteles" class="font-semibold text-lg contenido mb-4">Espumosos</span>
              <div class="flex justify-between border-b border-[#568cb0] pb-2 mt-6">
                <div class="flex flex-col">
                  <p class="font-bold contenido text-lg">Prosecco <span class="text-xs">(750 ML)</span></p>
                  <span class="text-sm text-gray-600">Italia, Veneto Glera</span>
                </div>
                <span class="font-bold precio">$960</span>
              </div>
              <div class="flex justify-between border-b pb-2 border-[#568cb0]">
                <div class="flex flex-col">
                  <p class="font-bold text-lg contenido">Cava Sutra <span class="text-xs">(750 ML)</span></p>
                  <span class="text-sm text-gray-600">España, Cataliña</span>
                  <span class="text-sm text-gray-600">Macabeo-Chardonay</span>
                </div>
                <span class="font-bold precio">$960</span>
              </div>
              <div class="flex justify-between border-b pb-2 border-[#568cb0]">
                <div class="flex flex-col">
                  <p class="font-bold text-lg contenido">Veuve Clicquot Brut <span class="text-xs">(750 ML)</span></p>
                  <span class="text-sm text-gray-600">Francia, Reims, Mezcla de Uvas</span>
                </div>
                <span class="font-bold precio">$2,500</span>
              </div>
          </div>
      </div>


      <!-- vinos rosados-->
      <div class="w-full mx-auto space-y-6 mt-5 pt-9">
        <div class="space-y-5">
            <span id="cocteles" class="font-semibold text-xl contenido mb-4">Rosados</span>
            <div class="flex justify-between border-b border-[#568cb0] pb-2 mt-6">
              <div class="flex flex-col">
                <p class="font-bold text-lg contenido">Porta 6 Rose Castelao <span class="text-xs">(750 ML)</span></p>
                <span class="text-sm text-gray-500">Portugal, Lisboa, TintaRoiz-Syrah</span>
              </div>
              <span class="font-bold precio">$660</span>
            </div>
            <div class="flex justify-between border-b pb-2 border-[#568cb0] text-gray-500">
              <div class="flex flex-col">
                <p class="font-bold text-lg contenido">Rose D'Anjou <span class="text-xs">(750 ML)</span></p>
                <span class="text-sm text-gray-600">Loire, Francia, Cabernet Franc, Grolleau & Gamay</span>
              </div>
              <span class="font-bold precio">$680</span>
            </div>
            <div class="flex justify-between border-b pb-2 border-[#568cb0] text-gray-500">
              <div class="flex flex-col">
                <p class="font-bold text-lg contenido">Beringer <span class="text-xs">(750 ML)</span></p>
                <span class="text-sm text-gray-600">USA, California White Zinfandel</span>
              </div>
              <span class="font-bold precio">$900</span>
            </div>
        </div>
      </div>
    </div>

    <!-- Secciones de cada elemento del menu (DESAYUNOS) -->
    <div class="content-section max-w-full mx-auto px-5 pb-20 sm:px-10 md:px-28" id="desayuno">
      <header>
        <div class="py-11">
          <h2 class="categoria text-3xl text-center uppercase tracking-widest">DESAYUNOS</h2>
          <hr class="w-11/12 h-0.5 mt-4 mx-auto bg-[#568cb0] border-0 rounded-sm md:my-5 ">
        </div>
      </header>
  
  
      <!-- Bebidas -->
      <div class="w-full mx-auto space-y-6">
          <span class="font-bold text-2xl md:text-3xl italic categoria mb-4">Bebidas</span>
          <div class="space-y-5 mb-5 mt-4">
              <!-- <span id="bebidas" class="text-italic text-[#568cb0] mb-4">Jugos Naturales</span> -->
              <div class="flex justify-between border-b border-[#568cb0] pb-2 mt-6 text-gray-500">
                <div class="flex flex-col">
                  <p class="font-bold text-lg contenido"> Jugos Naturales </p>
                  <span class="text-sm text-gray-600">Naranja, Toronja o Jugo Verde</span>
                </div>
                <span class="font-bold precio">$70</span>
              </div>
              <div class="flex justify-between border-b pb-2 border-[#568cb0] text-gray-500">
                <div class="flex flex-col">
                  <p class="font-bold text-lg text-gray-500 contenido">Fresco de Verano</p>
                  <span class="text-sm text-gray-600">Manzana, Piña, Hierbabuena, Jengibre y Jugo de naranja.</span>
                </div>
                <span class="font-bold  precio">$90</span>
              </div>
              <div class="flex justify-between border-b pb-2 border-[#568cb0] text-gray-500">
                <div class="flex flex-col">
                  <p class="font-bold text-lg text-gray-500 contenido">Detox</p>
                  <span class="text-sm text-gray-600">Pepino, Limon, Espinaca, Betabel, Apio con Jugo de Naranja</span>
                </div>
                <span class="font-bold precio">$90</span>
              </div>
          </div>
      </div>


      <!-- DESPERTAR-->
      <div class="w-full mx-auto space-y-6 mt-5 pt-9">
        <span class="font-bold text-2xl md:text-3xl italic categoria mb-4">Despertar</span>
        <div class="space-y-5">
            <!-- <span id="desayuno" class="text-italic text-[#568cb0] mb-4">Despertar</span> -->
            <div class="flex justify-between border-b border-[#568cb0] pb-2 mt-6 text-gray-500">
              <div class="flex flex-col">
                <p class="font-bold text-lg contenido">Supremas Grand</p>
                <span class="text-sm text-gray-600">Supremas de cítrico acompañados de Granola hecha en casa</span>
              </div>
              <span class="font-bold precio">$120</span>
            </div>
            <div class="flex justify-between border-b pb-2 border-[#568cb0] text-gray-500">
              <div class="flex flex-col">
                <p class="font-bold text-lg contenido">Jardin Frutal</p>
                <span class="text-sm text-gray-600">Selección de fruta tropical con salsa de cítricos</span>
              </div>
              <span class="font-bold precio">$120</span>
            </div>
            <div class="flex justify-between border-b pb-2 border-[#568cb0] text-gray-500">
              <div class="flex flex-col">
                <p class="font-bold text-lg contenido">Hot Cackes "Los Fit"</p>
                <span class="text-sm text-gray-600">Elaborados con avena, plátano y zanahoria, acompañados con miel maple o lechera</span>
              </div>
              <span class="font-bold precio">$145</span>
            </div>
        </div>
      </div>

      <!-- ESPECIALIDADES-->
      <div class="w-full mx-auto space-y-6 mt-5 pt-9">
        <span class="font-bold text-2xl md:text-3xl italic categoria mb-4">Especialidades</span>
        <div class="space-y-5">
            <!-- <span id="desayuno" class="text-italic text-[#568cb0] mb-4">Despertar</span> -->
            <div class="flex justify-between border-b border-[#568cb0] pb-2 mt-6 ">
              <div class="flex flex-col">
                <p class="font-bold text-lg contenido">Enfrijoladas "El suspiro"</p>
                <span class="text-sm text-gray-600">Con un toque de chipotle, rellenas de huevo revuelto con chorizo espolvoreado</span>
              </div>
              <span class="font-bold precio">$165</span>
            </div>
            <div class="flex justify-between border-b pb-2 border-[#568cb0] text-gray-500">
              <div class="flex flex-col">
                <p class="font-bold text-lg contenido">Enchiladas estilo Zihua</p>
                <span class="text-sm text-gray-600">Rellenas de aporreadillo, bañadas en salsa verde</span>
              </div>
              <span class="font-bold precio">$175</span>
            </div>
            <div class="flex justify-between border-b pb-2 border-[#568cb0] text-gray-500">
              <div class="flex flex-col">
                <p class="font-bold text-lg contenido">Huevos a la cazuela</p>
                <span class="text-sm text-gray-600">Estrellados sobre juliana de tortilla, bañados en salsa de chicharron roja</span>
              </div>
              <span class="font-bold precio">$170</span>
            </div>
        </div>
      </div>


    </div>

    <!-- Secciones de cada elemento del menu (CENA) -->
    <div class="content-section max-w-full mx-auto px-5 pb-20 sm:px-10 md:px-28" id="cena">
      <header>
        <div class="py-11">
          <h2 class="categoria text-3xl text-center uppercase tracking-widest">CENA</h2>
          <hr class="w-11/12 h-0.5 mt-4 mx-auto bg-[#568cb0] border-0 rounded-sm md:my-5 ">
        </div>
      </header>
  
  
      <!-- Ensaladas -->
      <div class="w-full mx-auto space-y-6">
          <span class="categoria font-bold text-2xl md:text-3xl italic text-[#568cb0] mb-4">Ensaladas</span>
          <div class="space-y-5 mb-5 mt-4">
              <!-- <span id="bebidas" class="text-italic text-[#568cb0] mb-4">Jugos Naturales</span> -->
              <div class="flex justify-between border-b border-[#568cb0] pb-2 mt-6 ">
                <div class="flex flex-col">
                  <p class="font-bold text-lg contenido"> Ensalada de Betabel rostizado y pera </p>
                  <span class="text-sm text-gray-600">Queso de cabra, pera pochada y vinagreta de jengibre y miel </span>
                </div>
                <span class="font-bold precio">$180</span>
              </div>
              <div class="flex justify-between border-b pb-2 border-[#568cb0] text-gray-500">
                <div class="flex flex-col">
                  <p class="font-bold text-lg contenido">Mozzarella Italiana</p>
                  <span class="text-sm text-gray-600">Tomates cherry, aceite de oliva extra irgen y balsámico de Módena</span>
                </div>
                <span class="font-bold precio">$90</span>
              </div>
              <div class="flex justify-between border-b pb-2 border-[#568cb0] text-gray-500">
                <div class="flex flex-col">
                  <p class="font-bold text-lg contenido">La César</p>
                  <span class="text-sm text-gray-600">Aderezo de anchoas, huevo y queso parmesano, crotones</span>
                </div>
                <span class="font-bold precio">$2,500</span>
              </div>
          </div>
      </div>


      <!-- PASTAS-->
      <div class="w-full mx-auto space-y-6 mt-5 pt-9">
        <span class="categoria font-bold text-2xl md:text-3xl italic text-[#568cb0] mb-4">Pastas y Risottos</span>
        <div class="space-y-5">
            <!-- <span id="desayuno" class="text-italic text-[#568cb0] mb-4">Despertar</span> -->
            <div class="flex justify-between border-b border-[#568cb0] pb-2 mt-6 text-gray-500">
              <div class="flex flex-col">
                <p class="font-bold text-lg contenido">Risotto al funghi</p>
                <span class="text-sm text-gray-600">Risotto cremoso con hongos portabello, champioñones y queso parmesano</span>
              </div>
              <span class="font-bold precio">$355</span>
            </div>
            <div class="flex justify-between border-b pb-2 border-[#568cb0] text-gray-500">
              <div class="flex flex-col">
                <p class="font-bold text-lg contenido">Pasta a la rueda</p>
                <span class="text-sm text-gray-600">Fetuccini a la mantequilla preparado en la rueda de queso parmesano</span>
              </div>
              <span class="font-bold precio">$430</span>
            </div>
            <div class="flex justify-between border-b pb-2 border-[#568cb0] text-gray-500">
              <div class="flex flex-col">
                <p class="font-bold text-lg contenido">Risotto, Grana Padana</p>
                <span class="text-sm text-gray-600">Risotto con camarones al azafrán, servido con camarones salteados con mantequilla y ajo</span>
              </div>
              <span class="font-bold precio">$325</span>
            </div>
        </div>
      </div>

      <!-- Mariscos-->
      <div class="w-full mx-auto space-y-6 mt-5 pt-9">
        <span class="categoria font-bold text-2xl md:text-3xl italic text-[#568cb0] mb-4">Pescados y Mariscos</span>
        <div class="space-y-5">
            <!-- <span id="desayuno" class="text-italic text-[#568cb0] mb-4">Despertar</span> -->
            <div class="flex justify-between border-b border-[#568cb0] pb-2 mt-6 text-gray-500">
              <div class="flex flex-col">
                <p class="font-bold text-lg contenido">Pulpo tatemado</p>
                <span class="text-sm text-gray-600">Puré de camote y espárragos a la parrilla ligeramente picante</span>
              </div>
              <span class="font-bold precio">$595</span>
            </div>
            <div class="flex justify-between border-b pb-2 border-[#568cb0] text-gray-500">
              <div class="flex flex-col">
                <p class="font-bold text-lg contenido">Pescado Frito</p>
                <span class="text-sm text-gray-600">Preparado estilo playero, ajo rostizado, aceite de oliva y chile de árbol</span>
              </div>
              <span class="font-bold precio">$540</span>
            </div>
            <div class="flex justify-between border-b pb-2 border-[#568cb0] text-gray-500">
              <div class="flex flex-col">
                <p class="font-bold text-lg contenido">Salmón Rostizado</p>
                <span class="text-sm text-gray-600">Puré de coliflor y chícharo japonés</span>
              </div>
              <span class="font-bold precio">$490</span>
            </div>
        </div>
      </div>


    </div>

    <!-- Secciones de cada elemento del menu (POSTRES) -->
    <div class="content-section max-w-full mx-auto px-5 pb-20 sm:px-10 md:px-28" id="postres">
      <header>
        <div class="py-11">
          <h2 class="categoria text-3xl text-center uppercase tracking-widest">POSTRES</h2>
          <hr class="w-11/12 h-0.5 mt-4 mx-auto bg-[#568cb0] border-0 rounded-sm md:my-5 ">
        </div>
      </header>
  
  
      <!-- Ensaladas -->
      <div class="w-full mx-auto space-y-6">
          <span class="font-bold text-2xl md:text-3xl italic categoria mb-4">Postres</span>
          <div class="space-y-5 mb-5 mt-4">
              <!-- <span id="bebidas" class="text-italic text-[#568cb0] mb-4">Jugos Naturales</span> -->
              <div class="flex justify-between border-b border-[#568cb0] pb-2 mt-6">
                <div class="flex flex-col">
                  <p class="font-bold text-lg contenido"> Banana bread tiramisú </p>
                  <span class="text-sm text-gray-600">Nuestro famoso pan de plátano, queso mascarpone, café y chocolate amargo </span>
                </div>
                <span class="font-bold precio">$155</span>
              </div>
              <div class="flex justify-between border-b pb-2 border-[#568cb0] text-gray-500">
                <div class="flex flex-col">
                  <p class="font-bold text-lg contenido">Tarta Casera de manzanas</p>
                  <span class="text-sm text-gray-600">Al sartén, salsa de caramelo, helado de vainilla y almendras</span>
                </div>
                <span class="font-bold precio">$155</span>
              </div>
              <div class="flex justify-between border-b pb-2 border-[#568cb0] text-gray-500">
                <div class="flex flex-col">
                  <p class="font-bold text-lg contenido">Helados Artesanales</p>
                  <span class="text-sm text-gray-600">Vainilla | Chocolate | Café | Ferror Rocher</span>
                </div>
                <span class="font-bold precio">$155</span>
              </div>
          </div>
      </div>


    </div>
<!-- 
    <footer class="w-full h-[120px] bg-cover bg-center bg-black">
      <div class="flex justify-center">
        <img src="./img/pacifica_logo_footer.png" alt="footer" class="my-5">
      </div>
    </footer> -->

    <script src="./js/app2.js"></script>
  </body>
</html>