<?php
include 'componentes/datos/model.php';
$verifUser = modelDatos::verifReg($_SESSION['nick']);
$_SESSION['usuario'] = $verifUser;
$calorias = '';
$proteinas = '';
$grasas = '';
$hidratos = '';
if (isset($_POST['calcular'])){
    $genero = $_POST['gender'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $edad = $_POST['edad'];
    $obje = $_POST['objetivo'];
    if($genero == 'male'){
        $GEB = 66 + (13.7*$peso) + (5 * $altura) - (6.8 * edad);
        $GET = $GEB * 1.4;
        switch ($obje){
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
    if($genero == 'female'){
        $GEB = 655 + (9.6 * $peso) + (1.8 * $altura) - (4.7 * edad);
        $GET = $GEB * 1.4;
        switch ($obje){
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
    $insert = modelDatos::agregarDatos($_SESSION['usuario']['id'],$edad,$altura,$peso,$calorias,$proteinas,$hidratos,$grasas);
    header("Location: index.php?option=perfil");

    /*$_SESSION['usuario']['peso'] = $peso;
    $_SESSION['usuario']['altura'] = $altura;
    $_SESSION['usuario']['edad'] = $edad;
    $_SESSION['usuario']['calorias'] = $calorias;
    $_SESSION['usuario']['grasas'] = $grasas;
    $_SESSION['usuario']['hidratos'] = $hidratos;*/
}

/*if (isset($_POST['guardar'])){
    if(isset($_SESSION['usuario']['id'])){
        //Aqui actualiza datos segun el id de usuario en la tabla datos
        $update = modelDatos::actualizarDatos($_SESSION['usuario']['id'],$_SESSION['usuario']['edad'],$_SESSION['usuario']['altura'],$_SESSION['usuario']['peso'],$_SESSION['usuario']['calorias'],$_SESSION['usuario']['proteinas'],$_SESSION['usuario']['hidratos'],$_SESSION['usuario']['grasas']);

    }else{
        //Aqui hace una consulta para sacar el id del usuario que ha creado y despues inserta datos segun ese id
        $verifUser = modelDatos::verifReg($_SESSION['nick']);
        $_SESSION['usuario'] .= $verifUser;
        //$insert = modelDatos::agregarDatos($_SESSION['usuario']['id'],$_SESSION['usuario']['edad'],$_SESSION['usuario']['altura'],$_SESSION['usuario']['peso'],$_SESSION['usuario']['calorias'],$_SESSION['usuario']['proteinas'],$_SESSION['usuario']['hidratos'],$_SESSION['usuario']['grasas']);
    }
}*/

include 'componentes/datos/datos_view.php';