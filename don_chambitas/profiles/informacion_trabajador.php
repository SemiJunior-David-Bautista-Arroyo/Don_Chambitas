<?php 
session_start();
if (!isset($_SESSION['usuario'])){//comprobar si ya está la sesión
    header('Location: ../register/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Datos de Usuarios</title>
    <link rel="stylesheet" href="profile.css" type="text/css">
    <link rel="stylesheet" href="../banco/styles.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>   
<?php require '../informacion_trabajador.php'; ?>
<body align="center">
    <div class="profile__cont">
        <h1 align="center">Tus datos</h1><br><br>
            <div align = "center">
        
                <table class="table-primary">
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Edad</th>
                        <th>Correo Electrónico</th>
                        <th>Telefono Celular</th>
                    </thead>
                    <tbody>
                        <td><?php echo $nombre?></td>
                        <td><?php echo $ap?></td>
                        <td><?php echo $am?></td>
                        <td><?php echo $edad?></td>
                        <td><?php echo $email?></td>
                        <td><?php echo $numero?></td>
                    </tbody>
                </table>
        
            <br><br><br>
            <button class ="btn " type="submit" style="background-color: orange;"><a style="text-decoration: none; color: #ffff;" href="trabajador.php">Volver<br></a></button>
    </div>
</body>
</html>
