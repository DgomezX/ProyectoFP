<?php include 'componentes/commons/menu_nav.php'; 	// menu?>
<div id="perfil_contenido">
    <h1>Perfil de <?php echo $_SESSION['usuario']['nick']?></h1>
    <a class="btn_close_sess" href="index.php?option=cierra_sesion">Cerrar Sesion de usuario</a>
    <div id="datos_usuario">
        <h3>Tus Datos:</h3>
        <p>Pulsa el boton para ver tus datos</p>
        <input type="button" id="boton_mostrar" value="Mostrar los datos del usuario" onclick="mostrar()">
        <div id="oculto" class="oculto">
            <p>Las calorias diarias que necesitas para tu objetivo son: <b><?php echo $calorias;?> Kcal</b></p>
            <p>Las proteinas diarias que necesitas para tu objetivo son: <b><?php echo $proteinas;?> gramos</b></p>
            <p>Los hidratos de carbono diarios que necesitas para tu objetivo son: <b><?php echo $hidratos;?> gramos</b></p>
            <p>Las grasas que necesitas para tu objetivo son: <b><?php echo $hidratos;?> gramos</b></p>
            <input type="button" id="boton_ocultar" value="Ocultarlos datos del usuario" onclick="ocultar()">
        </div>
    </div>
    <div id="addDieta">
        <form action="index.php?option=perfil" method="post">
            <div id="formLogin" class="cajaform">
                <h3>Añadir nueva dieta</h3>
                <div class="formfield">
                    <input id="dietaname" class="inputlogin" type="text" name="nombre" placeholder="Introduce el nombre de la dieta" required>
                </div>
                <div class="formfield">
                    <input type="submit" class="login-submit" name="crear" value="Crear">
                </div>
            </div>
        </form>
    </div>
</div>