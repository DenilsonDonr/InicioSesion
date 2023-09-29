<?php
    require_once "conexion.php";

    // Tomamos los datos del formulario login
    $Correo = $_POST['CorreoElectronico'];
    $Contrasnea = $_POST['Contrasena'];
    
    // Preparamos la consulta a la base de datos con una sentencia preparada
    try {
        $sql = "SELECT * FROM registro WHERE correo_electronico = :correo AND Contraseña = :contrasena";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':correo', $Correo);
        $stmt->bindParam(':contrasena', $Contrasena);
        $stmt->execute();
        
        $filas = $stmt->rowCount();
        
        if ($filas == 0) {
            echo "Usuario o contraseña incorrectos";
        } else {
            echo "Bienvenido CRAGGGGG";
        }
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    
    
?>