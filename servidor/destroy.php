<?php
    include "../clases/Crud.php";
    $id = $_GET['id'];
    $crud = new Crud();

    if($crud -> destroy($id)){
        header("Location: ../index.php");
    } else {
        echo "Error al eliminar el contacto";
    }

?>