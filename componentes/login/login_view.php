<html>
<head>
    <?php include 'componentes/commons/head.php'; 	// head ?>
</head>
<body id="<?php echo $location; ?>">
    <header>
        <div class="row">
            <div class="logo-container col-xs-12 col-4">
                <div class="logo">
                    <img src="/img/commons/logo.png" alt="logo" class="logo"><p>Dreamdiet</p>
                </div>
            </div>
            <div class="col-xs-12 col-4 info-login">
                <button type="button" id="btnContacto" class="button" onclick="mostrarModal('ventanaContacto')">Contacto <i class="fas fa-info-circle"></i></button>
            </div>
        </div>
    </header>
    <section>
        <div id="content-login">
            <h1>DreamDiet</h1>
            <h2>Aprende a mejorar tu alimentacion sin complicaciones</h2>
            <ul class="botones-login">
                <li><button type="button" id="show-login" class="button" onclick="mostrar_ocultar('login-container', 'singin-container')">Ya tengo un cuenta</button></li>
                <li><button type="button" id="show-singin" class="button" onclick="mostrar_ocultar('singin-container', 'login-container')">Crear una cuenta</button></li>
            </ul>
            <!--button type="button" class="button" onclick="mostrar_ocultar('container-form-login')">Login / Registro</button-->
        </div>
    </section>
    <section>
        <div id="container-form-login">
            <div id="login-container">
                <form action="index.php?option=login" method="post">
                    <div id="formLogin" class="cajaform">
                        <h3>Usuarios registrados</h3>
                        <p>Bienvenido, inicia sesión en tu cuenta.</p>
                        <div class="formfield">
                            <input id="username" class="inputlogin" type="text" name="nombre" placeholder="Introduce tu nombre de usuario" required>
                        </div>
                        <div class="formfield">
                            <input id="passwd" class="inputlogin" type="password" name="pass" placeholder="Introduce tu contraseña" required>
                        </div>
                        <div class="formfield">
                            <input type="submit" class="login-submit" name="entrar" value="Entrar">
                        </div>
                    </div>
                </form>
            </div>
            <div id="singin-container">
                <form action="index.php?option=login" method="post">
                    <div id="formSingin" class="cajaform">
                        <h3>Nuevos usuarios</h3>
                        <p>Si es la primera vez que nos visitas registrate gratuitamente</p>
                        <div class="formfield">
                            <input id="usernameReg" class="inputlogin" type="text" name="nombre1" placeholder="Introduce tu nombre de usuario" required>
                        </div>
                        <div class="formfield">
                            <input id="passwdReg" class="inputlogin" type="password" name="pass1" placeholder="Introduce tu contraseña" required>
                        </div>
                        <div class="formfield">
                            <input id="passwdrep" class="inputlogin" type="password" name="passrep" placeholder="Repite tu contraseña" required>
                        </div>
                        <div class="formfield">
                            <input type="submit" class="login-submit" name="crear" value="Crear Cuenta">
                        </div>
                    </div>
                </form>
            </div>
            <div class="error">
                <? if($errorLog != ''){?>
                    <p><?php echo $errorLog; ?></p>
                <?}?>
                <? if($errorReg != ''){?>
                    <p><?php echo $errorReg; ?></p>
                <?}?>
            </div>
        </div>
    </section>
    <?php include 'componentes/formularioContacto/form_contact.php'; 	// ventana modal contacto?>
</body>
</html>


