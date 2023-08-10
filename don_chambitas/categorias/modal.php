<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <!--MODAL DE TRABAJADOR-->
    <!-- Button trigger modal -->  
  <!-- Modal -->
  <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">TRABAJADOR</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <div class="container">
                    <div class="image">
                       <?php include 'modal_cont.php';
                       if ($fila = $resultado_imagen) {
                        $imagenUsuario = $fila['imagen'];
                      
                        // Mostrar la imagen del usuario en un contenedor redondeado
                        echo '<div  style ="50%; overflow: hidden; width: 100px; height: 100px;">';
                        echo '<img class="rounded-circle"; src="data:image/jpeg;base64,' . base64_encode($imagenUsuario) . '" alt="Imagen de usuario" style="width: 100%; height: 100%; object-fit: cover;">';
                        echo '</div>';
                      } else {
                        echo "No se encontró una imagen para el usuario con ID: $idUsuario.";
                      } ?>
                  </div>
                    <div class="info">
                      <div class="info-item">
                        <span class="name"><strong>
                          <?php include 'modal_cont.php';
                              echo $nombre . $ap . $am;
                          ?>
                        </strong></span>
                      </div>
                      <div class="info-item">
                        <span class="specialty"><em>
                          <?php include 'modal_cont.php'; 
                            echo $profesion;
                          ?>
                      </em></span>
                      </div>
                      <div class="info-item">
                        <span class="price">$299.99</span>
                      </div>
                    </div>
                  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Pedir Servicio</button>
        </div>
      </div>
    </div>
  </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>