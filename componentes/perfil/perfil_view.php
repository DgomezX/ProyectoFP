<!doctype html>
<html lang="en">
<head>
    <?php include 'componentes/commons/head.php'; 	// head ?>
</head>
<body id="<?php echo $location; ?>">
    <?php include 'componentes/commons/header.php'; 	// header ?>
    <?php include 'componentes/commons/menu_nav.php'; 	// menu navegacion ?>
    <section>
        <div class="row profile-banner">
            <div class="col-xs-12 col-sm-8 col-md-8 col-4 profile-img">
                <img src="<?= $ruta_foto?>" alt="imagen perfil">
                <h1><?php echo $_SESSION['usuario']['nick']?></h1>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row datos-usuario">
                <h2>Mis datos</h2>
                <div class="col-xs-12 col-12 listado-datos">
                    <ul>
                        <li>Edad: <?php echo $edad;?> años.</li>
                        <li>Estatura: <?php echo $estatura;?> cm.</li>
                        <li>Peso: <?php echo $peso;?> kg.</li>
                    </ul>
                    <hr>
                    <ul>
                        <li>Las calorias diarias que necesitas para tu objetivo son: <?php echo $calorias;?> Kcal</li>
                        <li>Las proteinas diarias que necesitas para tu objetivo son: <?php echo $proteinas;?> gramos</li>
                        <li>Los hidratos de carbono diarios que necesitas para tu objetivo son:<?php echo $hidratos;?> gramos</li>
                        <li>Las grasas que necesitas para tu objetivo son: <?php echo $hidratos;?> gramos</li>
                    </ul>
                    <a href="index.php?option=datos" class="button">Cambiar datos</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row progreso">
                <h2>Mi progreso</h2>
                <div class="col-xs-12 col-12 grafica">
                    <p class="pactual"><b>Peso actual:</b> <?php echo $peso;?> kg</p>
                    <p class="pobjetivo"><b>Peso objetivo:</b> <?php echo $objetivo;?> kg</p>
                    <div class="limpiar"></div>
                    <canvas id="myProgress" height="450" width="600"></canvas>
                    <?php
                    $labels = '';
                    $data = '';
                    foreach($evolucion as $item){
                        $labels .= '"'.$item['fecha'].'",';
                        $data .= '"'.$item['peso_user'].'",';
                    }
                    $labels = substr($labels, 0, -1);
                    $data = substr($data, 0, -1);
                    ?>
                    <script>
                        var ctx = document.getElementById("myProgress").getContext('2d');
                        var myProgress = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: [<?= $labels?>],
                                datasets: [{
                                    label: 'Peso corporal',
                                    data: [<?= $data?>],
                                    lineTension: 0,
                                    fill: false,
                                    borderColor: '#1EB250',
                                    backgroundColor: 'transparent',
                                    borderDash: [5, 5],
                                    pointBorderColor: '#1EB250',
                                    pointBackgroundColor: 'rgba(255,150,0,0.5)',
                                    pointRadius: 5,
                                    pointHoverRadius: 10,
                                    pointHitRadius: 30,
                                    pointBorderWidth: 2,
                                    pointStyle: 'rectRounded'
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero:true
                                        }
                                    }]
                                }
                            }
                        });
                    </script>
                </div>
            </div>
            <div class="row actualiza-peso">
                <h3>Actualizar tu peso</h3>
                <p>Añade tu peso actual</p>
                <form action="">
                    <div class="col-12">
                        <input class="inputPeso" type="number" name="peso" placeholder="Introduce tu peso en kg" required>
                        <input type="submit" class="weight-submit" name="agregar" value="Agregar">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php include 'componentes/commons/footer.php'; 	// footer ?>
</body>
</html>
