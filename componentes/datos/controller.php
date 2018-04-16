<?php
include 'componentes/datos/model.php';
$title = 'DreamDiet | Calcular Necesidades';
$location = 'form_datos';
$genero = '';
$peso = '';
$altura = '';
$edad = '';
$obje = '';
$calorias = '';
$proteinas = '';
$grasas = '';
$hidratos = '';

// Si el usuario viene del perfil pasara por aqui
if(isset($_GET['modifica'])){
    $datos = modelDatos::obtenDatos($_SESSION['usuario']['id']);
}

//funcion para realizar el guardado o la actualizacion de datos en la base
if (isset($_POST['guardar'])){
    $genero = $_POST['genero'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $edad = $_POST['edad'];
    $obje = $_POST['obje'];
    $calorias = $_POST['calorias'];
    $proteinas = $_POST['proteinas'];
    $grasas = $_POST['grasas'];
    $hidratos = $_POST['hidratos'];
    $fecha = date("Y-m-d");
    if(isset($_SESSION['usuario']['id'])){
        //Aqui actualiza datos segun el id de usuario en la tabla datos
        $update = modelDatos::actualizarDatos($_SESSION['usuario']['id'], $genero, $edad, $altura , $peso, $obje, $calorias, $proteinas, $hidratos, $grasas, $fecha);
        header("Location: index.php?option=perfil");
    }else{
        //Aqui inserta los datos del nuevo usuario en la base de datos
        $verifUser = modelDatos::verifReg($_SESSION['nick']);
        $_SESSION['usuario'] = $verifUser;
        $insert = modelDatos::agregarDatos($_SESSION['usuario']['id'], $genero, $edad, $altura , $peso, $obje, $calorias, $proteinas, $hidratos, $grasas, $fecha);
        header("Location: index.php?option=perfil");
    }
}

include 'componentes/datos/datos_view.php';