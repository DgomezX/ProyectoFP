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

    public static function obtenDieta($nombre, $id_user){
        $db = new database();
        $sql = 'SELECT * FROM dietas WHERE id_usr = :id_user AND nombre = :nombre';
        $params = array(
            ':nombre'   => $nombre,
            ':id_user'   => $id_user
        );
        $db->query($sql, $params);
        $dietas = $db->cargaFila();
        return $dietas;
    }

    public static function deleteDieta($id){
        $db = new database();
        $sql = 'DELETE FROM dietas WHERE id = :id';
        $params = array(
            ':id'   => $id
        );
        $db->query($sql, $params);
        $dieta = $db->affectedRows();
        return $dieta;
    }


    public static function addDieta($nombre,$n_comidas, $id_usr){
        $db = new database();
        $sql = 'INSERT INTO dietas VALUES(NULL,:nombre, :n_comidas, :id_usr)';
        $params = array(
            ':nombre'   => $nombre,
            ':n_comidas' =>$n_comidas,
            ':id_usr'     => $id_usr
        );
        $db->query($sql, $params);
        return $db->affectedRows();
    }

}