<?php
session_start();
if (isset($_SESSION['usuario'])){//comprobar si ya está la sesión
    header('Location: ../profiles/usuario.php');//si es así va pal index
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="register.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">

            </div>
            
            <div class="col-md-6">
                <div class="wrapper">
                    <h1 id="textoBienvenidaRegistrate">REGÍSTRATE</h1>

                    <div class="form-box login">
                        <h2 id="textoBienvenida">¡TE DAMOS LA BIENVENIDA A DON CHAMBITAS!</h2>

                        <!-- INICIA EL FORMULARIO PRINCIPAL -->
                        <div id="formularioPrincipal">

                            <form id="miFormulario" action="process_register_php/process_cliente.php" method="POST" enctype="multipart/form-data">

                                <div class="input-row">
                                    <div class="name">
                                        <input type="text" placeholder="Nombre" id="nombre_usuario" name="nombre_usuario" required>
                                    </div>
                                    <div class="second-name">
                                        <input type="text" placeholder="Apellido Paterno" id="apellido_paterno" name="apellido_paterno" required>
                                    </div>
                                </div>

                                <div class="input-row">
                                    <div class="last-name">
                                        <input type="text" placeholder="Apellido Materno" id="apellido_materno" name="apellido_materno" required>
                                    </div>
                                    <div class="cellphone-number">
                                        <input type="text" placeholder="Número celular" id="telefono" name="telefono">
                                    </div>
                                </div>

                                <div class="input-row">
                                    <div class="password">
                                        <input type="text" id="my_password" name="my_password" placeholder="Contraseña" required>
                                    </div>

                                    <div class="email">
                                        <input type="email" id="correo_electronico" placeholder="correo_electronico" name="correo_electronico" required>
                                    </div>
                                </div>

                                <br>

                                <div class="input-row" id="llenarCampos" style="display: none">
                                    <h6 style="color: red;">*Por favor, asegúrese de llenar todos los campos.</h6>
                                </div>

                                <!-- Botón "Continuar" del primer formulario -->
                                <input type="button" class="buton" id="btnContinuar" onclick="mostrarSegundaParte()" value="Continuar">

                                <br>
                                <br>

                                <a href="login.php">
                                    <input class="buton buton-black" id="btnMostrarForm" value="Ya tengo una cuenta">
                                </a>
                                </div>
                            
                                <!-- TERMINA EL FORMULARIO PRINCIPAL -->


                                <!-- Empieza segundo formulario -->

                                <div id="formularioSecundario" style="display: none">
                                    <br>
                                    <div class="input-row">
                                        <div class="firts_name" for="edad">
                                            <input type="text" placeholder="Edad" id="edad" name="edad">
                                        </div>
                                        <div class="second-name">
                                            <input type="text" placeholder="País" id="name_country" name="name_country">
                                        </div>
                                    </div>
                                
                                    <div class="input-row">
                                        <div class="last-name">
                                            <input type="text" placeholder="Estado" id="estado_o_provincia" name="estado_o_provincia">
                                        </div>
                                        <div class="cellphone-number">
                                            <label for="imagen">Subir foto <strong style="color: red;">*</strong></label>
                                            <input type="file" id="imagen" name="imagen">
                                        </div>
                                    </div>
                                
                                    <div class="input-row">
                                        <div class="numero_codigo_postal">
                                            <input type="text" placeholder="Código Postal" id="numero_codigo_postal" name="numero_codigo_postal">
                                        </div>
                                
                                        <div class="calle">
                                            <input type="text" placeholder="Calle" id="calle" name="calle">
                                        </div>
                                    </div>
                                
                                    <div class="input-row">
                                        <div class="email">
                                            <input type="text" placeholder="Número interior" id="numero_interior" name="numero_interior">
                                        </div>
                                
                                        <div class="email">
                                            <input type="text" placeholder="Número exterior" id="numero_exterior" name="numero_exterior">
                                        </div>
                                    </div>
                                
                                    <br>
                                
                                    <div class="input-row" id="" style="display: none">
                                        <h6 style="color: red;">*Por favor, asegúrese de llenar todos los campos.</h6>
                                    </div>
                                
                                    <br><br>
                                
                                    <button type="submit" class="buton" onclick="enviarFormulario()">Enviar</button>
                                
                                </div>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

<script>

    function mostrarSegundaParte() {
    // Ocultamos el primer formulario
    document.getElementById('formularioPrincipal').style.display = 'none';
    // Mostramos el segundo formulario
    document.getElementById('formularioSecundario').style.display = 'block';
    }

    

</script>



</html>



