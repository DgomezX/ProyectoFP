<?php print_r($_SESSION['usuario']) ?>
<section id="datos">
        <form action="index.php?option=datos" method="post">
            <div id="formu_datos" class="cajaform">
                <h3>Introduce tus datos</h3>
                <div class="formfield_radio">
                    <label for="gender">Selecciona tu genero:</label><br>
                    <input type="radio" name="gender" value="male" checked> Hombre<br>
                    <input type="radio" name="gender" value="female"> Mujer<br>
                </div>
                <div class="formfield">
                    <input id="peso" class="inputlogin" type="number" name="peso" placeholder="Introduce tu peso en kg" required>
                </div>
                <div class="formfield">
                    <input id="altura" class="inputlogin" type="number" name="altura" placeholder="Introduce tu altura en centimetro" required>
                </div>
                <div class="formfield">
                    <input id="edad" class="inputlogin" type="number" name="edad" placeholder="Introduce tu edad" required>
                </div>
                <div class="formfield_select">
                    <label for="objetivo"></label>
                    <select name="objetivo" class="dropdown_sel">
                        <option value="1">Adelgazar</option>
                        <option value="2">Ganar Músculo</option>
                        <option value="3">Mantenimiento</option>
                    </select>
                </div>
                <div class="formfield">
                    <input type="submit" class="login-submit" name="calcular" value="Calcular necesidades">
                </div>
            </div>
        </form>
</section>
<div style="clear: both"></div>
    <!--<section>
        <form action="index.php?option=datos" method="post">
            <div id="requerimientos">
                <h2>Datos que necesitas para la dieta</h2>
                <p>
                    Las calorías que necesitas son: <?php echo $calorias.' calorias'; ?>  <br>
                    Las proteinas que necesitas son: <?php echo $proteinas.' gramos'; ?>  <br>
                    Las grasas que necesitas son: <?php echo $grasas.' gramos'; ?>  <br>
                    Los hidratos de carbono que necesitas son: <?php echo $hidratos.' gramos'; ?>
                </p>
                <input type="submit" class="login-submit enviar_datos" name="guardar" value="Guardar datos">
            </div>
        </form>
    </section>-->
