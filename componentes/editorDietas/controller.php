<?php
include 'componentes/editorDietas/model.php';
$title = 'Edicion dieta';
$location = 'editor_dieta';

if(isset($_GET['id_dieta'])){
    $id_dieta = $_GET['id_dieta'];
    $dieta = modelEditor::obtenDieta($id_dieta);
}

include 'componentes/editorDietas/editor_view.php';