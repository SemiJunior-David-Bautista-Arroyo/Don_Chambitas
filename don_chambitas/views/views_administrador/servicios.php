<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="administrador.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Administrador</title>
</head>
<body>
<div class="container-fluid bg-primary" style="height: 150px">
        <div class="row">
            <div class="col-2">
                <button class="btn text-light" data-bs-toggle="offcanvas" data-bs-target="#intro"><i class="fa-solid fa-bars m-4 fa-2xl"></i></button>
            </div>
            <div class="col-10 text-light">
                <p style="font-size: 50px" class="fw-bold text-light">Dashboard</p>
                <p class="">Brinda el control y gestión total.</p>
            </div>
        </div>

    </div>
    <div class="offcanvas offcanvas-start" id="intro">

<div class="offcanvas-header bg-primary">
    <div class="container text-center text-light fw-bold">
        <div class="offcanvas-title">
            <img src="https://images.pexels.com/photos/733872/pexels-photo-733872.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" height="170" width="170" class="rounded-circle ">
            <p>@Administrador</p>
        </div>
    </div>
</div>
<br>
<br>

<div class="offcanvas-body  d-flex flex-column">
    <div class="flex-grow1 ">
        <ul class=" border-primary">
            <li class="list-group mb-3 fw-bold fs-3"><a href="../administrador.php" class="text-decoration-none text-black">Dashboard</a></li>
            <br>
            <li class="list-group mb-3 fw-bold fs-3"><a href="trabajadores.php" class="text-decoration-none text-black">Trabajadores</a></li>
            <br>
            <li class="list-group mb-3 fw-bold fs-3"><a href="clientes.php" class="text-decoration-none text-black">Clientes</a></li>
            <br>
            <li class="list-group mb-3 fw-bold fs-3"><a href="#" class="text-decoration-none text-black">Servicios</a></li>
            <br>
            <li class="list-group mb-3 fw-bold fs-3"><a href="aceptar_denegar.php" class="text-decoration-none text-black">Usuarios</a></li>
        </ul>
    </div>
</div>

</div>

<div class="container text-center">
    <br>
    <br>
    <h1>Registro de Trabajos Realizados</h1>    
    <br>
    <div class="table-responsive">
        <table class="table table-primary table-striped table-hover">
          <thead>
            <tr>
              <th>Cliente</th>
              <th>Trabajador</th>
              <th>Servicio</th>
              <th>Monto</th>
              <th>Fecha</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Juan Pérez</td>
              <td>Mario Gómez</td>
              <td>Limpieza</td>
              <td>$150</td>
              <td>2023-07-15</td>
            </tr>
            <tr>
              <td>María Rodríguez</td>
              <td>Luis Ramírez</td>
              <td>Pintura</td>
              <td>$300</td>
              <td>2023-07-16</td>
            </tr>
            <tr>
              <td>Ana Gutiérrez</td>
              <td>Pedro López</td>
              <td>Reparación</td>
              <td>$200</td>
              <td>2023-07-17</td>
            </tr>
          </tbody>
        </table>
      </div>
</div>
</body>
</html>