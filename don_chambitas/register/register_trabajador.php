<?php
// Incluir el archivo de conexión
include "process_register_php/conexion.php";

// Realizar la primera consulta para obtener las opciones de tipo_licencia
$sql_tipo_licencia = "SELECT id_tipo_licencia, nombre_tipo_licencia FROM tipo_licencia";
$result_tipo_licencia = $conexion->query($sql_tipo_licencia);

// Realizar la primera consulta para obtener las opciones de tipo_licencia
$sql_profesiones = "SELECT id_profesion, name_profesion FROM profesiones";
$result_profesiones = $conexion->query($sql_profesiones);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro trabajador</title>
    <!-- Estilos de Bootstrap (se carga desde un CDN) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="register_trabajador.css">
</head>

<body>
    <div class='container'>

        <div class="container mt-5">

            <form id="process_trabajador" action="process_register_php/process_trabajador.php" method="POST" enctype="multipart/form-data">

                <!-- Primera parte de la solicitud de empleo -->
                <div class="card mb-3">
                    <div class="card-header bg-dark text-white">
                        <h3><i class="fas fa-id-card"></i> Solicitar empleo</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="cuadro_foto">
                                    <label for="imagen"><strong>Subir foto </strong><strong style="color: red;">*</strong></label>
                                    <input type="file" id="imagen" name="imagen" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p>Es necesario llenar todos los campos con la información correcta</p>
                                <div class="form-group">
                                    <label for="fecha">Fecha <strong style="color: red;">*</strong></label>
                                    <input type="text" class="form-control" id="fecha" name="fecha" placeholder="fecha" required>
                                </div>
                                <div class="form-group">
                                    <label for="name_profesion">Puesto Solicitado <strong style="color: red;">*</strong></label>
                                    <select class="form-control" id="name_profesion" name="name_profesion">
                                        <option value="">-- SELECCIONE --</option>
                                        <?php
                                        // Recorrer los resultados de la consulta y crear las opciones del select
                                        if ($result_profesiones->num_rows > 0) {
                                            while ($row = $result_profesiones->fetch_assoc()) {
                                                echo '<option value="' . $row["id_profesion"] . '">' . $row["name_profesion"] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="sueldo_deseado">Sueldo deseado <strong style="color: red;">*</strong></label>
                                    <input type="text" class="form-control" id="sueldo_deseado" name="sueldo_deseado" placeholder="Escribe tu sueldo deseado" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Segunda parte de la solicitud de empleo -->

                <div class="card">
                    <div class="card-header bg-dark  text-white">
                        <h3><i class="fas fa-user"></i> Datos personales</h3>
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="nombre_usuario" class="col-sm-3 col-form-label">Nombre(s) <strong style="color: red;">*</strong></label>
                            <div class="col-sm-9">
                                <input autocomplete="off" class="form-control" type="text" id="nombre_usuario" name="nombre_usuario" required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellido_paterno" class="col-sm-3 col-form-label">Primer Apellido <strong style="color: red;" required>*</strong></label>
                            <div class="col-sm-3">
                                <input autocomplete="off" class="form-control" id="apellido_paterno" name="apellido_paterno" type="text" />
                            </div>
                            <label for="apellido_materno" class="col-sm-3 col-form-label">Segundo Apellido <strong style="color: red;">*</strong></label>
                            <div class="col-sm-3">
                                <input autocomplete="off" class="form-control" id="apellido_materno" name="apellido_materno" type="text" />
                            </div>
                        </div>

                        <div id="cfdiData" class="mt-4">
                            <div class="card">
                                <div class="card-header bg-dark text-white">
                                    <h4>Datos de contacto</h4>
                                </div>
                                <div class="card-body">


                                    <div class="form-group row">
                                        <label for="correo_electronico" class="col-sm-3 col-form-label">Correo Electronico *</label>
                                        <div class="col-sm-9">
                                            <input autocomplete="off" class="form-control" id="correo_electronico" name="correo_electronico" type="text" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="my_password" class="col-sm-3 col-form-label">Contraseña *</label>
                                        <div class="col-sm-9">
                                            <input autocomplete="off" class="form-control" id="my_password" name="my_password" type="text" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="telefono" class="col-sm-3 col-form-label">Telefono *</label>
                                        <div class="col-sm-9">
                                            <input autocomplete="off" class="form-control" id="telefono" name="telefono" type="text" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <br>


                <!-- Tercera parte del formulario -->

                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h3><i class="fas fa-file-alt"></i> Dirección</h3>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <label for="name_country">País *</label>
                                <input type="text" class="form-control" id="name_country" name="name_country" placeholder="">
                            </div>

                            <div class="col-md-6">
                                <label for="estado_o_provincia">Estado o provincia *</label>
                                <input type="text" class="form-control" id="estado_o_provincia" name="estado_o_provincia" placeholder="">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="numero_codigo_postal">Codigo postal *</label>
                                <input type="text" class="form-control" id="numero_codigo_postal" name="numero_codigo_postal" placeholder="">
                            </div>

                            <div class="col-md-6">
                                <label for="calle">Calle *</label>
                                <input type="text" class="form-control" id="calle" name="calle" placeholder="">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="numero_interior">Numero Interior *</label>
                                <input type="text" class="form-control" id="numero_interior" name="numero_interior" placeholder="">
                            </div>

                            <div class="col-md-6">
                                <label for="numero_exterior">Numero Exterior *</label>
                                <input type="text" class="form-control" id="numero_exterior" name="numero_exterior" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <!-- Cuarta parte de la solicitud de empleo -->

                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h3><i class="fas fa-file-alt"></i> Documentación</h3>
                    </div>

                    <div class="card-body">
                        <p style="text-align: justify;"><strong>En caso de que algún campo no aplique a su situación,
                                le solicitamos dejarlo en blanco. Es fundamental que los datos proporcionados sean precisos y completos, ya que serán sometidos a una revisión cuidadosa.</strong>
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="numero_curp">Número de CURP <strong style="color: red;">*</strong></label>
                                <input type="text" class="form-control" id="numero_curp" name="numero_curp" placeholder="Escribe tu CURP">
                            </div>

                            <div class="col-md-6">
                                <label for="rfc">Ingrese su RFC <strong style="color: red;">*</strong></label>
                                <input type="text" class="form-control" id="rfc" name="rfc" placeholder="Escribe el número del servicio militar">
                            </div>

                            <!-- <div class="col-md-4">
                            <label for="numero_pasaporte">Número de Pasaporte <strong style="color: red;">*</strong></label>
                            <input type="text" class="form-control" id="numero_pasaporte" name="numero_pasaporte"  placeholder="Escribe el número de Pasaporte">
                        </div> -->
                        </div>

                        <br>

                        <div class="row">

                            <!-- Se despliegan las opciones segun la bd -->

                            <div class="col-md-3">
                                <label for="tiene_licencia">¿Tiene licencia? <strong style="color: red;">*</strong></label>
                                <div class="option-container">
                                    <input type="radio" id="opcion_si" name="tiene_licencia" value="Si">
                                    <label for="opcion_si" class="option-label">Sí</label>
                                    <input type="radio" id="opcion_no" name="tiene_licencia" value="No">
                                    <label for="opcion_no" class="option-label">No</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label for="nombre_tipo_licencia" class="col-sm-3 col-form-label">Tipo <strong style="color: red;">*</strong></label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="nombre_tipo_licencia" name="nombre_tipo_licencia">
                                            <option value="">-- SELECCIONE --</option>
                                            <?php
                                            // Recorrer los resultados de la consulta y crear las opciones del select
                                            if ($result_tipo_licencia->num_rows > 0) {
                                                while ($row = $result_tipo_licencia->fetch_assoc()) {
                                                    echo '<option value="' . $row["id_tipo_licencia"] . '">' . $row["nombre_tipo_licencia"] . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group row">
                                    <label for="numero_licencia" class="col-sm-4 col-form-label">Número <strong style="color: red;">*</strong></label>
                                    <div class="col-sm-8">
                                        <input autocomplete="off" class="form-control" id="numero_licencia" maxlength="50" name="numero_licencia" type="text"/>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-3">
                                <label for="tiene_antecedentes_penales">¿Tiene antecedentes penales? <strong style="color: red;">*</strong></label>
                                <div class="option-container">
                                    <input type="radio" id="opcion_si" name="tiene_antecedentes_penales" value="Si">
                                    <label for="opcion_si" class="option-label">Sí</label>
                                    <input type="radio" id="opcion_no" name="tiene_antecedentes_penales" value="No">
                                    <label for="opcion_no" class="option-label">No</label>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <label for="doc_antecedentes_penales">Adjunte documentación -Antecedentes penales- para evaluar conforme a su solicitud </label>
                                <input type="file" class="form-control" id="doc_antecedentes_penales" name="doc_antecedentes_penales" accept=".pdf, .doc, .docx">
                            </div>


                        </div>
                    </div>
                </div>

                <br>

                <!-- Quinta parte de la solicitud de empleo -->

                <div class="card mb-3">
                    <div class="card-header bg-dark text-white">
                        <h3><i class="fas fa-user-graduate"></i> Educación </h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nombre_universidad">Universidad <strong style="color: red;">*</strong></label>
                            <input type="text" class="form-control" id="nombre_universidad" name="nombre_universidad" placeholder="Nombre de la universidad donde estudiaste">
                        </div>
                        <div class="form-group">
                            <label for="titulo_obtenido">Título Obtenido <strong style="color: red;">*</strong></label>
                            <input type="file" class="form-control" id="titulo_obtenido" name="titulo_obtenido" placeholder="Ingresa el título que obtuviste">
                        </div>
                        <div class="form-group">
                            <label for="year_graduation">Año de Graduación <strong style="color: red;">*</strong></label>
                            <input type="text" class="form-control" id="year_graduation" name="year_graduation" placeholder="AAAA/MM/DD">
                        </div>
                        <div class="form-group">
                            <label for="proyectos_destacados">Proyectos Destacados <strong style="color: red;">*</strong></label>
                            <textarea class="form-control" id="proyectos_destacados" name="proyectos_destacados" placeholder="Menciona algunos proyectos destacados en los que participaste durante tus estudios"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Contenedor flex para los botones -->
                <div class="button-container">
                    <!-- Botón "Regresar" -->
                    <div class="custom-button">
                        <a href="../index.php"><button type="button" id="return-button">Regresar</button></a>
                    </div>

                    <!-- Botón "Enviar" -->
                    <div class="custom-button">
                        <button type="submit" id="submit-button">Enviar</button>
                    </div>
                </div>

                <br>
                <br>
                <br>
            </form>
        </div>

        <script>
            function obtenerFechaActual() {
                const fechaActual = new Date();
                return fechaActual;
            }

            function formatearFecha(fecha) {
                const dia = fecha.getDate();
                const mes = fecha.getMonth() + 1; // Los meses en JavaScript van de 0 a 11, por lo que sumamos 1.
                const anio = fecha.getFullYear();

                return `${dia}/${mes}/${anio}`;
            }

            function mostrarFechaActualEnLabel() {
                const fechaActual = obtenerFechaActual();
                const fechaFormateada = formatearFecha(fechaActual);
                const fechaLabel = document.getElementById('fechaLabel');
                fechaLabel.innerText = fechaFormateada;
            }

            mostrarFechaActualEnLabel();
        </script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
