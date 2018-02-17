<?php
class modelDietas{
    public static function obtenDietas($id){
        $db = new database();
        $sql = 'SELECT * FROM dietas WHERE id_usr = :id_user';
        $params = array(
            ':id_user'   => $id
        );
        $db->query($sql, $params);
        $dietas = $db->cargaMatriz();
        return $dietas;
    }

    public static function deleteDieta($id){
        $db = new database();
        $sql = 'DELETE * FROM dietas INNER JOIN dietas_rel_alimentos USING(id) WHERE id = :id';
        $params = array(
            ':id'   => $id
        );
        $db->query($sql, $params);
        $dieta = $db->affectedRows();
        return $dieta;
    }
}