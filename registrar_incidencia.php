<?php

// Verificar si se ha enviado el formulario
if (isset($_POST['btnregistrar'])) {
    // Obtener los valores enviados desde el formulario
    $idincidencias = $_POST['txtidincidencias'];
    $nombres = $_POST['txtnombres'];
    $descripcion = $_POST['txtdescripcion'];
    $grado = $_POST['txtgrado'];
    $seccion = $_POST['txtseccion'];
    $fecha = $_POST['txtfecha'];
    $docente = $_POST['txtdocente'];
   
    // Verificar si algún campo está vacío
    if (empty($idincidencias) || empty($nombres) || empty($descripcion) || empty($grado) || empty($seccion) || empty($fecha) || empty($docente)) {
        ?>
        <script>
            $(function notificacion() {
                new PNotify({
                    title: "ERROR",
                    type: "error",
                    text: "Los campos están vacíos",
                    styling: "bootstrap3"
                })
            })
        </script>
        <?php
    } else {
        // Verificar si el PEDIDO ya existe en la tabla 'pedidos'
        $sql = $conexion->query("SELECT COUNT(*) AS 'total' FROM incidencias WHERE idincidencias='$idincidencias'");
        if ($sql->fetch_object()->total > 0) {
            ?>
            <script>
                $(function notificacion() {
                    new PNotify({
                        title: "ERROR",
                        type: "error",
                        text: "La incidencia n° <?= $idincidencias ?> ya esta registrada",
                        styling: "bootstrap3"
                    })
                })
            </script>
            <?php
        } else {
            // Insertar el nuevo usuario en la tabla 'pedidos'
            $registro = $conexion->query("INSERT INTO incidencias (idincidencias,nombres, descripcion, grado, seccion, fecha, docente)
            VALUES ('$idincidencias','$nombres', '$descripcion', '$grado', '$seccion', '$fecha', '$docente')");
            
            if ($registro == true) {
                ?>
                <script>
                    $(function notificacion() {
                        new PNotify({
                            title: "CORRECTO",
                            type: "success",
                            text: "El numero de incidencia se ha registrado correctamente",
                            styling: "bootstrap3"
                        })
                    })
                </script>
                <?php
            } else {
                ?>
                <script>
                    $(function notificacion() {
                        new PNotify({
                            title: "INCORRECTO",
                            type: "error",
                            text: "Error al registrar la incidencia",
                            styling: "bootstrap3"
                        })
                    })
                </script>
                <?php
            }
        }
    }
} else {
    ?>
    <script>
        $(function notificacion() {
            new PNotify({
                title: "ERROR",
                type: "error",
                text: "Los campos están vacíos",
                styling: "bootstrap3"
            })
        })
    </script>
    <?php
}