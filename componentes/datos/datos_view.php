<!doctype html>
<html lang="en">
<head>
    <?php include 'componentes/commons/head.php'; 	// head ?>
</head>
<body id="<?php echo $location; ?>">
    <?php include 'componentes/commons/header.php'; 	// header ?>
    <?php include 'componentes/commons/menu_nav.php'; 	// menu navegacion ?>
    <?php print_r($_SESSION['usuario']) ?>
    <section id="datos">
        <form action="index.php?option=datos" method="post">
            <div id="formu_datos" class="cajaform">
                <h3>Introduce tus datos</h3>
                <div class="formfield_radio">
                    <label for="gender">Selecciona tu genero:</label><br>
                    <input type="radio" name="gender" value="0" <? if(isset($datos) && $datos['genero'] == 0){echo 'checked';}?>> Hombre<br>
                    <input type="radio" name="gender" value="1" <? if(isset($datos) && $datos['genero'] == 1){echo 'checked';}?>> Mujer<br>
                </div>
                <div class="formfield">
                    <input id="peso" class="inputlogin" type="number" name="peso" placeholder="Introduce tu peso en kg" value="<? if(isset($datos)){echo $datos['peso'];}?>" required>
                </div>
                <div class="formfield">
                    <input id="altura" class="inputlogin" type="number" name="altura" placeholder="Introduce tu altura en centimetro" value="<? if(isset($datos)){echo $datos['estatura'];}?>" required>
                </div>
                <div class="formfield">
                    <input id="edad" class="inputlogin" type="number" name="edad" placeholder="Introduce tu edad" value="<? if(isset($datos)){echo $datos['edad'];}?>" required>
                </div>
                <div class="formfield_select">
                    <label for="objetivo"></label>
                    <select name="objetivo" class="dropdown_sel">
                        <option selected disabled>Elige tu objetivo</option>
                        <option value="1">Adelgazar</option>
                        <option value="2">Ganar Músculo</option>
                        <option value="3">Mantenimiento</option>
                    </select>
                </div>
                <div class="formfield">
                    <input id="objetivo" class="inputlogin" type="number" name="obje" placeholder="Introduce el peso que deseas lograr en kg" value="<? if(isset($datos)){echo $datos['objetivo'];}?>" required>
                </div>
                <div class="formfield">
                    <input type="submit" class="login-submit" name="calcular" value="Calcular necesidades">
                </div>
            </div>
        </form>
    </section>
    <div style="clear: both"></div>
    <section>
            <form action="index.php?option=datos" method="post">
                <div id="requerimientos">
                    <h2>Datos que necesitas para la dieta</h2>
                    <p>
                        Las calorías que necesitas son: <?php echo $calorias.' calorias'; ?>  <br>
                        Las proteinas que necesitas son: <?php echo $proteinas.' gramos'; ?>  <br>
                        Las grasas que necesitas son: <?php echo $grasas.' gramos'; ?>  <br>
                        Los hidratos de carbono que necesitas son: <?php echo $hidratos.' gramos'; ?>
                    </p>
                    <input type="hidden" name="genero" value="<?php echo $genero; ?>">
                    <input type="hidden" name="peso" value="<?php echo $peso; ?>">
                    <input type="hidden" name="altura" value="<?php echo $altura; ?>">
                    <input type="hidden" name="edad" value="<?php echo $edad; ?>">
                    <input type="hidden" name="obje" value="<?php echo $obje; ?>">
                    <input type="hidden" name="calorias" value="<?php echo $calorias; ?>">
                    <input type="hidden" name="proteinas" value="<?php echo $proteinas; ?>">
                    <input type="hidden" name="grasas" value="<?php echo $grasas; ?>">
                    <input type="hidden" name="hidratos" value="<?php echo $hidratos; ?>">
                    <input type="submit" class="login-submit enviar_datos" name="guardar" value="Guardar datos">
                </div>
            </form>
    </section>
</body>
</html>


