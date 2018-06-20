<?php
include 'componentes/dietaAmpliada/model.php';
$title = 'Visualizar dieta';
$location = 'visor_dieta';

if(isset($_GET['id_dieta'])){
    $id_dieta = $_GET['id_dieta'];
    $dieta = modeldietaAmpliada::obtenDieta($id_dieta);
    $datosUsuario = modeldietaAmpliada::obtenDatosUsuario($_SESSION['usuario']['id']);
    //var_dump($datosUsuario);die();
    $comidas = array();
    //Obtengo los alimentos de esa dieta distribuidos en cada comida
    $comida1 = modeldietaAmpliada::obtenAlimentosComidas($id_dieta, 1);
    $comida2 = modeldietaAmpliada::obtenAlimentosComidas($id_dieta, 2);
    $comida3 = modeldietaAmpliada::obtenAlimentosComidas($id_dieta, 3);
    $comida4 = modeldietaAmpliada::obtenAlimentosComidas($id_dieta, 4);
    $comida5 = modeldietaAmpliada::obtenAlimentosComidas($id_dieta, 5);
    $comida6 = modeldietaAmpliada::obtenAlimentosComidas($id_dieta, 6);
    $desayuno = modeldietaAmpliada::obtenAlimentosComidas($id_dieta, 7);
    $almuerzo = modeldietaAmpliada::obtenAlimentosComidas($id_dieta, 8);
    $comida = modeldietaAmpliada::obtenAlimentosComidas($id_dieta, 9);
    $merienda = modeldietaAmpliada::obtenAlimentosComidas($id_dieta, 10);
    $cena = modeldietaAmpliada::obtenAlimentosComidas($id_dieta, 11);
    //---------------------------
    //Dependiendo del numero de comidas de la dieta seleccionada, monto el array con las comidas distribuidas con sus alimentos
    switch ($dieta['n_comidas']){//Dependiendo el numero de comidas que tenga la dieta, obtenemos los alimentos de cada comida para mostrarlos
        Case 1:
            $comidas = array('Comida 1' => $comida1);
            break;
        Case 2:
            $comidas = array('Comida 1' => $comida1, 'Comida 2' => $comida2);
            break;
        Case 3:
            $comidas = array('Comida 1' => $comida1, 'Comida 2' => $comida2, 'Comida 3' => $comida3);
            break;
        Case 4:
            $comidas = array('Comida 1' => $comida1, 'Comida 2' => $comida2, 'Comida 3' => $comida3, 'Comida 4' => $comida4);
            break;
        Case 5:
            $comidas = array('Comida 1' => $comida1, 'Comida 2' => $comida2, 'Comida 3' => $comida3, 'Comida 4' => $comida4, 'Comida 5' => $comida5);
            break;
        Case 6:
            $comidas = array('Comida 1' => $comida1, 'Comida 2' => $comida2, 'Comida 3' => $comida3, 'Comida 4' => $comida4, 'Comida 5' => $comida5, 'Comida 6' => $comida6);
            break;
        Case 7:
            $comidas = array('Desayuno' => $desayuno, 'Almuerzo' => $almuerzo, 'Comida' =>$comida, 'Merienda'=>$merienda, 'Cena'=>$cena);
            //var_dump($comidas);
            break;
    }
}


include 'componentes/dietaAmpliada/view.php';