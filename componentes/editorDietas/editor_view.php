<!doctype html>
<html lang="es">
<head>
    <?php include 'componentes/commons/head.php'; 	// head ?>
</head>
<body id="<?php echo $location; ?>">
    <?php include 'componentes/commons/header.php'; 	// header ?>
    <?php include 'componentes/commons/menu_nav.php'; 	// menu navegacion ?>
    <?php if(isset($erorNombre )){?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>$erorNombre</h2>
                    <a href="index.php?option=dietas">Volver al listado de dietas</a>
                </div>
            </div>
        </div>
    <?php }else{?>
    <h1>Dieta: <?php echo $dieta['nombre'];?></h1>
    <section id="cambiaNombreDieta">
        <div class="container">
            <div class="row">
                <p>Para cambiar el nombre de tu dieta introduce el nuevo nombre en el siguiente campo:</p>
                <form action="<?php echo "index.php?option=editorDietas&id_dieta=".$_GET['id_dieta']; ?>" method="POST">
                    <div class="col-12">
                        <input class="inputNameD" type="text" name="inputNameD" placeholder="Introducir nombre" required>
                        <input type="submit" class="nameD-submit" id="changeNameD" name="changeNameD" value="CambiarNombre">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php if(($rCalorias < 50)&&($rProteinas < 10)&&($rGrasas < 20)&&($rHidratos < 20)){?>
        <section id="aviso_completadaD">
            <div class="container">
                <div class="row">
                    <div class="col-12 aviso-informe-completada">
                        <p>Con los alimentos actuales su dieta tiene unos valores optimos, le recomendamos no seguir añadiendo alimentos</p>
                        <a href="index.php?option=dietas">Volver al listado de dietas</a>
                    </div>
                </div>
            </div>
        </section>
    <?php }?>
    <section id="edit_diet_alim">
        <div class="container">
            <div class="row">
                <div class="col-12 contenedor-tabla">
                    <p class="warning_scroll visible-xs">*Scroll horizontal para ver la dieta completa</p>
                    <?php
                    foreach($comidas as $key => $comida){ ?>
                        <h3><?php echo $key?></h3>

                        <table>
                            <thead>
                            <th>Alimento</th>
                            <th>Cantidad</th>
                            <th>Calorias</th>
                            <th>Proteinas</th>
                            <th>Grasas</th>
                            <th>Hidratos</th>
                            <th>Eliminar alimento</th>
                            </thead>
                            <tbody>
                            <?php
                            foreach($comida as $ind => $alimento){ ?>
                                <tr>
                                    <td><?php echo $alimento['nombre']; if($alimento['marca'] != NULL){echo "(".$alimento['marca'].")";}?></td>
                                    <td><?php echo $alimento['cantidad']?></td>
                                    <td><?php echo $alimento['calorias']?></td>
                                    <td><?php echo $alimento['proteinas']?></td>
                                    <td><?php echo $alimento['grasa']?></td>
                                    <td><?php echo $alimento['hidratos']?></td>
                                    <td><?php echo "<a href='index.php?option=editorDietas&id_dieta=".$_GET['id_dieta']."&alimento_idBorra=".$alimento['id_alim']."&calorias=".$alimento['calorias']."&proteinas=".$alimento['proteinas']."&grasas=".$alimento['grasa']."&hidratos=".$alimento['hidratos']."'><i class=\"fas fa-trash-alt\"></i></a>"?></td>
                                </tr>
                            <?}
                            ?>
                            <tr>
                                <a href="index.php?option=buscadorAlimentos&dieta_id=<?php echo $dieta['id']; ?>&comida=<?php echo $key; ?>">agregar alimento</a>
                            </tr>
                            </tbody>
                        </table>
                        <hr>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section id="edit_diet_nums">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12 contenedor-tabla">
                    <p class="warning_scroll visible-xs">*Scroll horizontal para ver la dieta completa</p>
                    <table>
                        <thead>
                            <th class="no-color"></th>
                            <th>Calorias</th>
                            <th>Proteinas</th>
                            <th>Grasas</th>
                            <th>Hidratos</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="enun_tabla">Totales</td>
                                <td><?php echo $tCalorias; ?></td>
                                <td><?php echo $tProteinas;  ?></td>
                                <td><?php echo $tGrasas; ?></td>
                                <td><?php echo $tHidratos; ?></td>
                            </tr>
                            <tr>
                                <td class="enun_tabla">Tus necesidades</td>
                                <td><?php echo $oCalorias; ?></td>
                                <td><?php echo $oProteinas; ?></td>
                                <td><?php echo $oGrasas; ?></td>
                                <td><?php echo $oHidratos; ?></td>
                            </tr>
                            <tr>
                                <td class="enun_tabla">Restantes</td>
                                <td><?php echo $rCalorias; ?></td>
                                <td><?php echo $rProteinas; ?></td>
                                <td><?php echo $rGrasas; ?></td>
                                <td><?php echo $rHidratos; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-6 col-xs-12">
                    <p>
                        En esta tabla se muestran las cantidades que llevas acumulada con los alimentos que agregas a la dieta (totales), las cantidades que necesitas para realizar una dieta optima de acuerdo a tus requisitos (Tus necesidades), y las calorias restantes que te faltan para alcanzar tus necesidades (restantes), para una dieta optima intenta dejar lo más aproximado posible a 0 el apartado de restantes.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <?php include 'componentes/commons/footer.php'; 	// footer ?>
</body>
</html>