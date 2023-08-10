<?php 
require 'pdo.php';

$obtener_id = $conexion->prepare('SELECT *
FROM usuarios AS u
INNER JOIN trabajadores AS t ON u.id_usuario = t.usuario_id
INNER JOIN profesiones AS p ON p.id_profesion = t.profesion_id
INNER JOIN addresses AS a ON a.id_address = u.address_id
INNER JOIN countries AS c ON c.id_country = a.country_id
INNER JOIN profesiones AS pr ON t.profesion_id = pr.id_profesion
WHERE u.rol = "trabajador"');
$obtener_id->execute();
$id_trabajadores = $obtener_id->fetchAll(); // Obtener todos los resultados en un array

foreach ($id_trabajadores as $fila) {
    $idUsuario = $fila['id_usuario'];
    $nombre = $fila['nombre_usuario'] . '&nbsp;';
    $ap = $fila['apellido_paterno'] . '&nbsp;';
    $am = $fila['apellido_materno'] . '<br>';
    $profesion = $fila['name_profesion'];
    $imagenUsuario = $fila['imagen'];

    $consulta_imagen = $conexion->prepare('SELECT imagen FROM usuarios WHERE cuenta_id = :idUsuario');
    $consulta_imagen->execute(array(':idUsuario' => $idUsuario));
    $resultado_imagen = $consulta_imagen->fetch();
    
    // Procesar $resultado_imagen si es necesario
}


?>