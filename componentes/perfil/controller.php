<?php
include 'componentes/perfil/model.php';
$title = 'Mi Perfil';
$location = 'profile';
//Foto de perfil
if($_SESSION['usuario']['photo'] == 'default.png'){
    $ruta_foto = '/img/perfil/default.png';
}else{
    $ruta_foto = '/img/perfil/subidas_usuarios/'.$_SESSION['usuario']['photo'];
}

//Obtenemos los datos de referencia a la dieta del usuario
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