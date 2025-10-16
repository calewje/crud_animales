<?php session_start();
    include "../clases/Conexion.php";
    include "../clases/Crud.php";

    $Crud = new Crud();

    $id = $_POST['id'];
    $datos = array(
        "mascota" => $_POST['mascota'],
        "edad" => $_POST['edad'],
        "especie" => $_POST['especie'],
        "raza" => $_POST['raza'],
        "dueno" => $_POST['dueno']
    );

    $respuesta = $Crud->actualizar($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        $_SESSION['mensaje_crud'] = 'update';
        header("location:../index.php");
    } else {
        print_r($respuesta);
    }

?>