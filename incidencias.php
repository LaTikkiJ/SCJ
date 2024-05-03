<link rel="icon" type="image/x-icon" href="">
<title>REGISTRO</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- inicio del contenido principal -->
    <div class="contenidoTablas" style="margin-top: 120px; margin-left:40px; margin-right:40px;">
    <h4 class="text-center text-secondary" style="font-family: 'DM Serif Display', serif;"> SEGUIMIENTO DE REGISTROS </h4>

<?php
    include "modelo/conexion.php";
    include "controlador/registrar_incidencia.php";

    $sql = $conexion->query("SELECT * FROM incidencias");
    ?>

   <div>
    <a href="registro_pedido.php" class="btn btn-primary btn-rounded mb-4"><i class="fa-solid fa-plus"></i> &nbsp;Registrar</a>
    <a href="index.php" class="btn btn-secondary btn-rounded"><i class="fa-solid fa-rotate-left"></i> &nbsp;Atras</a>
    
    <table class="table table-bordered table-hover col-12" id="example">
        <thead class="thead-dark">
            <tr>
                <th scope="col">N°</th>
                <th scope="col">DATOS DEL ALUMNO </th>
                <th scope="col">DESCRIPCION</th>
                <th scope="col">GRADO</th>
                <th scope="col">SECCION</th>
                <th scope="col">FECHA</th>
                <th scope="col">DOCENTE</th>
                <th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($datos=$sql->fetch_object()) {?>
                <tr>
                    <td><?= $datos->idincidencias?></td>
                    <td><?= $datos->nombres?></td>
                    <td><?= $datos->descripcion?></td>
                    <td><?= $datos->grado?></td>
                    <td><?= $datos->seccion?></td>
                    <td><?= $datos->fecha?></td>
                    <td><?= $datos->docente?></td>
                    <td>
                        <a href="" data-toggle="modal" data-target="#exampleModal<?= $datos->id_incidencia ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" onclick="advertencia(event)" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                    </td>                   
                </tr>

                
            
                <!--Modal --> 
                <div class="modal fade" id="exampleModal<?= $datos->idincidencias?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header d-flex justify-content-between">
                                <h5 class="modal-title w-100" id="exampleModalLabel">Modificar Empleado</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST"> 
                                    <div hidden class="fl-flex-label mb-4 px-2 col-12">
                                        <input type="text" placeholder="ID" class="input input__text" name="txtid" value="<?= $datos->idincidencias?>">
                                    </div>
                                    <div class="fl-flex-label mb-4 px-2 col-12">
                                        <input type="text" placeholder="Numero Pedido" class="input input__text" name="txtnpedido" value="<?= $datos->numeropedido ?>">
                                    </div>
                                    <div class="fl-flex-label mb-4 px-2 col-12">
                                        <input type="text" placeholder="Codigo Seguimiento" class="input input__text" name="txtcodigo" value="<?= $datos->codseguimiento ?>">
                                    </div>
                                    <div class="fl-flex-label mb-4 px-2 col-12">
                                        <input type="text" placeholder="Empresa" class="input input__text" name="txtempresa" value="<?= $datos->empresa ?>">
                                    </div>
                                    <div class="fl-flex-label mb-4 px-2 col-12">
                                        <input type="date"  class="input input__text" name="txtfechapedido" value="<?= $datos->fechapedido ?>">
                                    </div>
                                    <div class="fl-flex-label mb-4 px-2 col-12">
                                        <input type="date"  class="input input__text" name="txtfechallegada" value="<?= $datos->fechallegada ?>">
                                    </div>
                                    <div class="fl-flex-label mb-4 px-2 col-12">
                                        <input type="number" placeholder="confirmado" class="input input__text" name="txtt" value="<?= $datos-> confirmado ?>">
                                    </div>
                                    
                                    <div class="text-right p-2">
                                        <a href="empleado.php" class="btn btn-secondary btn-rounded"><i class="fa-solid fa-rotate-left"></i> &nbsp;Atras</a>
                                        <button type="submit" value="ok" name="btnmodificar" class="btn btn-primary btn-rounded"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="m18.988 2.012l3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287l-3-3L8 13z"/><path fill="currentColor" d="M19 19H8.158c-.026 0-.053.01-.079.01c-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"/></svg> &nbsp;Modificar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
            <?php }
            ?>
        </tbody>
    </table>

</div>
</div>
<!-- fin del contenido principal -->