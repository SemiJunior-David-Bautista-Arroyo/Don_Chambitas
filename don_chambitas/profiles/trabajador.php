<?php

session_start();
if (!isset($_SESSION['usuario'])) { //comprobar si ya está la sesión
    header('Location: ../register/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link rel="stylesheet" href="profile.css" type="text/css">
</head>

<body>
    <!--Header del perfil de usuario-->
    <header>
        <div class="home">
            <a href="../cerrar.php"><ion-icon name="close-outline" title="cerrar sesión"></ion-icon></a>
        </div>
        <div class="name" align="center">
            <h1>Tu perfil</h1>
            <p>
                <?php include '../nombres.php' ?>
            </p>

        </div>
        <div class="imagenes">
        <?php include '../imagenes.php' ?>
        </div>
    </header>
    <!--Cuerpo del perfil-->
    <main>
        <div class="menu" align="center">
            <!--Menu Settings-->
            <button type="button" id="ayuda"><a href="#"><ion-icon name="help-circle-outline" title="Información"></ion-icon></a></button>
            <button type="button" id="historial"><a href="#"><ion-icon name="construct-outline" title="Historial de servicios"></ion-icon></ion-icon></a></button>
            <button type="button" id="config"><a href="#"><ion-icon name="settings-outline" title="Ajustes"></ion-icon></a></button>

        </div>
        <!--MOSTRAR CONTENIDO PERFIl-->
        <section id="info" style="display: block;">
            <div class="profile__cont" align="center">
                <div class="row">
                    <div class="col">
                        <h2><strong>AYUDA:</strong></h2><br>
                        <h3 align="center"><strong>PREGUNTAS FRECUENTES</strong></h3>
                        <p><strong>¿Cómo utilizar la app?</strong></p>
                        <div class="preguntas" align="justify">
                            <p>1.Para utilizar nuestra app ingresa a <em>www.donchambitas.com</em>, busca el servicio o socio que quieras solicitar y da clik en el, te desplegará su información, ahora solo debes decidir si contratar o seguir buscando.</p>
                            <p align="center"><strong>¿Qué pasa si no doy el anticipo del pago?</strong></p>
                            <p>2.Solo se realiza el servicio hasta que se cumple el pago, y si no se acredita el pago anticipado por el servicio, el socio trabajador tiene derecho a no aceptar el trabajo. </p>
                            <p align="center"><strong>¿Cómo saber mi información bancaria en la app?</strong></p>
                            <p>3.Para saber tu información bancaria que se utiliza dentro de la app dirigete a tu perfil, verás 3 iconos solo selecciona el icono de engrane y podrás encontrar tus datos bancarios que estan en uso además de otras cositas más.</p>
                            <p align="center"><strong>¿Cómo ser socio Don Chambitas?</strong></p>
                            <p>4.Para ser socio Don Chambitas se necesita realizar el registro, el cual se encuentra en la parte superior derecha del home page, una vez realizado el registrado tendrá un plazo de 3 a 5 días habiles para recibir una respuesta.</p>
                        </div>
                        <hr>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="col" style="padding: 25px;">
                            <h2><strong>DON CHAMBITAS</strong></h2><br>
                            <h3>Acerca de nosotros: </h3>
                            <p>DON CHAMBITAS</p><br>
                            <p align="justify">Aplicación en la cuál puedes contratar a un socio trabajador para diferentes tipos de servicios.<br>
                                DON CHAMBITAS COMPANY; empresa dueña de la aplicación, fue fundada por Ivan, Gabriel y David, nuestra visión es poder lograr que DON CHAMBITAS sea una aplicación móvil con la cuál podrás acceder,contactar y en caso de ser socio trabajador aceptar trabajos desde cualquier lugar y en cualquier horario disponible.
                            </p>
                            <br>

                            <h3><strong>TERMINOS Y CONDICIONES</strong></h3>
                            <p align="center">TÉRMINOS Y CONDICIONES DE USO</p>
                            <div class="terminos" style="padding: 15px;">
                                <p align="justify">

                                    1. Aceptación de los Términos y Condiciones<br>
                                    Bienvenido/a a DON CHAMBITAS. Al acceder y utilizar nuestro sitio web y nuestros servicios, aceptas estar legalmente obligado/a por estos Términos y Condiciones de Uso. Si no estás de acuerdo con alguno de los términos establecidos, por favor, no utilices este sitio web ni nuestros servicios.

                                    <br>2. Descripción de los Servicios
                                    <br>DON CHAMBITAS proporciona una serie de proveedores de servicios para el hogar. Estos servicios están sujetos a cambios y mejoras periódicas.

                                    <br>3. Uso Apropiado
                                    <br>Al acceder a nuestro sitio web y utilizar nuestros servicios, aceptas el no:
                                    a. Violar cualquier ley o regulación aplicable.
                                    b. Intentar acceder a áreas restringidas del sitio web o a información privada sin autorización.
                                    c. Publicar o transmitir contenido ilegal, ofensivo, difamatorio, obsceno o de cualquier manera inapropiado.
                                    d. Interferir con la funcionalidad del sitio web o utilizar técnicas de hacking o ingeniería inversa.
                                    e. Cometer fraude o realizar acciones engañosas.

                                    <br>4. Propiedad Intelectual
                                    <br>Todos los contenidos, logotipos, marcas comerciales, diseños y otros elementos presentes en DON CHAMBITAS son propiedad exclusiva de DON CHAMBITAS COMPANY o de sus respectivos titulares de derechos. No se concede ningún derecho de propiedad intelectual al usuario a menos que se indique explícitamente.

                                    <br>5. Política de Privacidad
                                    <br>El uso de los datos personales proporcionados por los usuarios está sujeto a nuestra Política de Privacidad <a href="#">Ver.</a>.

                                    <br>6. Responsabilidad
                                    <br>DON CHAMBITAS COMPANY no será responsable de:
                                    a. Cualquier daño o pérdida causada por el uso del sitio web o los servicios.
                                    b. El contenido proporcionado por los usuarios o terceros.
                                    c. Interrupciones o errores en la disponibilidad del sitio web.
                                    d. Enlaces a sitios web de terceros.

                                    <br>7. Modificaciones
                                    <br>DON CHAMBITAS COMPANY se reserva el derecho de modificar estos Términos y Condiciones de Uso en cualquier momento. Las modificaciones entrarán en vigor desde el momento de su publicación en el sitio web. Se recomienda a los usuarios revisar periódicamente estos términos.

                                    <br>8. Ley Aplicable y Jurisdicción
                                    <br>Estos Términos y Condiciones de Uso se regirán e interpretarán de acuerdo con las leyes de los Estados Unidos Mexicanos. Cualquier disputa que surja en relación con estos términos estará sujeta a la jurisdicción exclusiva de los tribunales de Puebla de los Angeles.

                                    <br>Al utilizar nuestro sitio web y servicios, aceptas cumplir con estos Términos y Condiciones de Uso. Si no estás de acuerdo con alguno de los términos, por favor, abandona este sitio web.

                                    <br>Fecha de última actualización: 3 Veces Heroica Puebla de Zaragoza a 19 de Julio de 2023.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="history" style="display: none;">
            <div class="profile__cont" align="center"><!--Tabla para mostrar historial trabajos-->
                <table>
                    <thead>
                        <tr>
                            <th>
                                <h2>Fecha</h2>
                            </th>
                            <th>
                                <h2>Servicio</h2>
                            </th>
                            <th>
                                <h2>Dirección</h2>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h3>15-Agosto-2023</h3>
                            </td>
                            <td>
                                <h3>Tubería dañada</h3><br>
                                <h3>Costo : $15,000</h3>
                            </td>
                            <td>
                                <h3>Av. Las FLores #25 <br>Col.Cerezos CP.73410</h3>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </section>
        <section id="configuration" style="display: none;" >
        <div class="profile__cont" align="center">
            <h2><a href="../banco/pago.html">Datos bancarios</a><h2><br><br>
            <h2><a href="informacion_trabajador.php">Mostrar Información</a></h2><br><br>
            <h2><a href="#">Reportar Un Problema</a></h2><br><br>
            <h2><a href="#">Eliminar Cuenta</a></h2><br>
        </div>
    </section>
    </main>
            
        </div>
    </section>
    <section id="history"  style="display: none;">
        <div class="profile__cont" align="center" ><!--Tabla para mostrar historial trabajos-->
            <table>
                <thead>
                  <tr>
                    <th><h2>Fecha</h2></th>
                    <th><h2>Servicio</h2></th>
                    <th><h2>Dirección</h2></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><h3>15-Agosto-2023</h3></td>
                    <td><h3>Tubería dañada</h3><br><h3>Costo : $15,000</h3></td>
                    <td><h3>Av. Las FLores #25 <br>Col.Cerezos CP.73410</h3></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </section>
    <section id="configuration" style="display: none;" >
        <div class="profile__cont" align="center">
            <h2><a href="../banco/pago.html">Datos bancarios</a><h2><br><br>
            <h2><a href="informacion_trabajador.php">Mostrar Información</a></h2><br><br>
            <h2><a href="#">Reportar Un Problema</a></h2><br><br>
            <h2><a href="#">Eliminar Cuenta</a></h2><br>
        </div>
    </section>
</main>
<!-- MODAL DE TRABAJO-->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="display: none;">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TIENES UN TRABAJO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 align= "center">FELICIDADES</h2>
        <div>
            <h2>Haz sido solicitado por un cliente.
              !Acepta ahora¡
            </h2>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-dark">Aceptar</button>
      </div>
    </div>
  </div>
</div>


</body>
<script src="elementosPerfil.js" type="text/Javascript"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      setTimeout(function() {
        $('#exampleModal').modal('show');
      }, 7000); // 7000 milisegundos = 7 segundos
    });
  </script>
</html>

