<?php
include 'componentes/editorDietas/model.php';
$title = 'Edicion dieta';
$location = 'editor_dieta';
if(isset($_GET['alimento_idBorra'])){
    $id_dieta = $_GET['id_dieta'];
    $id_alimento = $_GET['alimento_idBorra'];
    $calorias = $_GET['calorias'];
    $proteinas = $_GET['proteinas'];
    $grasas = $_GET['grasas'];
    $hidratos = $_GET['hidratos'];

    //Resto las cantidades del alimento a borrar de las cantidades de la dieta actual
    $dietaActual = modelEditor::obtenDieta($id_dieta);
    $caloriasF = $dietaActual['calorias'] - $calorias;
    $proteinasF = $dietaActual['proteinas'] - $proteinas;
    $grasasF = $dietaActual['grasas'] - $grasas;
    $hidratosF = $dietaActual['hidratos'] - $hidratos;

    $borrado = modelEditor::deleteAlimento($id_dieta,$id_alimento,$caloriasF,$proteinasF,$grasasF,$hidratosF);

    //Redirijo la vista para que el usuario al recargar no vuelva a ejecutar la funcion de borrar con la misma url el alimento ya borrado
    header("Location: index.php?option=editorDietas&id_dieta=".$id_dieta);
}

if(isset($_POST['changeNameD'])){
    $id_dieta = $_GET['id_dieta'];
    $nuevoNombre = $_POST['inputNameD'];
    $cambioN = modelEditor::changeNameDieta($id_dieta,$nuevoNombre);

    if($cambioN > 0){
        header("Location: index.php?option=editorDietas&id_dieta=".$id_dieta);
    }else{
        $erorNombre = "ocurrio algun error al cambiar el nombre";
    }
}

if(isset($_GET['id_dieta'])){
    $id_dieta = $_GET['id_dieta'];
    $dieta = modelEditor::obtenDieta($id_dieta);
    $datosUsuario = modelEditor::obtenDatosUsuario($_SESSION['usuario']['id']);
    //var_dump($datosUsuario);die();
    $comidas = array();
    //Obtengo los alimentos de esa dieta distribuidos en cada comida
    $comida1 = modelEditor::obtenAlimentosComidas($id_dieta, 1);
    $comida2 = modelEditor::obtenAlimentosComidas($id_dieta, 2);
    $comida3 = modelEditor::obtenAlimentosComidas($id_dieta, 3);
    $comida4 = modelEditor::obtenAlimentosComidas($id_dieta, 4);
    $comida5 = modelEditor::obtenAlimentosComidas($id_dieta, 5);
    $comida6 = modelEditor::obtenAlimentosComidas($id_dieta, 6);
    $desayuno = modelEditor::obtenAlimentosComidas($id_dieta, 7);
    $almuerzo = modelEditor::obtenAlimentosComidas($id_dieta, 8);
    $comida = modelEditor::obtenAlimentosComidas($id_dieta, 9);
    $merienda = modelEditor::obtenAlimentosComidas($id_dieta, 10);
    $cena = modelEditor::obtenAlimentosComidas($id_dieta, 11);
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
    //Calculos de calorias, proteinas, grasas e hidratos.
    //--------recuento macros de la dieta
    $tCalorias = intval($dieta['calorias']);
    $tProteinas = floatval($dieta['proteinas']);
    $tGrasas = floatval($dieta['grasas']);
    $tHidratos = floatval($dieta['hidratos']);
    //---------objetivo macros del usuario
    $oCalorias = intval($datosUsuario['calorias']);
    $oProteinas = floatval($datosUsuario['proteinas']);
    $oGrasas = floatval($datosUsuario['grasas']);
    $oHidratos = floatval($datosUsuario['hidratos']);
    //--------- calculo restantes para completar requisitos
    $rCalorias = $oCalorias - $tCalorias;
    $rProteinas = $oProteinas - $tProteinas;
    $rGrasas = $oGrasas - $tGrasas;
    $rHidratos = $oHidratos - $tHidratos;
}



include 'componentes/editorDietas/editor_view.php';