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
}