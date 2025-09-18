<?php
    include "../clases/crud.php";
    $id = $_GET['id'];
    $crud = new Crud();
    $datos = [
        "paterno" => $_POST['paterno'],
        "materno" => $_POST['materno'],
        "nombre" => $_POST['nombre'],
        "telefono" => $_POST['telefono'],
        "correo" => $_POST['correo'],
        "descripcion" => $_POST['descripcion']
    ];
    if($crud -> update($id, $datos)){
        header("Location: ../index.php");
    } else {
        echo "Error al actualizar el contacto";
    }
?>