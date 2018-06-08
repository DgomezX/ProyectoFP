<?php
include 'componentes/buscadorAlimentos/model.php';
$title = 'Buscador alimentos';
$location = 'buscador_alimentos';

if(isset($_POST['search-alim'])){
    $alimento = $_POST['search-alim'];
    $encontrados = modelBuscadorAlim::obtenAlimentos($alimento);
    var_dump($encontrados); die();
}
include 'componentes/buscadorAlimentos/buscador_alimentos_view.php';