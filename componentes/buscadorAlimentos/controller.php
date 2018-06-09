<?php
include 'componentes/buscadorAlimentos/model.php';
$title = 'Buscador alimentos';
$location = 'buscador_alimentos';

if(isset($_POST['search'])){
    $alimento = $_POST['search'];
    $encontrados = modelBuscadorAlim::obtenAlimentos($alimento);
    echo json_encode($encontrados); die();
}
include 'componentes/buscadorAlimentos/buscador_alimentos_view.php';