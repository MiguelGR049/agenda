<?php
    /* echo "<pre>"; */
    //sirve para ver los datos que se envian por el metodo post
    /* var_dump($_POST);
    echo "</pre>"; */
    //sirve para ver los datos que se envian por el metodo file

    //sirve para ver que contiene un objeto

    include "../clases/Crud.php";
    $crud = new Crud(); //instancia de la clase crud

    $datos = [
        "paterno" => $_POST['paterno'],
        "materno" => $_POST['materno'],
        "nombre" => $_POST['nombre'],
        "telefono" => $_POST['telefono'],
        "correo" => $_POST['correo'],
        "descripcion" => $_POST['descripcion']
    ];

    $datos_file =[
        "nombre" => $_FILES ["foto"]["name"],
        "origen" => $_FILES ["foto"]["tmp_name"],
        "destino" => "../public/upload/".$_FILES ["foto"]["name"],
    ];
    
    if($id_contacto = $crud -> store($datos)>0){ //inserta el contacto y regresa el id
        if($crud -> store_path($id_contacto, $datos_file['nombre'],$datos_file['destino'])){ // inserta la ruta en la base de datos
            if(move_uploaded_file($datos_file['origen'], $datos_file['destino'])){ //mueve el archivo a la carpeta destino
                header("Location: ../index.php");
            }else{
                echo "Fallo al mover el archivo";
            }
        }
    }else{
        echo "fallo al insertar";
    }

?>