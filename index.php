<?php 
/* index.php
	Fichero principal llamado reiteradamente para cada seccion solicitada
	El parametro option indica la sección a cargar
*/

	// framework para construir MVC
	include 'librerias/framework.php'; 
?>

<html>
    <head>
        <title>DreamDiet</title>
        <meta name="viewport" content="width=device-width">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/functions.js"></script>
        <script src="js/slippry.min.js"></script>
        <link rel="stylesheet" href="/css/estilo.css">
        <link rel="stylesheet" href="/css/slippry.css">
        <link href="img/favicon.ico" rel="icon">
    </head>
    <body>
        <?php include 'componentes/commons/header.php'; 	// header ?>
        <div class="content">
            <?php echo loader($componente); 				// Cuerpo ?>
        </div>
        <?php include 'componentes/commons/footer.php';		// footer?>
    </body>
</html>
