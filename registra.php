<link rel="icon" type="image/x-icon" href="../vista/login/img/LOGO.png">
<title>Registro de Incidencias</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="registra.css">
    
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

<?php
include "modelo/conexion.php";
include "controlador/registrar_incidencia.php";
?>

<div class="contenidoTablas" style="margin-top: 120px; margin-left:40px; margin-right:40px;">
    <h4 class="text-center text-secondary" style="font-family: 'DM Serif Display', serif;"> REGISTRA LA INCIDENCIA</h4>
<div class="row" >
<form action="" method="POST">
    <div class="row">
        <div class="input-wrapper">
            <input class="input-box" type="text" placeholder="ID" name="txtidincidencias">
            <span class="underline"></span>
        </div>

        <div class="input-wrapper">
            <input class="input-box" type="text" placeholder="ALUMNO" name="txtnombres">
            <span class="underline"></span>
        </div>

        <div class="input-wrapper">
            <input class="input-box" type="text" placeholder="DESCRIPCION" name="txtdescripcion">
            <span class="underline"></span>
        </div>

        <div class="input-wrapper" onclick="toggleSelect()">
        <select class="input input-box" type="text" name="txtgrado">
                <option value="">GRADO</option>
                <option value="1">1°</option>
                <option value="2">2°</option>
                <option value="3">3°</option>
                <option value="4">4°</option>
                <option value="5">5°</option>
                <option value="6">6°</option>
            </select>
        </div>

        <script>
            function toggleSelect() {
                var selectElement = document.getElementById("selectElement");
                selectElement.classList.toggle("collapsed");
            }
        </script>

        <div class="input-wrapper" onclick="toggleSelect()">
            <select class="input input-box" type="text" name="txtseccion">
                <option value="">SECCION</option>
                <option value="A">A°</option>
                <option value="B">B°</option>
                <option value="C">C°</option>
                <option value="D">D°</option>
                <option value="E">E°</option>
            </select>
        </div>

        <div class="input-wrapper" onclick="toggleSelect()">
            <input class="input input-box" type="date" placeholder="FECHA" name="txtfecha">
        </div>

        <div class="input-wrapper" onclick="toggleSelect()">
            <select class="input input-box" type="text" name="txtdocente">
                <option value="">DOCENTE </option>
                <option value="A">1</option>
                <option value="B">2</option>
                <option value="C">3</option>
                <option value="D">4</option>
                <option value="E">5</option>
            </select>
        </div>
    
    <div class="text-right p-2">
        <a href="index.php" class="btn btn-secondary btn-rounded"><i class="fa-solid fa-rotate-left"></i> &nbsp;Atras</a>
        <button type="submit" value="ok" name="btnregistrar" class="btn btn-primary btn-rounded"><i class="fa-solid fa-registered"></i> &nbsp;Registrar</button>
    </div>
</form>