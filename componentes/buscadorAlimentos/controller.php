<?php
include 'componentes/buscadorAlimentos/model.php';
$title = 'Buscador alimentos';
$location = 'buscador_alimentos';

if(isset($_POST['add_alim'])){
    $idDieta = $_POST['idDieta'];
    $comida = $_POST['comida'];
    $idAlim = $_POST['idAlim'];
    $calAlim = $_POST['calAlim'];
    $proteAlim = $_POST['proteAlim'];
    $grasAlim = $_POST['grasAlim'];
    $hcAlim = $_POST['hcAlim'];
    $cantidad = $_POST['cantidadAlim'];

    //Obtengo el id según el tipo de comida
    switch ($comida){
        case "Comida 1":
            $idComida = 1;
            break;
        case "Comida 2":
            $idComida = 2;
            break;
        case "Comida 3":
            $idComida = 3;
            break;
        case "Comida 4":
            $idComida = 4;
            break;
        case "Comida 5":
            $idComida = 5;
            break;
        case "Comida 6":
            $idComida = 6;
            break;
        case "Desayuno":
            $idComida = 7;
            break;
        case "Almuerzo":
            $idComida = 8;
            break;
        case "Comida":
            $idComida = 9;
            break;
        case "Merienda":
            $idComida = 10;
            break;
        case "Cena":
            $idComida = 11;
            break;
    }

    //Obtengo las calorias para la cantidad de alimento seleccionada
    $calTotal = ($cantidad * $calAlim)/100;

    //Obtengo las proteinas para la cantidad de alimento seleccionada
    $proteTotal = ($cantidad * $proteAlim)/100;

    //Obtengo las grasas para la cantidad de alimento seleccionada
    $grasaTotal = ($cantidad * $grasAlim)/100;

    //Obtengo los hidratos para la cantidad de alimento seleccionada
    $hcTotal = ($cantidad * $hcAlim)/100;

    //Obtengo los datos actuales de la dieta y le supo las cantidades del alimento que voy a agregar
    $dietaActual = modelBuscadorAlim::obtenDieta($idDieta);

    $caloriaSuma = $dietaActual['calorias'] + $calTotal;
    $proteSuma = $dietaActual['proteinas'] + $proteTotal;
    $grasaSuma = $dietaActual['grasas'] + $grasaTotal;
    $hcSuma = $dietaActual['hidratos'] + $hcTotal;

    // Inserto datos en la base en las tablas correspondientes
    $insert_alimento = modelBuscadorAlim::addAlimentoDieta($idDieta,$idAlim,$idComida,$cantidad,$calTotal,$proteTotal,$grasaTotal,$hcTotal,$caloriaSuma,$proteSuma,$grasaSuma,$hcSuma);

    //Redirijo la vista al editor de la dieta para ver el alimento agregado
    header("Location: index.php?option=editorDietas&id_dieta=".$idDieta);
}

if(isset($_POST['search'])){
    $alimento = $_POST['search'];
    $encontrados = modelBuscadorAlim::obtenAlimentos($alimento);
    echo json_encode($encontrados); die();
}

include 'componentes/buscadorAlimentos/buscador_alimentos_view.php';