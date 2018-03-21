<html>
<head>
    <?php include 'componentes/commons/head.php'; 	// head ?>
</head>
<body id="<?php echo $location; ?>">
    <header>
        <div class="row">
            <div class="col-4">
                <img src="../img/commons/logo.png" alt="">
            </div>
        </div>
    </header>
    <!--div-- class="content">
        <section id="sliderLogin">
            <article>
                <div class="text-content">
                    <h2>¿Que es dreamdiet?</h2>
                    <p>Dreamdiet es el sitio web, donde puedes aprender a mejorar tu alimentación y comenzar a mejorar tu salud, puedes elaborar tu dieta personalizada a tus requisitos y conocer cuantas calorías necesitas para afrontar el día a día</p>
                </div>
                <div class="image-content"><img src="img/slider/slider1.jpg" alt="imgslider1"></div>
            </article>
            <article>
                <div class="text-content">
                    <h2>Registrate Ya!</h2>
                    <p>Registrate de manera gratuita y comienza a mejorar tu salud.</p>
                </div>
                <div class="image-content"><img src="img/slider/slidr2.jpg" alt="imgslider2"></div>
            </article>
            <article>
                <div class="text-content">
                    <h2>Ventajas de formar parte de Dreamdiet</h2>
                    <ol>
                        <li>Conocer tus requisitos alimenticios.</li>
                        <li>Aprender a alimentarte de manera más saludable.</li>
                        <li>Conocer mejor las propiedades que te aporta cada alimento.</li>
                        <li>Mejorar tu alimentación y tu salud.</li>
                    </ol>
                </div>
                <div class="image-content"><img src="img/slider/slidr3.jpg" alt="imgslider3"></div>
            </article>
        </section>

        <section class="login" id="login">
            <form action="index.php?option=login" method="post">
                <div id="formLogin" class="cajaform">
                    <h3>Usuarios registrados</h3>
                    <p>Si ya estas registrado, entra a tu cuenta de usuario</p>
                    <p class="error">
                        <?php echo $errorLog; ?>
                    </p>
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
            <form action="index.php?option=login" method="post">
                <div id="formSingin" class="cajaform">
                    <h3>Nuevos usuarios</h3>
                    <p>Si eres nuevo registrate gratuitamente</p>
                    <p class="error">
                        <?php echo $errorReg; ?>
                    </p>
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
        </section>
        <script>
            jQuery('#sliderLogin').slippry({
                // general elements & wrapper
                slippryWrapper: '<div class="sy-box news-slider" />', // wrapper to wrap everything, including pager
                elements: 'article', // elments cointaining slide content

                // options
                adaptiveHeight: false, // height of the sliders adapts to current
                captions: false,

                // pager
                pagerClass: 'news-pager',

                // transitions
                transition: 'horizontal', // fade, horizontal, kenburns, false
                speed: 1200,
                pause: 8000,

                // slideshow
                autoDirection: 'prev'
            });

        </script>
    </div-->
</body>
</html>


