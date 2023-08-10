<?php
    include '../register/process_register_php/conexion.php';

    // Nombre de la tabla que deseas contar
    $table_name = 'usuarios';

    // Consulta para contar el número de filas en la tabla
    $query = "SELECT COUNT(*) AS total_rows FROM $table_name";
    $result = $conexion->query($query);
    $row = $result->fetch_assoc();

    // Obtener el número total de filas
    $total_rows = $row['total_rows'];
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="administrador.css">
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
                    <div class="container">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

        <div class="offcanvas-body  d-flex flex-column">
            <div class="flex-grow1 ">
                <ul class=" border-primary">
                    <li class="list-group mb-3 fw-bold fs-3"><a href="#" class="text-decoration-none text-black">Dashboard</a></li>
                    <br>
                    <li class="list-group mb-3 fw-bold fs-3"><a href="views_administrador/trabajadores.php" class="text-decoration-none text-black">Trabajadores</a></li>
                    <br>
                    <li class="list-group mb-3 fw-bold fs-3"><a href="views_administrador/clientes.php" class="text-decoration-none text-black">Clientes</a></li>
                    <br>
                    <li class="list-group mb-3 fw-bold fs-3"><a href="views_administrador/servicios.php" class="text-decoration-none text-black">Servicios</a></li>
                    <br>
                    <li class="list-group mb-3 fw-bold fs-3"><a href="views_administrador/aceptar_denegar.php" class="text-decoration-none text-black">Usuarios</a></li>
                </ul>
            </div>
        </div>



        <div class="offcanvas-footer">
            <div class="container text-center space-between">
                <div class="offcanvas-title">
                    <button class="btn mb-3" data-bs-dismiss="offcanvas"><a href="../index.php">Cerrar sesión</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <br>
        <br>
        <div class="row">
            <div class="col-3">
                <div class="card cardUno">
                    <div class="row">
                        <div class="col-6">
                            <i class="fa-solid fa-person m-5 fa-2xl text-light" style="font-size: 60px;"></i>
                        </div>
                        <div class="col-6">
                            <h5 class="fw-semibold text-light">Clientes registrados</h5>
                            <p class="text-light fw-bold" style="font-size: 20px"><?php  echo $total_rows;
 ?></p>
                        </div>
                    </div>
                    <div class="card-footer text-center bg-light p-0">
                        <div class="row">
                            <div class="col-7 text-start">
                                <p class="text-dark fw-semibold">Ver detalles</p>
                            </div>
                            <div class="col-4 text-end m-1">
                                <i class="fa-solid fa-question"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card cardDos">
                    <div class="row">
                        <div class="col-6">
                            <i class="fa-regular fa-hard-drive fa-2xl text-light m-5" style="font-size: 60px;"></i>
                        </div>
                        <div class="col-6">
                            <h5 class="fw-bold text-light">Servicios realizados</h5>
                            <p class="text-light fw-bold" style="font-size: 20px">4,150</p>

                        </div>
                    </div>
                    <div class="card-footer text-center bg-light p-0">
                        <div class="row">
                            <div class="col-7 text-start">
                                <p class="text-dark fw-semibold">Ver detalles</p>
                            </div>
                            <div class="col-4 text-end m-1">
                                <i class="fa-solid fa-question"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card cardTres">
                    <div class="row">
                        <div class="col-6">
                            <i class="fa-solid fa-folder m-5 fa-2xl text-light" style="font-size: 70px;"></i>
                        </div>
                        <div class="col-6">
                            <h5 class="fw-bold text-light">Archivos varios</h5>
                            <p class="text-light fw-bold" style="font-size: 20px;">1,153,420</p>
                        </div>
                    </div>
                    <div class="card-footer text-center bg-light p-0">
                        <div class="row">
                            <div class="col-7 text-start">
                                <p class="text-dark fw-semibold">Ver detalles</p>
                            </div>
                            <div class="col-4 text-end m-1">
                                <i class="fa-solid fa-question"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card cardCuatro">
                    <div class="row">
                        <div class="col-6">
                            <i class="fa-sharp fa-solid fa-question m-5 fa-2xl text-light" style="font-size: 70px;"></i>
                        </div>
                        <div class="col-6">
                            <h5 class="fw-bold text-light">Tutorial</h5>
                            <p class="text-light">¿No sabes usar el perfil?</p>
                        </div>
                    </div>
                    <div class="card-footer text-center bg-light p-0">
                        <div class="row">
                            <div class="col-7 text-start">
                                <p class="text-dark fw-semibold">Ver detalles</p>
                            </div>
                            <div class="col-4 text-end m-1">
                                <i class="fa-solid fa-question"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card d-flex">
                    <div class="card-header text-center fw-bold">
                        <div class="row">
                            <div class="col-4">
                            <p><i class="fa-solid fa-chart-column"></i> Ventas y gastos</p>
                            </div>
                            <div class="col-8 text-end">
                                <select name="" id="Opcion"><option value="">Acciones</option></select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fw-bold" style="color: green;">Ventas del mes de Julio</h5>
                                <p class="fw-bold" style="font-size: 20px;">$ 1,153,420.00</p>
                                <h5 class="fw-bold" style="color: red;">Gastos del mes de Julio</h5>
                                <p class="fw-bold" style="font-size: 20px;">$ 232,423.00</p>
                            </div>
                            <div class="col-6">
                                <div class="chart-container">
                                    <canvas id="donchambas-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card d-flex">
                    <div class="card-header text-start">
                        <div class="card-title">
                            <p><i class="fa-solid fa-bell"></i> Panel de Notificaciones</p>
                        </div>
                    </div>
                        <div class="card-body">
                            <div class="d-flex flex-column">
                                <div class="list-group">
                                    <ul class="border-primary">
                                        <div class="row">
                                            <div class="col-4">
                                                
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <div class="col-4">

                                            </div>
                                        </div>
                                        <li class="list-group-item mb-3 fw-bold"><a href="#" class="text-decoration-none text-black"><i class="fa-solid fa-message"></i> Nuevos mensajes</a></li>

                                        <li class="list-group-item mb-3 fw-bold"><a href="#" class="text-decoration-none text-black"><i class="fa-solid fa-user"></i> Nuevos clientes</a></li>

                                        <li class="list-group-item mb-3 fw-bold"><a href="#" class="text-decoration-none text-black"><i class="fa-solid fa-briefcase"></i> Nuevos trabajadores</a></li>

                                        <li class="list-group-item mb-3 fw-bold"><a href="#" class="text-decoration-none text-black"><i class="fa-solid fa-list-check"></i> Nuevas tareas</a></li>

                                        <li class="list-group-item mb-3 fw-bold"><a href="#" class="text-decoration-none text-black"><i class="fa-solid fa-credit-card"></i> Pagos recibidos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('empresaX-chart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
                datasets: [{
                    label: 'Servicios',
                    data: [12, 19, 8, 15, 10, 20],
                    borderColor: 'rgba(54, 162, 235, 1)',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderWidth: 2,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('donchambas-chart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Servicios',
                    data: [12, 19, 8, 15, 10, 20, 30],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(255, 205, 86, 0.8)',
                        'rgba(153, 102, 255, 0.8)',
                        'rgba(255, 159, 64, 0.8)',
                        'rgba(255, 120, 64, 0.8)'

                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 205, 86, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 0.8)'

                    ],
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    </script>



</body>

</html>
