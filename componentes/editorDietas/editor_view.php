<!doctype html>
<html lang="en">
<head>
    <?php include 'componentes/commons/head.php'; 	// head ?>
</head>
<body>
    <?php include 'componentes/commons/header.php'; 	// header ?>
    <?php include 'componentes/commons/menu_nav.php'; 	// menu navegacion ?>
    <h1>Dieta: <?php echo $dieta['nombre'];?></h1>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
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
                                </tr>
                            <?}
                            ?>
                            <tr>
                                <a href="">agregar alimento</a>
                            </tr>
                            </tbody>
                        </table>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table>
                        <thead>
                            <th></th>
                            <th>Calorias</th>
                            <th>Proteinas</th>
                            <th>Grasas</th>
                            <th>Hidratos</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Totales</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Tus necesidades</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Restantes</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php include 'componentes/commons/footer.php'; 	// footer ?>
</body>
</html>