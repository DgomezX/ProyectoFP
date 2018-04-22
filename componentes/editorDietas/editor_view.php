<!doctype html>
<html lang="en">
<head>
    <?php include 'componentes/commons/head.php'; 	// head ?>
</head>
<body>
    <?php include 'componentes/commons/header.php'; 	// header ?>
    <?php include 'componentes/commons/menu_nav.php'; 	// menu navegacion ?>
    <h1>Dieta: <?php echo $dieta['nombre'];?></h1>
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
                    <td><?php echo $alimento['id_alim']?></td>
                    <td><?php echo $alimento['cantidad']?></td>
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
    <?php include 'componentes/commons/footer.php'; 	// footer ?>
</body>
</html>