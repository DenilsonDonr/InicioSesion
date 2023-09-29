<?php
    $local = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "PracticaInicioSesion";

    // Utilzamos try catch para capturar los errores
    try {
        $conexion = new PDO("mysql:host=$local;dbname=$bd", $usuario, $clave);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Conexión exitosa";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>