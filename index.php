<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCJ</title>
    <link rel="stylesheet" href="index.css">
     <!-- pNotify -->
     <link href="public/pnotify/css/pnotify.css" rel="stylesheet" />
    <link href="public/pnotify/css/pnotify.buttons.css" rel="stylesheet" />
    <link href="public/pnotify/css/custom.min.css" rel="stylesheet" />
    <!-- pnotify -->
    <script src="public/pnotify/js/jquery.min.js">
    </script>
    <script src="public/pnotify/js/pnotify.js">
    </script>
    <script src="public/pnotify/js/pnotify.buttons.js">
    </script>
</head>
<body>

    <header>
        <div class="container">
            <p class="logo">Sagrado Corazon de Jesus</p>
            <nav>
                <a href="#somos-proya">Incidencias</a>
                <a href="#nuestros-programas">Informacion</a>
                <a href="registra.php">REGISTRA</a>
                <a href="incidencias.php">VISUALIZA</a>
            </nav>
        </div>
    </header>

    <section id="hero">
        <h1>Reporta las Incidencias <br>No te quedes callado</h1>
        <a href="registra.php"><button class="registra">HAZLO YA!</button></a>
    </section>
    

    <section id="somos-proya">
        <div class="container">
            <div class="img-container"></div>
            <div class="texto">

                <h2>Somos <span class="color-acento">Sagrado Corazon de Jesus</span></h2>
                <p>Una Institución Prestigiosa, con el fin de brindar un buen servicio de calidad a nuestros estudiantes, buscamos fomentar la buena practica de los valores en cada uno de nuestros integrantes</p>
            </div>
        </div>
    </section>

    <section id="nuestros-programas">
        <div class="container">
            <h2>TIPOS DE INCIDENCIAS</h2>
            <div class="programas">
                <div class="carta">
                    <h3>Incidencias Leves / Iniciales </h3>
                    <p>No realizo sus actividades en Clase</p>
                    <p>No obedece a los docentes en clases</p>
                </div>
                <div class="carta">
                    <h3>Incidencias Grave</h3>
                    <p>Falto el respeto a sus compañeros</p>
                    <p>Falto el respeto a los docentes</p>
                </div>
                <div class="carta">
                    <h3>Incidencias Muy Graves</h3>
                    <p>Participa en Peleas</p>
                    <p>Tardanzas y faltas reiteradamente</p>
                    <!--<button>+ Info</button>-->
                </div>  
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; Sagrado Corazon de Jesus | 5° D</p>
        </div>
    </footer>
</body>
</html>