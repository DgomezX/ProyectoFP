<?php
include 'componentes/dietaAmpliada/model.php';
$dieta_id = $_GET['dieta_id'];
$alimentos = modeldietaAmpliada::obtenAlimentDiet($dieta_id);


include 'componentes/dietaAmpliada/view.php';