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
    echo 'vengo desde el perfil del usuario';
    $datos = modelDatos::obtenDatos($_SESSION['usuario']['id']);
}

// Funcion para calcular las necesidades del usuario
if (isset($_POST['calcular'])){
    $genero = $_POST['gender'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $edad = $_POST['edad'];
    $objetiv = $_POST['objetivo'];
    $obje = $_POST['obje'];
    if($genero == 0){
        $GEB = 66 + (13.7*$peso) + (5 * $altura) - (6.8 * $edad);
        $GET = $GEB * 1.4;
        switch ($objetiv){
            case 1:
                $calorias = round($GET - 200);
                $proteinas = $peso * 2;
                $protecal = $proteinas * 4;
                $grasascal  = ($calorias *20) /100;
                $grasas = $grasascal /4;
                $hidratoscal = $calorias - ($protecal + $grasascal);
                $hidratos = $hidratoscal / 4;
                break;
            case 2:
                $calorias = round($GET +200);
                $proteinas = $peso * 2.2;
                $protecal = $proteinas * 4;
                $grasascal  = ($calorias *20) /100;
                $grasas = $grasascal /4;
                $hidratoscal = $calorias - ($protecal + $grasascal);
                $hidratos = $hidratoscal / 4;
                break;
            case 3:
                $calorias = round($GET);
                $proteinas = $peso * 1.8;
                $protecal = $proteinas * 4;
                $grasascal  = ($calorias *20) /100;
                $grasas = $grasascal /4;
                $hidratoscal = $calorias - ($protecal + $grasascal);
                $hidratos = $hidratoscal / 4;
                break;
        }
    }
    if($genero == 1){
        $GEB = 655 + (9.6 * $peso) + (1.8 * $altura) - (4.7 * $edad);
        $GET = $GEB * 1.4;
        switch ($objetiv){
            case 1:
                $calorias = round($GET - 200);
                $proteinas = $peso * 2;
                $protecal = $proteinas * 4;
                $grasascal  = ($calorias *20) /100;
                $grasas = $grasascal /4;
                $hidratoscal = $calorias - ($protecal + $grasascal);
                $hidratos = $hidratoscal / 4;
                break;
            case 2:
                $calorias = round($GET +200);
                $proteinas = $peso * 2.2;
                $protecal = $proteinas * 4;
                $grasascal  = ($calorias *20) /100;
                $grasas = $grasascal /4;
                $hidratoscal = $calorias - ($protecal + $grasascal);
                $hidratos = $hidratoscal / 4;
                break;
            case 3:
                $calorias = round($GET);
                $proteinas = $peso * 1.8;
                $protecal = $proteinas * 4;
                $grasascal  = ($calorias *20) /100;
                $grasas = $grasascal /4;
                $hidratoscal = $calorias - ($protecal + $grasascal);
                $hidratos = $hidratoscal / 4;
                break;
        }
    }
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