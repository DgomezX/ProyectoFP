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

if(isset($_POST['agregarPeso'])){
    $peso = $_POST['peso'];
    $fecha = date("Y-m-d");
    $user_id = $_SESSION['usuario']['id'];
    $rPeso = modelPerfil::registrarPeso($peso, $fecha, $user_id);
}

//Obtenemos los datos de referencia a la dieta del usuario
$datos = modelPerfil::obtenDatos($_SESSION['usuario']['id']);
$edad = $datos['edad'];
$estatura = $datos['estatura'];
$peso = $datos['peso'];
$objetivo = $datos['objetivo'];
$calorias = round($datos['calorias']);
$proteinas= round($datos['proteinas']);
$hidratos= round($datos['hidratos']);
$grasas= round($datos['grasas']);

//Obtener los datos para la grafica de evolucion
$evolucion = modelPerfil::obtenProgreso($_SESSION['usuario']['id']);
$evolucion = array_reverse($evolucion);



include 'componentes/perfil/perfil_view.php';