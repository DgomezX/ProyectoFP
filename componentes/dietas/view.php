<!doctype html>
<html lang="en">
<head>
    <?php include 'componentes/commons/head.php'; 	// menu?>
</head>
<body id="<?php echo $location?>">
    <?php include 'componentes/commons/header.php'; 	// header ?>
    <?php include 'componentes/commons/menu_nav.php'; 	// menu navegacion ?>
    <h1>Mis dietas</h1>
    <?php if(count($dietas) == 0){?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 info-nodieta">
                        <h3>No tienes ninguna dieta</h3>
                    </div>
                </div>
            </div>
        </section>
    <?php }elseif (count($dietas) > 0){ ?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <table>
                            <thead>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                            <?php
                            $i = 0;
                            foreach($dietas as $dieta){
                                $i++;
                                echo "<tr>";
                                echo "<td>".$i."</td>";
                                echo "<td>".$dieta['nombre']."</td>";
                                echo "<td><a href='index.php?option=dietaAmpliada&dieta_id=".$dieta['id']."'><i class=\"fas fa-eye\"></i></a><a href='index.php?option=editorDietas&id_dieta=".$dieta['id']."'><i class=\"far fa-edit\"></i></a><a href='index.php?option=dietas&dieta_idBorra=".$dieta['id']."'><i class=\"fas fa-trash-alt\"></i></a></td>";
                                echo "<tr>";
                            }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    <?php }?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 add_comida">
                    <h2>Crear nueva dieta</h2>
                    <form action="index.php?option=dietas" method="POST">
                        <div class="formfield">
                            <input type="text" id="nombreDieta" name="nombreDieta" placeholder="Introduce el nombre para tu dieta">
                        </div>
                        <div class="formfield_select">
                            <label>Elige el numero de comidas en el que quieres distribuir tu dieta:</label><br>
                            <select id="nComidas" name="nComidas" class="dropdown_sel" required>
                                <option selected disabled>N. comidas</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">Recomendadas</option>
                            </select>
                        </div>
                        <div class="formfield">
                            <input type="submit" class="login-submit" name="crearDiet" value="Crear nueva dieta">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include 'componentes/commons/footer.php'; 	// footer ?>
</body>
</html>
