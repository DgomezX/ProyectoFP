<!doctype html>
<html lang="es">
<head>
    <?php include 'componentes/commons/head.php'; 	// head ?>
</head>
<body id="<?php echo $location; ?>">
    <?php include 'componentes/commons/header.php'; 	// header ?>
    <?php include 'componentes/commons/menu_nav.php'; 	// menu navegacion ?>
    <h1><?php echo $dieta['nombre'];?></h1>
    <section id="edit_diet_alim">
        <div class="container">
            <div class="row">
                <div class="col-12 contenedor-tabla">
                    <?php
                    foreach($comidas as $key => $comida){ ?>
                        <h3><?php echo $key?></h3>
                        <table>
                            <thead>
                            <th>Alimento</th>
                            <th>Cantidad</th>
                            </thead>
                            <tbody>
                            <?php
                            foreach($comida as $ind => $alimento){ ?>
                                <tr>
                                    <td><?php echo $alimento['nombre']; if($alimento['marca'] != NULL){echo "(".$alimento['marca'].")";}?></td>
                                    <td><?php echo $alimento['cantidad']?></td>
                                </tr>
                            <?}
                            ?>
                            </tbody>
                        </table>
                        <hr>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php include 'componentes/commons/footer.php'; 	// footer ?>
</body>
</html>