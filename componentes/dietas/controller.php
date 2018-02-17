<?php
include 'componentes/dietas/model.php';

$dietas = modelDietas::obtenDietas($_SESSION['usuario']['id']);
if ($id_borrar = $_GET['dieta_idBorra']){
 $mensaje = 'entro';
 $borrar = modelDietas::deleteDieta($id_borrar);
}

include 'componentes/dietas/view.php';