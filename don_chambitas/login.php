<?php session_start();
if (isset($_SESSION['usuario'])){//comprobar si ya está la sesión
    header('Location: profiles/usuario.php');//si es así va pal index
}
// else {
//     header ('Location: login.php');
// }
$errores = '';

// se crean variables
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $correo = filter_var(strtolower($_POST['correo']),FILTER_SANITIZE_STRING);
    $password = $_POST['password']; 
    $password = hash('sha512', $password);
    
    require 'pdo.php';

    $statement = $conexion->prepare('SELECT * FROM cuentas INNER JOIN usuarios ON cuentas.id_cuenta = usuarios.cuenta_id WHERE correo_electronico = :correo AND my_password = :pass '); //verificar si existe la cuenta con contraseña ingresada
    $statement ->execute(array(':correo' => $correo,':pass' => $password ));

    $resultado = $statement->fetch();
    if ($resultado != false){
        $_SESSION['usuario'] = $correo;
        $_SESSION['id_usuario'] = $resultado['id_cuenta']; // Guardar el ID del usuario en una variable de sesión
        $_SESSION['rol'] = $resultado['rol'];
        if ($_SESSION['rol'] === "cliente") {
            header('Location: profiles/usuario.php');
        } elseif ($_SESSION['rol'] === "trabajador") {
            header('Location: profiles/trabajador.php');
        }
    }

    else if($correo == 'admin' and $password =='db0b9674b9c50a7810c7ce0e58d707865acd7270c8f65400d07eee937b18a45fae5178a36368e4ef9cec82f5fd5faf4e6cf99683be9ff5b2851e204a875d2310'){
        header('Location: views/administrador.php');
        exit;
    }
    else{
        header('Location: register/login.php');
        $errores .= '<li>Datos incorrectos</li>';
    }
}
?>
