<?php
    include "header.php";
    include "clases/Crud.php";
    $crud = new Crud();
    $contactos = $crud -> show_all();
?>
<div class="container mt-5">
    <div class="row mt-5 justify-content-center">
        <div class="col mt-4 text-center">
            <div class="row mt-5 justify-content-center">
                <div class="card p-3 rounded-3 mb-4" style="background-color: rgba(255, 255, 255, 0.5);">
                    <div class="corner top-left">
                        <img src="public/img/adorno04.png" alt="Adorno esquina superior izquierda">
                    </div>
                    <div class="corner top-right">
                        <img src="public/img/adorno03.png" alt="Adorno esquina superior derecha">
                    </div>
                    <div class="corner bottom-left">
                        <img src="public/img/adorno01.png" alt="Adorno esquina inferior izquierda">
                    </div>
                    <div class="corner bottom-right">
                        <img src="public/img/adorno02.png" alt="Adorno esquina inferior derecha">
                    </div>
                    <h1 class="fw-bold text-center mb-4">Lista de contactos</h1>
                    <p>
                        <a href="create.php" class="btn btn-success"><i class="fa-solid fa-user-plus"></i> Agregar nuevo contacto</a>
                    </p>
                    <div class="content">
                        <table class="table table-hover p-3 rounded-3">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Apellido Paterno</th>
                                    <th scope="col">Apellido Materno</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($contactos as $contacto):
                                        $id = $contacto['id'];
                                ?>
                                <tr>
                                    <td><?php echo $contacto['id'] ?></td>
                                    <td><?php echo $contacto['paterno'] ?></td>
                                    <td><?php echo $contacto['materno'] ?></td>
                                    <td><?php echo $contacto['nombre'] ?></td>
                                    <td><?php echo $contacto['telefono'] ?></td>
                                    <td><?php echo $contacto['correo'] ?></td>
                                    <td><?php echo $contacto['descripcion'] ?></td>
                                    <td><img src="public/upload/<?php echo $contacto['foto'] ?>" alt="Foto de <?php echo $contacto['nombre'] ?>" width="20%" height="20%"></td>
                                    <td>
                                        <a href="editar.php?id=<?php echo $id; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="servidor/destroy.php?id=<?php echo $id; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </tr>
                                <?php
                                    endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>