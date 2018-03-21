<?php 
/* index.php
	Fichero principal llamado reiteradamente para cada seccion solicitada
	El parametro option indica la sección a cargar
*/

	// framework para construir MVC
	include 'librerias/framework.php';
    echo loader($componente);
?>

