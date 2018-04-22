<?php
include 'componentes/editorDietas/model.php';
$title = 'Edicion dieta';
$location = 'editor_dieta';

if(isset($_GET['id_dieta'])){
    $id_dieta = $_GET['id_dieta'];
    $dieta = modelEditor::obtenDieta($id_dieta);
    $comidas = array();
    switch ($dieta['n_comidas']){//Dependiendo el numero de comidas que tenga la dieta, obtenemos los alimentos de cada comida para mostrarlos
        Case 1:
            $comida1 = modelEditor::obtenAlimentosComidas($id_dieta, 1);
            $comidas = array('Comida 1' => $comida1);
            break;
        Case 2:
            $comida1 = modelEditor::obtenAlimentosComidas($id_dieta, 1);
            $comida2 = modelEditor::obtenAlimentosComidas($id_dieta, 2);
            $comidas = array('Comida 1' => $comida1, 'Comida 2' => $comida2);
            break;
        Case 3:
            $comida1 = modelEditor::obtenAlimentosComidas($id_dieta, 1);
            $comida2 = modelEditor::obtenAlimentosComidas($id_dieta, 2);
            $comida3 = modelEditor::obtenAlimentosComidas($id_dieta, 3);
            $comidas = array('Comida 1' => $comida1, 'Comida 2' => $comida2, 'Comida 3' => $comida3);
            break;
        Case 4:
            $comida1 = modelEditor::obtenAlimentosComidas($id_dieta, 1);
            $comida2 = modelEditor::obtenAlimentosComidas($id_dieta, 2);
            $comida3 = modelEditor::obtenAlimentosComidas($id_dieta, 3);
            $comida4 = modelEditor::obtenAlimentosComidas($id_dieta, 4);
            $comidas = array('Comida 1' => $comida1, 'Comida 2' => $comida2, 'Comida 3' => $comida3, 'Comida 4' => $comida4);
            break;
        Case 5:
            $comida1 = modelEditor::obtenAlimentosComidas($id_dieta, 1);
            $comida2 = modelEditor::obtenAlimentosComidas($id_dieta, 2);
            $comida3 = modelEditor::obtenAlimentosComidas($id_dieta, 3);
            $comida4 = modelEditor::obtenAlimentosComidas($id_dieta, 4);
            $comida5 = modelEditor::obtenAlimentosComidas($id_dieta, 5);
            $comidas = array('Comida 1' => $comida1, 'Comida 2' => $comida2, 'Comida 3' => $comida3, 'Comida 4' => $comida4, 'Comida 5' => $comida5);
            break;
        Case 6:
            $comida1 = modelEditor::obtenAlimentosComidas($id_dieta, 1);
            $comida2 = modelEditor::obtenAlimentosComidas($id_dieta, 2);
            $comida3 = modelEditor::obtenAlimentosComidas($id_dieta, 3);
            $comida4 = modelEditor::obtenAlimentosComidas($id_dieta, 4);
            $comida5 = modelEditor::obtenAlimentosComidas($id_dieta, 5);
            $comida6 = modelEditor::obtenAlimentosComidas($id_dieta, 6);
            $comidas = array('Comida 1' => $comida1, 'Comida 2' => $comida2, 'Comida 3' => $comida3, 'Comida 4' => $comida4, 'Comida 5' => $comida5, 'Comida 6' => $comida6);
            break;
        Case 7:
            $desayuno = modelEditor::obtenAlimentosComidas($id_dieta, 7);
            $almuerzo = modelEditor::obtenAlimentosComidas($id_dieta, 8);
            $comida = modelEditor::obtenAlimentosComidas($id_dieta, 9);
            $merienda = modelEditor::obtenAlimentosComidas($id_dieta, 10);
            $cena = modelEditor::obtenAlimentosComidas($id_dieta, 11);
            $comidas = array('Desayuno' => $desayuno, 'Almuerzo' => $almuerzo, 'Comida' =>$comida, 'Merienda'=>$merienda, 'Cena'=>$cena);
            //var_dump($comidas);
            break;
    }
}

include 'componentes/editorDietas/editor_view.php';