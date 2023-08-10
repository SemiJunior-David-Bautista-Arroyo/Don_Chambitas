<?php
include 'register/process_register_php/conexion.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Don Chambitas</title>
    <link rel="icon" href="assets/logo_principal.png" type="image/png">
</head>

<body>
    <header>
        <?php include 'header.php' ?>
    </header>
    <br>
    <br>
    <br>
    <div class="container" id="TITTLE">
        <div class="row">
            <div class="container mt-4">
                <div class="col-md-6 mx-auto">
                </div>
            </div>
        </div>
    </div>
    <!--CATEGORÍAS DE TRABAJOS-->
    <div class="container">
        <h2 class="mt-lg-5 mb-4" id="categorias">¿QUÉ TIPO DE SERVICIO LE GUSTARÍA SOLICITAR?</h2>
        <div class="row">

            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <a href="./categorias/albañil.php"> <img src="assets/Albañil.jpg" class="card-img-top small-image" alt="Imagen 1"></a>
                    <div class="card-body">
                        <h5 class="card-title">ALBAÑILERÍA</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <a href="./categorias/herreria.php"><img src="assets/herreria.jpg" class="card-img-top small-image" alt="Imagen 1"></a>
                    <div class="card-body">
                        <h5 class="card-title">HERRERIA EN GENERAL</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <a href="./categorias/mecanico.php"> <img src="assets/mecanico.jpg" class="card-img-top small-image" alt="Imagen 1"></a>
                    <div class="card-body">
                        <h5 class="card-title">MECÁNICO AUTOMOTRIZ</h5>

                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <a href="./categorias/plomeria.php"><img src="assets/plomeria.jpg" class="card-img-top small-image" alt="Imagen 1"></a>
                    <div class="card-body">
                        <h5 class="card-title">PLOMERÍA</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card d-flex flex-column align-items-center pulso">
                    <a href="./categorias/electricista.php"> <img src="assets/electricista.jpg" class="card-img-top small-image" alt="Imagen 1"></a>
                    <div class="card-body">
                        <h5 class="card-title">ELECTRICISTA</h5>
                    </div>
                </div>
            </div>

        </div>
        
        <?php
        // Consulta para obtener los datos de la tabla
                $sql = "SELECT *
        FROM usuarios AS u
        INNER JOIN trabajadores AS t ON u.id_usuario = t.usuario_id
        INNER JOIN profesiones AS p ON p.id_profesion = t.profesion_id
        INNER JOIN addresses AS a ON a.id_address = u.address_id
        INNER JOIN countries AS c ON c.id_country = a.country_id
        WHERE u.rol = 2";

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
                echo '<br><br>';
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

<?php
    include 'categorias/modal.php';
?>


    </div>
    <br>
    <!-- INICIA EL FOOTER -->
    <?php include 'footer.php'; ?>
    <!-- TERMINA EL FOOTER -->


    <script>
        const toggleSwitch = document.getElementById('toggleSwitch');
        let isActive = false;

        toggleSwitch.addEventListener('click', function() {
            console.log("Entró")
            isActive = !isActive;
            toggleSwitch.checked = isActive;
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
