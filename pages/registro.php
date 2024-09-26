<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plaster&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../sources/css/main.css">
  <script src="../sources/tailwind.config.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
    <header>
        <div class="icono-menu">
            <img src="https://res.cloudinary.com/djv5yehct/image/upload/v1725568269/codezero/tdwf3gh1j0ptczfevnkj.png" id="icono-menu">
        </div>  
        <div class="cont-menu active" id="menu">
          <ul>
            <li><a href="./index.html">INICIO</a></li>
              <li><a href="./acerca.html">ACERCA DE CODIGO DESDE 0</a></li>
              <li><a href="./quienes.html">¿QUIENES SOMOS?</a></li>
              <li><a href="./induccion.html">INDUCCIÓN</a></li>
              <li><a href="./programas.html">PROGRAMAS Y LENGUAJES</a></li>
              <li><a href="./cursos.html">CURSOS</a></li>
          </ul>
        </div>
    </header>
<body class="bg-gray-900 text-white font-sans">
    <div class="flex flex-col items-center min-h-screen">

        <!-- Header -->

        <div class="text-center mt-8">
            <div class="w-full flex justify-center">
                <img class="content-center size-1/3" src="https://res.cloudinary.com/dkvyzhgc6/image/upload/v1724791419/proyecto/iconos/ex2d28vjiub3k1jepqwh.png" alt="Logo">
            </div>
            <h1 class="text-lg font-bold plaster-regular" >CÓDIGO DESDE CERO</h1>
            <h2 class="text-md fira-code-uniquifier text-2xl">Regístrate</h2>
        </div>

        <!-- Formulario -->
        <form class="mt-8 w-full max-w-xs space-y-4">
            <div class="w-full flex">
            <input type="email" placeholder="Correo electrónico" class="w-full px-4 py-2 bg-gray-800 text-white border border-gray-600 rounded-xl">
            </div>
            <input type="text" placeholder="Nombre" class="w-full px-4 py-2 bg-gray-800 text-white border border-gray-600 rounded-xl">
            <input type="text" placeholder="Usuario" class="w-full px-4 py-2 bg-gray-800 text-white border border-gray-600 rounded-xl">
            <input type="password" placeholder="Contraseña" class="w-full px-4 py-2 bg-gray-800 text-white border border-gray-600 rounded-xl">
            <input type="password" placeholder="Confirmar contraseña" class="w-full px-4 py-2 bg-gray-800 text-white border border-gray-600 rounded-xl">
            <button type="submit" class="w-full py-2 bg-teal-600 hover:bg-teal-500 text-white font-bold rounded-xl">Registrarte</button>
        </form>

        <!-- ¿Tienes una cuenta? -->
        <div class="mt-4">
            <p>¿Tienes una cuenta? <a href="../pages/inicio.html" class="text-teal-400">Ya Tengo Cuenta</a></p>
        </div>

        <footer>
            <div class="lg:hidden mt-8 bg-slate-500 w-full p-4 text-center text-sm space-y-4 text-black">
            <div class="flex justify-center">
                <img src="https://res.cloudinary.com/dkvyzhgc6/image/upload/v1724792718/proyecto/iconos/o2z9zb2ocgh3kpsz1ijr.png" alt="Escudo 1" class="w-32 h-32">
                <img src="https://res.cloudinary.com/djv5yehct/image/upload/v1724793091/codezero/eipimanvxagv0qwog30r.png" alt="Escudo 2" class="h-32 w-44">
            </div>
            <p class="fira-code-uniquifier px-4 text-xl">
                Propósito:
            </p>
            <p class="fira-code-uniquifier text-left text-lg">
              Esta pagina está creada como medio de ayuda para los estudiantes que aspiran entrar a la media técnica del colegio I.E Campo Valdés mediante un convenio con la Institucion Universitaria Pascual Bravo.   
            </p>
            <p class="px-4 text-left text-xl">
                Dirección
            </p>
            <p class="fira-code-uniquifier text-left text-lg">
                Calle 83 No 47 - 33, Barrio Campo Valdés, Medellín - Antioquia - Colombia
            </p>
            <p class="px-4 text-left text-xl">
              Contáctanos 
            </p>
            <p class="fira-code-uniquifier text-left text-lg">
              Correo: ie.campovaldes@medellin.gov.co
            </p>
            <p class="px-4 text-left text-xl">
              Télefono: (604)211 82 34 - (604)233 68 97 
            </p>
      
        <!-- Footer -->
            <p class="fira-code-uniquifier text-xl text-left">
                © Copyright 2024 Todos los Derechos Reservados
            </p>
            <div class="flex justify-center space-x-4 mt-2">
                <img href="#" class="text-teal-400"><img src="https://res.cloudinary.com/djv5yehct/image/upload/v1724793091/codezero/xmk7f9b8xgnlomfbiulp.png" alt="Facebook" class="w-32 h-32">
                <img href="#" class="text-teal-400"><img src="https://res.cloudinary.com/djv5yehct/image/upload/v1724793091/codezero/lmwyvp9nvyqetqep7xcg.png" alt="Twitter" class=" w-20 h-20 mt-[24px]">
            </div>
      </div>
      <div class="hidden lg:block mt-8 bg-slate-500 w-full p-4 text-center text-sm space-y-4 text-black">
        <div class="flex">
            <img src="https://res.cloudinary.com/dkvyzhgc6/image/upload/v1724792718/proyecto/iconos/o2z9zb2ocgh3kpsz1ijr.png" alt="Escudo 1" class="w-48 h-48">
            <img src="https://res.cloudinary.com/djv5yehct/image/upload/v1724793091/codezero/eipimanvxagv0qwog30r.png" alt="Escudo 2" class="h-1/4 w-1/4 ms-[-95px] mt-[-20px]">
            <p class="fira-code-uniquifier text-left text-base h-fit w-[24%] mt-[15px] ms-[-70px]">
              Propósito: <br>
              Esta pagina está creada como medio de ayuda para los estudiantes que aspiran entrar a la media técnica del colegio I.E Campo Valdés mediante un convenio con la Institucion Universitaria Pascual Bravo.
            </p>
            <div class="flex justify-center space-x-4 mt-2">
                <img href="#" class="text-teal-400"><img src="https://res.cloudinary.com/djv5yehct/image/upload/v1724793091/codezero/xmk7f9b8xgnlomfbiulp.png" alt="Facebook" class="w-32 h-32 mt-[-10px]">
                <img href="#" class="text-teal-400"><img src="https://res.cloudinary.com/djv5yehct/image/upload/v1724793091/codezero/lmwyvp9nvyqetqep7xcg.png" alt="Twitter" class=" w-20 h-20 mt-[113px]">
            </div>
            <h2 class="fira-code-uniquifier text-left text-ls h-fit w-[24%] mt-[15px] ms-[40px]">
                Dirección<br>
                Calle 83 No 47 - 33, Barrio Campo Valdés, Medellín - Antioquia - Colombia
            </h2>
            <h2 class="fira-code-uniquifier text-left text-ls h-fit w-[24%] mt-[100px] ms-[-318px]">
              Contáctanos <br>
                Télefono: (604)211 82 34 - (604)233 68 97 <br>
                Correo: ie.campovaldes@medellin.gov.co
            </h2>
        </div>
      </div>
      </div>
      </footer>
            <div class="derechos">
              <p class="copy">© Copyright 2024 Todos los Derechos Reservados</p> 
              <p class="tyc">Términos y condiciones</p>
            </div>
            <script src="../sources/js/main.js"></script>
      </body>
      </html>
