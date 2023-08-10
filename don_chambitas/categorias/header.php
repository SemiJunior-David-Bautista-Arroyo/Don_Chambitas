<header id="header_prin">
            <nav>
                <div class="logo">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <a href="../index.php"><img src="../assets/logo_principal.png" alt="LogoPrincipal" id="logo-principal"></a>
                            </div>
                            <div class="col">
                                <h2 style="color: black;">Don Chambitas</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav-links">
                    <li><a href="#trabajo">Top trabajadores</a></li>
                    <li><a href="../index.php">Categorías</a></li>
                
                   <?php
                    if (isset($_SESSION['usuario'])){
                        $trabajar = '';
                        $perfil = '<a href="../profiles/usuario.php">Mi perfil</a>';
                        $usuario = '<a href="../cerrar.php">Cerrar Sesión</a>';
                        
                    }
                    else{
                        $trabajador = 'Sesión Trabajador';
                        $trabajar = '<a href="../register/register_trabajador.php">¡Quiero trabajar!</a>';
                        $perfil = '';
                        $usuario = '<a href="../register/login.php">Iniciar Sesión</a>';
                    }?>
                <li><a href="register/register_trabajador.php"><?php echo $trabajar; ?>
                <li><a href="profiles/usuario.php"><?php echo $perfil; ?> </li>
                </ul>
                <li>
                <button class="btn" id="boton"><?php echo $usuario; ?></button>
                </li>
            </nav>
</header>
