<!doctype html>
<html lang="en">
<head>
    <?php include 'componentes/commons/head.php'; 	// head ?>
</head>
<body id="<?php echo $location; ?>">
    <?php include 'componentes/commons/header.php'; 	// header ?>
    <?php include 'componentes/commons/menu_nav.php'; 	// menu navegacion ?>
    <h1>Introduce tus datos</h1>
    <section id="datos">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form name="formulario_calculo" id="formulario_calculo" onsubmit="return calcularDatos()">
                        <div id="formu_datos" class="cajaform">
                            <div class="formfield_radio">
                                <label for="gender">Selecciona tu genero:</label><br>
                                    <input type="radio" class="option-input radio" name="gender" value="0" <? if(isset($datos) && $datos['genero'] == 0){echo 'checked';}?>><label>Hombre</label><br>
                                <label>
                                    <input type="radio" class="option-input radio" name="gender" value="1" <? if(isset($datos) && $datos['genero'] == 1){echo 'checked';}?>> Mujer
                                </label>
                            </div>
                            <div class="formfield">
                                <input id="pesoInput" class="inputlogin" type="number" min="0" name="peso" placeholder="Introduce tu peso en kg" value="<? if(isset($datos)){echo $datos['peso'];}?>" required>
                            </div>
                            <div class="formfield">
                                <input id="alturaInput" class="inputlogin" type="number" min="0" name="altura" placeholder="Introduce tu altura en centimetro" value="<? if(isset($datos)){echo $datos['estatura'];}?>" required>
                            </div>
                            <div class="formfield">
                                <input id="edadInput" class="inputlogin" type="number" min="1" name="edad" placeholder="Introduce tu edad" value="<? if(isset($datos)){echo $datos['edad'];}?>" required>
                            </div>
                            <div class="formfield_select">
                                <select id="objetivo" name="objetivo" class="dropdown_sel" required>
                                    <option selected disabled>Elige tu objetivo</option>
                                    <option value="1">Adelgazar</option>
                                    <option value="2">Ganar Músculo</option>
                                    <option value="3">Mantenimiento</option>
                                </select>
                            </div>
                            <div class="formfield">
                                <input id="objetivoInput" class="inputlogin" type="number" min="0" name="obje" placeholder="Introduce el peso que deseas lograr en kg" value="<? if(isset($datos)){echo $datos['objetivo'];}?>" required>
                            </div>
                            <div class="formfield">
                                <input type="submit" class="login-submit" name="calcular" value="Calcular necesidades">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div style="clear: both"></div>
    <section id="resultado-calculo">
        <h2>Necesidades Alimenticias diarias</h2>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p id="calculo-entradilla">Con los datos que nos has proporcionado, y basandonos en la Formula de Benedict Harris, el calculo de tus necesidades alimenticias para un día es el siguiente:</p>
                    <form action="index.php?option=datos" method="post">
                        <div id="requerimientos">
                            <p>Las calorías que necesitas son: <span id="rCalorias"></span></p>
                            <p>Las proteinas que necesitas son: <span id="rProteinas"></span></p>
                            <p>Las grasas que necesitas son: <span id="rGrasas"></span></p>
                            <p>Los hidratos de carbono que necesitas son: <span id="rHidratos"></span></p>
                            <input type="hidden" name="genero" id="generoGuardar">
                            <input type="hidden" name="peso" id="pesoGuardar">
                            <input type="hidden" name="altura" id="alturaGuardar">
                            <input type="hidden" name="edad" id="edadGuardar">
                            <input type="hidden" name="obje" id="objeGuardar">
                            <input type="hidden" name="calorias" id="caloriasGuardar">
                            <input type="hidden" name="proteinas" id="proteinasGuardar">
                            <input type="hidden" name="grasas" id="grasasGuardar">
                            <input type="hidden" name="hidratos" id="hidratosGuardar">
                            <input type="submit" class="login-submit button enviar_datos" name="guardar" value="Guardar datos">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include 'componentes/commons/footer.php'; 	// footer ?>
</body>
</html>


