<?php

// Utiliza el ID del usuario almacenado en $_SESSION['id_usuario'] en la consulta.
$idUsuario = $_SESSION['id_usuario'];

$consulta_imagen = $conexion->prepare('SELECT imagen FROM usuarios WHERE cuenta_id = :idUsuario');
$consulta_imagen->execute(array(':idUsuario' => $idUsuario));

// Procesar el resultado de la consulta
if ($fila = $consulta_imagen->fetch()) {
    $imagenUsuario = $fila['imagen'];

    // Mostrar la imagen del usuario en un contenedor redondeado
    echo '<div  style ="50%; overflow: hidden; width: 100px; height: 100px;">';
    echo '<img class="rounded-circle"; src="data:image/jpeg;base64,' . base64_encode($imagenUsuario) . '" alt="Imagen de usuario" style="width: 100%; height: 100%; object-fit: cover;">';
    echo '</div>';
} else {
    echo "No se encontró una imagen para el usuario con ID: $idUsuario.";
}
?>
