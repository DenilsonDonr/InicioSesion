<?php
    require_once "conexion.php";
    // Obtenemos los datos del formulario Registro
    $NombreCompleto = $_POST['NombreCompleto'];
    $Correo = $_POST['Correo'];
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['Contrasena'];

    //Preparamos la inserción de datos a la base de datos con un Try Cath
    try {
        $sql = "INSERT INTO registro (nombre_completo, correo_electronico, usuario, Contraseña) VALUES ('$NombreCompleto', '$Correo', '$Usuario', '$Contrasena')";
        $conexion->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
?>