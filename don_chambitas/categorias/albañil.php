<?php session_start();
include '../register/process_register_php/conexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albañiles | Don Chambitas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles.css">
</head>
    <?php include 'header.php'; ?>
<body>
<div class="container" style="margin-top: 150px;">
    <h1 class="fw-bold">Albañiles</h1>
    <br>
</div>

<?php
        // Consulta para obtener los datos de la tabla
                $sql = "SELECT *
        FROM usuarios AS u
        INNER JOIN trabajadores AS t ON u.id_usuario = t.usuario_id
        INNER JOIN profesiones AS p ON p.id_profesion = t.profesion_id
        INNER JOIN addresses AS a ON a.id_address = u.address_id
        INNER JOIN countries AS c ON c.id_country = a.country_id
        WHERE u.rol = 2 and name_profesion = 'Albañil'";

        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            $count = 0; // Contador para controlar las columnas
            while ($row = $result->fetch_assoc()) {
                if ($count % 4 === 0) {
                    // Cada 4 registros, inicia una nueva fila
                    echo '<div class="container"><div class="row">';
                }

                $nombre_usuario = $row["nombre_usuario"];
                $profesion_nombre = $row["name_profesion"];
                $calle = $row['calle'];
                $num_calle = $row['numero_exterior'];
                $pais = $row['name_country'];

                // Muestra la tarjeta con la información del usuario
                echo '<div class="col-md-3 text-center">';
                echo '    <div class="card">';
                echo '        <h2>' . $nombre_usuario . '</h2>';
                echo '        <h2>' . $profesion_nombre . '</h2>';
                echo '        <div class="container">';
                echo '        <h6>'. $calle .'&nbsp'. $num_calle .'<br>'. $pais . '</h6>';

                // Muestra la imagen si está presente
                if ($row["imagen"]) {
                    echo '            <img src="data:image/jpg;base64,' . base64_encode($row["imagen"]) . '" alt="Imagen" style="width: 60%; height: 60%; object-fit: cover; border-radius:50%"> ';
                } else {
                    echo '            <p>No hay imagen disponible.</p>';
                }

                echo '            <button class="btn m-4" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="solicitarServicio()">Solicitar servicio</button>';
                echo '            <br>';
                echo '        </div>';
                echo '    </div>';
                echo '</div>';

                $count++;

                if ($count % 4 === 0) {
                    // Cada 4 registros, cierra la fila
                    echo '</div></div>';
                }
            }
            // Si el último grupo de registros no llenó una fila completa, cierra la fila
            if ($count % 4 !== 0) {
                echo '</div></div>';
            }
        } else {
            echo "No se encontraron datos en la tabla.";
        }

        // Cerrar la conexión
        $conexion->close();
        ?>

    <?php include 'modal.php'; ?>
    </div>
</body>
</html>
