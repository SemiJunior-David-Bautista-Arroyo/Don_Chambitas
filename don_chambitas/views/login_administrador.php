<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../register/register.css" type="text/css">
    <link rel="stylesheet" href="login.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <title>Inicia sesión como administrador</title>
</head>
<body>
<main>
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <div class="wrapper">
                            <h1>Bienvenido Administrador</h1>             
                        <form action="process_login.php" method="POST">
                            <div class="input-row">
                                <div class="input-box">
                                    <label for=""> Correo</label>
                                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                                    <input type="text"  name="correo" >
                                </div>
                                <div class="input-box">
                                    <label for=""> Contraseña</label>
                                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                                        <input type="password"  name="password">
                                    </div>
                            </div>
                            <br>
                            <br>

                            <button type="submit" class="buton" id="">Ingresar</button>
                            
                            <?php if (!empty($errores)):?>
                            <div class="error">
                                <ul>
                                    <?php echo $errores;?>
                                </ul>
                            </div>
                        <?php endif;?>
                                
                        </form>
                    </div>
                    </div>
            </div>
        </div>

    </main>
</body>
</html>