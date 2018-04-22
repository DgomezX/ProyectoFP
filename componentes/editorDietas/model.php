<?php

class modelEditor{
    public static function obtenDieta($id_dieta){
        $db = new database();
        $sql = 'SELECT * FROM dietas WHERE id = :id_dieta';
        $params = array(
            ':id_dieta' => $id_dieta
        );
        $db->query($sql, $params);
        $dieta = $db->cargaFila();
        return $dieta;
    }

    public static function obtenAlimentosComidas($id_dieta, $id_comida){
        $db = new database();
        $sql = 'SELECT * FROM dietas_rel_alimentos WHERE id_diet = :id_dieta AND id_comida = :id_comida';
        $params = array(
            ':id_dieta' => $id_dieta,
            ':id_comida' => $id_comida
        );
        $db->query($sql, $params);
        $alimentos = $db->cargaMatriz();
        return $alimentos;
    }
}