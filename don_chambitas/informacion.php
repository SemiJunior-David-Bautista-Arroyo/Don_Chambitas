<?php
if (isset($_SESSION['usuario']) && isset($_SESSION['id_usuario'])) {
    require 'pdo.php';

    // Utiliza el ID del usuario almacenado en $_SESSION['id_usuario'] en la consulta.

    $idUsuario = $_SESSION['id_usuario'];
    $informacion = $conexion->prepare('SELECT * FROM usuarios
     INNER JOIN cuentas ON usuarios.cuenta_id = cuentas.id_cuenta
     INNER JOIN contacto ON contacto.usuario_id = usuarios.id_usuario
      WHERE cuenta_id = :idUsuario');
    $informacion->execute(array(':idUsuario' => $idUsuario));

    $nombre = '';
    $ap = '';
    $am = '';
    $edad = '';
    $email = ''; 
    $numero = '';

    if ($fila = $informacion->fetch()) {
        $nombre = $fila['nombre_usuario'];
        $ap = $fila['apellido_paterno'];
        $am = $fila['apellido_materno'];
        $edad = $fila['edad'];
        $email = $fila['correo_electronico'];
        $numero = $fila['telefono'];
        

    } else {
        $nombre = "Problemas";
        $ap = "Con";
        $am = "La";
        $edad = "Base";
        $email = "De";
        $numero = "Datos";
    
} 
}



?>
