<?php
include "header.php";
?>

<div class="container mt-4">
    <div class="row mb-3 justify-content-center">
        <div class="card justify-content-center" style="width: 25rem; background-color: rgba(255, 255, 255, 0.5);">
            <form action="servidor/store.php" method="post" enctype="multipart/form-data">
            <img class="mx-auto d-block" src="./public/img/Itadori.png" height="95" width="125px">
            <div class="card-body row justify-content-center">

                <h1 class="fw-bold text-center">Crear nuevo contacto</h1>

                <label for="paterno" class="form-label">Apellido paterno</label>
                <input type="text" class="form-control" name="paterno" id="paterno">

                <label for="materno" class="form-label">Apellido materno</label>
                <input type="text" class="form-control" name="materno" id="materno">

                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre">

                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="telefono" id="telefono">

                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo" id="correo">

                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>

                <label for="foto" class="form-label">Agrega una foto</label>
                <input type="file" class="form-control" name="foto" id="foto">

                <div class="col justify-content-center text-center">
                    <button type="submit" class="btn btn-success mb-2"><i class="fa-solid fa-chalkboard-user"></i>Enviar</button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>