<?php
include 'componentes/perfil/model.php';

$datos = modelPerfil::obtenDatos($_SESSION['usuario']['id']);
$calorias = $datos['calorias'];
$proteinas= $datos['proteinas'];
$hidratos= $datos['hidratos'];
$grasas= $datos['grasas'];

if(isset($_POST['crear'])){
    $nombre = $_POST['nombre'];
    $crear = modelPerfil::addDieta($nombre,$_SESSION['usuario']['id']);
}


include 'componentes/perfil/perfil_view.php';