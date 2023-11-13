<?php include('conexion.php');?>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com"><!--Fuentes extraidas de un medio externo-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&family=Foldit:wght@200&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/espe/css/normalize.css">
    <link rel="stylesheet" href="/espe/css/estilos.css"><!--Estilos css-->
    <title>ODM</title><!--Esta etiqueta funciona para asignar el titulo de la pagina-->
</head>

<body>
    <header class="contenido"><!--Propiedades del encabezado-->
        <h1>PONTE EN CONTACTO CON NOSOTROS</h1><!--Etiqueta que asigna un tamaño de titulo grande al texto ingresado entre ellas-->
        <a href="index.html"><!--Con esta etiqueta podremos redireccionar a algun archivo o pagina ya creada-->
            <img src="img/AUTOBUS-VOLVO-9800-3-4-LAT-IZQ-SC.png" alt="Texto">
        </a>
        <a href="#contacto" onclick="seleccionar()">
             <i class="fa-solid fa-address-book"></i>
            <span>Contacto</span>
        </a>
    </header>
    <main class="formulario-contacto">
        <form action="conexion.php" method="post" class="formulario"><!--Crear formulario-->
            <fieldset><!--Agrupa los contenidos-->
                <legend>Tu opinión es muy importante</legend><!--Encabezado de formulario-->
                <div class="contenedor-campos">
                    <div class="campos">
                        <label>Nombre</label><!--Etiqueta del campo (Muestra a que se refiere)-->
                        <input class="input-text" type="text" name="nom" placeholder="Tu nombre"><!--Campo, tipo de dato, nombre del atributo en bd, etiqueta dentro del campo-->
                    </div>
                    <div class="campos">
                        <label>Telefono</label>
                        <input class="input-text" type="text" name="tel" placeholder="Tu telefono">
                    </div>
                    <div class="campos">
                        <label>Correo</label>
                        <input class="input-text" type="email" name="corr" placeholder="Tu correo">
                    </div>
                    <div class="campos">
                        <label>Mensaje</label>
                        <textarea class="input-text" name="mens"></textarea><!--Cuadro de texto-->
                    </div>
                </div>
                <div class="alinear-derecha flex">
                    <input class="boton w-100" type="submit" value="enviar">
                    <input class="boton w-100" type="submit" value="eliminar">
                </div>
            </fieldset>
        </form>
    </main>
</body>
 <!-- SECCION CONTACTO Y PIE DE PAGINA -->
 <section id="contacto">
        <div class="fila">
            <div class="col">
                <a href="https://www.gifsanimados.org/cat-autobuses-425.htm"><img src="https://www.gifsanimados.org/data/media/425/autobus-imagen-animada-0001.gif" border="0" alt="autobus-imagen-animada-0001" /></a>
            </div>
            <div class="col">
                <h3>Oferta Educativa</h3>
                <a href="#inicio">Inicio</a>
                <a href="#Modelos">Modelos</a>
                <a href="#Viajes">Viajes</a>
                <a href="#Destinos">Destinos</a>
            </div>
            <div class="col">
                <h3>Empresas Hermanas</h3>
                <a href="#">TAP</a>
                <a href="#">Noreste</a>
                <a href="#">Exprebus</a>
            </div>
            <div class="col">
                <h3>Social Media</h3>
                <div class="media">
                    <i class="fa-brands fa-facebook fa-beat-fade"></i> <a href="https://www.facebook.com/OmnibusdeMexicoOficial/">Facebook</a>
                </div>
                <div class="media">
                    <i class="fa-brands fa-twitter fa-beat-fade"></i> <a href="https://twitter.com/Omnibus_oficial ">Twitter</a>
                </div>
            </div>
            <div class="col">
                <h3>Contacto</h3>
                
            </div>
        </div>
    </section>
    
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="script.js"></script>
</html>