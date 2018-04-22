<?php
include 'componentes/dietas/model.php';
$location = 'dietas_list';
$title = 'Mis dietas';
//Crear dietas
if(isset($_POST['crearDiet'])){
    $nombre = $_POST['nombreDieta'];
    $n_comidas = $_POST['nComidas'];
    $id_user = $_SESSION['usuario']['id'];
    $add_dieta = modelDietas::addDieta($nombre, $n_comidas, $id_user);
    $dietaCreada = modelDietas::obtenDieta($nombre, $id_user); // Realizo esta consulta para obtener el id de la dieta que acabo de crear
    header("Location: index.php?option=editorDietas&id_dieta=".$dietaCreada['id']);
}

//Borrar Dietas
if (isset($_GET['dieta_idBorra'])){
    $id_borrar = $_GET['dieta_idBorra'];
    $borrar = modelDietas::deleteDieta($id_borrar);
}

//Obtener dietas
$dietas = modelDietas::obtenDietas($_SESSION['usuario']['id']);
include 'componentes/dietas/view.php';